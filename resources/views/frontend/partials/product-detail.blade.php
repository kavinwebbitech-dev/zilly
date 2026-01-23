@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">

        <!-- Breadcrumb -->
        <div class="breadcrumb-sec">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.php">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Linen Blend Pants</div>
                    </div>
                    <div class="breadcrumb-prev-next">
                        <a href="#" class="breadcrumb-prev"><i class="icon icon-arr-left"></i></a>
                        <a href="product.php" class="breadcrumb-back"><i class="icon icon-shop"></i></a>
                        <a href="#" class="breadcrumb-next"><i class="icon icon-arr-right2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Product Main -->
        <section class="flat-single-product">
            <div class="tf-main-product section-image-zoom">
                <div class="container">
                    <div class="row">
                        <!-- Product Images -->
                        <div class="col-md-6">
                            <div class="tf-product-media-wrap sticky-top">
                                <div class="product-thumbs-slider">

                                    <!-- Thumbnails -->
                                    <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                        data-preview="4" data-direction="vertical">
                                        <div class="swiper-wrapper stagger-wrap">

                                            <div class="swiper-slide stagger-item" data-color="black" data-size="small">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product1.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="black" data-size="medium">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="brown" data-size="large">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="tan" data-size="extra large">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="black" data-size="small">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product5.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product5.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="brown" data-size="medium">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product6.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product6.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                            <div class="swiper-slide stagger-item" data-color="tan" data-size="large">
                                                <div class="item">
                                                    <img class="lazyload" src="{{asset('asset/images/products/bags/product7.jpg')}}"
                                                        data-src="{{asset('asset/images/products/bags/product7.jpg')}}" alt="Women's Bag">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Main Images -->
                                    <div class="flat-wrap-media-product">
                                        <div dir="ltr" class="swiper tf-product-media-main"
                                            id="gallery-swiper-started">
                                            <div class="swiper-wrapper">

                                                <div class="swiper-slide">
                                                    <a href="images/products/bags/product1.jpg" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product1.jpg')}}" alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product2.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product3.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product4.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product5.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product5.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product5.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product6.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product6.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product6.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                                <div class="swiper-slide">
                                                    <a href="{{asset('asset/images/products/bags/product7.jpg')}}" class="item">
                                                        <img class="tf-image-zoom lazyload"
                                                            src="{{asset('asset/images/products/bags/product7.jpg')}}"
                                                            data-zoom="{{asset('asset/images/products/bags/product7.jpg')}}"
                                                            alt="Women's Bag">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="swiper-button-next nav-swiper thumbs-next"></div>
                                        <div class="swiper-button-prev nav-swiper thumbs-prev"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Product Images -->
                        <!-- Product Info -->
                        <div class="col-md-6">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-wrap other-image-zoom">
                                <div class="tf-product-info-list">
                                    <div class="tf-product-heading">
                                        <span class="brand-product">ZILLY</span>
                                        <h5 class="product-name fw-medium">Premium Women’s Leather Handbag</h5>
                                        <div class="product-rate">
                                            <div class="list-star">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <span class="count-review">(5 reviews)</span>
                                        </div>
                                        <div class="product-price">
                                            <div class="display-sm price-new price-on-sale">$60.00</div>
                                            <div class="display-sm price-old">$80.00</div>
                                            <span class="badge-sale">20% Off</span>
                                        </div>
                                        <div class="product-stock">
                                            <span class="stock in-stock">In Stock</span>
                                            <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.2759 10.9242C15.2556 10.6149 14.9236 10.4281 14.6488 10.5714C14.4098 10.6961 13.6603 11.0196 13.0698 11.0196C12.6156 11.0196 12.3132 10.8694 12.3132 10.1362C12.3132 8.12636 15.0124 6.52078 12.6056 3.51218C12.3295 3.16719 11.773 3.41746 11.8469 3.85238C11.8484 3.86145 11.9887 4.77182 11.5632 5.27582C11.3635 5.51218 11.061 5.62711 10.6384 5.62711C9.17454 5.62711 9.27646 1.94027 11.1223 0.795793C11.5328 0.541367 11.2702 -0.0948905 10.8012 0.0119845C10.683 0.0387033 7.88684 0.701328 6.39105 3.62798C5.28035 5.80099 5.88191 7.29977 6.32116 8.39418C6.71371 9.3722 6.89283 9.81857 6.01364 10.4273C5.68251 10.6566 5.42618 10.6328 5.42618 10.6328C4.60384 10.6328 3.82489 9.42402 3.59437 8.95879C3.40712 8.57837 2.83721 8.67311 2.78314 9.09372C2.75993 9.27457 2.24057 13.5513 4.51026 16.1312C5.76076 17.5525 7.50054 18.0581 9.40742 17.9948C11.1702 17.9357 12.5768 17.3395 13.5883 16.2228C15.4639 14.152 15.2844 11.0549 15.2759 10.9242Z"
                                                    fill="#F2721C" />
                                                <path
                                                    d="M4.44845 10.1357C4.04521 9.74669 3.72761 9.22817 3.59412 8.95877C3.40688 8.57834 2.83696 8.67309 2.78289 9.0937C2.75969 9.27454 2.24032 13.5513 4.51001 16.1312C5.2812 17.0077 6.27795 17.5784 7.48458 17.8379C4.95987 16.3506 4.24181 13.0162 4.44845 10.1357Z"
                                                    fill="#EA5513" />
                                                <path
                                                    d="M3.73448 4.51577C3.70506 4.49735 3.66772 4.49735 3.6383 4.51577C2.64745 5.13712 2.64446 6.58633 3.6383 7.20955C3.66723 7.22769 3.70471 7.22825 3.73448 7.20955C4.72533 6.58816 4.72821 5.13898 3.73448 4.51577Z"
                                                    fill="#F2721C" />
                                                <path
                                                    d="M4.12025 4.85809C4.01204 4.72502 3.88239 4.60855 3.73448 4.51577C3.70506 4.49735 3.66772 4.49735 3.6383 4.51577C2.64745 5.13712 2.64446 6.58633 3.6383 7.20955C3.66723 7.22769 3.70471 7.22825 3.73448 7.20955C3.88242 7.11677 4.01208 7.00026 4.12029 6.8672C3.64157 6.28237 3.64072 5.44386 4.12025 4.85809Z"
                                                    fill="#EA5513" />
                                                <path
                                                    d="M10.8011 0.0119845C10.6829 0.0387033 7.88676 0.701328 6.39096 3.62798C4.90723 6.53083 6.48163 8.24741 6.63386 9.34639L6.63403 9.34629C6.69 9.74974 6.54569 10.0588 6.01356 10.4272C5.69392 10.6486 5.40494 10.6816 5.10034 10.5723V10.5727C5.10034 10.5727 6.17507 11.6058 7.26087 10.8972C8.33686 10.1951 8.02601 9.11809 7.85986 8.63131L7.86025 8.63103C7.46365 7.57951 7.11673 6.19027 8.09319 4.27988C8.67292 3.14557 9.44797 2.35153 10.1868 1.80263C10.426 1.38835 10.7395 1.0331 11.1223 0.795758C11.5326 0.541367 11.2701 -0.0948905 10.8011 0.0119845Z"
                                                    fill="#EA5513" />
                                            </svg>
                                            <span class="text-dark">30 sold in last 24 hours</span>
                                        </div>
                                        <div class="product-progress-sale">
                                            <div class="title-hurry-up"><span class="text-primary fw-medium">HURRY
                                                    UP!</span> Only <span class="count">4</span> items left!</div>
                                            <div class="progress-sold">
                                                <div class="value" style="width: 0%;" data-progress="70"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-variant">
                                        <div class="variant-picker-item variant-color">
                                            <div class="variant-picker-label">
                                                Colors:<span
                                                    class="variant-picker-label-value value-currentColor">Black</span>
                                            </div>
                                            <div class="variant-picker-values">
                                                <div class="hover-tooltip tooltip-bot color-btn active"
                                                    data-color="black">
                                                    <span class="check-color bg-dark-3"></span>
                                                    <span class="tooltip">Black</span>
                                                </div>
                                                <div class="hover-tooltip tooltip-bot color-btn" data-color="orange">
                                                    <span class="check-color bg-light-orange-2"></span>
                                                    <span class="tooltip">Orange</span>
                                                </div>
                                                <div class="hover-tooltip tooltip-bot color-btn" data-color="green">
                                                    <span class="check-color bg-light-green"></span>
                                                    <span class="tooltip">Green</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="variant-picker-item variant-size">
                                            <div class="variant-picker-label">
                                                <div>Size:<span
                                                        class="variant-picker-label-value value-currentSize">Small</span>
                                                </div>
                                                <a href="#sizeGuide" data-bs-toggle="modal" class="size-guide link">Size
                                                    Guide</a>
                                            </div>
                                            <div class="variant-picker-values">
                                                <span class="size-btn active" data-size="small">S</span>
                                                <span class="size-btn" data-size="medium">M</span>
                                                <span class="size-btn" data-size="large">L</span>
                                                <span class="size-btn" data-size="extra large">XL</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-total-quantity">
                                        <div class="group-btn">
                                            <div class="wg-quantity">
                                                <button class="btn-quantity btn-decrease">-</button>
                                                <input class="quantity-product" type="text" name="number"
                                                    value="1">
                                                <button class="btn-quantity btn-increase">+</button>
                                            </div>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                class="tf-btn animate-btn btn-add-to-cart">Add to cart</a>
                                        </div>
                                        <a href="checkout.php" class="tf-btn btn-primary w-100 animate-btn">Buy it
                                            now</a>
                                        <a href="checkout.php" class="more-choose-payment link">More payment
                                            options</a>
                                    </div>
                                    <div class="tf-product-extra-link">
                                        <a href="javascript:void(0);" class="product-extra-icon link btn-add-wishlist">
                                            <i class="icon add icon-heart"></i><span class="add">Add to wishlist</span>
                                            <i class="icon added icon-trash"></i><span class="added">Remove from
                                                wishlist</span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="modal" class="product-extra-icon link">
                                            <i class="icon icon-compare2"></i>Compare
                                        </a>
                                        <a href="#askQuestion" data-bs-toggle="modal" class="product-extra-icon link">
                                            <i class="icon icon-ask"></i>Ask a question
                                        </a>
                                        <a href="#shareSocial" data-bs-toggle="modal" class="product-extra-icon link">
                                            <i class="icon icon-share"></i>Share
                                        </a>
                                    </div>
                                    <ul class="tf-product-cate-sku text-md">
                                        <li class="item-cate-sku">
                                            <span class="label">SKU:</span>
                                            <span class="value"> WBAG-2025</span>
                                        </li>
                                        <li class="item-cate-sku">
                                            <span class="label">Categories:</span>
                                            <span class="value"> Women / Bags</span>
                                        </li>
                                    </ul>
                                    <div class="tf-product-trust-seal text-center">
                                        <p class="text-md text-dark-2 text-seal fw-medium">Guarantee Safe Checkout:</p>
                                        <ul class="list-card">
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/Visa.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/DinersClub.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/Mastercard.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/Stripe.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/PayPal.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/GooglePay.png')}}" alt="card">
                                            </li>
                                            <li class="card-item">
                                                <img src="{{asset('asset/images/payment/ApplePay.png')}}" alt="card">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tf-product-delivery-return">
                                        <div class="product-delivery">
                                            <div class="icon icon-car2"></div>
                                            <p class="text-md">Estimated delivery time: <span class="fw-medium">3-5 days
                                                    international</span></p>
                                        </div>
                                        <div class="product-delivery">
                                            <div class="icon icon-shipping3"></div>
                                            <p class="text-md">Free shipping on <span class="fw-medium">all orders over
                                                    $150</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-product-fbt">
                                    <div class="title text-xl fw-medium">Frequently Bought Together</div>

                                    <form class="tf-product-form-bundle">
                                        <div class="tf-bundle-products">

                                            <!-- Main Bag -->
                                            <div class="tf-bundle-product-item item-has-checkbox check">
                                                <div class="bundle-check">
                                                    <input type="checkbox" checked="checked" class="tf-check">
                                                </div>

                                                <a href="product-detail.php" class="bundle-image">
                                                    <img src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                        alt="Women's Leather Handbag">
                                                </a>

                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">
                                                        This item: Premium Women’s Leather Handbag
                                                    </div>

                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$129.00</span>
                                                        <span class="old-price">$169.00</span>
                                                    </div>

                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">Black / Standard</option>
                                                            <option>Brown / Standard</option>
                                                            <option>Tan / Standard</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Extra Pouch -->
                                            <div class="tf-bundle-product-item item-has-checkbox">
                                                <div class="bundle-check">
                                                    <input type="checkbox" class="tf-check">
                                                </div>

                                                <a href="product-detail.php" class="bundle-image">
                                                    <img src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="Women's Mini Pouch">
                                                </a>

                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">
                                                        Matching Mini Pouch
                                                    </div>

                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$39.00</span>
                                                    </div>

                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">Black</option>
                                                            <option>Brown</option>
                                                            <option>Tan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Wallet -->
                                            <div class="tf-bundle-product-item item-has-checkbox">
                                                <div class="bundle-check">
                                                    <input type="checkbox" class="tf-check">
                                                </div>

                                                <a href="product-detail.php" class="bundle-image">
                                                    <img src="{{asset('asset/images/products/bags/product6.jpg')}}"
                                                        alt="Women's Leather Wallet">
                                                </a>

                                                <div class="bundle-info">
                                                    <div class="bundle-title text-sm fw-medium">
                                                        Leather Wallet for Women
                                                    </div>

                                                    <div class="bundle-price text-md fw-medium">
                                                        <span class="new-price">$49.00</span>
                                                        <span class="old-price">$69.00</span>
                                                    </div>

                                                    <div class="bundle-variant tf-select">
                                                        <select>
                                                            <option selected="selected">Black</option>
                                                            <option>Brown</option>
                                                            <option>Tan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Total -->
                                        <div class="bundle-total-submit">
                                            <div class="text">Total price:</div>
                                            <span class="total-price">$129.00</span>
                                            <span class="total-price-old">$169.00</span>
                                        </div>

                                        <button data-bs-target="{{ route('shoppingCart') }}" type="button" data-bs-toggle="offcanvas"
                                            class="btn-submit-total tf-btn btn-out-line-primary">
                                            Add selected to cart
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- /Product Info -->

                    </div>
                </div>
            </div>
            <div class="tf-sticky-btn-atc">
                <div class="container">
                    <div class="tf-height-observer w-100 d-flex align-items-center">

                        <!-- PRODUCT INFO -->
                        <div class="tf-sticky-atc-product d-flex align-items-center">

                            <div class="tf-sticky-atc-img">
                                <img class="lazyload" src="{{asset('asset/images/products/bags/zilly-everyday-tote.jpg')}}"
                                    data-src="{{asset('asset/images/products/bags/zilly-everyday-tote.jpg')}}"
                                    alt="Zilly Everyday Tote Bag – Vegan Leather Handcrafted Tote">
                            </div>

                            <div class="tf-sticky-atc-title fw-5 d-xl-block d-none">
                                Zilly Everyday Tote Bag
                            </div>

                        </div>


                        <!-- ACTION AREA -->
                        <div class="tf-sticky-atc-infos">
                            <form>

                                <!-- VARIANT / PRICE -->
                                <div class="tf-sticky-atc-variant-price text-center tf-select">
                                    <select>
                                        <option selected="selected">Black – ₹1,999</option>
                                        <option>Tan – ₹1,999</option>
                                        <option>Brown – ₹1,999</option>
                                    </select>
                                </div>

                                <!-- BUTTONS -->
                                <div class="tf-sticky-atc-btns">

                                    <!-- QUANTITY -->
                                    <div class="tf-product-info-quantity">
                                        <div class="wg-quantity">
                                            <button type="button" class="btn-quantity minus-btn">-</button>
                                            <input class="quantity-product font-4" type="text" value="1"
                                                min="1">
                                            <button type="button" class="btn-quantity plus-btn">+</button>
                                        </div>
                                    </div>

                                    <!-- ADD TO CART -->
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                        class="tf-btn animate-btn d-inline-flex justify-content-center">
                                        Add to Cart
                                    </a>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- /Product Main -->
        <!-- Product Description -->
        <section class="flat-spacing pt-0">
            <div class="container">

                <!-- DESCRIPTION -->
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#description" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="description" role="button">
                        <span>Description</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>

                    <div id="description" class="collapse">
                        <div class="accordion-body widget-desc">

                            <div class="item">
                                <p class="fw-medium title">Product Overview</p>
                                <p>
                                    Proudly Indian and thoughtfully designed, the <strong>Everyday Tote Bag</strong> is a
                                    refined
                                    essential crafted to bring effortless organization to your daily life.
                                </p>
                                <p>
                                    Featuring two generously sized main compartments with smooth zipper closures, this tote
                                    offers structured and segregated storage. A front slip pocket allows quick access to
                                    essentials, while an inner zip pocket keeps valuables secure.
                                </p>
                                <p>
                                    Designed for versatility and sophistication, it transitions seamlessly from casual
                                    outings
                                    to curated events.
                                </p>
                            </div>

                            <div class="item">
                                <p class="fw-medium title">Ideal Usage</p>
                                <ul>
                                    <li>Casual outings and lifestyle events</li>
                                    <li>Daily work or everyday carry</li>
                                    <li>Fits a water bottle, small tiffin, iPad/tablet, diary & essentials</li>
                                </ul>
                            </div>

                            <div class="item">
                                <p class="fw-medium title">Water Resistance</p>
                                <ul>
                                    <li>Water-resistant inner lining for added protection</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- MATERIAL & CARE -->
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#material" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="material" role="button">
                        <span>Material & Care</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>

                    <div id="material" class="collapse">
                        <div class="accordion-body widget-material">

                            <div class="item">
                                <p class="fw-medium title">Materials Used</p>
                                <ul>
                                    <li>External: Premium Vegan Leather & Handcrafted Fabric</li>
                                    <li>Inner Lining: Water-resistant fabric</li>
                                    <li>Accessories: High-quality metal hardware</li>
                                </ul>
                            </div>

                            <div class="item">
                                <p class="fw-medium title">Care Instructions</p>
                                <ul>
                                    <li>Wipe vegan leather gently with a damp cotton pad</li>
                                    <li>For fabric areas, clean lightly using mild soap & water</li>
                                    <li>Blot inner lining immediately in case of spills</li>
                                    <li>Allow to air dry completely before use or storage</li>
                                    <li>Avoid washing, bleaching, or prolonged sun exposure</li>
                                </ul>
                                <p class="text-sm mt-2">
                                    Refer to our <strong>Quick Care Guide</strong> for detailed assistance.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- RETURN POLICIES -->
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#returnPolicies" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="returnPolicies" role="button">
                        <span>Return Policies</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>

                    <div id="returnPolicies" class="collapse">
                        <div class="accordion-body">
                            <ul class="list-policies">
                                <li>7 days easy return from the date of delivery</li>
                                <li>Product must be unused, unwashed, and with original tags intact</li>
                                <li>Refunds are processed within 5–7 business days after inspection</li>
                                <li>Exchange is applicable only for damaged or defective products</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- ADDITIONAL INFORMATION -->
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#addInformation" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="addInformation" role="button">
                        <span>Additional Information</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>

                    <div id="addInformation" class="collapse">
                        <div class="accordion-body">
                            <table class="tb-info-product text-md">
                                <tbody>
                                    <tr>
                                        <th>Brand</th>
                                        <td>Zilly</td>
                                    </tr>
                                    <tr>
                                        <th>Material</th>
                                        <td>Premium Vegan Leather & Handcrafted Fabric</td>
                                    </tr>
                                    <tr>
                                        <th>Pattern</th>
                                        <td>Motif</td>
                                    </tr>
                                    <tr>
                                        <th>Compartments</th>
                                        <td>2 Main Compartments</td>
                                    </tr>
                                    <tr>
                                        <th>Pockets</th>
                                        <td>1 Slip Pocket, 2 Zipper Pockets</td>
                                    </tr>
                                    <tr>
                                        <th>Closure Type</th>
                                        <td>Zipper</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>515 grams</td>
                                    </tr>
                                    <tr>
                                        <th>Country of Origin</th>
                                        <td>India</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- REVIEWS -->
                <div class="widget-accordion wd-product-descriptions">
                    <div class="accordion-title collapsed" data-bs-target="#reviews" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="reviews" role="button">
                        <span>Reviews</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>

                    <div id="reviews" class="collapse">
                        <div class="accordion-body wd-customer-review">

                            <h6 class="title">Customer Reviews</h6>

                            <ul class="review-list">
                                <li class="review-item">
                                    <div class="review-content">
                                        <strong>Ravi K.</strong>
                                        <p class="text-sm">
                                            Spacious, premium finish and very comfortable to carry.
                                        </p>
                                    </div>
                                </li>
                                <li class="review-item">
                                    <div class="review-content">
                                        <strong>Anjali S.</strong>
                                        <p class="text-sm">
                                            Beautiful design and great quality. Perfect for daily use.
                                        </p>
                                    </div>
                                </li>
                            </ul>

                            <form class="form-review">
                                <h6 class="title">Write a Review</h6>
                                <input type="text" placeholder="Name *">
                                <input type="email" placeholder="Email *">
                                <textarea placeholder="Your review *"></textarea>
                                <button type="submit" class="tf-btn animate-btn">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- /Product Description -->
        <!-- People Also Bought -->
        <section>
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">People Also Bought</h4>
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
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-bought",
                            "prevEl": ".nav-prev-bought"
                        },
                        "pagination": { "el": ".sw-pagination-bought", "clickable": true },
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
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="{{asset('asset/images/products/bags/product1.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product1.jpg')}}" alt="image-product">
                                            <img class="img-hover lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
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
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
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
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.php" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                            <img class="img-hover lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
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
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
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
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.php" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                            <img class="img-hover lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
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
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
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
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.php" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product3.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product3.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="{{asset('asset/images/products/bags/product4.jpg')}}"
                                                    src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="images/products/bags/product4.jpg"
                                                src="{{asset('asset/images/products/bags/product4.jpg')}}" alt="image-product">
                                            <img class="img-hover lazyload" data-src="{{asset('asset/images/products/bags/product2.jpg')}}"
                                                src="{{asset('asset/images/products/bags/product2.jpg')}}" alt="image-product">
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
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.php" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product2.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product3.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product4.jpg') }}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 5 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                src="{{ asset('asset/images/products/bags/product1.jpg') }}" alt="image-product">
                                            <img class="img-hover lazyload" data-src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                src="{{ asset('asset/images/products/bags/product2.jpg') }}" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
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
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
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
                                        <div class="on-sale-wrap flex-column">
                                            <span class="on-sale-item">20% Off</span>
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.php" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$55.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product2.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product3.jpg') }}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink-9"></span>
                                                <img class=" lazyload" data-src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                    src="{{ asset('asset/images/products/bags/product4.jpg') }}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-bought justify-content-center"></div>
                    </div>
                    <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-bought"></div>
                    <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-bought"></div>
                </div>
            </div>
        </section>
        <!-- People Also Bought -->
        <!-- Recently Viewed -->
        <section class="flat-spacing">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Recently Viewed</h4>
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
                "navigation": {
                    "clickable": true,
                    "nextEl": ".nav-next-viewed",
                    "prevEl": ".nav-prev-viewed"
                },
                "pagination": { "el": ".sw-pagination-viewed", "clickable": true },
                "breakpoints": {
                    "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                    "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4 }
                }
            }'>

                        <div class="swiper-wrapper">

                            <!-- ITEM 1 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.php" class="product-img">
                                            <img class="img-product lazyload" data-src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                src="{{ asset('asset/images/products/bags/product1.jpg') }}">
                                            <img class="img-hover lazyload" data-src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                src="{{ asset('asset/images/products/bags/product2.jpg') }}">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li><a href="#shoppingCart" data-bs-toggle="offcanvas" class="box-icon"><span
                                                        class="icon icon-cart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-heart2"></span></a></li>
                                            <li><a href="#quickView" data-bs-toggle="modal" class="box-icon"><span
                                                        class="icon icon-view"></span></a></li>
                                            <li><a href="#compare" data-bs-toggle="modal" class="box-icon"><span
                                                        class="icon icon-compare"></span></a></li>
                                        </ul>
                                        <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a class="name-product fw-medium text-md">Premium Leather Tote Bag</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$80.00</span>
                                            <span class="price-old">$100.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/bags/product3.jpg">
                                            <img class="img-hover lazyload" data-src="images/products/bags/product4.jpg">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li><a class="box-icon"><span class="icon icon-cart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-heart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-view"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-compare"></span></a></li>
                                        </ul>
                                        <div class="on-sale-wrap"><span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a class="name-product fw-medium text-md">Classic Office Handbag</a>
                                        <p class="price-wrap fw-medium"><span class="price-new">$65.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/bags/product5.jpg">
                                            <img class="img-hover lazyload" data-src="images/products/bags/product6.jpg">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li><a class="box-icon"><span class="icon icon-cart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-heart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-view"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-compare"></span></a></li>
                                        </ul>
                                        <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a class="name-product fw-medium text-md">Urban Sling Bag</a>
                                        <p class="price-wrap fw-medium"><span class="price-new">$45.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/bags/product7.jpg">
                                            <img class="img-hover lazyload" data-src="images/products/bags/product1.jpg">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li><a class="box-icon"><span class="icon icon-cart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-heart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-view"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-compare"></span></a></li>
                                        </ul>
                                        <div class="on-sale-wrap type-2">
                                            <span class="on-sale-item limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a class="name-product fw-medium text-md">Travel Backpack</a>
                                        <p class="price-wrap fw-medium"><span class="price-new">$130.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 5 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/bags/product2.jpg">
                                            <img class="img-hover lazyload" data-src="images/products/bags/product4.jpg">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li><a class="box-icon"><span class="icon icon-cart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-heart2"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-view"></span></a></li>
                                            <li><a class="box-icon"><span class="icon icon-compare"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-product-info">
                                        <a class="name-product fw-medium text-md">Minimal Shoulder Bag</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$50.00</span>
                                            <span class="price-old">$70.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

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

    <!-- /compare  -->

    <!-- Size guide -->
    <div class="modal fade modalCentered modal-find-size" id="sizeGuide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="heading">Size Guide</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-rte">
                    <div class="tf-table-res-df">
                        <div class="title">Size Chart</div>
                        <table class="tf-sizeguide-table">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>US</th>
                                    <th>Chest</th>
                                    <th>Waist</th>
                                    <th>Hip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS</td>
                                    <td>2</td>
                                    <td>32</td>
                                    <td>24 - 25</td>
                                    <td>33 - 34</td>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>4</td>
                                    <td>34 - 35</td>
                                    <td>26 - 27</td>
                                    <td>35 - 26</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>6</td>
                                    <td>36 - 37</td>
                                    <td>28 - 29</td>
                                    <td>38 - 40</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>8</td>
                                    <td>38 - 29</td>
                                    <td>30 - 31</td>
                                    <td>42 - 44</td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td>10</td>
                                    <td>40 - 41</td>
                                    <td>32 - 33</td>
                                    <td>45 - 47</td>
                                </tr>
                                <tr>
                                    <td>XXL</td>
                                    <td>12</td>
                                    <td>42 - 43</td>
                                    <td>34 - 35</td>
                                    <td>48 - 50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tf-page-size-chart-content">
                        <div>
                            <div class="title">Style Measurements:</div>
                            <ul>
                                <li class="text">1. Chest</li>
                                <li class="text-main">Measure at the fullest part of your chest, keeping the tape
                                    parallel to the floor.</li>
                                <li class="text">2. Waist</li>
                                <li class="text-main">Measure at the smallest part of your waist. This is usually below
                                    the rib cage and above the hip bone.</li>
                                <li class="text">3. Hip</li>
                                <li class="text-main">Measure at the fullest part of your seat, keeping the tape
                                    parallel to the floor.</li>
                            </ul>
                        </div>
                        <div class="text-md-end text-center">
                            <img class="sizechart lazyload" data-src="images/section/size-guide.png"
                                src="images/section/size-guide.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Size guide -->

    <!-- ask question  -->
    <div class="modal modalCentered fade  modal-ask-question popup-style-2" id="askQuestion">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title text-xl-2 fw-medium">Ask a Question</span>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <form class="form-ask-question">
                    <div class="cols mb_15 flex-md-nowrap flex-wrap">
                        <fieldset class="">
                            <div class="text">Your name*</div>
                            <input type="text" placeholder="" class="" name="text" tabindex="2"
                                value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <div class="text">Your phone number</div>
                            <input type="number" placeholder="" class="" name="text" tabindex="2"
                                value="" aria-required="true">
                        </fieldset>
                    </div>
                    <fieldset class="mb_15">
                        <div class="text">Your email*</div>
                        <input type="email" placeholder="" class="" name="text" tabindex="2"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <fieldset class="">
                        <div class="text">Message*</div>
                        <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true"
                            required=""></textarea>
                    </fieldset>
                    <div class="text-center">
                        <button type="submit"
                            class="tf-btn animate-btn d-inline-flex justify-content-center"><span>Send
                                Message</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /ask question  -->

    <!-- share social  -->
    <div class="modal modalCentered fade  modal-share-social popup-style-2" id="shareSocial">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title text-xl-2 fw-medium">Share</span>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap-code style-1">
                    <div class="coppyText" id="coppyText">http://vineta.com</div>
                    <div class="btn-coppy-text tf-btn animate-btn d-inline-flex w-max-content" id="btn-coppy-text">Copy
                    </div>
                </div>
                <ul class="topbar-left tf-social-icon style-1">
                    <li><a href="https://www.facebook.com/" class="social-item social-facebook"><i
                                class="icon icon-fb"></i></a></li>
                    <li><a href="https://www.instagram.com/" class="social-item social-instagram"><i
                                class="icon icon-instagram"></i></a></li>
                    <li><a href="https://x.com/" class="social-item social-x"><i class="icon icon-x"></i></a></li>
                    <li><a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                class="icon icon-snapchat"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /share social  -->

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
