<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Show wishlist page
     */
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        return view('frontend.partials.wish-list', compact('wishlist'));
    }

    /**
     * Toggle wishlist (add/remove) – for product page
     */
    public function toggle($id)
    {
        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            unset($wishlist[$id]);
            $added = false;
        } else {
            $wishlist[$id] = true;
            $added = true;
        }

        session()->put('wishlist', $wishlist);

        return response()->json([
            'success' => true,
            'message' => $added ? 'Added to wishlist' : 'Removed from wishlist',
            'count'   => count($wishlist),
            'added'   => $added
        ]);
    }

    /**
     * Remove wishlist item – ONLY for wishlist page
     */
    public function remove(Request $request)
    {
        $wishlist = session()->get('wishlist', []);
        $productId = $request->product_id;

        if (isset($wishlist[$productId])) {
            unset($wishlist[$productId]);
            session()->put('wishlist', $wishlist);

            return response()->json([
                'success' => true,
                'count'   => count($wishlist)
            ]);
        }

        return response()->json([
            'success' => false,
            'error'   => 'Item not found'
        ]);
    }
}
