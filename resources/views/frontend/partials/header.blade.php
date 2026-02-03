<style>
    .whatsapp-fixed {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    .whatsapp-circle {
        width: 55px;
        height: 55px;
        background: #25D366;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        text-decoration: none;
    }

    .whatsapp-circle:hover {
        background: #20b954;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#search"
                            class="nav-icon-item">
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
<div class="whatsapp-fixed">
    <a href="https://wa.me/918667873341?text=I%20want%20to%20place%20an%20order" target="_blank"
        class="whatsapp-circle">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
{{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<div class="offcanvas offcanvas-end popup-style-1 popup-shopping-cart " id="miniCartItems" tabindex="-1"
    aria-labelledby="shoppingCartLabel">
    @include('frontend.partials.mini-cart-items')
</div>
<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });
</script>
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


    $(document).on('click', '.remove', function(e) {
        e.preventDefault(); // ✅ stop GET request
        e.stopPropagation();

        let itemId = $(this).data('id');

        $.ajax({
            url: "{{ url('cart/remove') }}/" + itemId,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {

                // ✅ update mini cart HTML
                $('#miniCartItems').html(response.html);

                // ✅ update cart count
                $('.cart-count').text(response.count);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
                alert('Server error');
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
