<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Order;
use App\Models\Coupon;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
{
    // Counts
    $cartCount = Cart::count();
    $categoryCount = Category::count();
    $brandCount = Brand::count();
    $productCount = Product::count();
    $orderCount = Order::count();
    $couponCount = Coupon::count();

    // Recent items: latest 2 OR include today's
    $recentCategories = Category::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Category::latest()->take(2)->pluck('id'))
        ->get();

    $recentBrands = Brand::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Brand::latest()->take(2)->pluck('id'))
        ->get();

    $recentProducts = Product::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Product::latest()->take(2)->pluck('id'))
        ->get();

    $recentOrders = Order::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Order::latest()->take(2)->pluck('id'))
        ->get();

    $recentCoupons = Coupon::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Coupon::latest()->take(2)->pluck('id'))
        ->get();

    $recentCartItems = Cart::whereDate('created_at', Carbon::today())
        ->orWhereIn('id', Cart::latest()->take(2)->pluck('id'))
        ->get();

    return view('admin.dashboard', compact(
        'cartCount', 'categoryCount', 'brandCount', 'productCount', 'orderCount', 'couponCount',
        'recentCategories', 'recentBrands', 'recentProducts', 'recentOrders', 'recentCoupons', 'recentCartItems'
    ));
}
}
