@extends('frontend.layouts.app')

@section('content')
    <div class="flat-spacing-34 line-top">

        <!-- RTL -->
        <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-btn"><span>RTL</span></a>
        <!-- /RTL  -->

        <!-- Scroll Top -->
        <button id="goTop">
            <span class="border-progress"></span>
            <span class="icon icon-arrow-right"></span>
        </button>

        <!-- Grid Collection -->
        <div class="flat-spacing-34 line-top">
            <div class="container-full">
                <div class="grid-cls grid-cls-v6 wow fadeInUp">
                    <div class="item1 s-cls radius-20 style-absolute abs-top-center hover-img">
                        <div class="image img-style h-100">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/banner1.webp') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/banner1.webp') }}" alt="banner"
                                class="lazyload">
                        </div>
                        <div class="content">
                            <div class="box-title">
                                <div class="text-white display-lg">
                                    New Arrivals
                                </div>
                            </div>
                            <div class="box-btn">
                                <a href="{{ route('product') }}" class="tf-btn btn-white hover-primary">
                                    View Collection
                                    <i class="icon icon-arrow-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item2 s-cls radius-20 style-absolute abs-top-center hover-img">
                        <div class="image img-style">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/banner3.webp') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/banner3.webp') }}" alt="banner"
                                class="lazyload">
                        </div>
                        <div class="content">
                            <div class="box-title">
                                <div class="text-white display-lg">
                                    Handbags
                                </div>
                            </div>
                            <div class="box-btn">
                                {{-- <a href="#"    --}}
                                <a href="{{ route('product') }}"
                                    class="d-flex align-items-center text-white text-md fw-medium gap-10 link">
                                    <span class="text-transform-none">
                                        Explore Now
                                    </span>
                                    <i class="icon-arrow-top-left fs-8"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item3 s-cls radius-20 style-absolute abs-top-center hover-img">
                        <div class="image img-style">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/banner2.jpg') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/banner2.jpg') }}" alt="banner"
                                class="lazyload">
                        </div>
                        <div class="content">
                            <div class="box-title">
                                <div class="text-white display-lg">
                                    Backpacks
                                </div>
                            </div>
                            <div class="box-btn">
                                <a href="{{ route('product') }}"
                                    class="d-flex align-items-center text-white text-md fw-medium gap-10 link">
                                    <span class="text-transform-none">
                                        Explore Now
                                    </span>
                                    <i class="icon-arrow-top-left fs-8"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item4 s-cls radius-20 style-absolute abs-top-center hover-img">
                        <div class="image img-style">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/banner4.jpg') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/banner4.jpg') }}" alt="banner"
                                class="lazyload">
                        </div>
                        <div class="content">
                            <div class="box-title">
                                <div class="text-white display-lg">
                                    Signature Handbags
                                </div>
                            </div>
                            <div class="box-btn">
                                <a href="{{ route('product') }}"
                                    class="d-flex align-items-center text-white text-md fw-medium gap-10 link">
                                    <span class="text-transform-none">
                                        Explore Now
                                    </span>
                                    <i class="icon-arrow-top-left fs-8"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Grid Collection -->

        <!-- Feature Collection -->
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title font-7">Today’s Picks</h4>
                    <p class="desc text-main font-13 fs-16">Explore our most popular pieces that customers can't get
                        enough of</p>
                </div>
                <div class="fl-control-sw2 wrap-pos-nav sw-over-product wow fadeInUp">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                        data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "pagination": { "el": ".sw-pagination-product", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                        <div class="swiper-wrapper">

                            <!-- PRODUCT 1 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                alt="Product 1">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                alt="Product 1 Hover">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#quickAdd" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Quick Add</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="hover-tooltip tooltip-left box-icon quickview">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-product-info text-center">
                                       <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            One</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$120.00</span>
                                            <span class="price-old">$150.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 2 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                                <a href="{{ route('product-details') }}" class="product-img">
                                                <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                alt="Product 2">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                alt="Product 2 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Two</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$125.00</span>
                                            <span class="price-old">$155.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 3 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                alt="Product 3">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                alt="Product 3 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Three</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$130.00</span>
                                            <span class="price-old">$160.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 4 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                alt="Product 4">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product5.jpg') }}"
                                                alt="Product 4 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Four</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$135.00</span>
                                            <span class="price-old">$165.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 5 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product5.jpg') }}"
                                                alt="Product 5">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                alt="Product 5 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Five</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$140.00</span>
                                            <span class="price-old">$170.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 6 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                alt="Product 6">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                alt="Product 6 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Six</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$145.00</span>
                                            <span class="price-old">$175.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCT 7 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper asp-ratio-1">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product lazyload"
                                                src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                alt="Product 7">
                                            <img class="img-hover lazyload"
                                                src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                alt="Product 7 Hover">
                                        </a>
                                    </div>
                                    <div class="card-product-info text-center">
                                        <a href="{{ route('product-details') }}" class="name-product fw-medium">Product
                                            Seven</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new text-primary">$150.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-product justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Feature Collection -->

        <!-- Brand -->
        <div class="">
            <div class="infiniteslide tf-brand style-2" data-clone="2" data-style="left" data-speed="80">
                <div class="brand-item">
                    <p class="display-2xl fw-semibold text-grey-7">Free Shipping</p>
                </div>
                <div class="brand-item">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42 18.9H26.04L37.38 7.56L34.44 4.62L23.1 15.96V0H18.9V15.96L7.56 4.62L4.62 7.56L15.96 18.9H0V23.1H15.96L4.62 34.44L7.56 37.38L18.9 26.04V42H23.1V26.04L34.44 37.38L37.38 34.44L26.04 23.1H42V18.9Z"
                            fill="#7B53FF" />
                    </svg>
                </div>
                <div class="brand-item">
                    <p class="display-2xl fw-semibold text-clip-2">Shop Now, Pay Later</p>
                </div>
                <div class="brand-item">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42 18.9H26.04L37.38 7.56L34.44 4.62L23.1 15.96V0H18.9V15.96L7.56 4.62L4.62 7.56L15.96 18.9H0V23.1H15.96L4.62 34.44L7.56 37.38L18.9 26.04V42H23.1V26.04L34.44 37.38L37.38 34.44L26.04 23.1H42V18.9Z"
                            fill="#7B53FF" />
                    </svg>
                </div>
                <div class="brand-item">
                    <p class="display-2xl fw-semibold text-grey-7">Free Shipping</p>
                </div>
                <div class="brand-item">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42 18.9H26.04L37.38 7.56L34.44 4.62L23.1 15.96V0H18.9V15.96L7.56 4.62L4.62 7.56L15.96 18.9H0V23.1H15.96L4.62 34.44L7.56 37.38L18.9 26.04V42H23.1V26.04L34.44 37.38L37.38 34.44L26.04 23.1H42V18.9Z"
                            fill="#7B53FF" />
                    </svg>
                </div>
                <div class="brand-item">
                    <p class="display-2xl fw-semibold text-clip-2">Shop Now, Pay Later</p>
                </div>
                <div class="brand-item">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42 18.9H26.04L37.38 7.56L34.44 4.62L23.1 15.96V0H18.9V15.96L7.56 4.62L4.62 7.56L15.96 18.9H0V23.1H15.96L4.62 34.44L7.56 37.38L18.9 26.04V42H23.1V26.04L34.44 37.38L37.38 34.44L26.04 23.1H42V18.9Z"
                            fill="#7B53FF" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- /Brand -->
        <!-- Brand -->
        <section class="flat-spacing-3 d-none">
            <div class="container">
                <div class="flat-title style-between align-items-end wow fadeInUp">
                    <div class="box-title">
                        <h4 class="title">Shop by Brands</h4>
                        <p class="desc text-main text-md">
                            Explore our most popular pieces that customers can't get enough of
                        </p>
                    </div>
                    <div class="box-nav-swiper style-2 d-none d-xl-flex">
                        <div class="swiper-button-prev nav-swiper nav-prev-brand relative"></div>
                        <div class="swiper-button-next nav-swiper nav-next-brand relative"></div>
                    </div>
                </div>
                <div dir="ltr" class="wow fadeInUp swiper tf-swiper sw-brand border-0"
                    data-swiper='{
                    "slidesPerView": 2,
                    "spaceBetween": 6,
                    "speed": 800,
                    "observer": true,
                    "slidesPerGroup": 2,
                    "pagination": { "el": ".sw-pagination-brand", "clickable": true },
                    "navigation": {
                        "clickable": true,
                        "nextEl": ".nav-next-brand",
                        "prevEl": ".nav-prev-brand"
                    },
                    "breakpoints": {
                    "575": { "slidesPerView": 3},
                    "991": { "slidesPerView": 4},
                    "1200": { "slidesPerView": 6}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/zara.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/bear.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/nike.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/asos.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/burberry.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 6 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/forever.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 7 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/zara.png') }}" alt="brand">
                            </div>
                        </div>
                        <!-- item 8 -->
                        <div class="swiper-slide">
                            <div class="brand-item line radius-8">
                                <img src="{{ asset('asset/images/brand/bear.png') }}" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex d-xl-none sw-dot-default sw-pagination-brand justify-content-center"></div>
            </div>
        </section>
        <!-- /Brand -->
        <!-- Collection -->
        <div class="flat-spacing-3 ">
            <div class="container">
                <div class="fl-control-sw2">
                    <div dir="ltr" class="swiper tf-swiper wow fadeInUp"
                        data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-cls",
                            "prevEl": ".nav-prev-cls"
                        },
                        "pagination": { "el": ".sw-pagination-cls", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 12 ,"slidesPerGroup": 2 },
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                            <div class="swiper-slide">
                                <div class="wg-cls style-abs asp-1 hover-img">
                                    <a href="product.php" class="image img-style d-block">
                                        <img src="{{ asset('asset/images/products/bags/newproduct1.jpg') }}"
                                            data-src="{{ asset('asset/images/products/bags/newproduct1.jpg') }}"
                                            alt="Handbags" class="lazyload">
                                    </a>
                                    <div class="cls-btn text-center">
                                        <a href="product.php" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                            Classic Handbags <i class="icon icon-arrow-top-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="wg-cls style-abs asp-1 hover-img">
                                    <a href="{{ route('product') }}" class="image img-style d-block">
                                        <img src="{{ asset('asset/images/products/bags/newproduct2.jpg') }}"
                                            data-src="{{ asset('asset/images/products/bags/newproduct2.jpg') }}"
                                            alt="Backpacks" class="lazyload">
                                    </a>
                                    <div class="cls-btn text-center">
                                        <a href="{{ route('product') }}"
                                            class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                            Modern Backpacks <i class="icon icon-arrow-top-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="wg-cls style-abs asp-1 hover-img">
                                    <a href="{{ route('product') }}" class="image img-style d-block">
                                        <img src="{{ asset('asset/images/products/bags/newproduct3.jpg') }}"
                                            data-src="{{ asset('asset/images/products/bags/newproduct3.jpg') }}"
                                            alt="Office Bags" class="lazyload">
                                    </a>
                                    <div class="cls-btn text-center">
                                        <a href="product.php" class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                            Office Bags <i class="icon icon-arrow-top-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-cls justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Collection -->
        <!-- Banner Lookbook -->
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="banner-lookbook">
                    <img class="img-banner" src="{{ asset('asset/images/banner/bannernew.jpg') }}"
                        data-src="{{ asset('asset/images/banner/bannernew.jpg') }}" alt="Bag Lookbook">

                    <!-- LOOKBOOK ITEM 1 -->
                    <div class="lookbook-item position1">
                        <div class="dropdown dropup-center dropdown-custom">
                            <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <span></span>
                            </div>

                            <div class="dropdown-menu">
                                <div class="loobook-product style-row">
                                    <div class="img-style">
                                        <img src="{{ asset('asset/images/products/bags/newproduct3.jpg') }}"
                                            alt="Premium Office Laptop Bag">
                                    </div>

                                    <div class="content">
                                        <div class="info">
                                            <a href="product-detail.php" class="text-md fw-medium text-line-clamp-1 link">
                                                Premium Office Laptop Bag
                                            </a>

                                            <p class="price-wrap text-md fw-medium">
                                                <span class="price-new">₹3,999<span class="zero">.00</span></span>
                                                <span class="price-old">₹5,499<span class="zero">.00</span></span>
                                            </p>
                                        </div>

                                        <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook hover-tooltip">
                                            <i class="icon-view"></i>
                                            <span class="tooltip">Quick view</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LOOKBOOK ITEM 2 -->
                    <div class="lookbook-item position2">
                        <div class="dropdown dropup-center dropdown-custom">
                            <div role="dialog" class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <span></span>
                            </div>

                            <div class="dropdown-menu">
                                <div class="loobook-product style-row">
                                    <div class="img-style">
                                        <img src="{{ asset('asset/images/products/bags/newproduct1.jpg') }}"
                                            alt="Classic Leather Handbag">
                                    </div>

                                    <div class="content">
                                        <div class="info">
                                            <a href="product-detail.php" class="text-md fw-medium text-line-clamp-1 link">
                                                Classic Leather Handbag
                                            </a>

                                            <p class="price-wrap text-md fw-medium">
                                                <span class="price-new">₹2,799<span class="zero">.00</span></span>
                                                <span class="price-old">₹3,999<span class="zero">.00</span></span>
                                            </p>
                                        </div>

                                        <a href="#quickView" data-bs-toggle="modal" class="btn-lookbook hover-tooltip">
                                            <i class="icon-view"></i>
                                            <span class="tooltip">Quick view</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Lookbook -->
        <!-- Testimonial -->
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Customer Favorites</h4>
                    <p class="desc text-main text-md">
                        Loved by customers for quality, style, and everyday comfort.
                    </p>
                </div>

                <div dir="ltr" class="swiper tf-swiper"
                    data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 12,
            "speed": 800,
            "observer": true,
            "observeParents": true,
            "slidesPerGroup": 1,
            "navigation": {
                "clickable": true,
                "nextEl": ".nav-next-testimonial",
                "prevEl": ".nav-prev-testimonial"
            },
            "pagination": { "el": ".sw-pagination-testimonial", "clickable": true },
            "breakpoints": {
                "577": { "slidesPerView": 2, "spaceBetween": 12, "slidesPerGroup": 2 },
                "1200": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 3 }
            }
        }'>

                    <div class="swiper-wrapper wow fadeInUp">

                        <!-- ITEM 1 -->
                        <div class="swiper-slide">
                            <div class="wg-testimonial style-2 type-2">
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                        </div>

                                        <p class="text-sm fw-medium">Perfect Office Companion</p>
                                        <p class="text-review text-md text-main">
                                            This laptop bag looks premium and keeps everything well organized.
                                            Ideal for daily office use.
                                        </p>

                                        <div class="box-author">
                                            <div class="avt">
                                                <img src="{{ asset('asset/images/testimonial/author/author-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Arjun K.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}" class="link name-item text-md fw-medium">
                                                    Premium Office Laptop Bag
                                                </a>
                                                <p class="price text-md fw-medium">₹3,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="swiper-slide">
                            <div class="wg-testimonial style-2 type-2">
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                        </div>

                                        <p class="text-sm fw-medium">Stylish & Spacious</p>
                                        <p class="text-review text-md text-main">
                                            Beautiful handbag with great finishing. Spacious enough for daily
                                            essentials.
                                        </p>

                                        <div class="box-author">
                                            <div class="avt">
                                                <img src="{{ asset('asset/images/testimonial/author/author-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Sneha R.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/products/bags/product5.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}" class="link name-item text-md fw-medium">
                                                    Classic Leather Handbag
                                                </a>
                                                <p class="price text-md fw-medium">₹2,799</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="swiper-slide">
                            <div class="wg-testimonial style-2 type-2">
                                <div class="content">
                                    <div class="content-top">
                                        <div class="list-star-default">
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                            <i class="icon-star text-green"></i>
                                        </div>

                                        <p class="text-sm fw-medium">Best Travel Backpack</p>
                                        <p class="text-review text-md text-main">
                                            Strong build quality and very comfortable to carry.
                                            Perfect for travel and weekend trips.
                                        </p>

                                        <div class="box-author">
                                            <div class="avt">
                                                <img src="{{ asset('asset/images/testimonial/author/author-3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Rahul S.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}" class="link name-item text-md fw-medium">
                                                    Urban Travel Backpack
                                                </a>
                                                <p class="price text-md fw-medium">₹3,199</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-testimonial justify-content-center">
                    </div>
                </div>
            </div>
        </section>
        <section class="flat-spacing-8 pt-0">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h3 class="title fw-semibold font-7 letter-0">Shop by @Zilly</h3>
                </div>
                <div dir="ltr" class="swiper tf-swiper"
                    data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 10,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "pagination": { "el": ".sw-pagination-gallery", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3},
                        "1200": { "slidesPerView": 5}
                        }
                    }'>
                    <div class="swiper-wrapper wow fadeInUp">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('asset/images/gallery/bags/bag1.jpg') }}"
                                        data-src="{{ asset('asset/images/gallery/bags/bag1.jpg') }}"
                                        alt="Women's Handbag" class="lazyload">
                                </div>
                                <a href="{{ route('product-details') }}" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>

                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('asset/images/gallery/bags/bag2.jpg') }}"
                                        data-src="{{ asset('asset/images/gallery/bags/bag2.jpg') }}"
                                        alt="Women's Shoulder Bag" class="lazyload">
                                </div>
                                <a href="{{ route('product-details') }}" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>

                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('asset/images/gallery/bags/bag3.jpg') }}"
                                        data-src="{{ asset('asset/images/gallery/bags/bag3.jpg') }}"
                                        alt="Women's Tote Bag" class="lazyload">
                                </div>
                                <a href="{{ route('product-details') }}" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>

                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('asset/images/gallery/bags/bag4.jpg') }}"
                                        data-src="{{ asset('asset/images/gallery/bags/bag4.jpg') }}"
                                        alt="Women's Crossbody Bag" class="lazyload">
                                </div>
                                <a href="{{ route('product-details') }}" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>

                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img hover-overlay">
                                <div class="image img-style">
                                    <img src="{{ asset('asset/images/gallery/bags/bag5.jpg') }}"
                                        data-src="{{ asset('asset/images/gallery/bags/bag5.jpg') }}"
                                        alt="Women's Evening Bag" class="lazyload">
                                </div>
                                <a href="{{ route('product-details') }}" class="box-icon hover-tooltip">
                                    <span class="icon icon-cart2"></span>
                                    <span class="tooltip">View Product</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <span class="d-flex d-xl-none sw-dot-default sw-pagination-gallery justify-content-center"></span>
                </div>
            </div>
        </section>
        <!-- /Shop Gram -->
        <!-- Icon box -->
        <div class="line-top flat-spacing-5">
            <div class="container">
                <div class="mw-1 mx-auto">
                    <div dir="ltr" class="swiper tf-swiper"
                        data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 12,
                            "speed": 800,
                            "preventInteractionOnTransition": false, 
                            "touchStartPreventDefault": false,
                            "pagination": { "el": ".sw-pagination-iconbox", "clickable": true },
                            "breakpoints": {
                                "575": { "slidesPerView": 2, "spaceBetween": 12, "slidesPerGroup": 2}, 
                                "768": { "slidesPerView": 3, "spaceBetween": 24, "slidesPerGroup": 2},
                                "1200": { "slidesPerView": 4, "spaceBetween": 42, "slidesPerGroup": 2}
                            }
                        }'>
                        <div class="swiper-wrapper wow fadeInUp">
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <div class="box-icon">
                                        <i class="icon icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title ">FREE DELIVERY</div>
                                        <p class="desc font-2">Enjoy free delivery on all orders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <div class="box-icon">
                                        <i class="icon icon-gift"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title ">GIFT PACKAGE</div>
                                        <p class="desc font-2">Perfectly packaged for gifting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <div class="box-icon">
                                        <i class="icon icon-return"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title ">EASY RETURNS</div>
                                        <p class="desc font-2">Within 14 days for a return</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <div class="box-icon">
                                        <i class="icon icon-support"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title ">24/7 PREMIUM SUPPORT</div>
                                        <p class="desc font-2">Outstanding premium support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-iconbox justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Icon box -->


        <!-- /register -->

        <!-- Reset pass -->
        <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
            <div class="canvas-wrapper">
                <div class="canvas-header popup-header">
                    <span class="title">Reset Your Password</span>
                    <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="canvas-body popup-inner">
                    <form action="#" class="form-login">
                        <div class="">
                            <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                                email to receive a link and securely reset it in just a few steps.</p>
                            <fieldset class="email mb_12">
                                <input type="email" placeholder="Enter Your Email*" required>
                            </fieldset>
                        </div>
                        <div class="bot">
                            <div class="button-wrap">
                                <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                    Password</button>
                                <button type="button" data-bs-dismiss="offcanvas"
                                    class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- quick add -->
        <div class="modal fade modalCentered popup-quickadd" id="quickAdd">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    <div class="main-product-quickadd card-product">
                        <div class="item-product-info">
                            <div class="product-img">
                                <img class="img-product lazyload"
                                    data-src="{{ asset('asset/images/products/footwear/product-2.jpg') }}"
                                    src="{{ asset('asset/images/products/footwear/product-2.jpg') }}"
                                    alt="image-product">
                            </div>
                            <div class="content-box">
                                <a href="{{ route('product-details') }}" class="name-product link text-lg">Nike Air Force 1
                                    '07</a>
                                <div class="price-show-badge">
                                    <div class="price-wrap">
                                        <span class="price-new">$3,000.00</span>
                                        <span class="price-old">$3,200.00</span>
                                    </div>
                                    <span class="on-sale-item">20% Off</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-product-variant">
                            <div class="quickadd-variant-color">
                                <div class="variant-label text-md">Color: <span class="variant-value">Black</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                        <span class="tooltip color-label">Black</span>
                                        <span class="swatch-value bg-dark"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('asset/images/products/footwear/product-2.jpg') }}"
                                            src="{{ asset('asset/images/products/footwear/product-2.jpg') }}"
                                            alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot line">
                                        <span class="tooltip color-label">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload"
                                            data-src="{{ asset('asset/images/products/footwear/product-1.jpg') }}"
                                            src="{{ asset('asset/images/products/footwear/product-1.jpg') }}"
                                            alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item-product-quantity">
                            <div class="label text-md">Quantity</div>
                            <div class="wg-quantity">
                                <button class="btn-quantity minus-btn">-</button>
                                <input class="quantity-product font-4" type="text" name="number" value="1">
                                <button class="btn-quantity plus-btn">+</button>
                            </div>
                        </div>
                        <div class="item-product-group-btn">
                            <a href="{{ route('shoppingCart') }}" data-bs-toggle="offcanvas" class="tf-btn animate-btn atc">Add to
                                cart</a>
                            <a href="{{ route('wish-list') }}" class="box-icon"><i class="icon icon-heart"></i></a>
                            <a href="javascript:void(0);" class="box-icon btn-compare"><i
                                    class="icon icon-compare"></i></a>
                            <a href="{{ route('shoppingCart') }}" class="tf-btn btn-primary animate-btn w-100">Buy It Now</a>
                        </div>
                        <a href="{{ route('checkout') }}" class="tf-btn btn-line-dark payment-link">More payment options</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick add -->
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('asset/js/carousel.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('asset/js/lazysize.min.js') }}"></script>
        <script src="{{ asset('asset/js/count-down.js') }}"></script>
        <script src="{{ asset('asset/js/wow.min.js') }}"></script>
        <script src="{{ asset('asset/js/multiple-modal.js') }}"></script>
        <script src="{{ asset('asset/js/infinityslide.js') }}"></script>
        <script src="{{ asset('asset/js/simpleParallaxVanilla.umd.js') }}"></script>
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
    </div>
@endsection
