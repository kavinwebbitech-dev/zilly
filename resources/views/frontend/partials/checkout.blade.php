@extends('frontend.layouts.app')

@section('content')
    <div id="wrapper">
        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Checkout</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Checkout</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Checkout Section -->
        <div class="flat-spacing-13">
            <div class="container">
                <div class="row">
                    <!-- Left Column: Checkout Form -->
                    <div class="col-xl-8">
                        <form action="{{ route('checkout.placeOrder') }}" method="POST" class="tf-checkout-cart-main">
                            @csrf
                            @if ($coupon)
                                <input type="hidden" name="coupon_id" value="{{ $coupon->id }}">
                            @endif
                            <!-- Billing Info -->
                            <div class="box-ip-checkout">
                                <div class="title text-lg fw-medium">Checkout</div>

                                <!-- Name -->
                                <div class="grid-2 mb_16">
                                    <div class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="firstname" placeholder=" " type="text"
                                            name="firstname" value="{{ old('firstname') }}" required>
                                        <label class="tf-field-label" for="firstname">First name</label>
                                    </div>
                                    <div class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="lastname" placeholder=" " type="text"
                                            name="lastname" value="{{ old('lastname') }}" required>
                                        <label class="tf-field-label" for="lastname">Last name</label>
                                    </div>
                                </div>

                                <!-- Address -->
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="country" type="text" name="country"
                                        placeholder=" " value="{{ old('country') }}" required>
                                    <label class="tf-field-label" for="country">Country</label>
                                </fieldset>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="address" type="text" name="address"
                                        placeholder="" value="{{ old('address') }}" required>
                                    <label class="tf-field-label" for="address">Address</label>
                                </fieldset>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input type="text" class="tf-field-input tf-input" name="apartment" placeholder=""
                                        value="{{ old('apartment') }}">
                                    <label class="tf-field-label" for="apartment">Apartment, suite, etc (optional)</label>
                                </fieldset>

                                <!-- City, State, Zip -->
                                <div class="grid-3 mb_16">
                                    <fieldset class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="city" type="text" name="city"
                                            placeholder="" value="{{ old('city') }}" required>
                                        <label class="tf-field-label" for="city">City</label>
                                    </fieldset>

                                    <div class="tf-select select-square">
                                        <select name="state" id="state" required>
                                            <option value="">State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state }}" @selected(old('state') == $state)>
                                                    {{ $state }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <fieldset class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="code" type="text" name="zipcode"
                                            placeholder="" value="{{ old('zipcode') }}" required>
                                        <label class="tf-field-label" for="code">Zipcode/Postal</label>
                                    </fieldset>
                                </div>

                                <!-- Phone -->
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="phone" type="text" name="phone"
                                        placeholder="" value="{{ old('phone') }}" required>
                                    <label class="tf-field-label" for="phone">Phone</label>
                                </fieldset>
                            </div>

                            <!-- Contact Info -->
                            <div class="box-ip-contact">
                                <div class="title">
                                    <div class="text-lg fw-medium">Contact Information</div>
                                    <a href="#login" data-bs-toggle="offcanvas" class="text-sm link">Log in</a>
                                </div>
                                <fieldset class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="email" placeholder=" " type="email"
                                        name="email" value="{{ old('email') }}" required>
                                    <label class="tf-field-label" for="email">Email</label>
                                </fieldset>
                            </div>
                            <!-- Payment Method -->
                            <div class="box-ip-payment">
                                <div class="title">
                                    <div class="text-lg fw-medium mb_4">Payment</div>
                                    <p class="text-sm text-main">All transactions are secure and encrypted.</p>
                                </div>

                                <fieldset class="mb_12">
                                    <label class="check-payment">
                                        <input type="radio" name="payment_method" value="cod"
                                            class="tf-check-rounded" checked>
                                        <span class="text-payment text-sm">Cash on Delivery (COD)</span>
                                    </label>
                                </fieldset>

                                <p class="text-dark-6 text-sm">
                                    Your personal data will be used to process your order and for other purposes described
                                    in our
                                    {{-- <a href="{{ route('privacy.policy') }}" class="fw-medium text-decoration-underline link text-sm">privacy policy</a>. --}}
                                </p>
                            </div>


                            <!-- Checkout Button -->
                            <div class="btn-order mt-3">
                                <button type="submit" class="tf-btn btn-dark2 w-100">
                                    Checkout
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Right Column: Cart Sidebar -->
                    <div class="col-xl-4">
                        <div class="tf-page-cart-sidebar">
                            <div class="cart-box order-box">
                                <div class="title text-lg fw-medium">In your cart</div>
                                <form method="GET" action="{{ route('checkout.applyCoupon') }}"
                                    class="d-flex align-items-center justify-content-between gap-10">
                                    <input type="text" name="coupon_code" id="couponCode" class="coupon-input"
                                        placeholder="Coupon code" value="{{ request('coupon_code') }}" required>
                                    <button type="submit">Apply</button>
                                </form>


                                @if ($coupon)
                                    <p class="text-success">
                                        Coupon <strong>{{ $coupon->code }}</strong> applied
                                        (Remaining: {{ $coupon->user_limit }})
                                    </p>
                                @endif

                                <ul class="list-order-product"> <br>
                                    @foreach ($cartItems as $item)
                                        <li class="order-item">
                                            <figure class="img-product">
                                                <img src="{{ $item->product->images->first()
                                                    ? asset('storage/' . $item->product->images->first()->image)
                                                    : asset('assets/images/no-image.png') }}"
                                                    alt="{{ $item->product->name }}">
                                                <span class="quantity">{{ $item->qty }}</span>
                                                {{-- ₹{{ number_format($item->price * $item->qty, 2) }} --}}

                                            </figure>

                                            <div class="content">
                                                <div class="info">
                                                    <p class="name text-sm fw-medium">{{ $item->name }}</p>
                                                    <span class="variant">{{ $item->color_size ?? '' }}</span>
                                                </div>

                                                <span class="price text-sm fw-medium">
                                                    ₹{{ number_format($item->price * $item->qty, 2) }}
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <ul class="list-total">
                                    <li class="total-item d-flex justify-content-between">
                                        <span>Subtotal:</span>
                                        <span>₹{{ number_format($cartSubtotal, 2) }}</span>
                                    </li>

                                    <li class="total-item d-flex justify-content-between">
                                        <span>Discount:</span>
                                        <span>-₹{{ number_format($couponDiscount, 2) }}</span>
                                    </li>

                                    <li class="total-item d-flex justify-content-between">
                                        <span>Shipping:</span>
                                        <span>₹{{ number_format($shippingPrice, 2) }}</span>
                                    </li>

                                    <li class="total-item d-flex justify-content-between">
                                        <span>Tax:</span>
                                        <span>₹{{ number_format($cartTax, 2) }}</span>
                                    </li>
                                </ul>

                                <div class="subtotal text-lg fw-medium d-flex justify-content-between">
                                    <span>Total:</span>
                                    <span class="total-price-order">${{ number_format($cartTotal, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Right Column -->
                </div>
            </div>
        </div>
    </div>
@endsection
