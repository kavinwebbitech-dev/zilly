<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get()->all();
        $brands     = Brand::where('status', 1)->get();
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id'    => 'required|exists:brands,id',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'status'      => 'nullable|boolean',
            'image_details.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $images = $product->image_details ?? [];

        if ($request->hasFile('image_details')) {
            foreach ($request->file('image_details') as $image) {
                $images[] = $image->store('products_image_details', 'public');
            }
        }

        $product = Product::create([
            'category_id'       => $request->category_id,
            'brand_id'          => $request->brand_id,
            'name'              => $request->name,
            'price'             => $request->price,
            'original_price'    => $request->original_price,
            'discount_percent'  => $request->discount_percent,
            'short_description' => $request->short_description,
            'care_instructions' => $request->care_instructions,
            'image_details'     => $images,
            'status'     => $request->has('status') ? 1 : 0,
            'today_pick' => $request->has('today_pick') ? 1 : 0,
        ]);

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image'      => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product created successfully');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id'    => 'required|exists:brands,id',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'status'      => 'nullable|boolean',
            'image_details.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $images = $product->image_details ?? [];

        if ($request->hasFile('image_details')) {
            foreach ($request->file('image_details') as $image) {
                $images[] = $image->store('products_image_details', 'public');
            }
        }

        $product->update([
            'category_id'       => $request->category_id,
            'brand_id'          => $request->brand_id,
            'name'              => $request->name,
            'price'             => $request->price,
            'original_price'    => $request->original_price,
            'discount_percent'  => $request->discount_percent,
            'short_description' => $request->short_description,
            'care_instructions' => $request->care_instructions,
            'image_details'     => $images,
            'status'     => $request->has('status') ? 1 : 0,
            'today_pick' => $request->has('today_pick') ? 1 : 0,
        ]);

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image'      => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product updated successfully');
    }

    public function edit(Product $product)
    {
        $categories = Category::get()->all();
        $brands     = Brand::where('status', 1)->get();
        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }



    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted');
    }

    public function deleteImage($id)
    {
        $image = ProductImage::findOrFail($id);

        // Only soft delete (no file removal)
        $image->delete();

        return response()->json(['success' => true]);
    }


    public function deleteImageDetails(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $images = $product->image_details ?? [];

        $index = (int) $request->index;

        if (!isset($images[$index])) {
            return response()->json(['success' => false]);
        }

        // Delete file
        Storage::disk('public')->delete($images[$index]);

        // Remove from array
        unset($images[$index]);

        // Re-index array
        $product->image_details = array_values($images);
        $product->save();

        return response()->json(['success' => true]);
    }

    private function generateColorSize(array $colors, array $sizes)
    {
        $variants = [];

        foreach ($colors as $color) {
            foreach ($sizes as $size) {
                $variants[] = $color . '/' . $size;
            }
        }

        return $variants; // array stored as JSON in DB
    }
}
