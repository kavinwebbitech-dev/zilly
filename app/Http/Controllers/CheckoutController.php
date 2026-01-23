<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShippingMethod;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Show checkout page
    public function index()
    {
        $cartItems = Cart::with('product.images')
            ->where('user_id', Auth::id())
            ->get();

        $cartSubtotal = $cartItems->sum(fn($item) => $item->price * $item->qty);

        $couponDiscount = 0; 
        $coupon = null;

        if (request('coupon_code')) {
            $coupon = Coupon::where('code', request('coupon_code'))
                ->where('is_active', 1)
                ->where('user_limit', '>', 0)
                ->where(function ($q) {
                    $q->whereNull('expires_at')
                      ->orWhere('expires_at', '>=', now());
                })
                ->first();

            if ($coupon && $cartSubtotal >= $coupon->min_amount) {
                $couponDiscount = $coupon->type === 'fixed'
                    ? $coupon->value
                    : ($cartSubtotal * $coupon->value) / 100;
            }
        }

        $cartTax = round($cartSubtotal * 0.1, 2); // 10% tax
        $shippingPrice = 0;
        $cartTotal = $cartSubtotal - $couponDiscount + $cartTax + $shippingPrice;

        $states = ['Alabama', 'Alaska', 'California', 'Hawaii', 'Texas', 'Georgia'];

        return view('frontend.partials.checkout', compact(
            'cartItems',
            'cartSubtotal',
            'coupon',
            'states',
            'couponDiscount',
            'cartTax',
            'shippingPrice',
            'cartTotal'
        ));
    }

   
    public function placeOrder(Request $request)
    {
       
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipcode' => 'required|string|max:20',
            'shipping_method' => 'required|exists:shipping_methods,id',
            'payment_method' => 'required|in:cod',
        ]);

        $userId = Auth::id();

        $cartItems = Cart::with('product')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Calculate totals
        $subtotal = $cartItems->sum(fn($item) => $item->qty * $item->price);
        $discount = $request->coupon_id ? Coupon::find($request->coupon_id)->value : 0;
        $tax = round($subtotal * 0.1, 2);
        $shippingPrice = ShippingMethod::find($request->shipping_method)->price ?? 0;
        $total = $subtotal - $discount + $tax + $shippingPrice;

        // Create order
        $order = Order::create([
            'user_id' => $userId,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'shipping_method_id' => $request->shipping_method,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'shipping' => $shippingPrice,
            'tax' => $tax,
            'total' => $total,
            'payment_method' => 'cod',
            'status' => 'pending',
        ]);

        // Create order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->qty,
                'price' => $item->price,
                'subtotal' => $item->qty * $item->price,
            ]);
        }

        // Reduce coupon user_limit if applied
        if ($request->coupon_id) {
            Coupon::where('id', $request->coupon_id)
                ->where('user_limit', '>', 0)
                ->decrement('user_limit', 1);
        }

        // Clear cart
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('thank-you')->with('success', 'Order placed successfully!');
    }

    // Apply coupon via GET
    public function applyCoupon(Request $request)
    {
        // dd($request->all());
        $code = $request->coupon_code;
         
        if (!$code) {
            return redirect()->back()->with('error', 'Please provide a coupon code.');
        }

        $userId = Auth::id();

        $coupon = Coupon::where('code', $code)
            ->where('is_active', 1)
            ->where('user_limit', '>', 0)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now());
            })
            ->first();

        if (!$coupon) {
            return redirect()->back()->with('error', 'Invalid or expired coupon.');
        }

        $cartItems = Cart::where('user_id', $userId)->get();
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $cartSubtotal = $cartItems->sum(fn($item) => $item->price * $item->qty);

        // Calculate discount
        $discount = $coupon->type === 'fixed'
            ? min($coupon->value, $cartSubtotal)
            : round($cartSubtotal * $coupon->value / 100, 2);

        // Reduce user_limit
        $coupon->decrement('user_limit');

        return redirect()->back()->with([
            'success' => "Coupon applied successfully! You saved ₹{$discount}.",
            'coupon' => $coupon,
            'couponDiscount' => $discount
        ]);
    }
}
