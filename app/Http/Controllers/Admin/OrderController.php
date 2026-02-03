<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderStatusUpdatedMail;
use App\Mail\OrderStatusMail;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::with('orderItems.product', 'orderItems.productImage', 'coupon', 'user')->orderBy('created_at', 'desc')
            ->paginate(8);;
        return view('admin.orders.index', compact('orders'));
    }


    public function updateStatus(Order $order, $status)
    {
        $allowed = ['confirmed', 'shipped', 'delivered', 'returned', 'canceled'];

        if (!in_array($status, $allowed)) {
            return back()->with('error', 'Invalid status');
        }

        $order->update(['status' => $status]);

        // Send email to user
        if (!empty($order->email)) {
            Mail::to($order->email)->send(new OrderStatusMail($order));
        }

        // Status-based success message
        $messages = [
            'confirmed' => 'Order confirmed successfully.',
            'shipped'   => 'Order shipped successfully.',
            'delivered' => 'Order delivered successfully.',
            'returned'  => 'Order returned successfully.',
            'canceled'  => 'Order canceled successfully.',
        ];

        return back()->with('success', $messages[$status]);
    }

    public function destroy(Order $order)
    {
        $order->delete(); // soft delete
        return back()->with('success', 'Order deleted successfully');
    }
}
