<div class="modal fade popup-search" id="search">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="header">
                <button class="icon-close icon-close-popup" data-bs-dismiss="modal"></button>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="looking-for-wrap">
                            <div class="heading">What are you looking for?</div>
                            <form class="form-search">
                                <fieldset class="text">
                                    <input type="text" placeholder="Search" class="" name="text" tabindex="0" value=""
                                        aria-required="true" required="">
                                </fieldset>
                                <button type="submit">
                                    <i class="icon icon-search"></i>
                                </button>
                            </form>
                            <div class="popular-searches justify-content-md-center">
                                <div class="text fw-medium">Popular searches:</div>
                                <ul>
                                    <li><a class="link" href="#">Featured</a></li>
                                    <li><a class="link" href="#">Trendy</a></li>
                                    <li><a class="link" href="#">New</a></li>
                                    <li><a class="link" href="#">Sale</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="featured-product">
                            <div class="text-xl-2 fw-medium featured-product-heading">Featured product</div>
                            <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-swiper='{
                                        "slidesPerView": 2,
                                        "spaceBetween": 12,
                                        "speed": 800,
                                        "observer": true,
                                        "observeParents": true,
                                        "slidesPerGroup": 2,
                                        "pagination": { "el": ".sw-pagination-search", "clickable": true },
                                        "breakpoints": {
                                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                                        }
                                    }'>
                                <div class="swiper-wrapper">


                                    <div class="swiper-slide">
                                        <div class="card-product style-3 card-product-size">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="img-product lazyload"
                                                        data-src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                        src="{{asset('asset/images/products/bags/product1.jpg')}}" alt="image-product">
                                                    <img class="img-hover lazyload"
                                                        data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                        src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                                </a>

                                                <ul class="list-product-btn">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="box-icon hover-tooltip wishlist">
                                                            <span class="icon icon-heart2"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="btn-quickview box-icon hover-tooltip quickview">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="box-icon hover-tooltip compare btn-compare">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="product-btn-main">
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="btn-main-product">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="text-md fw-medium">Add to Cart</span>
                                                    </a>
                                                </div>

                                                <ul class="size-box">
                                                    <li class="size-item text-xs text-white">M</li>
                                                    <li class="size-item text-xs text-white">L</li>
                                                    <li class="size-item text-xs text-white">XL</li>
                                                </ul>
                                            </div>

                                            <div class="card-product-info">
                                                <a href="product-detail.html"
                                                    class="name-product link fw-medium text-md">
                                                    Zilly Premium Travel Backpack
                                                </a>
                                                <p class="price-wrap fw-medium">
                                                    <span class="price-new">$80.00</span>
                                                    <span class="price-old">$100.00</span>
                                                </p>

                                                <ul class="list-color-product">
                                                    <li
                                                        class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                        <span class="tooltip color-filter">Black</span>
                                                        <span class="swatch-value bg-dark"></span>
                                                        <img class="lazyload"
                                                            data-src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                            src="{{asset('asset/images/products/bags/product1.jpg')}}" alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                        <span class="tooltip color-filter">Brown</span>
                                                        <span class="swatch-value bg-brown"></span>
                                                        <img class="lazyload"
                                                            data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                            src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                        <span class="tooltip color-filter">Grey</span>
                                                        <span class="swatch-value bg-grey-4"></span>
                                                        <img class="lazyload"
                                                            data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                            src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card-product style-3">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="img-product lazyload"
                                                        data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                        src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                                    <img class="img-hover lazyload"
                                                        data-src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                        src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="image-product">
                                                </a>

                                                <ul class="list-product-btn">
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="box-icon hover-tooltip wishlist">
                                                            <span class="icon icon-heart2"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="btn-quickview box-icon hover-tooltip quickview">
                                                            <span class="icon icon-view"></span>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="box-icon hover-tooltip compare btn-compare">
                                                            <span class="icon icon-compare"></span>
                                                            <span class="tooltip">Add to Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="product-btn-main">
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="btn-main-product">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="text-md fw-medium">Add to Cart</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="card-product-info">
                                                <a href="product-detail.html"
                                                    class="name-product link fw-medium text-md">
                                                    Zilly Classic Office Handbag
                                                </a>
                                                <p class="price-wrap fw-medium">
                                                    <span class="price-new">$65.00</span>
                                                    <span class="price-old">$90.00</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex d-xl-none sw-dot-default sw-pagination-search justify-content-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>