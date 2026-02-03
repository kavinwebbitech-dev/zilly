@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Product Reports</h4>
        </div>

        <!-- Filter Form -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="GET" action="{{ route('admin.reports.index') }}" class="row g-3">

                    <!-- Stock Status -->
                    <div class="col-md-3">
                        <label for="stock_status" class="form-label">Stock Status</label>
                        <select name="stock_status" id="stock_status" class="form-control">
                            <option value="">All Products</option>
                            <option value="in_stock" {{ request('stock_status') == 'in_stock' ? 'selected' : '' }}>In Stock
                            </option>
                            <option value="out_of_stock" {{ request('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Out of
                                Stock</option>
                        </select>
                    </div>

                    <!-- Monthly Filter -->
                    <div class="col-md-3">
                        <label for="month" class="form-label">Month</label>
                        <input type="month" name="month" id="month" value="{{ request('month') }}"
                            class="form-control">
                    </div>

                    <!-- Date Range -->
                    <div class="col-md-2">
                        <label for="from_date" class="form-label">From Date</label>
                        <input type="date" name="from_date" id="from_date" value="{{ request('from_date') }}"
                            class="form-control">
                    </div>

                    <div class="col-md-2">
                        <label for="to_date" class="form-label">To Date</label>
                        <input type="date" name="to_date" id="to_date" value="{{ request('to_date') }}"
                            class="form-control">
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-2 align-self-end">
                        <button type="submit" class="btn btn-primary w-100">Filter</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Products Table -->
        <div class="card">
            <div class="card-body">
                @if ($products->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>S.No</th>
                                    <th>Product Name</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            @if ($product->sold_out)
                                                <span class="badge bg-danger">Sold Out</span>
                                            @elseif($product->status > 0)
                                                <span class="badge bg-success">In Stock</span>
                                            @else
                                                <span class="badge bg-warning">Out of Stock</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->status }}</td>
                                        <td>{{ $product->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $products->withQueryString()->links() }}
                    </div>
                @else
                    <p class="text-center mb-0">No products found for the selected filter.</p>
                @endif
            </div>
        </div>

    </div>
@endsection
