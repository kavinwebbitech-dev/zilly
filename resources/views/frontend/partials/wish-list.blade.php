@extends('frontend.layouts.app')
@section('content')
    <!-- Title Page -->

    @php
        $wishlist = $wishlist ?? session()->get('wishlist', []);
    @endphp
    <section class="tf-page-title">
        <div class="container">
            <div class="box-title text-center">
                <h4 class="title">My Wishlist</h4>
                <div class="breadcrumb-list">
                    <a class="breadcrumb-item" href="index.php">Home</a>
                    <div class="breadcrumb-item dot"><span></span></div>
                    <div class="breadcrumb-item current">Wishlist</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Title Page -->

    <!-- Wish list -->
    <section class="flat-spacing-13">
        <div class="container">
            <div class="wrapper-wishlist tf-grid-layout tf-col-2 lg-col-3 xl-col-4">

                @php
                    $wishlist = session('wishlist', []);
                @endphp

                @forelse ($wishlist as $productId => $value)
                    @php
                        $product = \App\Models\Product::with('images')->find($productId);
                    @endphp

                    @if ($product)
                        <div class="card-product style-wishlist style-3 card-product-size" data-id="{{ $product->id }}">

                            <i class="icon icon-close wishlist" data-id="{{ $product->id }}"></i>
                            <div class="card-product-wrapper">
                                <a href="{{ route('product-details', $product->id) }}" class="product-img">
                                    @if ($product->images->count())
                                        <img class="img-product"
                                            src="{{ asset('storage/' . $product->images->first()->image) }}"
                                            alt="{{ $product->name }}">
                                    @else
                                        <img class="img-product" src="{{ asset('asset/images/no-image.png') }}"
                                            alt="No image">
                                    @endif

                                    {{-- HOVER IMAGE --}}
                                    @if ($product->images->count() > 1)
                                        <img class="img-hover" src="{{ asset('storage/' . $product->images[1]->image) }}">
                                    @endif
                                </a>

                                <ul class="list-product-btn">
                                    <li>
                                        <a href="{{ route('shoppingCart') }}" class="box-icon hover-tooltip">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-product-info">
                                <a href="{{ route('product-details', $product->id) }}"
                                    class="name-product link fw-medium text-md">
                                    {{ $product->name }}
                                </a>

                                <p class="price-wrap fw-medium">
                                    <span class="price-new">₹{{ number_format($product->price, 2) }}</span>
                                    @if ($product->original_price)
                                        <span class="price-old">₹{{ number_format($product->original_price, 2) }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="tf-wishlist-empty text-center">
                        <p class="text-md text-noti">No product were added to the wishlist.</p>
                        <a href="{{ route('product') }}" class="tf-btn animate-btn btn-back-shop">Back to Shopping</a>
                    </div>
                @endforelse


            </div>

        </div>
    </section>
    <!-- /Wish list-->

    <!-- Recently Viewed -->
    <section class="flat-spacing section-viewed pt-0">
        <div class="container">
            <div class="flat-title wow fadeInUp">
                <h4 class="title">Recently Viewed</h4>
            </div>
            <div class="fl-control-sw wrap-pos-nav sw-over-product wow fadeInUp">
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                    data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-viewed",
                            "prevEl": ".nav-prev-viewed"
                        },
                        "pagination": { "el": ".sw-pagination-viewed", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="card-product style-2 card-product-size">
                                <div class="card-product-wrapper">
                                    <a href="{{ route('product-details') }}" class="product-img">
                                        <img class="img-product lazyload"
                                            data-src="{{ asset('asset/images/products/fashion/product-5.jpg') }}"
                                            src="{{ asset('asset/images/products/fashion/product-5.jpg') }}"
                                            alt="image-product">
                                        <img class="img-hover lazyload"
                                            data-src="{{ asset('asset/images/products/fashion/product-22.jpg') }}"
                                            src="{{ asset('asset/images/products/fashion/product-22.jpg') }}"
                                            alt="image-product">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li>
                                            <a href="{{ route('shoppingCart') }}" data-bs-toggle="offcanvas"
                                                class="box-icon hover-tooltip">
                                                <span class="icon icon-cart2"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                <span class="icon icon-heart2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('modal-quick-view') }}" data-bs-toggle="modal"
                                                class="box-icon quickview hover-tooltip">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="{{ route('compare') }}" data-bs-toggle="modal" aria-controls="compare"
                                                class="box-icon hover-tooltip">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="size-box">
                                        <li class="size-item text-xs text-white">XS</li>
                                        <li class="size-item text-xs text-white">S</li>
                                        <li class="size-item text-xs text-white">M</li>
                                        <li class="size-item text-xs text-white">L</li>
                                        <li class="size-item text-xs text-white">XL</li>
                                        <li class="size-item text-xs text-white">2XL</li>
                                    </ul>
                                    <div class="on-sale-wrap">
                                        <span class="on-sale-item">20% Off</span>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="{{ route('product-details') }}"
                                        class="name-product link fw-medium text-md">Turtleneck
                                        T-shirt</a>
                                    <p class="price-wrap fw-medium">
                                        <span class="price-new">$80.00</span>
                                        <span class=" price-old">$100.00</span>
                                    </p>
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Grey</span>
                                            <span class="swatch-value bg-grey-4"></span>
                                            <img class=" lazyload"
                                                data-src="{{ asset('asset/images/products/fashion/product-5.jpg') }}"
                                                src="{{ asset('asset/images/products/fashion/product-5.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Black</span>
                                            <span class="swatch-value bg-dark"></span>
                                            <img class=" lazyload"
                                                data-src="{{ asset('asset/images/products/fashion/product-22.jpg') }}"
                                                src="{{ asset('asset/images/products/fashion/product-22.jpg') }}"
                                                alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-light-orange-2"></span>
                                            <img class=" lazyload"
                                                data-src="{{ asset('asset/images/products/fashion/product-40.jpg') }}"
                                                src="{{ asset('asset/images/products/fashion/product-40.jpg') }}"
                                                alt="image-product">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->

                    </div>
                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-viewed justify-content-center"></div>
                </div>
                <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-viewed"></div>
                <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-viewed"></div>
            </div>
        </div>
    </section>
    </div>


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
    <<script>
        $(document).on('click', '.wishlist', function() {

            let id = $(this).data('id');

            $.post("{{ url('/wishlist/toggle') }}/" + id, {
                _token: "{{ csrf_token() }}"
            }, function(res) {

                // alert(res.message);

                // reload page ONLY when removed
                if (!res.added) {
                    location.reload();
                }

            });
        });
    </script>


@endsection
