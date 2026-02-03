@extends('frontend.layouts.app')
@section('content')
    <!-- Title Page -->

    @php
        $wishlist = $wishlist ?? session()->get('wishlist', []);
    @endphp
    <section class="tf-page-title">
        <div class="container">
            <div class="box-title text-center">
                <h4 class="title">My Wishlist</h4>
                <div class="breadcrumb-list">
                    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                    <div class="breadcrumb-item dot"><span></span></div>
                    <div class="breadcrumb-item current">Wishlist</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Title Page -->

    <!-- Wish list -->
    <section class="flat-spacing-13">
        <div class="container">
            <div class="wrapper-wishlist tf-grid-layout tf-col-2 lg-col-3 xl-col-4">

                @php
                    $wishlist = session('wishlist', []);
                @endphp

                @forelse ($wishlist as $productId => $value)
                    @php
                        $product = \App\Models\Product::with('images')->find($productId);
                    @endphp

                    @if ($product)
                        <div class="card-product style-wishlist style-3 card-product-size wishlist-card"
                            data-id="{{ $product->id }}">

                            <i class="icon icon-close wishlist-remove" data-id="{{ $product->id }}"></i>


                            <div class="card-product-wrapper">
                                <a href="{{ route('product-details', $product->id) }}" class="product-img">
                                    @if ($product->images->count())
                                        <img class="img-product"
                                            src="{{ asset('storage/' . $product->images->first()->image) }}"
                                            alt="{{ $product->name }}">
                                    @else
                                        <img class="img-product" src="{{ asset('asset/images/no-image.png') }}"
                                            alt="No image">
                                    @endif

                                    {{-- HOVER IMAGE --}}
                                    @if ($product->images->count() > 1)
                                        <img class="img-hover" src="{{ asset('storage/' . $product->images[1]->image) }}">
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
                                </ul>
                            </div>

                            <div class="card-product-info">
                                <a href="{{ route('product-details', $product->id) }}"
                                    class="name-product link fw-medium text-md">
                                    {{ $product->name }}
                                </a>

                                <p class="price-wrap fw-medium">
                                    <span class="price-new">₹{{ number_format($product->price, 2) }}</span>
                                    @if ($product->original_price)
                                        <span class="price-old">₹{{ number_format($product->original_price, 2) }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="tf-wishlist-empty text-center">
                        <p class="text-md text-noti">No product were added to the wishlist.</p>
                        <a href="{{ route('product') }}" class="tf-btn animate-btn btn-back-shop">Back to Shopping</a>
                    </div>
                @endforelse


            </div>

        </div>
    </section>

    </div>

    <script>
        $(document).on('click', '.wishlist-remove', function(e) {
            e.preventDefault();

            let productId = $(this).data('id');
            let card = $(this).closest('.wishlist-card');

            $.ajax({
                url: "{{ route('wishlist.remove') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId
                },
                success: function(res) {
                    if (res.success) {

                        // Remove card smoothly
                        card.fadeOut(300, function() {
                            $(this).remove();

                            // If wishlist empty
                            if ($('.wishlist-card').length === 0) {
                                location.reload();
                            }
                        });

                        // Update wishlist count
                        $('#wishlistCount').text(res.count);

                    } else {
                        alert(res.error);
                    }
                },
                error: function() {
                    alert('Something went wrong');
                }
            });
        });
    </script>



@endsection
