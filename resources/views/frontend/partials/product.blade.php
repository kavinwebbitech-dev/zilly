@extends('frontend.layouts.app')
@section('content')
    <div class="tf-main-content">
        <style>
            .icon-fa {
                font-size: 48px;
                color: #ababab;
                margin-bottom: 12px;
            }
        </style>

        <div id="wrapper">
            <!-- Title Page -->
            <section class="tf-page-title">
                <div class="container">
                    <div class="box-title text-center">
                        <h4 class="title">Women’s Bags</h4>

                        <div class="breadcrumb-list">
                            <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                            <div class="breadcrumb-item dot"><span></span></div>
                            <a class="breadcrumb-item" href="{{ route('product') }}">Collections</a>
                            <div class="breadcrumb-item dot"><span></span></div>
                            <div class="breadcrumb-item current">Women’s Bags</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /Title Page -->

            <!-- Section Product -->
            <section class="flat-spacing-24">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="canvas-sidebar sidebar-filter canvas-filter left">
                                <div class="canvas-wrapper">
                                    <div class="canvas-header d-flex d-xl-none">
                                        <span class="title">Filter</span>
                                        <span class="icon-close icon-close-popup close-filter"></span>
                                    </div>
                                    <div class="canvas-body">


                                        {{-- BAG CATEGORIES --}}
                                        <div class="widget-facet">
                                            <div class="facet-title text-xl fw-medium" data-bs-toggle="collapse"
                                                data-bs-target="#collections" aria-expanded="true">
                                                <span>Bag Categories</span>
                                                {{-- <span class="icon icon-arrow-up"></span> --}}
                                            </div>

                                            <div id="collections" class="collapse show">
                                                <ul class="collapse-body list-categories current-scrollbar">
                                                    @foreach ($categories as $category)
                                                        <li class="cate-item">
                                                            <a class="text-sm link
                       {{ request('category') == $category->slug ? 'active' : '' }}"
                                                                href="{{ route('product', ['category' => $category->slug]) }}">
                                                                <span>{{ $category->name }}</span>
                                                                <span
                                                                    class="count">({{ $category->products_count }})</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>


                                        <!-- AVAILABILITY -->
                                        <div class="widget-facet">
                                            <div class="facet-title text-xl fw-medium" data-bs-target="#availability"
                                                data-bs-toggle="collapse" aria-expanded="true">
                                                <span>Availability</span>
                                                {{-- <span class="icon icon-arrow-up"></span> --}}
                                            </div>

                                            <div id="availability" class="collapse show">
                                                <ul class="collapse-body filter-group-check current-scrollbar">
                                                    <li class="list-item">
                                                        <input type="radio" name="availability" value="in"
                                                            class="tf-check" id="inStock"
                                                            {{ request('availability') == 'in' ? 'checked' : '' }}>
                                                        <label for="inStock" class="label">
                                                            <span>In stock</span>
                                                            <span class="count">({{ $inStockCount }})</span>
                                                        </label>
                                                    </li>

                                                    <li class="list-item">
                                                        <input type="radio" name="availability" value="out"
                                                            class="tf-check" id="outStock"
                                                            {{ request('availability') == 'out' ? 'checked' : '' }}>
                                                        <label for="outStock" class="label">
                                                            <span>Out of stock</span>
                                                            <span class="count">({{ $outStockCount }})</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- PRICE -->
                                        <div class="widget-facet">
                                            <div class="facet-title text-xl fw-medium" data-bs-target="#price"
                                                data-bs-toggle="collapse" aria-expanded="true">
                                                <span>Price (₹)</span>
                                                {{-- <span class="icon icon-arrow-up"></span> --}}
                                            </div>

                                            <div id="price" class="collapse show">
                                                <div class="collapse-body widget-price filter-price">
                                                    <!-- FIXED RANGE -->
                                                    <div class="price-val-range" data-min="999" data-max="2999"></div>

                                                    <div class="box-value-price">
                                                        <span class="text-sm">Price:</span>
                                                        <div class="price-box">
                                                            <div class="price-val" data-currency="₹">999</div>
                                                            <span>-</span>
                                                            <div class="price-val" data-currency="₹">2999</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- BAG SIZE -->
                                        <div class="collapse-body filter-size-box flat-check-list">

                                            <!-- SMALL -->
                                            <a href="{{ request()->fullUrlWithQuery(['bag_size' => 'tote']) }}"
                                                class="check-item size-item {{ request('bag_size') == 'tote' ? 'active' : '' }}">
                                                <span class="size">Small</span>
                                            </a>

                                            <!-- MEDIUM -->
                                            <a href="{{ request()->fullUrlWithQuery(['bag_size' => 'goldenchain']) }}"
                                                class="check-item size-item {{ request('bag_size') == 'goldenchain' ? 'active' : '' }}">
                                                <span class="size">Medium</span>
                                            </a>

                                            <!-- CLEAR -->
                                            @if (request()->has('bag_size'))
                                                <a href="{{ request()->url() }}" class="check-item size-item">
                                                    <span class="size">Clear</span>
                                                </a>
                                            @endif

                                        </div>



                                        {{-- BRAND --}}
                                        <div class="widget-facet">
                                            <div class="facet-title text-xl fw-medium" data-bs-toggle="collapse"
                                                data-bs-target="#brand" aria-expanded="true">
                                                <span>Brand</span>
                                                {{-- <span class="icon icon-arrow-up"></span> --}}
                                            </div>

                                            <div id="brand" class="collapse show">
                                                <form method="GET" action="{{ route('product') }}">
                                                    @if (request('category'))
                                                        <input type="hidden" name="category"
                                                            value="{{ request('category') }}">
                                                    @endif

                                                    <ul class="collapse-body filter-group-check current-scrollbar">
                                                        @foreach ($brands as $brand)
                                                            <li class="list-item">
                                                                <input type="radio" name="brand" class="tf-check"
                                                                    id="brand_{{ $brand->id }}"
                                                                    value="{{ $brand->id }}"
                                                                    onchange="this.form.submit()"
                                                                    {{ request('brand') == $brand->id ? 'checked' : '' }}>

                                                                <label for="brand_{{ $brand->id }}" class="label">
                                                                    <span>{{ $brand->name }}</span>
                                                                    <span
                                                                        class="count">({{ $brand->products_count }})</span>
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>


                                        <!-- ON SALE -->
                                        {{-- <div class="widget-facet">
                                            <div class="facet-title text-xl fw-medium"><span>On Sale</span></div>
                                            <ul class="collapse-body list-recent">
                                                <li>
                                                    <div class="recent-blog-item">
                                                        <a href="{{ route('product-details') }}" class="img-product">
                                                            <img src="{{ asset('asset/images/products/bags/newproduct1.jpg') }}"
                                                                alt="">
                                                        </a>
                                                        <div class="content">
                                                            <a href="{{ route('product-details') }}"
                                                                class="title text-md link fw-medium">
                                                                Classic Leather Handbag
                                                            </a>
                                                            <div class="price text-md fw-medium">
                                                                <span class="new-price">₹2,499</span>
                                                                <span class="old-price">₹3,499</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="recent-blog-item">
                                                        <a href="{{ route('product-details') }}" class="img-product">
                                                            <img src="{{ asset('asset/images/products/bags/newproduct2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                        <div class="content">
                                                            <a href="{{ route('product-details') }}"
                                                                class="title text-md link fw-medium">
                                                                Casual Sling Bag
                                                            </a>
                                                            <div class="price text-md fw-medium">
                                                                <span class="new-price">₹1,699</span>
                                                                <span class="old-price">₹2,299</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}

                                        <!-- SIDEBAR BANNER -->
                                        {{-- <div class="widget-facet">
                                            <div class="sb-banner hover-img">
                                                <div class="image img-style">
                                                    <img src="{{ asset('asset/images/products/bags/newproduct3.jpg') }}"
                                                        alt="Women's Bags">
                                                </div>
                                                <div class="banner-content">
                                                    <p class="title">
                                                        Chic Bags <br> For Every Look
                                                    </p>
                                                    <a href="{{ route('product') }}"
                                                        class="tf-btn btn-white hover-primary">
                                                        Shop Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            {{-- <div class="tf-shop-control">
                                <div class="tf-group-filter">
                                    <button id="filterShop" class="tf-btn-filter d-flex d-xl-none">
                                        <span class="icon icon-filter"></span><span class="text">Filter</span>
                                    </button>
                                    <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                        <div class="btn-select">
                                            <span class="text-sort-value">Best selling</span>
                                            <span class="icon icon-arr-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="select-item active" data-sort-value="best-selling">
                                                <span class="text-value-item">Best selling</span>
                                            </div>
                                            <div class="select-item" data-sort-value="a-z">
                                                <span class="text-value-item">Alphabetically, A-Z</span>
                                            </div>
                                            <div class="select-item" data-sort-value="z-a">
                                                <span class="text-value-item">Alphabetically, Z-A</span>
                                            </div>
                                            <div class="select-item" data-sort-value="price-low-high">
                                                <span class="text-value-item">Price, low to high</span>
                                            </div>
                                            <div class="select-item" data-sort-value="price-high-low">
                                                <span class="text-value-item">Price, high to low</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tf-control-layout ">
                                    <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                                        <div class="item icon-list">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                                        <div class="item icon-grid-2">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="tf-view-layout-switch sw-layout-3 active" data-value-layout="tf-col-3">
                                        <div class="item icon-grid-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="tf-view-layout-switch sw-layout-4" data-value-layout="tf-col-4">
                                        <div class="item icon-grid-4">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>

                                </ul>
                            </div> --}}
                            <div class="wrapper-control-shop">
                                <div class="meta-filter-shop">
                                    <div id="product-count-grid" class="count-text"></div>
                                    <div id="product-count-list" class="count-text"></div>
                                    <div id="applied-filters"></div>
                                    <button id="remove-all" class="remove-all-filters" style="display: none;"><i
                                            class="icon icon-close"></i> Clear all filter</button>
                                </div>
                                <div class="wrapper-shop tf-grid-layout tf-col-3" id="gridLayout">

                                    @forelse ($products as $product)
                                        <div class="card-product grid">

                                            <div class="card-product-wrapper">
                                                <a href="{{ route('product.details', $product->id) }}"
                                                    class="product-img">

                                                    {{-- MAIN IMAGE --}}
                                                    @if ($product->images->count())
                                                        <img class="img-product"
                                                            src="{{ asset('storage/' . $product->images->first()->image) }}"
                                                            alt="{{ $product->name }}">
                                                    @else
                                                        <img class="img-product"
                                                            src="{{ asset('asset/images/no-image.png') }}"
                                                            alt="No image">
                                                    @endif

                                                    {{-- HOVER IMAGE --}}
                                                    @if ($product->images->count() > 1)
                                                        <img class="img-hover"
                                                            src="{{ asset('storage/' . $product->images[1]->image) }}">
                                                    @endif
                                                </a>

                                                <ul class="list-product-btn">
                                                    <li>
                                                        @guest
                                                            <a href="#login" data-bs-toggle="offcanvas"
                                                                class="box-icon hover-tooltip tooltip-left">
                                                                <span class="icon icon-cart2"></span>
                                                                <span class="tooltip">Login to Add</span>
                                                            </a>
                                                        @endguest

                                                        @auth
                                                            <a href="#miniCartItems" data-id="{{ $product->id }}"
                                                                class="box-icon hover-tooltip tooltip-left add-to-cart"
                                                                data-bs-toggle="offcanvas">
                                                                <span class="icon icon-cart2"></span>
                                                                <span class="tooltip">Add to Cart</span>
                                                            </a>
                                                        @endauth
                                                    </li>


                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="box-icon hover-tooltip tooltip-left wishlist"
                                                            data-id="{{ $product->id }}">
                                                            <span class="icon icon-heart2"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
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
                                                    <span class="price-new">
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
                                    @empty
                                        <p class="text-center w-100">No products found</p>
                                    @endforelse

                                </div>


                                {{-- <div class="wrapper-shop tf-grid-layout tf-col-3" id="gridLayout">

                                    <!-- Zilly Bag 1 -->
                                    <div class="card-product grid" data-availability="In stock" data-brand="Zilly">
                                        <div class="card-product-wrapper">
                                            <a href="{{ route('product-details') }}" class="product-img">
                                                <img class="img-product lazyload"
                                                    src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                    alt="Zilly Classic Tote Bag">
                                                <img class="img-hover lazyload"
                                                    src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product2.jpg') }}"
                                                    alt="Zilly Classic Tote Bag Hover">
                                            </a>

                                            <ul class="list-product-btn">
                                                <li>
                                                    <a href="javascript:void(0)" class="box-icon add-to-cart"
                                                        data-id="{{ $product->id }}" data-bs-toggle="offcanvas"
                                                        data-bs-target="#shoppingCart">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="tooltip">Add to Cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-heart2"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="box-icon quickview hover-tooltip tooltip-left">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card-product-info">
                                            <a href="{{ route('product-details') }}"
                                                class="name-product link fw-medium text-md">
                                                Zilly Classic Tote Bag
                                            </a>
                                            <p class="price-wrap fw-medium">
                                                <span class="price-new">₹2,499</span>
                                                <span class="price-old">₹3,199</span>
                                            </p>

                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Tan</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                </li>
                                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Black</span>
                                                    <span class="swatch-value bg-dark"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Zilly Bag 2 -->
                                    <div class="card-product grid" data-availability="In stock" data-brand="Zilly">
                                        <div class="card-product-wrapper">
                                            <a href="{{ route('product-details') }}" class="product-img">
                                                <img class="img-product lazyload"
                                                    src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product3.jpg') }}"
                                                    alt="Zilly Classic Tote Bag">
                                                <img class="img-hover lazyload"
                                                    src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product4.jpg') }}"
                                                    alt="Zilly Classic Tote Bag Hover">
                                            </a>

                                            <ul class="list-product-btn">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="tooltip">Add to Cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-heart2"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="box-icon quickview hover-tooltip tooltip-left">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card-product-info">
                                            <a href="{{ route('product-details') }}"
                                                class="name-product link fw-medium text-md">
                                                Zilly Classic Tote Bag
                                            </a>
                                            <p class="price-wrap fw-medium">
                                                <span class="price-new">₹2,499</span>
                                                <span class="price-old">₹3,199</span>
                                            </p>

                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Tan</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                </li>
                                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Black</span>
                                                    <span class="swatch-value bg-dark"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Zilly Bag 3 -->
                                    <div class="card-product grid" data-availability="In stock" data-brand="Zilly">
                                        <div class="card-product-wrapper">
                                            <a href="{{ route('product-details') }}" class="product-img">
                                                <img class="img-product lazyload"
                                                    src="{{ asset('asset/images/products/bags/product5.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product5.jpg') }}"
                                                    alt="Zilly Classic Tote Bag">
                                                <img class="img-hover lazyload"
                                                    src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product6.jpg') }}"
                                                    alt="Zilly Classic Tote Bag Hover">
                                            </a>

                                            <ul class="list-product-btn">
                                                <li>
                                                    <a href="{{ route('shoppingCart') }}" data-bs-toggle="offcanvas"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="tooltip">123Add to Cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-heart2"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="box-icon quickview hover-tooltip tooltip-left">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card-product-info">
                                            <a href="{{ route('product-details') }}"
                                                class="name-product link fw-medium text-md">
                                                Zilly Classic Tote Bag
                                            </a>
                                            <p class="price-wrap fw-medium">
                                                <span class="price-new">₹2,499</span>
                                                <span class="price-old">₹3,199</span>
                                            </p>

                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Tan</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                </li>
                                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Black</span>
                                                    <span class="swatch-value bg-dark"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Zilly Bag 4 -->
                                    <div class="card-product grid" data-availability="In stock" data-brand="Zilly">
                                        <div class="card-product-wrapper">
                                            <a href="{{ route('product-details') }}" class="product-img">
                                                <img class="img-product lazyload"
                                                    src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product7.jpg') }}"
                                                    alt="Zilly Classic Tote Bag">
                                                <img class="img-hover lazyload"
                                                    src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                    data-src="{{ asset('asset/images/products/bags/product1.jpg') }}"
                                                    alt="Zilly Classic Tote Bag Hover">
                                            </a>

                                            <ul class="list-product-btn">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-cart2"></span>
                                                        <span class="tooltip">Add to Cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);"
                                                        class="box-icon hover-tooltip tooltip-left">
                                                        <span class="icon icon-heart2"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="box-icon quickview hover-tooltip tooltip-left">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card-product-info">
                                            <a href="{{ route('product-details') }}"
                                                class="name-product link fw-medium text-md">
                                                Zilly Classic Tote Bag
                                            </a>
                                            <p class="price-wrap fw-medium">
                                                <span class="price-new">₹2,499</span>
                                                <span class="price-old">₹3,199</span>
                                            </p>

                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Tan</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                </li>
                                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Black</span>
                                                    <span class="swatch-value bg-dark"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <!-- Pagination -->
                                    <ul class="wg-pagination">
                                        <li class="active">
                                            <div class="pagination-item">1</div>
                                        </li>
                                        <li>
                                            <a href="#" class="pagination-item">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="pagination-item">
                                                <i class="icon-arr-right2"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /Section Product -->
            <div class="flat-spacing-5 line-top flat-wrap-iconbox">
                <div class="container">
                    <div dir="ltr" class="swiper tf-swiper wow fadeInUp"
                        data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 12,
            "speed": 800,
            "preventInteractionOnTransition": false,
            "touchStartPreventDefault": false,
            "pagination": { "el": ".sw-pagination-iconbox", "clickable": true },
            "breakpoints": {
                "575": { "slidesPerView": 2, "spaceBetween": 24 },
                "768": { "slidesPerView": 3, "spaceBetween": 24 },
                "1200": { "slidesPerView": 3, "spaceBetween": 100 },
                "1440": { "slidesPerView": 3, "spaceBetween": 205 }
            }
        }'>
                        <div class="swiper-wrapper">

                            <!-- Premium Delivery -->
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <i class="fa-solid fa-truck-fast icon-fa"></i>
                                    <div class="content">
                                        <div class="title">Fast & Secure Delivery</div>
                                        <p class="desc text-grey-2">
                                            Get your favorite Zilly bags delivered safely and quickly.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Quality Guarantee -->
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <i class="fa-solid fa-bag-shopping icon-fa"></i>
                                    <div class="content">
                                        <div class="title">Premium Bag Quality</div>
                                        <p class="desc text-grey-2">
                                            Crafted with durable materials and elegant finishes.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Easy Returns -->
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <i class="fa-solid fa-rotate-left icon-fa"></i>
                                    <div class="content">
                                        <div class="title">Easy 7-Day Returns</div>
                                        <p class="desc text-grey-2">
                                            Not in love? Return your bag within 7 days, no questions asked.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Secure Payments -->
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <i class="fa-solid fa-shield-halved icon-fa"></i>
                                    <div class="content">
                                        <div class="title">100% Secure Payments</div>
                                        <p class="desc text-grey-2">
                                            Your payments are protected with trusted gateways.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Support -->
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-2">
                                    <i class="fa-solid fa-headset icon-fa"></i>
                                    <div class="content">
                                        <div class="title">24/7 Bag Support</div>
                                        <p class="desc text-grey-2">
                                            Our team is always ready to help you choose the perfect bag.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-iconbox justify-content-center"></div>
                    </div>
                </div>
            </div>
            <div class="overlay-filter" id="overlay-filter"></div>

        </div>

    

    </div>




    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="{{ asset('asset/js/sibforms.js') }}" defer></script>
    {{-- <script src="{{ asset('asset/js/quick-view.js') }}"></script> --}}

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



        $(document).on('click', '.quick-view-btn', function() {

            let productId = $(this).data('id');

            $.get(`/quick-view/${productId}`, function(res) {

                // Name & price
                $('#qv-name').text(res.name);
                $('#qv-price').text('₹' + res.price);
                $('#qv-old-price').text(res.old_price ? '₹' + res.old_price : '');
                $('#qv-description').text(res.description);

                // Images
                let imagesHtml = '';
                res.images.forEach(img => {
                    imagesHtml += `
                <div class="swiper-slide">
                    <img src="/storage/${img}" class="img-fluid">
                </div>`;
                });
                $('#qv-images').html(imagesHtml);

                // Colors
                let colorsHtml = '';
                res.colors.forEach(color => {
                    colorsHtml += `<span class="badge bg-secondary">${color}</span>`;
                });
                $('#qv-colors').html(colorsHtml);

                // Sizes
                let sizesHtml = '';
                res.sizes.forEach(size => {
                    sizesHtml += `<span class="badge bg-light text-dark">${size}</span>`;
                });
                $('#qv-sizes').html(sizesHtml);

                // Cart button
                $('#qv-add-to-cart').data('id', res.id);

                // Open modal
                $('#quickView').modal('show');
            });
        });
    </script>
@endsection
