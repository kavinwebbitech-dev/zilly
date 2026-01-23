<div class="row">
    <section class="tf-page-title">
        <div class="container">
            <div class="box-title text-center">
                <h4 class="title">Shopping Cart</h4>

                <div class="breadcrumb-list">
                    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                    <div class="breadcrumb-item dot"><span></span></div>
                    <a class="breadcrumb-item" href="{{ route('product') }}">Collections</a>
                    <div class="breadcrumb-item dot"><span></span></div>
                    <div class="breadcrumb-item current">Women’s Bags</div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- LEFT : MINI CART ITEMS -->
    <div class="col-lg-8 " style="padding: 40px;">
        <div class="tf-mini-cart-items "style="margin-top: 30px;">

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
                            <span class="title fw-medium">{{ $item->name }}</span>
                            <i class="icon icon-close remove" data-id="{{ $item->id }}"></i>
                        </div>
                        {{-- <div class="info-variant">
                            <select class="text-xs">
                                @foreach ($product->colors as $color)
                                    @foreach ($product->size as $size)
                                        <option value="{{ $color }} / {{ $size }}">
                                            {{ $color }} / {{ $size }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                            <i class="icon-pen edit"></i>
                        </div> --}}

                        <p class="price-wrap text-sm">
                            ₹{{ number_format($item->price, 2) }}
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <div class="wg-quantity small">
                                <button class="btn-quantity minus-btn" data-id="{{ $item->id }}">-</button>

                                <input class="quantity-product" id="qty-{{ $item->id }}" value="{{ $item->qty }}"
                                    readonly>

                                <button class="btn-quantity plus-btn" data-id="{{ $item->id }}">+</button>
                            </div>

                            <div class="tf-mini-cart-subtotal text-sm">
                                <span class="item-subtotal" data-id="{{ $item->id }}">
                                    ₹{{ number_format($item->price * $item->qty, 2) }}
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            @empty
                <p class="text-center">Cart is empty 🛒</p>
            @endforelse

        </div>
    </div>

    <!-- RIGHT : CART SUMMARY -->
    @if ($cartItems->count() > 0)
        <div class="col-lg-4">
            <div class="tf-page-cart-sidebar"style="margin-top: 30px;">

                <form class="cart-box checkout-cart-box">
                    <div class="cart-head mb-3">
                        <div class="total-discount text-xl fw-medium d-flex justify-content-between">
                            <span>Total:</span>
                            <span class="cart-total">
                                ${{ number_format($cartTotal, 2) }} USD
                            </span>
                        </div>
                        <p class="text-sm mt-1">
                            Taxes and shipping calculated at checkout
                        </p>
                    </div>

                    <div class="check-agree mb-3">
                        <input type="checkbox" class="tf-check" id="check-agree">
                        <label for="check-agree">
                            I agree with
                            <a href="#">terms and conditions</a>
                        </label>
                    </div>

                    <a href="{{ route('checkout') }}" class="tf-btn btn-dark2 w-100">
                        Checkout
                    </a>
                </form>

            </div>
        </div>
    @endif
</div>

<script>
    $(document).on('click', '.plus-btn', function() {
        updateQty($(this).data('id'), 'plus');
    });

    $(document).on('click', '.minus-btn', function() {
        updateQty($(this).data('id'), 'minus');
    });

    function updateQty(itemId, type) {
        $.ajax({
            url: "{{ route('cart.update') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: itemId,
                type: type
            },
            success: function(res) {
                $('.quantity-product[data-id="' + res.item_id + '"]')
                    .val(res.item_qty);
                $('.item-subtotal[data-id="' + res.item_id + '"]')
                    .text('₹' + res.item_subtotal);
                $('.cart-total').text('₹' + res.cart_total);

                $('.cart-count').text(res.count);
            }
        });
    }

    $(document).on('click', '.remove', function() {

        let itemId = $(this).data('id');

        $.ajax({
            url: "{{ url('cart/remove') }}/" + itemId,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: itemId
            },
            success: function(res) {

                location.reload();

                $('.tf-mini-cart-item[data-id="' + res.item_id + '"]').fadeOut(200, function() {
                    $(this).remove();
                });

                $('.cart-total').text('₹' + res.cart_total);

                $('.cart-count').text(res.count);
                if (res.empty) {
                    $('.tf-mini-cart-items').html(
                        '<p class="text-center mt-3">Cart is empty 🛒</p>'
                    );
                }
            }
        });
    });
</script>
