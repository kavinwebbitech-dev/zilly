<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('today_pick', 1)
            ->latest()
            ->take(4)
            ->get();

        return view('frontend.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::with(['images', 'category', 'brand'])
            ->findOrFail($id);

        $relatedProducts = Product::with(['images', 'category'])
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->limit(6)
            ->get();

        return view('frontend.product-details', compact('product', 'relatedProducts'));
    }
}
