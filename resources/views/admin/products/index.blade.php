@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Products</h4>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            + Add Product
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Products Table --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="5%">#</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Original Price</th>
                        <th>Discount %</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ $product->category->name ?? 'N/A' }}
                            </td>

                            <td>{{ $product->name }}</td>

                            <td>
                                ₹{{ number_format($product->price, 2) }}
                            </td>

                            <td>
                                {{ $product->original_price ? '₹'.number_format($product->original_price,2) : '-' }}
                            </td>

                            <td>
                                {{ $product->discount_percent ?? 0 }}%
                            </td>

                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('admin.products.destroy', $product->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                No products found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
