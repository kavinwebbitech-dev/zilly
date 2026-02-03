@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">

        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">My Account</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">My Account</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Main Content -->
        <div class="flat-spacing-13">
            <div class="container-7">

                <!-- sidebar-account -->
                <div class="btn-sidebar-mb d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount">
                        <i class="icon icon-sidebar"></i>
                    </button>
                </div>
                <!-- /sidebar-account -->

                <!-- Section-account -->
                <div class="main-content-account">
                    <div class="sidebar-account-wrap sidebar-content-wrap sticky-top d-lg-block d-none">
                        <ul class="my-account-nav">
                            <li>
                                <a href="account-page.php"
                                    class="text-sm link fw-medium my-account-nav-item active">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-orders.php" class="text-sm link fw-medium my-account-nav-item">My
                                    Orders</a>
                            </li>
                            <li>
                                <a href="wish-list.php" class="text-sm link fw-medium my-account-nav-item">My Wishlist</a>
                            </li>
                            <li>
                                <a href="account-addresses.php"
                                    class="text-sm link fw-medium my-account-nav-item">Addresses</a>
                            </li>
                            <li>
                                <a href="account-details.php" class="text-sm link fw-medium my-account-nav-item">Account
                                    Details</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="text-sm link fw-medium my-account-nav-item">Log Out</a>
                            </li>
                        </ul>
                    </div>

                    <div class="my-acount-content account-dashboard">
                        <div class="box-account-title">
                            <p class="hello-name display-sm fw-medium">
                                Hello, Welcome to Zilly!
                                <span>(not you?</span>
                                <a href="{{ route('logout') }}" class="text-decoration-underline link">Log Out</a>
                                <span>)</span>
                            </p>

                            <p class="notice text-sm">
                                Manage your Zilly account with ease. Track
                                <a href="account-orders.php" class="text-primary text-decoration-underline">your recent
                                    orders</a>,
                                revisit
                                <a href="wish-list.php" class="text-primary text-decoration-underline">your wishlist</a>,
                                or explore
                                <a href="shop-default.php" class="text-primary text-decoration-underline">our latest
                                    collections</a>.
                            </p>
                        </div>

                        <div class="content-account">
                            <ul class="box-check-list flex-sm-nowrap">
                                <li>
                                    <a href="account-orders.php" class="box-check text-center">
                                        <div class="icon">
                                            <i class="icon-order"></i>
                                            <span class="count-number text-sm text-white fw-medium">2</span>
                                        </div>
                                        <div class="text">
                                            <div class="link name-type text-xl fw-medium">Orders</div>
                                            <p class="sub-type text-sm">
                                                View and track your Zilly purchases
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="wish-list.php" class="box-check text-center">
                                        <div class="icon">
                                            <i class="icon-heart"></i>
                                            <span class="count-number text-sm text-white fw-medium">3</span>
                                        </div>
                                        <div class="text">
                                            <div class="link name-type text-xl fw-medium">Wishlist</div>
                                            <p class="sub-type text-sm">
                                                Your saved Zilly favourites
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Banner 1 -->
                            <div class="banner-account">
                                <div class="image">
                                    <img src="images/banner/account-1.jpg" data-src="images/banner/account-1.jpg"
                                        alt="Zilly Free Shipping" class="lazyload">
                                </div>
                                <div class="banner-content-right">
                                    <div class="banner-title">
                                        <p class="display-md fw-medium">
                                            Free Shipping
                                        </p>
                                        <p class="text-md">
                                            On all orders above ₹1,999
                                        </p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="shop-default.php" class="tf-btn animate-btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner 2 -->
                            <div class="banner-account banner-acc-countdown bg-linear d-flex align-items-center">
                                <div class="banner-content-left">
                                    <div class="banner-title">
                                        <p class="sub text-md fw-medium">
                                            ZILLY FESTIVE SALE
                                        </p>
                                        <p class="display-xl fw-medium">
                                            UP TO 50% OFF
                                        </p>
                                        <p class="sub text-md fw-medium">
                                            USE CODE: ZILLY50
                                        </p>
                                    </div>
                                    <div class="banner-btn">
                                        <a href="shop-default.php" class="tf-btn btn-white animate-btn animate-dark">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>

                                <div class="banner-countdown">
                                    <div class="wg-countdown-2">
                                        <span class="js-countdown" data-timer="46556"
                                            data-labels="Days,Hours,Mins,Secs"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Account -->
            </div>
        </div>

        <!-- sidebar account-->
        <div class="offcanvas offcanvas-start canvas-sidebar" id="mbAccount">
            <div class="canvas-wrapper">
                <div class="canvas-header">
                    <span class="title">SIDEBAR ACCOUNT</span>
                    <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="canvas-body">
                    <div class="sidebar-account-wrap sidebar-mobile-append"></div>
                </div>
            </div>
        </div>
        <!-- End sidebar account -->

    </div>




    <script src="js/main.js"></script>
    <script src="js/sibforms.js" defer></script>
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
@endsection
