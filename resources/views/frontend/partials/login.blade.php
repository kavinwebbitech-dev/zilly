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

                    <p class="mb-1">
                        <strong>{{ auth()->user()->name }}</strong>
                    </p>
                    <p class="text-muted mb-3">
                        {{ auth()->user()->email }}
                    </p>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="tf-btn bg-dark-2 w-100">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth


            {{-- ================= GUEST (LOGIN FORM) ================= --}}
            @guest

                {{-- Show error --}}
                @if (session('error'))
                    <div class="alert alert-danger mb-3">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="form-login">
                    @csrf

                    <fieldset class="email mb_12">
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Email*"
                               required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </fieldset>

                    <fieldset class="password mb_12">
                        <input type="password"
                               name="password"
                               placeholder="Password*"
                               required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </fieldset>

                    <div class="bot">
                        <div class="button-wrap mt-3">
                            <button type="submit"
                                    class="subscribe-button tf-btn animate-btn bg-dark-2 w-100">
                                Sign in
                            </button>

                            <button type="button"
                                    data-bs-target="#register"
                                    data-bs-toggle="offcanvas"
                                    class="tf-btn btn-out-line-dark2 w-100 mt-2">
                                Create an account
                            </button>
                        </div>
                    </div>
                </form>

            @endguest

        </div>
    </div>
</div>
<!-- /Login -->
