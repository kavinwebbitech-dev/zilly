@extends('admin.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <div class="container-fluid">
        <h4 class="mb-4">All Orders</h4>

        @php
            $showReturnRemark = $orders->contains(fn($order) => !empty($order->return_remark));
            $colspan = $showReturnRemark ? 12 : 11;
        @endphp

        {{-- ✅ SweetAlert for Success / Error --}}
        @if (session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}",
                    timer: 2500,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if (session('error'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ session('error') }}"
                });
            </script>
        @endif

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Order Name</th>
                    <th width="80">Payment</th>
                    <th>Coupon</th>
                    <th>Discount</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Created</th>
                    @if ($showReturnRemark)
                        <th>Return Remark</th>
                    @endif
                    <th>Items</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order->user->name ?? 'Guest' }}</td>
                        <td>{{ $order->firstname }}</td>
                        <td class="text-center">{{ strtoupper($order->payment_method) }}</td>
                        <td>{{ $order->coupon ? $order->coupon->code : '-' }}</td>
                        <td>₹{{ number_format($order->discount, 2) }}</td>
                        <td>₹{{ number_format($order->subtotal, 2) }}</td>
                        <td>₹{{ number_format($order->total, 2) }}</td>

                        @php
                            $statusClass = match ($order->status) {
                                'pending' => 'bg-primary',
                                'confirmed' => 'bg-info',
                                'shipped' => 'bg-warning',
                                'delivered' => 'bg-success',
                                'returned' => 'bg-dark',
                                'canceled' => 'bg-danger',
                                default => 'bg-secondary',
                            };
                        @endphp
                        <td><span class="badge {{ $statusClass }}">{{ ucfirst($order->status) }}</span></td>
                        <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>

                        @if ($showReturnRemark)
                            <td class="text-center">
                                @if ($order->return_remark)
                                    <span class="text-danger fw-semibold" data-bs-toggle="tooltip"
                                        title="{{ $order->return_remark }}">
                                        {{ Str::limit($order->return_remark, 10) }}
                                    </span>
                                @else
                                    -
                                @endif
                            </td>
                        @endif

                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-outline-primary toggle-items"
                                data-order-id="{{ $order->id }}">View Items</button>
                        </td>

                        <td class="text-center">
                            @switch($order->status)
                                @case('pending')
                                    <a href="{{ route('admin.orders.status', [$order->id, 'confirmed']) }}" class="text-info mx-1"
                                        title="Confirm"><i class="fa-solid fa-circle-check"></i></a>
                                @break

                                @case('confirmed')
                                    <a href="{{ route('admin.orders.status', [$order->id, 'shipped']) }}" class="text-warning mx-1"
                                        title="Shipped"><i class="fa-solid fa-truck"></i></a>
                                @break

                                @case('shipped')
                                    <a href="{{ route('admin.orders.status', [$order->id, 'delivered']) }}"
                                        class="text-success mx-1" title="Delivered"><i class="fa-solid fa-box-open"></i></a>
                                @break

                                @case('delivered')
                                @case('canceled')

                                @case('returned')
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Delete this order?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                @break
                            @endswitch
                        </td>
                    </tr>

                    {{-- ORDER ITEMS --}}
                    <tr class="order-items-row d-none" id="items-{{ $order->id }}">
                        <td colspan="{{ $colspan }}" class="bg-light p-3">
                            <h6 class="fw-bold mb-3">Order Items</h6>
                            @if ($order->orderItems->count())
                                <table class="table table-sm table-bordered mb-0">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Product</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderItems as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ $item->productImage ? asset('storage/' . $item->productImage->image) : asset('asset/images/no-image.png') }}"
                                                            width="40" height="40" class="border rounded">
                                                        {{ $item->product->name ?? $item->name }}
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $item->quantity }}</td>
                                                <td class="text-end">₹{{ number_format($item->price, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-muted mb-0">No items found.</p>
                            @endif
                        </td>
                    </tr>

                    @empty
                        <tr>
                            <td colspan="{{ $colspan }}" class="text-center">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- PAGINATION --}}
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>

                </div>
                <div>
                    {{ $orders->links('pagination::bootstrap-5') }}
                </div>
            </div>


        @endsection

        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    document.querySelectorAll('.toggle-items').forEach(btn => {
                        btn.addEventListener('click', () => {
                            const row = document.getElementById('items-' + btn.dataset.orderId);
                            if (!row) return;
                            row.classList.toggle('d-none');
                            btn.textContent = row.classList.contains('d-none') ? 'View Items' :
                                'Hide Items';
                        });
                    });

                    [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(el => new bootstrap.Tooltip(el));
                });
            </script>
        @endpush
    </div>
