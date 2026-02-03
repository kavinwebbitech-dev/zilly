@extends('frontend.layouts.app')

@section('content')
    <style>
        .whatsapp-circle {
            width: 45px;
            height: 45px;
            background-color: #25D366;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            text-decoration: none;
        }

        .whatsapp-circle:hover {
            background-color: #1ebe5d;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <div id="wrapper">
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Checkout</h4>

                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <a class="breadcrumb-item" href="{{ route('product') }}">Collections</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Checkout</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Checkout Section -->
        <section class="tf-checkout py-5">
            <div class="container">
                <form action="{{ route('checkout.placeOrder') }}" method="POST">
                    @csrf
                    @if ($coupon)
                        <input type="hidden" name="coupon_code" value="{{ $coupon->code }}">
                    @endif

                    <div class="row gx-5">

                        <!-- LEFT COLUMN: Billing & Contact Info -->
                        <div class="col-xl-8 mb-4 mb-xl-0">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="mb-3">Billing Information</h5>
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <input type="text" name="firstname" value="{{ old('firstname') }}"
                                                class="form-control @error('firstname') is-invalid @enderror"
                                                placeholder="First Name" required>
                                            @error('firstname')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="lastname" value="{{ old('lastname') }}"
                                                class="form-control @error('lastname') is-invalid @enderror"
                                                placeholder="Last Name" required>
                                            @error('lastname')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="text" name="country" value="{{ old('country') }}"
                                        class="form-control mb-3 @error('country') is-invalid @enderror"
                                        placeholder="Country" required>
                                    @error('country')
                                        <div class="text-danger small mb-3">{{ $message }}</div>
                                    @enderror

                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="form-control mb-3 @error('address') is-invalid @enderror"
                                        placeholder="Address" required>
                                    @error('address')
                                        <div class="text-danger small mb-3">{{ $message }}</div>
                                    @enderror

                                    <input type="text" name="apartment" value="{{ old('apartment') }}"
                                        class="form-control mb-3" placeholder="Apartment (Optional)">

                                    <div class="row g-3 mb-3">
                                        <div class="col-md-4">
                                            <input type="text" name="city" value="{{ old('city') }}"
                                                class="form-control @error('city') is-invalid @enderror" placeholder="City"
                                                required>
                                            @error('city')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <select name="state" class="form-select @error('state') is-invalid @enderror"
                                                required>
                                                <option value="">State</option>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state }}" @selected(old('state') == $state)>
                                                        {{ $state }}</option>
                                                @endforeach
                                            </select>
                                            @error('state')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="zipcode" value="{{ old('zipcode') }}"
                                                class="form-control @error('zipcode') is-invalid @enderror"
                                                placeholder="Zipcode" required>
                                            @error('zipcode')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control mb-4 @error('phone') is-invalid @enderror" placeholder="Phone"
                                        required>
                                    @error('phone')
                                        <div class="text-danger small mb-3">{{ $message }}</div>
                                    @enderror

                                    <h5 class="mb-3">Contact Information</h5>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Email"
                                        required>
                                    @error('email')
                                        <div class="text-danger small mb-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: Cart Summary & Payment -->
                        <div class="col-xl-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">

                                    <h5 class="mb-3">Your Cart</h5>

                                    {{-- Coupon Code (included in same form) --}}
                                    <div class="mb-3 d-flex gap-2">
                                        <input type="text" id="coupon_code" class="form-control"
                                            placeholder="Coupon code"
                                            value="{{ old('coupon_code', session('coupon.code') ?? '') }}">
                                        <button type="button" id="applyCouponBtn" class="btn btn-dark">Apply</button>
                                    </div>

                                    {{-- Messages --}}
                                    <div id="couponMessage" class="small mt-1"></div>

                                    @error('coupon_code')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror

                                    @if (session('error'))
                                        <div class="text-danger small mt-1">{{ session('error') }}</div>
                                    @elseif (session('success'))
                                        <div class="text-success small mt-1">{{ session('success') }}</div>
                                    @endif

                                    {{-- Cart Items --}}
                                    <ul class="list-group mb-3">
                                        @foreach ($cartItems as $item)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $item->product->images->find($item->product_image_id) ? asset('storage/' . $item->product->images->find($item->product_image_id)->image) : asset('asset/images/no-image.png') }}"
                                                        alt="{{ $item->product->name }}"width="50" class="me-2 rounded">
                                                    <span class="fw-medium">{{ $item->name }}</span>
                                                    <span class="badge bg-primary ms-2">{{ $item->qty }}</span>
                                                </div>
                                                <span>₹{{ number_format($item->price * $item->qty, 2) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>

                                    {{-- Totals --}}
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item d-flex justify-content-between">Subtotal
                                            <span>₹{{ number_format($cartSubtotal, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">Discount
                                            <span>-₹{{ number_format($couponDiscount, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">Shipping
                                            <span>Free Shipping</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">Tax
                                            <span>Incl All Tax</span>
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                                        <span>Total</span>
                                        <span>₹{{ number_format($cartTotal, 2) }}</span>
                                    </div>

                                    {{-- Payment --}}
                                    <div class="d-flex justify-content-between align-items-start gap-4">

                                        <!-- Payment Section -->
                                        <div>
                                            <h5 class="mb-2">Payment</h5>
                                            <p class="text-muted mb-3">All transactions are secure.</p>

                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    value="cod" id="cod" checked>
                                                <label class="form-check-label" for="cod">
                                                    Cash on Delivery
                                                </label>
                                            </div>
                                        </div>

                                        <!-- WhatsApp Section -->
                                        <div class="mt-2">
                                            <a href="https://wa.me/918667873341?text=I%20want%20to%20place%20an%20order"
                                                target="_blank" class="whatsapp-circle">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </div>

                                    </div>


                                    @guest
                                        <!-- User is not logged in -->
                                        <button class="btn btn-dark w-100" data-bs-toggle="offcanvas"
                                            data-bs-target="#login">
                                            Place Order
                                        </button>
                                    @endguest

                                    @auth
                                        <!-- User is logged in -->
                                        <button type="submit" class="btn btn-dark w-100">
                                            Place Order
                                        </button>
                                    @endauth


                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </section>

    </div>
    <script>
        $(document).ready(function() {

            function applyCoupon(code) {
                if (!code) return;

                $.ajax({
                    url: "{{ route('checkout.applyCoupon') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        coupon_code: code
                    },
                    success: function(res) {
                        if (res.success) {
                            $('#couponMessage').html('<span class="text-success">' + res.success +
                                '</span>');

                            // Mark coupon as applied in localStorage
                            localStorage.setItem('couponApplied', 'true');

                            // Reload page once
                            setTimeout(function() {
                                window.location.reload();
                            }, 100);

                        } else if (res.error) {
                            $('#couponMessage').html('<span class="text-danger">' + res.error +
                                '</span>');
                        }
                    },
                    error: function(xhr) {
                        $('#couponMessage').html(
                            '<span class="text-danger">Something went wrong</span>');
                    }
                });
            }

            // Click event for "Apply" button
            $('#applyCouponBtn').click(function() {
                let code = $('#coupon_code').val().trim();
                if (code === '') {
                    $('#couponMessage').html('<span class="text-danger">Please enter a coupon code</span>');
                    return;
                }
                applyCoupon(code);
            });

            // Automatically apply coupon from session, only if not applied yet
            @if (session('coupon'))
                if (!localStorage.getItem('couponApplied')) {
                    applyCoupon("{{ session('coupon.code') }}");
                }
            @endif

        });
    </script>
@endsection
