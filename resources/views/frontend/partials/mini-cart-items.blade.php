<div class="canvas-wrapper">
    <div class="popup-header">
        <span class="title">Shopping cart</span>
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
    </div>
    {{-- <div class="wrap">
        <div class="tf-mini-cart-threshold">
            <div class="text">
                Spend <span class="fw-medium">$100</span> more to get <span class="fw-medium">Free
                    Shipping</span>
            </div>
            <div class="tf-progress-bar tf-progress-ship">
                <div class="value" style="width: 0%;" data-progress="75">
                    <i class="icon icon-car"></i>
                </div>
            </div>
        </div> --}}

    <div class="tf-mini-cart-main">
        <div class="tf-mini-cart-sroll">
            <div class="tf-mini-cart-items" style="padding: 10px 0 0 0">
                @forelse ($cartItems as $item)
                    <div class="tf-mini-cart-item" data-id="{{ $item->id }}">
                        <div class="tf-mini-cart-image">
                            <img
                                src="{{ $item->productImage?->image
                                    ? asset('storage/' . $item->productImage->image)
                                    : asset('asset/images/no-image.png') }}">
                        </div>

                        <div class="tf-mini-cart-info">
                            <div class="d-flex justify-content-between">
                                <span class="title text-md fw-medium">{{ $item->name }}</span>
                                <i class="icon icon-close remove" data-id="{{ $item->id }}"></i>
                            </div>

                            <p class="price-wrap text-sm fw-medium">
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
                                @if ($item->color_size)
                                    <div class="text-sm text-muted">
                                        Color: {{ $item->color_size['color'] }},
                                        Size: {{ $item->color_size['size'] }}
                                    </div>
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
                <h2 class="mt-3 mx-4 text-xl p-2 ">You may also like</h2>

                <div class="swiper-wrapper">
                    @foreach ($relatedProducts as $product)
                        <div class="swiper-slide p-4">
                            <div class="tf-mini-cart-item line radius-16 py-3">
                                <div class="tf-mini-cart-image">
                                    <img
                                        src="{{ $item->productImage?->image
                                            ? asset('storage/' . $item->productImage->image)
                                            : asset('asset/images/no-image.png') }}">
                                </div>

                                <div class="tf-mini-cart-info justify-content-center">
                                    <span class="title">{{ $product->name }}</span>
                                    <div class="price-section my-2 d-flex align-items-center gap-10">
                                        <p class="price-wrap">
                                            ₹{{ number_format($product->price, 2) }}
                                        </p>
                                        <p>
                                            <s class="text-decoration-line-through text-gray-500">
                                                ₹{{ number_format($product->original_price, 2) }}
                                            </s>
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
            @endif


        </div>
    </div>
    <div class="tf-mini-cart-bottom">
        <div class="tf-mini-cart-tool">
            <div class="tf-mini-cart-tool-btn btn-add-gift">
                <i class="icon icon-gift2"></i>
                <div class="text-xxs">Add gift wrap</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-add-note">
                <i class="icon icon-note"></i>
                <div class="text-xxs">Order note</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-coupon">
                <i class="icon icon-coupon"></i>
                <div class="text-xxs">Coupon</div>
            </div>
            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                <i class="icon icon-car"></i>
                <div class="text-xxs">Shipping</div>
            </div>
        </div>
        <div class="tf-mini-cart-bottom-wrap">
            <div class="tf-mini-cart-total text-sm d-flex justify-content-between align-items-center">
                <strong class="text-xl fw-medium">Total:</strong>
                <span class="text-primary fw-medium" id="cart-total">
                    ₹{{ number_format($cartItems->sum(fn($i) => $i->price * $i->qty), 2) }}
                </span>
            </div>

            {{-- <div class="tf-cart-tax text-sm opacity-8">Taxes and shipping calculated at checkout --}}
        </div>
        <div class="tf-cart-checkbox" style="margin-left: 29px;margin-bottom: 32px;">
            <div class="tf-checkbox-wrapp ">
                <input class="" type="checkbox" id="CartDrawer-Form_agree" name="agree_checkbox">
                <div>
                    <i class="icon-check"></i>
                </div>
            </div>
            <label for="CartDrawer-Form_agree" class="text-sm">
                I agree with the
                <a href="term-and-condition.php" title="Terms of Service" class="fw-medium">terms
                    and conditions</a>
            </label>
        </div>
        <div class="tf-mini-cart-view-checkout d-flex gap-10 p-10" style="padding: 10px">
            <a href="checkout.php"
                class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                    out</span></a>
            <a href="{{ route('shoppingCart') }}" class="tf-btn btn-out-line-dark2 w-100 justify-content-center">View
                cart</a>
        </div>
    </div>
</div>
<div class="tf-mini-cart-tool-openable add-gift">
    <div class="overplay tf-mini-cart-tool-close"></div>
    <form action="#" class="tf-mini-cart-tool-content">
        <div class="tf-mini-cart-tool-text text-sm fw-medium">Add gift wrap</div>
        <div class="tf-mini-cart-tool-text1">The product will be wrapped carefully.
            Fee is only <span class="text fw-medium text-dark">$10.00</span>. Do you want a
            gift wrap?</div>
        <div class="tf-cart-tool-btns">
            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Add a
                Gift Wrap</button>
            <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Cancel</div>
        </div>
    </form>
</div>
<div class="tf-mini-cart-tool-openable add-note">
    <div class="overplay tf-mini-cart-tool-close"></div>
    <form action="#" class="tf-mini-cart-tool-content">
        <label for="Cart-note" class="tf-mini-cart-tool-text text-sm fw-medium">Order
            note</label>
        <textarea name="note" id="Cart-note" placeholder="Instruction for seller..."></textarea>
        <div class="tf-cart-tool-btns">
            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                type="submit">Save</button>
            <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
        </div>
    </form>
</div>
<div class="tf-mini-cart-tool-openable coupon">
    <div class="overplay tf-mini-cart-tool-close"></div>
    <form action="#" class="tf-mini-cart-tool-content">
        <div class="tf-mini-cart-tool-text text-sm fw-medium">Add coupon</div>
        <div class="tf-mini-cart-tool-text1">* Discount will be calculated and
            applied at checkout</div>
        <input type="text" name="text" placeholder="">
        <div class="tf-cart-tool-btns">
            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                type="submit">Save</button>
            <div class="tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">Close</div>
        </div>
    </form>
</div>
<div class="tf-mini-cart-tool-openable estimate-shipping">
    <div class="overplay tf-mini-cart-tool-close"></div>
    <form id="shipping-form" class="tf-mini-cart-tool-content">
        <div class="tf-mini-cart-tool-text text-sm fw-medium">Shipping estimates</div>
        <div class="field">
            <p class="text-sm">Country</p>
            <div class="tf-select">
                <select class="w-100" id="shipping-country-form" name="address[country]" data-default="">
                    <option value="Australia"
                        data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                        Australia</option>
                    <option value="Austria" data-provinces='[]'>Austria</option>
                    <option value="Belgium" data-provinces='[]'>Belgium</option>
                    <option value="Canada" data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                    </option>
                    <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                    <option value="Denmark" data-provinces='[]'>Denmark</option>
                    <option value="Finland" data-provinces='[]'>Finland</option>
                    <option value="France" data-provinces='[]'>France</option>
                    <option value="Germany" data-provinces='[]'>Germany</option>
                    <option selected value="United States"
                        data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                        United States</option>
                    <option value="United Kingdom"
                        data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                        United Kingdom</option>
                    <option value="India" data-provinces='[]'>India</option>
                    <option value="Japan" data-provinces='[]'>Japan</option>
                    <option value="Mexico" data-provinces='[]'>Mexico</option>
                    <option value="South Korea" data-provinces='[]'>South Korea</option>
                    <option value="Spain" data-provinces='[]'>Spain</option>
                    <option value="Italy" data-provinces='[]'>Italy</option>
                    <option value="Vietnam"
                        data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                        Vietnam</option>
                </select>
            </div>
        </div>
        <div class="field">
            <p class="text-sm">State/Province</p>
            <div class="tf-select">
                <select id="shipping-province-form" name="address[province]" data-default=""></select>
            </div>
        </div>
        <div class="field">
            <p class="text-sm">Zipcode</p>
            <input type="text" data-opend-focus id="zipcode" name="address[zip]" value="">
        </div>
        <div id="zipcode-message" class="error" style="display: none;">
            We found one shipping rate available for undefined.
        </div>
        <div id="zipcode-success" class="success" style="display: none;">
            <p>We found one shipping rate available for your address:</p>
            <p class="standard">Standard at <span>$0.00</span> USD</p>
        </div>
        <div class="tf-cart-tool-btns">
            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                type="submit">Estimate</button>
            <div class="tf-mini-cart-tool-primary tf-btn btn-out-line-dark2 w-100 tf-mini-cart-tool-close">
                Close</div>
        </div>
    </form>
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
