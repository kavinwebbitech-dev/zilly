@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name"
                   class="form-control"
                   value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="status" value="1"
                   class="form-check-input" id="status"
                   {{ $category->status ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Active</label>
        </div>

        <button type="submit" class="btn btn-success">Update Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
