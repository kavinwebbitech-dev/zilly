@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3">Brands</h4>

    {{-- Add Brand --}}
    <form method="POST" action="{{ route('admin.brands.store') }}" class="mb-3">
        @csrf
        <div class="row g-2 mt-2">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Brand Name" required>
            </div>
            <div class="col-md-2">
                <select name="status" class="form-control">
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Add Brand</button>
            </div>
        </div>
    </form>

    {{-- Brands Table --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>S.No</th>
                <th>Brand Name</th>
                <th>Slug</th>
                <th>Status</th>
                <th width="150">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($brands as $index => $brand)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->slug }}</td>
                    <td>
                        <span class="badge {{ $brand->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $brand->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this brand?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No Brands Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
