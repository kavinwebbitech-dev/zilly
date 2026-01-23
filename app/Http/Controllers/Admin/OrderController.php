<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // Get all orders with order items
        $orders = Order::with('orderItems.product')->latest()->get();

        return view('admin.orders.index', compact('orders'));
    }
}
