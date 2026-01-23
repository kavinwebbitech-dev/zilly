@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Add New Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name"
                   class="form-control"
                   value="{{ old('name') }}" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="status" value="1"
                   class="form-check-input" id="status" checked>
            <label class="form-check-label" for="status">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
