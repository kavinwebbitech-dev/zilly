<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = session()->get('wishlist', []);

        return view('frontend.partials.wish-list', compact('wishlist'));
    }
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
            'message' => $added ? 'Added to wishlist' : 'Removed from wishlist',
            'count'   => count($wishlist),
            'added'   => $added
        ]);
    }

}
