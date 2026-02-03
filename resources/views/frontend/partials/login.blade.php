<!-- Login Offcanvas -->
<div class="offcanvas offcanvas-end popup-style-1 popup-login" id="login">
    <div class="canvas-wrapper">
        <div class="canvas-header popup-header">
            <span class="title">
                @auth
                    My Account
                @else
                    Log in
                @endauth
            </span>
            <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="canvas-body popup-inner">

            {{-- ================= LOGGED IN VIEW ================= --}}
            @auth
                <div class="text-center">
                    <h5 class="mb-2">Welcome To Zilly</h5>

                    <p class="mb-1"><strong>{{ auth()->user()->name }}</strong></p>
                    <p class="text-muted mb-3">{{ auth()->user()->email }}</p>

                    <a href="{{ route('myorders') }}" class="tf-btn bg-dark-2 w-100 mb-2">
                        My Orders
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="tf-btn btn-out-line-dark2 w-100">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth


            {{-- ================= GUEST (LOGIN FORM) ================= --}}
            @guest

                @if (session('error'))
                    <div class="alert alert-danger mb-3">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="form-login">
                    @csrf

                    <fieldset class="email mb_12">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email*" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </fieldset>

                    <fieldset class="password mb_12">
                        <input type="password" name="password" placeholder="Password*" required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </fieldset>

                    <!-- Forgot password -->
                    <div class="text-end mb-3">
                        <a href="javascript:void(0)" onclick="openResetPass()" class="text-sm text-decoration-underline">
                            Forgot password?
                        </a>
                    </div>
                    <script>
                        function openResetPass() {
                            const login = bootstrap.Offcanvas.getInstance(document.getElementById('login'));
                            if (login) {
                                login.hide();
                            }

                            setTimeout(() => {
                                const reset = new bootstrap.Offcanvas(document.getElementById('resetPass'));
                                reset.show();
                            }, 300);
                        }
                    </script>


                    <div class="bot mt-3">

                        <!-- Sign in + Register -->
                        <div class="d-flex gap-2 mb-3">
                            <button type="submit" class="subscribe-button tf-btn animate-btn bg-dark-2 flex-grow-1">
                                Sign in
                            </button>

                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#register"
                                data-bs-dismiss="offcanvas" class="tf-btn btn-out-line-dark2 flex-grow-1">
                                Create an account
                            </button>
                        </div>

                        <!-- Google Login -->
                        <a href="{{ route('google.login') }}"
                            class="tf-btn btn-out-line-dark2 w-100 d-flex align-items-center justify-content-center gap-2 google-btn">
                            <svg class="icon" width="22" height="22"></svg>
                            <span>Continue with Google</span>
                        </a>
                    </div>
                </form>
            @endguest

        </div>
    </div>
</div>
<!-- /Login -->
<!-- Reset Password Offcanvas -->
