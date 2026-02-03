@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h4>Edit Brand</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Brand Name</label>
            <input type="text" name="name" value="{{ old('name', $brand->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $brand->slug) }}" class="form-control">
            <small class="text-muted">Optional. Will auto-generate from name if left blank.</small>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="1" {{ $brand->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $brand->status == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Brand</button>
        <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
