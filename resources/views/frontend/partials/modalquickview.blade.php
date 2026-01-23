<div class="modal fade modalCentered modal-quick-view" id="quickView" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>

            <div class="row g-0">

                <!-- Images -->
                <div class="col-md-6">
                    <div class="swiper tf-single-slide">
                        <div class="swiper-wrapper" id="qv-images">
                            {{-- images injected by JS --}}
                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

                <!-- Info -->
                <div class="col-md-6 p-4">
                    <h5 id="qv-name"></h5>

                    <div class="product-price mb-2">
                        <span class="price-new" id="qv-price"></span>
                        <span class="price-old" id="qv-old-price"></span>
                    </div>

                    <p id="qv-description"></p>

                    <!-- Colors -->
                    <div class="mb-3">
                        <strong>Color:</strong>
                        <div id="qv-colors" class="d-flex gap-2 mt-2"></div>
                    </div>

                    <!-- Sizes -->
                    <div class="mb-3">
                        <strong>Size:</strong>
                        <div id="qv-sizes" class="d-flex gap-2 mt-2"></div>
                    </div>

                    <button class="tf-btn w-100" id="qv-add-to-cart">
                        Add to cart
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>
<script>
    $(document).on('click', '.quick-view-btn', function(e) {
        e.preventDefault();

        let btn = $(this);

        $('#quickView .product-name a').text(btn.data('name'));
        $('#quickView .price-new').text('₹' + btn.data('price'));
        $('#quickView .price-old').text('₹' + btn.data('old-price'));
        $('#quickView .badge-sale').text(btn.data('discount') + '% Off');
        $('#quickView .tf-product-heading .text').text(btn.data('description'));

        // Store product id on Add to Cart button
        $('#quickView .add-to-cart')
            .attr('data-id', btn.data('id'));

        $('#quickView').modal('show');
    });
    $(document).on('click', '#quickView .add-to-cart', function(e) {
        e.preventDefault();

        let productId = $(this).data('id');
        let color = $('.color-btn.active').data('color');
        let size = $('.size-btn.active').data('size');
        let qty = $('#quickView .quantity-product').val();

        if (!color || !size) {
            alert('Please select color and size');
            return;
        }

        $.ajax({
            url: "{{ route('cart.add') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                product_id: productId,
                selected_color: color,
                selected_size: size,
                qty: qty
            },
            success: function(res) {
                $('.cart-count').text(res.count);
                $('#miniCartItems').html(res.html);

                $('#quickView').modal('hide');
            }
        });
    });


</script>
