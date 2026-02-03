@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h4>Edit User</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.userlist.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $user->name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email', $user->email) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-select">
                        <option value="1" {{ $user->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$user->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success">
                        Update
                    </button>

                    <a href="{{ route('admin.userlist.index') }}"
                       class="btn btn-secondary">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
