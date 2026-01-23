@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">
        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Shopping Cart</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Cart</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->
        <div class="flat-spacing-24">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-sm-8">
                        <div class="tf-cart-head text-center">
                            <p class="text-xl-3 title text-dark-4">Spend <span class="fw-medium">$100</span> more to get
                                <span class="fw-medium">Free Shipping</span>
                            </p>
                            <div class="progress-sold tf-progress-ship">
                                <div class="value" style="width: 0%;" data-progress="60">
                                    <i class="icon icon-car"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Cart Section -->
        <div class="flat-spacing-2 pt-0 mt_15">
            <div class="container">
                <div class="row">

                    <!-- CART ITEMS -->
                    <div class="col-xl-8">
                        <div class="tf-page-cart-main">
                            <form class="form-cart">
                                <table class="table-page-cart">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- ITEM 1 -->
                                        <tr class="tf-cart-item file-delete">
                                            <td class="tf-cart-item_product">
                                                <a href="{{ route('product-details') }}" class="img-box">
                                                    <img src="{{ asset('asset/images/products/bags/product1.jpg') }}" alt="Zilly Urban Backpack">
                                                </a>
                                                <div class="cart-info">
                                                    <a href="{{ route('product-details') }}" class="name text-md link fw-medium">Zilly
                                                        Urban Backpack</a>
                                                    <div class="variants">Black</div>
                                                    <span class="remove-cart link remove">Remove</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_price text-center">
                                                <span class="cart-price text-md fw-medium">$130.00</span>
                                            </td>
                                            <td class="tf-cart-item_quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease">-</span>
                                                    <input class="quantity-product" type="text" value="1">
                                                    <span class="btn-quantity btn-increase">+</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_total text-center">
                                                <div class="cart-total text-md fw-medium">$130.00</div>
                                            </td>
                                        </tr>

                                        <!-- ITEM 2 -->
                                        <tr class="tf-cart-item file-delete">
                                            <td class="tf-cart-item_product">
                                                <a href="{{ route('product-details') }}" class="img-box">
                                                    <img src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                        alt="Zilly Office Laptop Bag">
                                                </a>
                                                <div class="cart-info">
                                                    <a href="{{ route('product-details') }}" class="name text-md link fw-medium">Zilly
                                                        Office Laptop Bag</a>
                                                    <div class="variants">Brown</div>
                                                    <span class="remove-cart link remove">Remove</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_price text-center">
                                                <span class="cart-price text-md fw-medium">$140.00</span>
                                            </td>
                                            <td class="tf-cart-item_quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease">-</span>
                                                    <input class="quantity-product" type="text" value="1">
                                                    <span class="btn-quantity btn-increase">+</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_total text-center">
                                                <div class="cart-total text-md fw-medium">$140.00</div>
                                            </td>
                                        </tr>

                                        <!-- ITEM 3 -->
                                        <tr class="tf-cart-item file-delete">
                                            <td class="tf-cart-item_product">
                                                <a href="{{ route('product-details') }}" class="img-box">
                                                    <img src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                        alt="Zilly Leather Handbag">
                                                </a>
                                                <div class="cart-info">
                                                    <a href="{{ route('product-details') }}" class="name text-md link fw-medium">Zilly
                                                        Leather Handbag</a>
                                                    <div class="variants">Tan</div>
                                                    <span class="remove-cart link remove">Remove</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_price text-center">
                                                <span class="cart-price text-md fw-medium">$80.00</span>
                                            </td>
                                            <td class="tf-cart-item_quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease">-</span>
                                                    <input class="quantity-product" type="text" value="1">
                                                    <span class="btn-quantity btn-increase">+</span>
                                                </div>
                                            </td>
                                            <td class="tf-cart-item_total text-center">
                                                <div class="cart-total text-md fw-medium">$80.00</div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="check-gift">
                                    <input type="checkbox" class="tf-check" id="checkGift">
                                    <label for="checkGift" class="label">
                                        Add gift wrap. Only <span class="fw-medium">$10.00</span>
                                    </label>
                                </div>

                                <div class="box-ip-discount">
                                    <div class="discount-ip">
                                        <input type="text" placeholder="Discount code">
                                        <button type="button" class="tf-btn btn-out-line-dark-2">Apply</button>
                                    </div>
                                </div>

                                <div class="cart-note">
                                    <label class="text-md fw-medium">Special instructions for seller</label>
                                    <textarea></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- SIDEBAR -->
                    <div class="col-xl-4">
                        <div class="tf-page-cart-sidebar">

                            <form class="cart-box checkout-cart-box">
                                <div class="cart-head">
                                    <div class="total-discount text-xl fw-medium">
                                        <span>Total:</span>
                                        <span class="total">$350.00 USD</span>
                                    </div>
                                    <p class="text-sm">Taxes and shipping calculated at checkout</p>
                                </div>

                                <div class="check-agree">
                                    <input type="checkbox" class="tf-check" id="check-agree">
                                    <label for="check-agree">
                                        I agree with <a href="term-and-condition.html">terms and conditions</a>
                                    </label>
                                </div>

                                <button type="submit" class="tf-btn btn-dark2 w-100">Checkout</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Cart Section -->


        <!-- You May Also Like -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="flat-title wow fadeInUp mb_5">
                    <h4 class="title">You May Also Like</h4>
                </div>

                <div class="fl-control-sw wrap-pos-nav sw-over-product">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over"
                        data-swiper='{
                "slidesPerView": 2,
                "spaceBetween": 12,
                "speed": 800,
                "observer": true,
                "observeParents": true,
                "slidesPerGroup": 2,
                "navigation": {
                    "nextEl": ".nav-next-also",
                    "prevEl": ".nav-prev-also"
                },
                "pagination": { "el": ".sw-pagination-also", "clickable": true },
                "breakpoints": {
                    "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                    "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4 }
                }
            }'>

                        <div class="swiper-wrapper">

                            <!-- Bag 1 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product" src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                alt="Zilly Laptop Bag">
                                            <img class="img-hover" src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                alt="Zilly Laptop Bag">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="{{ route('product-details') }}" class="name-product link fw-medium text-md">
                                            Zilly Premium Laptop Bag
                                        </a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">₹2,999</span>
                                            <span class="price-old">₹3,999</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Bag 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product" src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                alt="Zilly Office Bag">
                                            <img class="img-hover" src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                alt="Zilly Office Bag">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="{{ route('product-details') }}" class="name-product link fw-medium text-md">
                                            Zilly Executive Office Bag
                                        </a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">₹3,499</span>
                                            <span class="price-old">₹4,299</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Bag 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product" src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                alt="Zilly Backpack">
                                            <img class="img-hover" src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                alt="Zilly Backpack">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="{{ route('product-details') }}" class="name-product link fw-medium text-md">
                                            Zilly Smart Backpack
                                        </a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">₹2,499</span>
                                            <span class="price-old">₹3,199</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Bag 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="{{ route('product-details') }}" class="product-img">
                                            <img class="img-product" src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                alt="Zilly Travel Bag">
                                            <img class="img-hover" src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                alt="Zilly Travel Bag">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="{{ route('product-details') }}" class="name-product link fw-medium text-md">
                                            Zilly Travel Duffle Bag
                                        </a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">₹3,799</span>
                                            <span class="price-old">₹4,599</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex d-xl-none sw-pagination-also justify-content-center"></div>
                    <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-also"></div>
                    <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-also"></div>
                </div>
            </div>
        </section>


    </div>


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
    <!-- /Reset pass -->

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
