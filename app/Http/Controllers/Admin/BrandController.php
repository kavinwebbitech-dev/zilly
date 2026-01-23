<?php
// app/Http/Controllers/Admin/BrandController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands,name'
        ]);

        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Brand added successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted');
    }
}

