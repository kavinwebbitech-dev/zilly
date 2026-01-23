@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Add New Coupon</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.coupons.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Coupon Code</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ old('code') }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="fixed" @selected(old('type')=='fixed')>Fixed Amount</option>
                <option value="percent" @selected(old('type')=='percent')>Percentage</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="value" class="form-label">Value</label>
            <input type="number" name="value" id="value" class="form-control" value="{{ old('value') }}" min="0" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="min_amount" class="form-label">Minimum Cart Amount (Optional)</label>
            <input type="number" name="min_amount" id="min_amount" class="form-control" value="{{ old('min_amount') }}" min="0" step="0.01">
        </div>

        <div class="mb-3">
            <label for="user_limit" class="form-label">User Limit</label>
            <input type="number" name="user_limit" id="user_limit" class="form-control" value="{{ old('user_limit', 1) }}" min="1" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" @checked(old('is_active', 1))>
            <label class="form-check-label" for="is_active">Active</label>
        </div>

        <div class="mb-3">
            <label for="expires_at" class="form-label">Expires At (Optional)</label>
            <input type="date" name="expires_at" id="expires_at" class="form-control" value="{{ old('expires_at') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Coupon</button>
        <a href="{{ route('admin.coupons.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
