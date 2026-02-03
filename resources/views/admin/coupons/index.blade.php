@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <h4 class="mb-4">Coupons
            <a href="{{ route('admin.coupons.create') }}" class="btn btn-sm btn-primary float-end">Add Coupon</a>
        </h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Type</th>
                    <th>Value</th>
                    <th>Min Amount</th>
                    <th>User Limit</th>
                    <th>Status</th>
                    <th>Expires At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($coupons as $index => $coupon)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $coupon->code }}</td>
                        <td>{{ ucfirst($coupon->type) }}</td>
                        <td>{{ $coupon->type === 'percent' ? $coupon->value . '%' : '₹' . number_format($coupon->value, 2) }}
                        </td>
                        <td>₹{{ number_format($coupon->min_amount, 2) }}</td>
                        <td>{{ $coupon->user_limit }}</td>
                        <td>
                            <span class="badge {{ $coupon->is_active ? 'bg-success' : 'bg-danger' }}">
                                {{ $coupon->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ $coupon->expires_at ? $coupon->expires_at->format('d-m-Y') : '-' }}</td>
                        <td>
                            <a href="{{ route('admin.coupons.edit', $coupon->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No coupons found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
