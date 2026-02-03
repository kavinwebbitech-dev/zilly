<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCanceledMail;
use App\Mail\OrderStatusMail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['orderItems.product'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.myorders', compact('orders'));
    }

    public function cancel(Order $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        if (!in_array($order->status, ['pending', 'confirmed'])) {
            return back()->with('error', 'Order cannot be canceled');
        }

        $order->update(['status' => 'canceled']);

        Mail::to(config('mail.from.address'))->send(new OrderStatusMail($order));
        Mail::to($order->user->email)->send(new OrderStatusMail($order));

        return back()->with('success', 'Order canceled successfully');
    }

    public function return(Request $request, Order $order)
    {
        if ($order->status !== 'delivered') {
            return back()->with('error', 'You cannot return this order.');
        }

        $request->validate([
            'return_remark' => 'required|string|max:500',
        ]);

        $order->status = 'returned';
        $order->return_remark = $request->return_remark;
        $order->save();

        Mail::to(config('mail.from.address'))
            ->send(new OrderStatusMail($order));

        // ✅ Send mail to USER (safe)
        if (!empty($order->email)) {
            Mail::to($order->email)
                ->send(new OrderStatusMail($order));
        }
        return back()->with('success', 'Return request submitted successfully.');
    }
}
