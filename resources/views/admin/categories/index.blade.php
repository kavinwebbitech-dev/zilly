@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h2 class="mb-4">Categories</h2>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
        

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Products</th>
                    <th width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $index => $category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if ($category->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $category->products()->count() }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No categories found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
