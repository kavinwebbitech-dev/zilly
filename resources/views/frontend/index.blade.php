@extends('frontend.layouts.app')
@section('content')
    <style>
        .split-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* two equal columns */
            gap: 20px;
            align-items: stretch;
        }

        .media-box {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        /* Image container */
        .media-box .image {
            position: relative;
            z-index: 1;
        }

        /* Image */
        .media-img {
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
        }

        /* CONTENT OVER IMAGE */
        .media-box .content {
            position: absolute;
            inset: 0;
            /* top:0 right:0 bottom:0 left:0 */
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            pointer-events: none;
        }

        /* Allow button clicks */
        .media-box .box-btn {
            pointer-events: auto;
        }

        /* Optional: dark overlay for better text visibility */
        .media-box::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
            z-index: 1;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .split-layout {
                grid-template-columns: 1fr;
                /* stack on mobile */
            }
        }
    </style>
    <div class="flat-spacing-34 line-top">
        <!-- Grid Collection -->
        <div class="flat-spacing-34 line-top">
            <div class="container-full">
                <div class="split-layout wow fadeInUp">
                    <!-- Left Column -->
                    <div class="item1 s-cls radius-20 hover-img media-box">
                        <div class="image img-style h-100">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/Tote.png') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/Tote.png') }}" alt="banner"
                                class="lazyload media-img">
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

                    <!-- Right Column -->
                    <div class="item1 s-cls radius-20 hover-img media-box">
                        <div class="image img-style h-100">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/golden.png') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/golden.png') }}" alt="banner"
                                class="lazyload media-img">
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
                        @if (isset($products) && $products->count())
                            <div class="swiper-wrapper">
                                @foreach ($products as $product)
                                    @php
                                        $mainImage = $product->images->first();
                                        $hoverImage = $product->images->get(1);
                                    @endphp

                                    <div class="swiper-slide">
                                        <div class="card-product">
                                            <div class="card-product-wrapper asp-ratio-1">

                                                <a href="{{ route('product.details', $product->id) }}" class="product-img">
                                                    <img class="img-product lazyload"
                                                        src="{{ $mainImage ? asset('storage/' . $mainImage->image) : asset('asset/images/no-image.png') }}"
                                                        alt="{{ $product->name }}">

                                                    @if ($hoverImage)
                                                        <img class="img-hover lazyload"
                                                            src="{{ asset('storage/' . $hoverImage->image) }}"
                                                            alt="{{ $product->name }}">
                                                    @endif
                                                </a>

                                            </div>

                                            <div class="card-product-info text-center">
                                                <a href="{{ route('product.details', $product->id) }}"
                                                    class="name-product fw-medium">
                                                    {{ $product->name }}
                                                </a>

                                                <p class="price-wrap fw-medium">
                                                    <span class="price-new text-primary">
                                                        ₹{{ number_format($product->price, 2) }}
                                                    </span>

                                                    @if ($product->original_price)
                                                        <span class="price-old">
                                                            ₹{{ number_format($product->original_price, 2) }}
                                                        </span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif




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
                                <img src="{{ asset('asset\images\cls-categories\grid-cls\zilly\10.png') }}"
                                    alt="brand">
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
                                    <a href="{{ route('product') }}" class="image img-style d-block">
                                        <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/2.png') }}"
                                            data-src="{{ asset('asset/images/cls-categories/grid-cls/zilly/2.png') }}"
                                            alt="Handbags" class="lazyload">
                                    </a>
                                    <div class="cls-btn text-center">
                                        <a href="{{ route('product') }}"
                                            class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                            Classic Handbags <i class="icon icon-arrow-top-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="wg-cls style-abs asp-1 hover-img">
                                    <a href="{{ route('product') }}" class="image img-style d-block">
                                        <img src="{{ asset('asset\images\cls-categories\grid-cls\zilly\5.png') }}"
                                            data-src="{{ asset('asset\images\cls-categories\grid-cls\zilly\5.png') }}"
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
                                        <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/8.png') }}"
                                            data-src="{{ asset('asset/images/cls-categories/grid-cls/zilly/8.png') }}"
                                            alt="Office Bags" class="lazyload">
                                    </a>
                                    <div class="cls-btn text-center">
                                        <a href="{{ route('product') }}"
                                            class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
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
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="banner-lookbook split-layout">

                    <!-- COLUMN 1 : VIDEO -->
                    <div class="media-box">
                        <video autoplay muted loop playsinline preload="auto" class="media-video">
                            <source src="{{ asset('asset/video/1.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                    <!-- COLUMN 2 : VIDEO -->
                    <div class="media-box">
                        <video autoplay muted loop playsinline preload="auto" class="media-video">
                            <source src="{{ asset('asset/video/2.mp4') }}" type="video/mp4">
                        </video>
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
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/6.png') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Arjun K.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}"
                                                    class="link name-item text-md fw-medium">
                                                    Premium Office Laptop Bag
                                                </a>
                                                <p class="price text-md fw-medium">₹999</p>
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
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/9.png') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Sneha R.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}"
                                                    class="link name-item text-md fw-medium">
                                                    Classic Leather Handbag
                                                </a>
                                                <p class="price text-md fw-medium">₹1,799</p>
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
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/3.png') }}"
                                                    alt="">
                                            </div>
                                            <p class="name-author text-sm fw-medium">Rahul S.</p>
                                        </div>
                                    </div>

                                    <span class="br-line d-block"></span>

                                    <div class="bot">
                                        <div class="box-avt">
                                            <div class="avatar rounded-0">
                                                <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/3.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="box-price">
                                                <a href="{{ route('product-details') }}"
                                                    class="link name-item text-md fw-medium">
                                                    Urban Travel Backpack
                                                </a>
                                                <p class="price text-md fw-medium">₹2,199</p>
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
