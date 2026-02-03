<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function show($id)
    {
        $product = Product::with(['images', 'category', 'brand'])
            ->findOrFail($id);

        $relatedProducts = Product::with(['images', 'category'])
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->limit()
            ->get();

        return view('frontend.product-details', compact('product', 'relatedProducts'));
    }
    public function search(Request $request)
    {
        $query = $request->get('query', '');

        $products = Product::with('images')
            ->where('name', 'LIKE', "%{$query}%")
            ->take(20) // limit results
            ->get();

        // Return JSON for AJAX
        return response()->json($products);
    }
}
