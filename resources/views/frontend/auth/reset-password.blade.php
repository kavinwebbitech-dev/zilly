@extends('frontend.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h4 class="mb-4">Reset Password</h4>

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-3">
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $email }}"
                           required>
                </div>

                <div class="mb-3">
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="New Password"
                           required>
                </div>

                <div class="mb-3">
                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Confirm Password"
                           required>
                </div>

                <button class="tf-btn bg-dark-2 w-100">
                    Reset Password
                </button>
            </form>

        </div>
    </div>
</div>
@endsection
