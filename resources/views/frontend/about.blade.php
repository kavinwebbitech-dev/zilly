@extends('frontend.layouts.app')
@section('content')
    <section class="tf-page-title">
        <div class="container">
            <div class="box-title text-center">
                <h4 class="title">About Us</h4>
                <div class="breadcrumb-list">
                    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                    <div class="breadcrumb-item dot"><span></span></div>
                    <div class="breadcrumb-item current">About Us</div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-content">
        <section class="flat-spacing-3 pb-0">
            <div class="container">
                <div class="flat-title-2 d-xl-flex justify-content-xl-between">
                    <div class="box-title">
                        <p class="display-lg-2 fw-medium">
                            Bags for Your Outfit
                        </p>
                        <p class="text-xl">
                            Designer Handbags Rooted in Indian Artistry
                        </p>
                    </div>
                    <div class="box-text">
                        <p class="text-md">
                            At <span class="fw-medium">Zilly</span>, every bag is a celebration of heritage and conscious
                            luxury.
                            <br class="d-none d-xl-block">
                            Inspired by the colours of Kanchipuram pattu sarees and the soul of Tamil Nadu, <br
                                class="d-none d-xl-block">
                            our handcrafted, vegan designs blend timeless tradition with modern elegance— <br
                                class="d-none d-xl-block">
                            thoughtfully created to complement your outfit and elevate everyday living.
                        </p>
                    </div>
                </div>

                <div class="image radius-16 overflow-hidden banner-about">
                    <img src="{{ asset('asset/images/cls-categories/grid-cls/two.png') }}"
                        data-src="{{ asset('asset/images/cls-categories/grid-cls/two.png') }}" alt="Zilly Designer Vegan Handbags"
                        class="w-100 h-100 object-fit-cover lazyload">
                </div>
            </div>
        </section>


        <!-- Why Choose -->
        <section class="flat-spacing-3">
            <div class="container">
                <div class="flat-title text-center">
                    <p class="display-md-2 fw-medium">
                        Why Choose Zilly
                    </p>
                    <p class="text-md text-main">
                        Zilly handbags are thoughtfully created where heritage meets modern design.
                        Every piece reflects conscious craftsmanship, cultural depth, and effortless elegance—
                        designed to complement your outfit and your values.
                    </p>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <ul class="list-esd d-md-flex flex-md-column justify-content-md-center h-100">
                            <li class="item">
                                <h6>
                                    Handcrafted with Purpose
                                </h6>
                                <p class="text-md text-main">
                                    Each Zilly bag is carefully handcrafted using cruelty-free, vegan materials,
                                    inspired by the rich artistry of India—ensuring refined finishes, durability,
                                    and a story woven into every detail.
                                </p>
                            </li>

                            <li class="item">
                                <h6>
                                    Designed to Complement Your Outfit
                                </h6>
                                <p class="text-md text-main">
                                    From elegant handbags to versatile everyday styles,
                                    our designs are created to pair effortlessly with your wardrobe—
                                    adding femininity, confidence, and timeless charm.
                                </p>
                            </li>

                            <li class="item">
                                <h6>
                                    Rooted in Heritage, Made for Today
                                </h6>
                                <p class="text-md text-main">
                                    Inspired by Tamil Nadu’s cultural richness and the colours of Kanchipuram pattu sarees,
                                    Zilly blends tradition with modern lifestyles—creating bags that feel meaningful,
                                    responsible, and enduring.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-5 col-md-6">
                        <div class="image radius-16 overflow-hidden w-100 h-100">
                            <img src="{{ asset('asset/images/cls-categories/grid-cls/zilly/10.png') }}"
                                data-src="{{ asset('asset/images/cls-categories/grid-cls/zilly/10.png') }}"
                                alt="Zilly Vegan Handcrafted Bags" class="lazyload w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Why Choose -->

        <!-- ================= ZILLY HERITAGE STORY ================= -->
        <section class="zilly-heritage-section">
            <div class="zilly-heritage-overlay"></div>

            <div class="container">
                <div class="zilly-heritage-wrapper">

                    <!-- Left: Brand Story -->
                    <div class="zilly-heritage-story">
                        <span class="zilly-heritage-tag">Brand Story</span>

                        <h2 class="zilly-heritage-title">
                            Luxury, Rooted in Trust
                        </h2>

                        <p class="zilly-heritage-text">
                            “Founded on intuition and trust, Zilly was created with one simple belief—
                            <strong>Every Zilly bag is made to be trusted, worn effortlessly,
                                and loved beyond trends.</strong>”
                        </p>
                    </div>

                    <!-- Right: Founder Note Card -->
                    <div class="zilly-founder-card">
                        <span class="zilly-heritage-tag">Founder’s Note</span>

                        <p class="zilly-founder-text">
                            I built this brand from a quiet belief — that our roots are our greatest luxury.
                            Why look outward, when our own land holds stories of heritage,
                            craftsmanship, and soul?
                            <br><br>
                            In a world chasing international labels that often cost our planet
                            and its animals dearly, I chose a different path —
                            one that honours origin, respects life, and sustainability.
                            <br><br>
                            This brand is my promise to preserve where we come from,
                            and to prove that true luxury is not imported —
                            <strong>it is inherited.</strong>
                        </p>

                        <div class="zilly-founder-sign">
                            — HAZIL
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================= /ZILLY HERITAGE STORY ================= -->


        <!-- ================= STYLE CURATED SECTION ================= -->
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="flat-title-2 d-xl-flex justify-content-xl-between">
                    <div class="box-title">
                        <p class="display-md-2 fw-medium">
                            Bags Curated for Your Outfit
                        </p>
                        <p class="text-xl">
                            Designed with Heritage, Styled for Today
                        </p>
                    </div>
                    <div class="box-text">
                        <p class="text-md">
                            At <span class="fw-medium">Zilly</span>, every bag is thoughtfully designed to balance culture
                            and
                            contemporary living. <br class="d-none d-xl-block">
                            Inspired by Indian artistry and handcrafted with care, our vegan collections are created to <br
                                class="d-none d-xl-block">
                            complement your outfit—bringing confidence, femininity, and ease to every moment.
                        </p>
                    </div>
                </div>

                <div dir="ltr" class="swiper tf-swiper"
                    data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 12,
            "speed": 800,
            "preventInteractionOnTransition": false,
            "touchStartPreventDefault": false,
            "pagination": { "el": ".sw-pagination-iconbox", "clickable": true },
            "breakpoints": {
                "575": { "slidesPerView": 2, "spaceBetween": 12 },
                "992": { "slidesPerView": 3, "spaceBetween": 24 }
            }
        }'>
                    <div class="swiper-wrapper">

                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-precision"></i>
                                </div>
                                <div class="content">
                                    <h6>Handcrafted with Care</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        Each Zilly bag is carefully handcrafted using cruelty-free materials,
                                        inspired by traditional Indian craftsmanship and finished with precision and
                                        purpose.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-elegance"></i>
                                </div>
                                <div class="content">
                                    <h6>Effortless Everyday Elegance</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        Designed to enhance your outfit, Zilly bags blend timeless elegance with modern
                                        silhouettes—
                                        perfect for workdays, weekends, and everything in between.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-fashion-body"></i>
                                </div>
                                <div class="content">
                                    <h6>Created for Every Moment</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        From statement handbags to versatile everyday styles,
                                        our collections adapt seamlessly to your lifestyle—travel, work, and beyond.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-iconbox justify-content-center"></div>
                </div>
            </div>
        </section>

        <!-- ================= TESTIMONIAL SECTION ================= -->
        <section class="flat-spacing-13 pt-0">
            <div class="container">
                <div class="box-testimonial-quote text-center">
                    <div class="list-star-default justify-content-center">
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                    </div>

                    <p class="text-xl lh-xl-32">
                        "Zilly bags exceeded my expectations. The quality, design, and fast delivery made the entire
                        shopping experience seamless. I’ve found my go-to brand for everyday bags!"
                    </p>

                    <div class="box-author">
                        <div class="avt">
                            <img src="{{ asset('asset/images/testimonial/tes-about.jpg') }}" alt="Zilly Customer Review">
                        </div>
                        <p class="text-md lh-xl-26 fw-medium">
                            Zilly Customer
                        </p>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
