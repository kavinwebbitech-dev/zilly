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


    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image_id'   => 'nullable|integer|exists:product_images,id',
            'qty'        => 'nullable|integer|min:1',
        ]);
        if (!Auth::check()) {
            return response()->json([
                'status' => 'login_required',
                'message' => 'Please login first',
            ], 401);
        }
        // 1️⃣ Get the product
        $product = Product::with('category', 'images')->findOrFail($request->product_id);
        $quantity = $request->qty ?? 1;

        $imageId = $request->image_id ?? $product->images->first()->id;

        $cart = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->where('product_image_id', $imageId)
            ->first();


        if ($cart) {
            // Increment quantity
            $cart->increment('qty', $quantity);
        } else {
            // Create new cart row
            Cart::create([
                'user_id'          => auth()->id(),
                'product_id'       => $product->id,
                'product_image_id' => $imageId,
                'name'             => $product->name,
                'qty'              => $quantity,
                'price'            => $product->price,
                'original_price'   => $product->original_price,
                'discount_percent' => $product->discount_percent,
            ]);
        }

        // 3️⃣ Get updated cart items
        $cartItems = Cart::with('product', 'productImage')
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
            'count' => $cartItems->count(),
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
