<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    // Show all coupons
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    // Show form to create coupon
    public function create()
    {
        return view('admin.coupons.create');
    }

    // Store coupon in DB
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:coupons,code',
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric|min:0',
            'min_amount' => 'nullable|numeric|min:0',
            'user_limit' => 'required|integer|min:1',
            'is_active' => 'required|boolean',
            'expires_at' => 'nullable|date|after_or_equal:today',
        ]);

        Coupon::create($request->all());

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon created successfully.');
    }

    // Show form to edit coupon
    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    }

    // Update coupon
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'code' => 'required|string|unique:coupons,code,' . $coupon->id,
            'type' => 'required|in:fixed,percent',
            'value' => 'required|numeric|min:0',
            'min_amount' => 'nullable|numeric|min:0',
            'user_limit' => 'required|integer|min:1',
            'is_active' => 'required|boolean',
            'expires_at' => 'nullable|date|after_or_equal:today',
        ]);

        $coupon->update($request->all());

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon updated successfully.');
    }

    // Delete coupon
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon deleted successfully.');
    }
}
