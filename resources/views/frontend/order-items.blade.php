@extends('frontend.layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Order #{{ $order->id }} Items</h2>
    <p><strong>Date:</strong> {{ $order->created_at->format('d M, Y') }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->orderItems as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>${{ number_format($item->quantity * $item->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4" class="text-end">Order Total:</th>
                    <th>${{ number_format($order->orderItems->sum(fn($i) => $i->quantity * $i->price), 2) }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <a href="{{ route('myorders') }}" class="btn btn-secondary mt-3">Back to Orders</a>
</div>
@endsection
