<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('images', 'category', 'brand')
            ->where('status', 1);

        // ✅ Filter by category (slug)
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // ✅ Filter by brand (id)
        if ($request->filled('brand')) {
            $query->where('brand_id', $request->brand);
        }

        $products = $query->get();

        // Sidebar data
        $categories = Category::withCount('products')->get();
        $brands     = Brand::withCount('products')->get();

        return view('frontend.partials.product', compact(
            'products',
            'categories',
            'brands'
        ));
    }
    public function quickView(Product $product)
{
    $product->load('images');

    return response()->json([
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'old_price' => $product->original_price,
        'discount' => $product->discount_percent,
        'description' => $product->short_description,
        'colors' => $product->colors ?? [],
        'sizes' => $product->sizes ?? [],
        'images' => $product->images->map(fn ($img) => [
            'url' => asset('storage/' . $img->image),
            'color' => $img->color
        ])
    ]);
}

}
