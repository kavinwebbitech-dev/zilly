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

    @include('frontend.partials.mobilemenu')
    @include('frontend.partials.toolbar')
    @include('frontend.partials.login')
    @include('frontend.partials.register')
    @include('frontend.partials.searchmodal')
    {{-- @include('frontend.partials.shoppingcart') --}}
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

</body>

</html>
