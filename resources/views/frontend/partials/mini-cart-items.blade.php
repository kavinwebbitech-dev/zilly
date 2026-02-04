<div class="canvas-wrapper">
    <div class="popup-header">
        <span class="title">Shopping cart</span>
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
    </div>
    <div class="tf-mini-cart-main">
        <div class="tf-mini-cart-sroll">
            <div class="tf-mini-cart-items" style="padding: 10px 0 0 0">
                @forelse ($cartItems as $item)
                    <div class="tf-mini-cart-item" data-id="{{ $item->id }}">
                        <div class="tf-mini-cart-image">
                            <img src="{{ $item->product->images->find($item->product_image_id) ? asset('storage/' . $item->product->images->find($item->product_image_id)->image) : asset('asset/images/no-image.png') }}"
                                alt="{{ $item->product->name }}">
                        </div>
                        <div class="tf-mini-cart-info">
                            <div class="d-flex justify-content-between">
                                <span class="title text-md fw-medium">{{ $item->name }}</span>
                                <i class="icon icon-trash remove" data-id="{{ $item->id }}"></i>
                            </div>

                            <p class="price-wrap text-sm fw-medium mt-3">
                                <span class="new-price text-primary">
                                    ₹{{ number_format($item->price, 2) }}
                                </span>

                                @if ($item->original_price)
                                    <span class="old-price text-decoration-line-through">
                                        ₹{{ number_format($item->original_price, 2) }}
                                    </span>
                                @endif
                                @if ($item->discount_percent)
                                    <span class="discount-percent text-danger">
                                        ({{ $item->discount_percent }}% OFF)
                                    </span>
                                @endif

                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="wg-quantity small">
                                    <button class="btn-quantity minus-btn" data-id="{{ $item->id }}">-</button>

                                    <input class="quantity-product" id="qty-{{ $item->id }}"
                                        value="{{ $item->qty }}" readonly>

                                    <button class="btn-quantity plus-btn" data-id="{{ $item->id }}">+</button>
                                </div>

                                <div class="tf-mini-cart-bottom-wrap tf-mini-cart-subtotal text-sm">
                                    Subtotal:
                                    <span class="text-primary fw-medium" id="subtotal-{{ $item->id }}">
                                        ₹{{ number_format($item->price * $item->qty, 2) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center" style="padding:50px ">Cart is empty 🛒</p>
                @endforelse

            </div>
            @php
                $relatedProducts = $relatedProducts ?? collect();
            @endphp

            @if ($relatedProducts->isNotEmpty())
                <div class="cart-related-header">
                    <h2 class="text-xl mx-2">You may also like</h2>

                    <div class="cart-related-nav">
                        <div class="swiper-button-prev related-prev" style="color: #6b3f1d !important;"></div>
                        <div class="swiper-button-next related-next" style="color: #6b3f1d !important;"></div>
                    </div>
                </div>

                <div class="swiper relatedSwiper cart-related-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($relatedProducts as $product)
                            <div class="swiper-slide p-3">
                                <div class="tf-mini-cart-item line radius-16 p-2">
                                    <div class="tf-mini-cart-image">
                                        <img
                                            src="{{ $product->productImage?->image
                                                ? asset('storage/' . $product->productImage->image)
                                                : asset('asset/images/no-image.png') }}">
                                    </div>

                                    <div class="tf-mini-cart-info justify-content-center">
                                        <span class="title">{{ $product->name }}</span>

                                        <div class="price-section my-2 d-flex align-items-center gap-10">
                                            <p class="price-wrap">₹{{ number_format($product->price, 2) }}</p>
                                            <p>
                                                <s>₹{{ number_format($product->original_price, 2) }}</s>
                                                <span class="text-danger">
                                                    ({{ $product->discount_percent }}% OFF)
                                                </span>
                                            </p>
                                        </div>

                                        <button class="tf-btn add-to-cart" data-id="{{ $product->id }}">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif



        </div>
    </div>
    <div class="tf-mini-cart-bottom">
        <div class="tf-mini-cart-bottom-wrap">
            <div class="tf-mini-cart-total text-sm d-flex justify-content-between align-items-center">
                <strong class="text-xl fw-medium">Total:</strong>
                <span class="text-primary fw-medium" id="cart-total">
                    ₹{{ number_format($cartItems->sum(fn($i) => $i->price * $i->qty), 2) }}
                </span>
            </div>
        </div>
        <div class="tf-cart-checkbox" style="margin-left: 29px; margin-bottom: 32px;">
            <div class="tf-checkbox-wrapp">
                <input type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox" required>
                <div>
                    <i class="icon-check"></i>
                </div>
            </div>
            <label for="CartDrawer-Form_agree" class="text-sm">
                I agree with the
                <a href="{{ route('term-and-condition') }}" title="Terms of Service" class="fw-medium">terms and
                    conditions</a>
            </label>
        </div>

        <div class="tf-mini-cart-view-checkout d-flex gap-10 p-10" style="
    padding: 10px;
">
            <a href="{{ route('checkout') }}" id="checkoutBtn"
                class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center disabled">
                <span>Check out</span>
            </a>
            <a href="{{ route('shoppingCart') }}" id="viewCartBtn"
                class="tf-btn btn-out-line-dark2 w-100 justify-content-center disabled">
                View cart
            </a>
        </div>

        <script>
            $(document).ready(function() {
                const $checkbox = $('#CartDrawer-Form_agree');
                const $checkoutBtn = $('#checkoutBtn');
                const $viewCartBtn = $('#viewCartBtn');

                function toggleButtons() {
                    if ($checkbox.is(':checked')) {
                        // Enable buttons
                        $checkoutBtn.removeClass('disabled').attr('href', "{{ route('checkout') }}");
                        $viewCartBtn.removeClass('disabled').attr('href', "{{ route('shoppingCart') }}");
                    } else {
                        // Disable buttons
                        $checkoutBtn.addClass('disabled').attr('href', 'javascript:void(0)');
                        $viewCartBtn.addClass('disabled').attr('href', 'javascript:void(0)');
                    }
                }

                // Run on page load
                toggleButtons();

                // Toggle whenever checkbox changes
                $checkbox.on('change', toggleButtons);
            });
        </script>

        <style>
            .tf-btn.disabled {
                pointer-events: none;
                /* Prevent click */
                opacity: 0.5;
                /* Gray out */
            }
        </style>


    </div>
</div>

<script>
    $(document).on('click', '.color-btn', function() {
        $('.color-btn').removeClass('active');
        $(this).addClass('active');

        let color = $(this).data('color');
        $('.value-currentColor').text(color);
    });
    $(document).on('click', '.size-btn', function() {
        $('.size-btn').removeClass('active');
        $(this).addClass('active');

        let size = $(this).data('size');
        $('.value-currentSize').text(size);
    });
</script>
<script>
    new Swiper(".cart-related-swiper", {
        slidesPerView: 1,
        spaceBetween: 12,
        allowTouchMove: false,
        navigation: {
            nextEl: ".related-next",
            prevEl: ".related-prev",
        },
    });
</script>

<style>
    /* Header row */
    .cart-related-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
    }

    /* Remove bootstrap margins from h2 */
    .cart-related-header h2 {
        margin: 0;
        font-size: 18px;
    }

    /* Arrow wrapper */
    .cart-related-nav {
        display: flex;
        gap: 8px;
    }

    /* Swiper container width fix */
    .cart-related-swiper {
        width: 100%;
        padding: 0 16px 16px;
        box-sizing: border-box;
        overflow: hidden;
    }

    /* Slide width FIX */
    .cart-related-swiper .swiper-slide {
        width: 100% !important;
    }

    /* Product card width */
    .cart-related-swiper .tf-mini-cart-item {
        width: 100%;
        box-sizing: border-box;
    }

    /* Image sizing */
    .cart-related-swiper .tf-mini-cart-image img {
        width: 80px;
        height: 100px;
        object-fit: cover;
        border-radius: 12px;
    }

    /* Arrow buttons */
    .related-prev,
    .related-next {
        position: static !important;
        /* VERY IMPORTANT */
        width: 28px;
        height: 28px;
        color: #6b3f1d;
    }

    .related-prev::after,
    .related-next::after {
        font-size: 14px;
    }
</style>
