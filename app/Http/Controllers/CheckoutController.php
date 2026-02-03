<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlacedUserMail;
use App\Mail\OrderPlacedAdminMail;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    /**
     * Calculate cart totals including coupon discount if applied.
     */
    private function calculateTotals($userId)
    {
        $cartItems = Cart::where('user_id', $userId)->get();

        $subtotal = $cartItems->sum(fn($i) => $i->price * $i->qty);
        $discount = 0;
        $coupon = null;

        // Check if a coupon is applied in session
        if (session()->has('coupon')) {
            $sessionCoupon = session('coupon');

            $coupon = Coupon::where('id', $sessionCoupon['id'])
                ->where('is_active', 1)
                ->where('user_limit', '>', 0)
                ->where(function ($q) {
                    $q->whereNull('expires_at')
                        ->orWhere('expires_at', '>=', now());
                })
                ->first();

            if ($coupon && $subtotal >= $coupon->min_amount) {
                $discount = $coupon->type === 'fixed'
                    ? min($coupon->value, $subtotal)
                    : round($subtotal * $coupon->value / 100, 2);
            }
        }

        // $tax = round($subtotal * 0.10, 2); // 10%
        $shipping = 0;
        $total = max(0, $subtotal - $discount + $shipping);

        return compact('cartItems', 'subtotal', 'discount', 'shipping', 'total', 'coupon');
    }

    /**
     * Show checkout page
     */
    public function index(Request $request)
    {
        $data = $this->calculateTotals(Auth::id());

        $states = [
            // States (28)
            'Andhra Pradesh',
            'Arunachal Pradesh',
            'Assam',
            'Bihar',
            'Chhattisgarh',
            'Goa',
            'Gujarat',
            'Haryana',
            'Himachal Pradesh',
            'Jharkhand',
            'Karnataka',
            'Kerala',
            'Madhya Pradesh',
            'Maharashtra',
            'Manipur',
            'Meghalaya',
            'Mizoram',
            'Nagaland',
            'Odisha',
            'Punjab',
            'Rajasthan',
            'Sikkim',
            'Tamil Nadu',
            'Telangana',
            'Tripura',
            'Uttar Pradesh',
            'Uttarakhand',
            'West Bengal',

            // Union Territories (8)
            'Andaman and Nicobar Islands',
            'Chandigarh',
            'Dadra and Nagar Haveli and Daman and Diu',
            'Delhi',
            'Jammu and Kashmir',
            'Ladakh',
            'Lakshadweep',
            'Puducherry',
        ];

        return view('frontend.partials.checkout', [
            'cartItems' => $data['cartItems'],
            'cartSubtotal' => $data['subtotal'],
            'couponDiscount' => $data['discount'],
            // 'cartTax' => $data['tax'],
            'shippingPrice' => $data['shipping'],
            'cartTotal' => $data['total'],
            'coupon' => $data['coupon'],
            'states' => $states,
        ]);
    }


    public function placeOrder(Request $request)
    {

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'country'   => 'required|string|max:255',
            'address'   => 'required|string|max:255',
            'city'      => 'required|string|max:255',
            'state'     => 'required|string|max:255',
            'zipcode'   => 'required|string|max:20',
            'payment_method' => 'required|in:cod',
        ]);

        if (!Auth::check()) {
            return back()
                ->with('show_login_popup', true)
                ->with('error', 'Please login to place your order.');
        }

        $userId = Auth::id();

        // Load cart with relations
        $cartItems = Cart::with('product.images')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Your cart is empty.');
        }

        $data = $this->calculateTotals($userId);

        // DB::transaction(function () use ($request, $userId, $cartItems, $data) {

        // 🟢 Create order
        $order = Order::create([
            'user_id'        => $userId,
            'firstname'      => $request->firstname,
            'lastname'       => $request->lastname,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'country'        => $request->country,
            'address'        => $request->address,
            'city'           => $request->city,
            'state'          => $request->state,
            'zipcode'        => $request->zipcode,
            'subtotal'       => $data['subtotal'],
            'discount'       => $data['discount'],
            'shipping'       => $data['shipping'],
            'total'          => $data['total'],
            'coupon_id'      => $data['coupon']->id ?? null,
            'payment_method' => 'cod',
            'status'         => 'pending',
        ]);

        // 🟢 Save order items
        foreach ($cartItems as $item) {

            // Get image safely
            $imageId = $item->product_image_id
                ?? optional($item->product->images->first())->id;

            OrderItem::create([
                'order_id'          => $order->id,
                'product_id'        => $item->product_id,
                'product_image_id'  => $imageId,
                'quantity'          => $item->qty,
                'price'             => $item->price,
                'subtotal'          => $item->qty * $item->price,
            ]);
        }

        // 🟢 Reduce coupon limit ONLY after order placed
        if (!empty($data['coupon'])) {
            $data['coupon']->decrement('user_limit');
        }

        // 🟢 Clear cart & coupon
        Cart::where('user_id', $userId)->delete();
        session()->forget('coupon');



        try {
            Mail::send('emails.order-placed-user', ['order' => $order], function ($message) use ($order) {
                $message->from("kavinwebbitech@gmail.com")
                    ->to($order->email)
                    ->subject('Your Order Has Been Placed');
            });

            Mail::send('emails.order-placed-admin', ['order' => $order], function ($message) {
                $message->from("kavinwebbitech@gmail.com")
                    ->to('anandhwebbitech@gmail.com')
                    ->subject('New Order Received');
            });
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->route('thank-you')
            ->with('success', 'Order placed successfully!');
    }


    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string'
        ]);

        $userId = Auth::id();

        $coupon = Coupon::where('code', $request->coupon_code)
            ->where('is_active', 1)
            ->where('user_limit', '>', 0)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                    ->orWhere('expires_at', '>=', now());
            })
            ->first();

        if (!$coupon) {
            return response()->json([
                'error' => 'Invalid or expired coupon.'
            ]);
        }

        $cartItems = Cart::where('user_id', $userId)->get();
        if ($cartItems->isEmpty()) {
            return response()->json([
                'error' => 'Your cart is empty.'
            ]);
        }

        // ✅ Store coupon in session (no user_limit reduction here)
        session([
            'coupon' => [
                'id' => $coupon->id,
                'code' => $coupon->code,
                'type' => $coupon->type,
                'value' => $coupon->value,
            ]
        ]);

        // Optional: calculate totals with coupon applied
        $subtotal = $cartItems->sum(fn($i) => $i->price * $i->qty);
        $discount = 0;

        if ($coupon->type === 'fixed') {
            $discount = min($coupon->value, $subtotal);
        } elseif ($coupon->type === 'percent') {
            $discount = $subtotal * ($coupon->value / 100);
        }

        $shipping = 0; // or calculate shipping
        $tax = 0;      // or calculate tax
        $total = $subtotal - $discount + $shipping + $tax;

        return response()->json([
            'success' => "Coupon {$coupon->code} applied successfully!",
            'cartSubtotal' => $subtotal,
            'couponDiscount' => $discount,
            'shippingPrice' => $shipping,
            'cartTax' => $tax,
            'cartTotal' => $total
        ]);
    }
}
