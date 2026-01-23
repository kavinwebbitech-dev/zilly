<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ShoppingcartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with(['product', 'productImage'])->get();

        $cartTotal = $cartItems->sum(fn($i) => $i->price * $i->qty);

        return view('frontend.shoppingcart', compact('cartItems', 'cartTotal'));
    }


    // public function add(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|exists:products,id',
    //     ]);

    //     // 1️⃣ Get product being added
    //     $product = Product::with('category')->findOrFail($request->product_id);

    //     // 2️⃣ Add to cart
    //     $cart = Cart::where('product_id', $product->id)
    //         ->where('user_id', auth()->id())
    //         ->first();

    //     if ($cart) {
    //         $cart->increment('qty');
    //     } else {
    //         Cart::create([
    //             'user_id' => auth()->id(),
    //             'product_id' => $product->id,
    //             'name' => $product->name,
    //             'qty' => 1,
    //             'price' => $product->price,
    //             'original_price' => $product->original_price,
    //             'discount_percent' => $product->discount_percent,
    //         ]);
    //     }

    //     // 3️⃣ Cart items
    //     $cartItems = Cart::with('productImage')
    //         ->where('user_id', auth()->id())
    //         ->latest()
    //         ->get();

    //     // 4️⃣ ✅ RECOMMENDATION LOGIC (FIXED)
    //     $relatedProducts = Product::where('category_id', $product->category_id)
    //         ->where('id', '!=', $product->id)
    //         ->limit(2)
    //         ->get();

    //     // 5️⃣ Render same blade
    //     $html = view('frontend.partials.mini-cart-items', compact(
    //         'cartItems',
    //         'relatedProducts'
    //     ))->render();

    //     return response()->json([
    //         'count' => $cartItems->sum('qty'),
    //         'html'  => $html,
    //     ]);
    // }
    public function add(Request $request)
    {
        $request->validate([
            'product_id'  => 'required|exists:products,id',
            'color'       => 'nullable|string',      // selected color
            'color_size'  => 'nullable|string',      // selected color+size variant
            'qty'         => 'nullable|integer|min:1',
        ]);

        // 1️⃣ Get product being added
        $product = Product::with('category')->findOrFail($request->product_id);

        // 2️⃣ Check if this exact variant already exists in cart
        $cart = Cart::where('product_id', $product->id)
            ->where('user_id', auth()->id())
            ->where('color_size', $request->color_size ?? null) // same variant
            ->first();

        $quantity = $request->qty ?? 1;

        if ($cart) {
            // Increment quantity
            $cart->increment('qty', $quantity);
        } else {
            // Create new cart row with variant info
            Cart::create([
                'user_id'          => auth()->id(),
                'product_id'       => $product->id,
                'name'             => $product->name,
                'qty'              => $quantity,
                'price'            => $product->price,
                'original_price'   => $product->original_price,
                'discount_percent' => $product->discount_percent,
                'color_size' => [
                    'color' => $request->selected_color,
                    'size'  => $request->selected_size,
                ], // store selected variant
            ]);
        }

        // 3️⃣ Get updated cart items
        $cartItems = Cart::with('productImage')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        // 4️⃣ Related products
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(2)
            ->get();

        // 5️⃣ Render mini cart partial
        $html = view('frontend.partials.mini-cart-items', compact(
            'cartItems',
            'relatedProducts'
        ))->render();

        return response()->json([
            'count' => $cartItems->sum('qty'),
            'html'  => $html,
        ]);
    }


    public function remove($id)
    {
        Cart::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        $cartItems = Cart::where('user_id', auth()->id())->get();

        return response()->json([
            'html'  => view('frontend.partials.mini-cart-items', compact('cartItems'))->render(),
            'count' => $cartItems->count(),
        ]);
    }

    public function updateQty(Request $request)
    {
        $cartItem = Cart::find($request->id);

        if ($cartItem) {
            if ($request->type === 'plus') {
                $cartItem->qty++;
            }

            if ($request->type === 'minus' && $cartItem->qty > 1) {
                $cartItem->qty--;
            }

            $cartItem->save();
        }

        // 🔹 Get all cart items
        $cartItems = Cart::all();

        // 🔹 Total of all products
        $cartTotal = $cartItems->sum(function ($item) {
            return $item->price * $item->qty;
        });

        return response()->json([
            'item_id'       => $cartItem->id,
            'item_qty'      => $cartItem->qty,
            'item_subtotal' => number_format($cartItem->price * $cartItem->qty, 2),
            'cart_total'    => number_format($cartTotal, 2),
            'count'         => $cartItems->count(),
        ]);
    }
}
