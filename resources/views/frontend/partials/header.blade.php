<header id="header" class="header-default">
    <div class="container">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                    <i class="icon icon-categories1"></i>
                </a>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <a href="{{ route('home') }}" class="logo-header">
                    <img src="{{ asset('asset/images/logo/zillylogo.webp') }}" alt="logo" class="logo">
                </a>
            </div>
            <div class="col-xl-8 d-none d-xl-block">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-menu">
                        <li class="menu-item">
                            <a href="{{ route('home') }}" class="item-link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('about') }}" class="item-link">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('product') }}" class="item-link">Product</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contact') }}" class="item-link">Contact Us</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('faq') }}" class="item-link">Faq</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center">
                    <li class="nav-search">
                        <a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                            <i class="icon icon-search"></i>
                        </a>
                    </li>
                    <li class="nav-account">
                        <a href="#login" data-bs-toggle="offcanvas" class="nav-icon-item">
                            <i class="icon icon-user"></i>
                        </a>
                    </li>
                    <li class="nav-wishlist">
                        <a href="{{ route('wish-list') }}" class="nav-icon-item">
                            <i class="icon icon-heart"></i>
                            <span class="count-box"> {{ count(session('wishlist', [])) }}</span>
                        </a>
                    </li>
                    <li class="nav-cart">
                        <a href="javascript:void(0)" class="nav-icon-item" data-bs-toggle="offcanvas"
                            data-bs-target="#miniCartItems" aria-controls="miniCartItems">
                            <i class="icon icon-cart"></i>
                            <span class="count-box cart-count">{{ $cartItems->count() ?? 0 }}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<div class="offcanvas offcanvas-end popup-style-1 popup-shopping-cart" id="miniCartItems" tabindex="-1"
    aria-labelledby="shoppingCartLabel">
    @include('frontend.partials.mini-cart-items')
</div>
<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
{{-- <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });
</script> --}}
<script>
    $(document).on('click', '.add-to-cart', function(e) {
        e.preventDefault();

        let productId = $(this).data('id');

        $.ajax({
            url: "{{ route('cart.add') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                product_id: productId
            },
            success: function(res) {
                $('.cart-count').text(res.count);
                $('#miniCartItems').html(res.html);
                $('#tf-mini-cart-items').html(res.html);
            }
        });
    });


    $(document).on('click', '.remove', function() {

        let itemId = $(this).data('id');

        $.ajax({
            url: "{{ url('cart/remove') }}/" + itemId,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {

                // Update mini cart
                $('#miniCartItems').html(response.html);
                $('.cart-count').text(response.count);

            },
            error: function(xhr) {
                console.log(xhr.responseText);
                alert('CSRF or server error');
            }
        });
    });


    $(document).on('click', '.wishlist', function() {

        let id = $(this).data('id');

        $.post("{{ url('/wishlist/toggle') }}/" + id, {
                _token: "{{ csrf_token() }}"
            },
            function(res) {

                // alert(res.message);

                // 🔄 reload ONLY when added
                if (res.added) {
                    location.reload();
                }

            });
    });
    // PLUS
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

                // 🔹 Update quantity
                $('#qty-' + res.item_id).val(res.item_qty);

                // 🔹 Update item subtotal
                $('#subtotal-' + res.item_id).text('₹' + res.item_subtotal);

                // 🔹 Update cart total
                $('#cart-total').text('₹' + res.cart_total);

                // 🔹 Update cart count
                $('.cart-count').text(res.count);
            }
        });
    }
</script>
