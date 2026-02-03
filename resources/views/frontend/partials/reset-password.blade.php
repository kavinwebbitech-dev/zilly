<!-- Reset pass -->
<div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
    <div class="canvas-wrapper">
        <div class="canvas-header popup-header">
            <span class="title">Reset Your Password</span>
            <button class="icon-close icon-close-popup"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>

        <div class="canvas-body popup-inner">
            <form action="{{ route('password.email') }}" method="POST" class="form-login">
                @csrf

                {{-- Success --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Error --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <p class="text text-sm text-main-2">
                    Enter your registered email to receive a reset link.
                </p>

                <fieldset class="email mb_12">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Enter Your Email*"
                           required>
                </fieldset>

                @error('email')
                    <p class="text-danger text-sm">{{ $message }}</p>
                @enderror

                <div class="bot">
                    <div class="button-wrap">
                        <button type="submit"
                                class="subscribe-button tf-btn animate-btn bg-dark-2 w-100">
                            Reset Password
                        </button>

                        <button type="button"
                                data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Reset pass -->
@if ($errors->has('email'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new bootstrap.Offcanvas(
            document.getElementById('resetPass')
        ).show();
    });
</script>
@endif
