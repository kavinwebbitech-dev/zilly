<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.headerlink')
</head>

<body>

    @include('frontend.partials.preload')

    <div id="wrapper">

        @include('frontend.partials.topbar')

        @include('frontend.partials.header')

        {{-- Page Content --}}
        @yield('content')

        @include('frontend.partials.footer')

    </div>
    @if (session()->has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: @json(session('success')),
                    timer: 2500,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: @json(session('error')),
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        </script>
    @endif
    @include('frontend.partials.mobilemenu')
    @include('frontend.partials.toolbar')
    @include('frontend.partials.login')
    @include('frontend.partials.reset-password')
    @include('frontend.partials.register')
    @include('frontend.partials.searchmodal')
    {{-- @include('frontend.partials.return-and-refund') --}}
    @include('frontend.partials.compare')
    {{-- @include('frontend.partials.product') --}}
    {{-- @include('frontend.partials.scripts') --}}

    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/carousel.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/js/lazysize.min.js') }}"></script>
    <script src="{{ asset('asset/js/count-down.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/multiple-modal.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') --}}
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="{{ asset('asset/js/sibforms.js') }}" defer></script>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('show_login_popup'))
                const loginOffcanvas = new bootstrap.Offcanvas(document.getElementById('login'));
                loginOffcanvas.show();
            @endif
        });
    </script>

</body>

</html>
