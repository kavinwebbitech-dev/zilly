<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index(Request $request)
    // {
    //     $query = Product::with('images', 'category', 'brand')
    //         ->where('status', 1);

    //     // Category filter
    //     if ($request->filled('category')) {
    //         $query->whereHas('category', function ($q) use ($request) {
    //             $q->where('slug', $request->category);
    //         });
    //     }

    //     // Brand filter
    //     if ($request->filled('brand')) {
    //         $query->where('brand_id', $request->brand);
    //     }

    //     // Availability filter
    //     if ($request->availability === 'in') {
    //         $query->where('status', '>', 0);
    //     }

    //     if ($request->availability === 'out') {
    //         $query->where('status', '<', 1);
    //     }

    //     $products = $query->get();

    //     // Sidebar data (IMPORTANT)
    //     $categories = Category::withCount('products')->get();
    //     $brands     = Brand::withCount('products')->get();

    //     // Stock counts
    //     $inStockCount  = Product::where('status', '>', 0)->count();
    //     $outStockCount = Product::where('status', '<', 1)->count();

    //     return view('frontend.partials.product', compact(
    //         'products',
    //         'categories',
    //         'brands',
    //         'inStockCount',
    //         'outStockCount'
    //     ));
    // }
    public function index(Request $request)
{
    $query = Product::with('images', 'category', 'brand')
        ->where('status', 1);

    // Category slug filter
    if ($request->filled('category')) {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('slug', $request->category);
        });
    }

    // Brand filter
    if ($request->filled('brand')) {
        $query->where('brand_id', $request->brand);
    }

    // Availability filter
    if ($request->availability === 'in') {
        $query->where('status', '>', 0);
    }

    if ($request->availability === 'out') {
        $query->where('status', '<', 1);
    }

  if ($request->filled('bag_size')) {
    $query->whereHas('category', function ($q) use ($request) {
        $q->where('slug', $request->bag_size);
    });
}

    $products = $query->get();

    // Sidebar data
    $categories = Category::withCount('products')->get();
    $brands     = Brand::withCount('products')->get();

    // Stock counts
    $inStockCount  = Product::where('status', '>', 0)->count();
    $outStockCount = Product::where('status', '<', 1)->count();

    return view('frontend.partials.product', compact(
        'products',
        'categories',
        'brands',
        'inStockCount',
        'outStockCount'
    ));
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

    // public function search(Request $request)
    // {
    //     $query = trim($request->query('query'));

    //     $products = [];

    //     if ($query) {
    //         $products = Product::where('name', 'LIKE', "%{$query}%")
    //             ->latest()
    //             ->take(10)
    //             ->get();
    //     }

    //     return view('frontend.partials.searchmodal', compact('products', 'query'));
    // }

    // public function quickView(Product $product)
    // {
    //     $product->load('images');

    //     return response()->json([
    //         'id' => $product->id,
    //         'name' => $product->name,
    //         'price' => $product->price,
    //         'old_price' => $product->original_price,
    //         'discount' => $product->discount_percent,
    //         'description' => $product->short_description,
    //         'colors' => $product->colors ?? [],
    //         'sizes' => $product->sizes ?? [],
    //         'images' => $product->images->map(fn($img) => [
    //             'url' => asset('storage/' . $img->image),
    //             'color' => $img->color
    //         ])
    //     ]);
    // }
}
