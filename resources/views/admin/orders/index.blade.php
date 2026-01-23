@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">All Orders</h4>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Payment Method</th>
                <th>Coupon</th>
                <th>Discount</th>
                <th>Subtotal</th>
                <th>Shipping</th>
                <th>Tax</th>
                <th>Total</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Items</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name ?? 'Guest' }}</td>
                <td>{{ strtoupper($order->payment_method) }}</td>
                <td>{{ $order->coupon_code ?? '-' }}</td>
                <td>₹{{ number_format($order->discount, 2) }}</td>
                <td>₹{{ number_format($order->subtotal, 2) }}</td>
                <td>₹{{ number_format($order->shipping, 2) }}</td>
                <td>₹{{ number_format($order->tax, 2) }}</td>
                <td>₹{{ number_format($order->total, 2) }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <ul>
                        @foreach ($order->orderItems as $item)
                            <li>{{ $item->product->name ?? $item->name }} (x{{ $item->qty }}) - ₹{{ number_format($item->price, 2) }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="12" class="text-center">No orders found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
