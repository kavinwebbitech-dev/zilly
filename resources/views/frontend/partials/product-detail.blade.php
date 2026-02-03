@extends('frontend.layouts.app')

@section('content')
    <style>
        .tf-product-info-wrap {
            padding: 0 12px;
            line-height: 1.4;
        }

        .fk-brand {
            font-size: 13px;
            color: #878787;
            margin-bottom: 4px;
        }

        .fk-title {
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .fk-rating {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 6px;
        }

        .fk-rating-count {
            font-size: 13px;
            color: #878787;
        }

        .fk-price-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .fk-price {
            font-size: 28px;
            font-weight: 600;
        }

        .fk-mrp {
            text-decoration: line-through;
            color: #878787;
        }

        .fk-discount {
            color: #388e3c;
            font-weight: 500;
        }

        .fk-stock-info {
            margin-bottom: 12px;
            font-size: 13px;
        }

        .in-stock {
            background: #d4edda;
            color: #155724;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: 500;
            margin-right: 6px;
        }

        .low-stock {
            color: #d9534f;
            font-weight: 500;
            display: block;
            margin-top: 4px;
        }

        .stock-bar {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            margin-top: 4px;
            width: 100%;
        }

        .stock-progress {
            height: 4px;
            background: #ff6f61;
            border-radius: 2px;
        }

        .fk-colors {
            margin-bottom: 12px;
        }

        .fk-color-list {
            display: flex;
            gap: 8px;
            margin-top: 6px;
        }

        .fk-color-item {
            border: 1px solid #ddd;
            padding: 4px;
            cursor: pointer;
        }

        .fk-color-item img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
        }

        .fk-actions {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
        }

        .fk-btn {
            flex: 1;
            text-align: center;
            padding: 12px;
            font-weight: 600;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
        }

        .fk-btn.cart {
            background: #ff9f00;
        }

        .fk-btn.buy {
            background: #fb641b;
        }

        .tf-product-cate-sku {
            margin-bottom: 12px;
            font-size: 13px;
        }

        .tf-product-cate-sku .label {
            font-weight: 500;
            color: #555;
        }

        .product-description {
            font-size: 14px;
            color: #333;
        }

        .fk-size-list {
            margin-top: 6px;
        }

        .fk-size-item {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* circle shape */
            border: 1px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: 600;
            user-select: none;
            transition: all 0.2s;
        }

        .fk-size-item.available:hover {
            border-color: #ff9f00;
            background-color: #ffe5b3;
        }

        .fk-size-item.selected {
            background-color: #ff9f00;
            color: #fff;
            border-color: #ff9f00;
        }

        .fk-size-item.disabled {
            background-color: #f5f5f5;
            color: #aaa;
            border-color: #ddd;
            cursor: not-allowed;
        }
    </style>

    <div id="wrapper">

        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Product Details</h4>

                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <a class="breadcrumb-item" href="{{ route('product') }}">Collections</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">{{ $product->name }}</div>
                    </div>
                </div>
            </div>
        </section> <br><br>

        <!-- Product Section -->
        <section class="flat-single-product">
            <div class="container">
                <div class="row">

                    <!-- LEFT: IMAGES -->
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap">
                            <div class="swiper tf-product-media-main" id="mainProductSwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($product->images as $index => $image)
                                        <div class="swiper-slide" data-index="{{ $index }}">
                                            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid"
                                                alt="{{ $product->name }}"style="border-radius: 12px;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT: INFO -->
                    <div class="col-md-6">
                        <div class="tf-zoom-main"></div>

                        <div class="tf-product-info-wrap other-image-zoom">
                            <div class="tf-product-info-list">

                                <!-- Heading: Brand + Title -->
                                <div class="tf-product-heading">
                                    <span class="brand-product">{{ $product->brand?->name ?? 'ZILLY' }}</span>
                                    <h5 class="product-name fw-medium">{{ $product->name }}</h5>

                                    <!-- Rating -->
                                    <div class="product-rate">
                                        <div class="list-star">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i
                                                    class="icon icon-star {{ $i < $product->avg_rating ? 'active' : '' }}"></i>
                                            @endfor
                                        </div>
                                        <span class="count-review">({{ $product->reviews_count ?? 4.5 }} reviews)</span>
                                    </div>

                                    <!-- Price -->
                                    <div class="product-price">
                                        <div class="display-sm price-new price-on-sale">
                                            ₹{{ number_format($product->price, 2) }}</div>
                                        @if ($product->original_price)
                                            <div class="display-sm price-old">
                                                ₹{{ number_format($product->original_price, 2) }}</div>
                                            <span class="badge-sale">
                                                {{ round((($product->original_price - $product->price) / $product->original_price) * 100) }}%
                                                Off
                                            </span>
                                        @endif
                                    </div>

                                    <!-- Stock -->
                                    <div class="product-stock">
                                        @if ($product->status > 0)
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
                                        @else
                                            <span class="stock out-stock">Out of Stock</span>
                                        @endif
                                    </div>
                                    <div class="product-progress-sale">
                                        <div class="title-hurry-up"><span class="text-primary fw-medium">HURRY
                                                UP!</span> Only <span class="count">4</span> items left!</div>
                                        <div class="progress-sold">
                                            <div class="value" style="width: 0%;" data-progress="70"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Variants: Colors -->
                                <div class="fk-colors">
                                    <p class="label">Colors</p>
                                    <div class="fk-color-list">
                                        @foreach ($product->images as $index => $img)
                                            <div class="fk-color-item" data-index="{{ $index }}"
                                                data-id="{{ $img->id }}">
                                                <img src="{{ asset('storage/' . $img->image) }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="hidden" id="selected_image_id"
                                        value="{{ $product->images->first()->id }}">
                                </div>
                                <div class="fk-sizes">
                                    <p class="label">Size</p>
                                    <div class="fk-size-list d-flex gap-2">
                                        <!-- Clickable sizes -->
                                        <div class="fk-size-item available" data-size="S">S</div>
                                        <div class="fk-size-item available" data-size="M">M</div>

                                        <!-- Disabled sizes -->
                                        <div class="fk-size-item disabled" data-size="L">L</div>
                                        <div class="fk-size-item disabled" data-size="XL">XL</div>
                                    </div>
                                    <input type="hidden" id="selected_size" value="S">
                                </div>

                            </div>

                            <!-- Quantity + Buttons -->
                            <div class="tf-product-total-quantity">
                                <div class="group-btn d-flex gap-2">
                                    @guest
                                        <a href="#login" data-bs-toggle="offcanvas"
                                            class="tf-btn animate-btn btn-add-to-cart flex-fill">
                                            Login to Add
                                        </a>
                                    @endguest

                                    @auth
                                        <a href="#miniCartItems" data-bs-toggle="offcanvas"
                                            class="tf-btn animate-btn btn-add-to-cart flex-fill add-to-cart"
                                            data-product-id="{{ $product->id }}">
                                            Add to cart
                                        </a>
                                    @endauth

                                    <a href="{{ Auth::check() ? route('checkout', ['product' => $product->id]) : 'javascript:void(0)' }}"
                                        class="tf-btn btn-primary animate-btn flex-fill btn-buy-now"
                                        data-product-id="{{ $product->id }}">
                                        Buy it now
                                    </a>

                                    <script>
                                        document.addEventListener('click', function(e) {
                                            if (e.target.closest('.btn-buy-now')) {
                                                @if (!Auth::check())
                                                    e.preventDefault();
                                                    alert('Please login to continue purchase.');
                                                    // Optionally, redirect to login page:
                                                    // window.location.href = "{{ route('login') }}";
                                                @endif
                                            }
                                        });
                                    </script>



                                </div>

                                <!-- Hidden inputs for selected options -->
                                <input type="hidden" id="selected_size" value="S">
                                <input type="hidden" id="selected_image_id"
                                    value="{{ $product->images->first()->id }}">




                            </div>

                            <!-- SKU & Categories -->
                            <ul class="tf-product-cate-sku text-md">
                                <li class="item-cate-sku"><span class="label">Categories:</span> <span
                                        class="value">{{ $product->category?->name ?? 'Women / Bags' }}</span></li>
                            </ul>

                        </div>
                    </div>
                </div>


            </div>
    </div>
    </section>
    </div>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    @php
        $productData = $product->images->map(function ($img) use ($product) {
            return [
                'image' => asset('storage/' . $img->image),
                'name' => $product->name,
                'price' => number_format($product->price),
                'original_price' => $product->original_price ? number_format($product->original_price) : null,
                'short_description' => $product->short_description,
                'offers' => [
                    ['title' => 'Special Price', 'desc' => 'Extra discount included'],
                    ['title' => 'Bank Offer', 'desc' => '₹50 off on select cards'],
                ],
            ];
        });
    @endphp

    <script>
        // Initialize Swiper
        document.addEventListener('DOMContentLoaded', function() {
            const mainSwiper = new Swiper('#mainProductSwiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: false,
            });

            const productDataJs = @json($productData);

            function handleColorClick(index, clickedEl) {
                document.querySelectorAll('.fk-color-item').forEach(el => el.classList.remove('active'));
                clickedEl.classList.add('active');
                mainSwiper.slideTo(index);

                // Update info
                document.querySelector('.fk-title').textContent = productDataJs[index].name;
                document.querySelector('.fk-price').textContent = '₹' + productDataJs[index].price;
                const mrpEl = document.querySelector('.fk-mrp');
                const discountEl = document.querySelector('.fk-discount');

                if (productDataJs[index].original_price) {
                    mrpEl.textContent = '₹' + productDataJs[index].original_price;
                    const discount = Math.round(
                        ((parseInt(productDataJs[index].original_price.replace(/,/g, '')) -
                                parseInt(productDataJs[index].price.replace(/,/g, ''))) /
                            parseInt(productDataJs[index].original_price.replace(/,/g, ''))) * 100
                    );
                    discountEl.textContent = discount + '% off';
                    mrpEl.style.display = '';
                    discountEl.style.display = '';
                } else {
                    mrpEl.style.display = 'none';
                    discountEl.style.display = 'none';
                }

                document.querySelector('.product-description').innerHTML = productDataJs[index].short_description;

                const offersEl = document.querySelector('.fk-offers ul');
                offersEl.innerHTML = '';
                productDataJs[index].offers.forEach(offer => {
                    const li = document.createElement('li');
                    li.innerHTML = `<strong>${offer.title}</strong> ${offer.desc}`;
                    offersEl.appendChild(li);
                });
            }

            document.querySelectorAll('.fk-color-item').forEach(item => {
                item.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    handleColorClick(index, this);
                });
            });

            // Select first color by default
            if (document.querySelector('.fk-color-item')) {
                handleColorClick(0, document.querySelector('.fk-color-item'));
            }
        });

        // Add to cart (AJAX)
        // Add to cart (AJAX)
        // ============================
        // MINI CART AJAX FUNCTIONALITY
        // ============================

        $(document).ready(function() {

            // --- Add to Cart ---
            $(document).on('click', '.btn-add-to-cart', function(e) {
                e.preventDefault();
                let productId = $(this).data('product-id');
                let imageId = $('#selected_image_id').val();

                $.ajax({
                    url: "{{ route('cart.add') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        image_id: imageId
                    },
                    success: function(res) {
                        $('#miniCartItems').html(res.html);
                        $('.cart-count').text(res.count);
                    }
                });
            });

            // --- Remove Item ---
            $(document).on('click', '.tf-mini-cart-item .icon-close.remove', function() {
                let productId = $(this).data('id');

                $.ajax({
                    url: "{{ url('cart.remove') }}/" + productId,
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId
                    },
                    success: function(res) {
                        $('#miniCartItems').html(res.html);
                        $('.cart-count').text(res.count);
                    }
                });
            });

            // --- Increase Quantity ---
            $(document).on('click', '.tf-mini-cart-item .plus-btn', function() {
                let productId = $(this).data('id');

                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        action: 'increase'
                    },
                    success: function(res) {
                        $('#miniCartItems').html(res.html);
                        $('.cart-count').text(res.count);
                    }
                });
            });

            // --- Decrease Quantity ---
            $(document).on('click', '.tf-mini-cart-item .minus-btn', function() {
                let productId = $(this).data('id');

                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        action: 'decrease'
                    },
                    success: function(res) {
                        $('#miniCartItems').html(res.html);
                        $('.cart-count').text(res.count);
                    }
                });
            });

            // --- Quantity Input Change (Optional) ---
            $(document).on('change', '.tf-mini-cart-item input.quantity-input', function() {
                let productId = $(this).data('id');
                let qty = parseInt($(this).val());

                if (qty < 1) qty = 1; // Minimum 1
                $(this).val(qty);

                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        action: 'set',
                        quantity: qty
                    },
                    success: function(res) {
                        $('#miniCartItems').html(res.html);
                        $('.cart-count').text(res.count);
                    }
                });
            });

        });

        document.querySelectorAll('.fk-color-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.fk-color-item').forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                let index = parseInt(this.dataset.index);
                let imageId = this.dataset.id;

                // save selected image id
                document.getElementById('selected_image_id').value = imageId;

                mainSwiper.slideTo(index);
            });
        });
        $(document).ready(function() {
            $('.fk-size-item.available').on('click', function() {
                // Remove selected from others
                $('.fk-size-item.available').removeClass('selected');
                // Add selected to clicked
                $(this).addClass('selected');

                // Save selected size in hidden input
                $('#selected_size').val($(this).data('size'));
            });

            // Optional: alert selected size on change
            $('#selected_size').on('change', function() {
                console.log('Selected size:', $(this).val());
            });
        });
        $(document).ready(function() {

            // BUY NOW button click
            $(document).on('click', '.btn-buy-now', function(e) {
                e.preventDefault();

                let productId = $(this).data('product-id');
                let size = $('#selected_size').val(); // selected size
                let imageId = $('#selected_image_id').val(); // selected color/image

                console.log('Buy now clicked:', {
                    productId,
                    size,
                    imageId
                });

                // Option 1: send AJAX to create cart then redirect to checkout
                $.ajax({
                    url: "{{ route('cart.add') }}", // backend method
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        image_id: imageId,
                        quantity: 1 // default quantity
                    },
                    success: function(res) {
                        // Redirect to checkout after adding product
                        window.location.href = "{{ route('checkout') }}";
                    }
                });

                // Option 2: If you just want to redirect with GET params
                // window.location.href = `/checkout?product_id=${productId}&size=${size}&image_id=${imageId}`;
            });

        });
    </script>
@endsection
