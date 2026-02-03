@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">
        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Frequently Asked Questions</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">FAQs</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- FAQ -->
        <section class="s-faq flat-spacing-13">
            <div class="container">
                <div class="row">

                    <!-- CONTACT CONTENT -->
                    <div class="col-lg-4">
                        <div class="sb-contact sticky-top">
                            <p class="title">Contact Us</p>
                            <p class="sub">
                                Have a question about our bags, orders, or delivery?
                                Our support team is here to help you.
                                <br><br>
                                Please allow 6–12 business days after your return reaches us
                                for refunds to be processed.
                            </p>

                            <ul class="contact-info">
                                <li><strong>Email:</strong> support@yourbagstore.com</li>
                                <li><strong>Phone:</strong> +91 98765 43210</li>
                                <li><strong>Working Hours:</strong> Mon – Sat (10 AM – 6 PM)</li>
                            </ul>

                            <div class="btn-group">
                                <a href="{{ route('contact') }}" class="tf-btn animate-btn">
                                    Contact Us
                                </a>
                                {{-- <a href="#" class="tf-btn btn-white animate-btn animate-dark">
                                    Chat With Us
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    <!-- FAQ CONTENT -->
                    <div class="col-lg-8">
                        <ul class="faq-list">

                            <!-- SHOPPING INFO -->
                            <li class="faq-item">
                                <p class="name-faq">Shopping Information</p>
                                <div class="faq-wrap" id="accordionShoping">

                                    <div class="widget-accordion">
                                        <div class="accordion-title" data-bs-toggle="collapse" data-bs-target="#shopOne"
                                            aria-expanded="true">
                                            <span>How long does bag delivery take?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="shopOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Orders are processed within 1–3 business days.
                                                    Delivery usually takes 4–7 business days depending on your location.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-accordion">
                                        <div class="accordion-title collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#shopTwo">
                                            <span>Do you offer free shipping?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="shopTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Yes! Free shipping is available on all bag orders above ₹999.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-accordion">
                                        <div class="accordion-title collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#shopThree">
                                            <span>Can I change my delivery address?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="shopThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Address changes are possible before the order is shipped.
                                                    Please contact support as soon as possible.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <!-- PAYMENT INFO -->
                            <li class="faq-item">
                                <p class="name-faq">Payment Information</p>
                                <div class="faq-wrap" id="accordionPayment">

                                    <div class="widget-accordion">
                                        <div class="accordion-title" data-bs-toggle="collapse" data-bs-target="#payOne"
                                            aria-expanded="true">
                                            <span>What payment methods do you accept?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="payOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    We accept Credit/Debit Cards, UPI, Net Banking,
                                                    Paytm, Google Pay, and PhonePe.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-accordion">
                                        <div class="accordion-title collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#payTwo">
                                            <span>Is Cash on Delivery available?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="payTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Yes, Cash on Delivery is available for selected locations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <!-- RETURNS -->
                            <li class="faq-item">
                                <p class="name-faq">Return & Exchange</p>
                                <div class="faq-wrap" id="accordionExchange">

                                    <div class="widget-accordion">
                                        <div class="accordion-title" data-bs-toggle="collapse" data-bs-target="#exOne"
                                            aria-expanded="true">
                                            <span>What is your return policy?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="exOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Bags can be returned within 14 days of delivery
                                                    if unused and in original condition.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-accordion">
                                        <div class="accordion-title collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#exTwo">
                                            <span>When will I get my refund?</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div id="exTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <p class="text-main">
                                                    Refunds are processed within 5–7 business days
                                                    after quality inspection.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!-- modal demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-1.jpg"
                                    src="images/demo/fashion-1.jpg" alt="home-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="index.html" class="demo-name link">Fashion Style 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-02.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-2.jpg"
                                    src="images/demo/fashion-2.jpg" alt="home-fashion">
                            </a>
                            <a href="home-fashion-02.html" class="demo-name link">Fashion Style
                                2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-florist.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/florist.jpg" src="images/demo/florist.jpg"
                                    alt="home-florist">
                            </a>
                            <a href="home-florist.html" class="demo-name link">Florist</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-ergonic-chair.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/ergonic-chair.jpg"
                                    src="images/demo/ergonic-chair.jpg" alt="home-chair">
                            </a>
                            <a href="home-ergonic-chair.html" class="demo-name link">Ergonic Chair</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-travel.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/travel.jpg" src="images/demo/travel.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-travel.html" class="demo-name link">Travel</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-book.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/books.jpg" src="images/demo/books.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-book.html" class="demo-name link">Books</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-watch.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/watch.jpg" src="images/demo/watch.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-watch.html" class="demo-name link">Watch</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/electronic.jpg"
                                    src="images/demo/electronic.jpg" alt="home-electronic">
                            </a>
                            <a href="home-electronic.html" class="demo-name link">Electronic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/furniture.jpg"
                                    src="images/demo/furniture.jpg" alt="home-furniture">
                            </a>
                            <a href="home-furniture.html" class="demo-name link">Furniture</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-women.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/women-fashion.jpg"
                                    src="images/demo/women-fashion.jpg" alt="home-women-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-fashion-women.html" class="demo-name link">Women
                                Fashion</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/comestic.jpg" src="images/demo/comestic.jpg"
                                    alt="home-comestic">
                            </a>
                            <a href="home-skincare.html" class="demo-name link">Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-bicycle.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/bicycle.jpg" src="images/demo/bicycle.jpg"
                                    alt="home-bicycle">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-bicycle.html" class="demo-name link">Bicycle</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/phonecase.jpg"
                                    src="images/demo/phonecase.jpg" alt="home-phonecase">
                            </a>
                            <a href="home-phonecase.html" class="demo-name link">Phone Case</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pet-accessories.jpg"
                                    src="images/demo/pet-accessories.jpg" alt="home-pet">
                            </a>
                            <a href="home-pet-accessories.html" class="demo-name link">Pet
                                Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sportwear.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/sportwear.jpg"
                                    src="images/demo/sportwear.jpg" alt="home-bicycle">
                            </a>
                            <a href="home-sportwear.html" class="demo-name link">Sportwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry.jpg" src="images/demo/jewelry.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry.html" class="demo-name link">Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electric-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/eletric-accessories.jpg"
                                    src="images/demo/eletric-accessories.jpg" alt="home-electric-accessories">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-electric-accessories.html" class="demo-name link">Electric Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-mega-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/mega-shop.jpg"
                                    src="images/demo/mega-shop.jpg" alt="home-mega-electronic">
                            </a>
                            <a href="home-mega-electronic.html" class="demo-name link">Mega Shop</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-vegetable.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supermarket.jpg"
                                    src="images/demo/supermarket.jpg" alt="home-supermarket">
                            </a>
                            <a href="home-vegetable.html" class="demo-name link">Supermarket</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pod.jpg" src="images/demo/pod.jpg"
                                    alt="home-pod">
                            </a>
                            <a href="home-pod.html" class="demo-name link">Print On Demand</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/baby.jpg" src="images/demo/baby.jpg"
                                    alt="home-baby">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-baby.html" class="demo-name link">Baby</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-plant.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/plant.jpg" src="images/demo/plant.jpg"
                                    alt="home-plant">
                            </a>
                            <a href="home-plant.html" class="demo-name link">Plant</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry2.jpg" src="images/demo/jewelry2.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry2.html" class="demo-name link">Jewelry 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pickleball.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pickleball.jpg"
                                    src="images/demo/pickleball.jpg" alt="home-pickleball">
                            </a>
                            <a href="home-pickleball.html" class="demo-name link">Pickleball</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-handcraft.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/handcraft.jpg"
                                    src="images/demo/handcraft.jpg" alt="home-handcraft">
                            </a>
                            <a href="home-handcraft.html" class="demo-name link">Handcraft</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/furniture2.jpg"
                                    src="images/demo/furniture2.jpg" alt="home-furniture">
                            </a>
                            <a href="home-furniture2.html" class="demo-name link">Furniture 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/skincare2.jpg"
                                    src="images/demo/skincare2.jpg" alt="home-skincare">
                            </a>
                            <a href="home-skincare2.html" class="demo-name link">Skincare 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-supplement.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supplement.jpg"
                                    src="images/demo/supplement.jpg" alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-supplement.html" class="demo-name link">Supplement</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-footwear.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/footwear.jpg" src="images/demo/footwear.jpg"
                                    alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-footwear.html" class="demo-name link">Footwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-glasses.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/glasses.jpg" src="images/demo/glasses.jpg"
                                    alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-glasses.html" class="demo-name link">Glasses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
