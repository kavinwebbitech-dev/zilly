    {{-- <!-- register -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-register" id="register">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Create account</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="https://themesflat.co/html/vineta/account-page.html" class="form-login">
                    <div class="">
                        <fieldset class="mb_12">
                            <input type="text" placeholder="First name">
                        </fieldset>
                        <fieldset class="mb_12">
                            <input type="text" placeholder="Last name">
                        </fieldset>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Email*" required>
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <p class="text text-sm text-main-2">Sign up for early Sale access plus tailored new
                            arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Sign
                                up</button>
                            <button type="button" data-bs-target="#login" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /register --> --}}

    <!-- Register Offcanvas -->
<div class="offcanvas offcanvas-end popup-style-1 popup-register" id="register">
    <div class="canvas-wrapper">
        <div class="canvas-header popup-header">
            <span class="title">Create account</span>
            <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="canvas-body popup-inner">

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="form-login">
                @csrf

                <fieldset class="mb_12">
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Full name*"
                           required>
                </fieldset>

                <fieldset class="email mb_12">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email*"
                           required>
                </fieldset>

                <fieldset class="password mb_12">
                    <input type="password"
                           name="password"
                           placeholder="Password*"
                           required>
                </fieldset>

                <fieldset class="password mb_12">
                    <input type="password"
                           name="password_confirmation"
                           placeholder="Confirm password*"
                           required>
                </fieldset>

                <div class="bot">
                    <p class="text text-sm text-main-2">
                        Sign up for early Sale access plus tailored new arrivals, trends and promotions.
                    </p>

                    <div class="button-wrap">
                        <button type="submit"
                                class="subscribe-button tf-btn animate-btn bg-dark-2 w-100">
                            Sign up
                        </button>

                        <button type="button"
                                data-bs-target="#login"
                                data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100 mt-2">
                            Sign in
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /Register -->
