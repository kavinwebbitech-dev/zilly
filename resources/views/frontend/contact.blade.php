@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">
        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Contact Us</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Contact Us</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Contact -->
        <section class="s-contact flat-spacing-13">
            <div class="container">
                <div class="wg-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27294.62418958524!2d151.25730233429948!3d-33.82005608618041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ab8bc95a137f%3A0x358f04a7f6f5f6a6!2sGrotto%20Point%20Lighthouse!5e0!3m2!1sen!2s!4v1733976867160!5m2!1sen!2s"
                        class="map" style="border:none;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <div class="title fw-medium display-md-2">
                                Contact Us
                            </div>
                            <p class="sub-title text-main">
                                Have a question? Please contact us using the customer support <br> channels below.
                            </p>
                            <ul class="contact-list">
                                <li>
                                    <p>
                                        Address:
                                        <a class="link"
                                            href="https://www.google.com/maps?q=15Yarranst,Punchbowl,NSW,Australia"
                                            target="_blank">
                                            15 Yarran st, Punchbowl, NSW, Australia
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Phone number:
                                        <a class="link" href="tel:123456">
                                            +1 234 567
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Email:
                                        <a class="link" href="mailto:contact@vineta.com">
                                            contact@vineta.com
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Open:
                                        <span class="text-main">
                                            8am - 7pm, Mon - Sat
                                        </span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="tf-social-icon style-large ">
                                <li>
                                    <a href="https://www.facebook.com/" class="social-item social-facebook">
                                        <i class="icon icon-fb"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" class="social-item social-instagram">
                                        <i class="icon icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/" class="social-item social-x">
                                        <i class="icon icon-x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                            class="icon icon-snapchat"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-right">
                            <div class="title fw-medium display-md-2">
                                Get In Touch
                            </div>
                            <p class="sub-title text-main">
                                Please submit all general enquiries in the contact form below and we look forward to
                                hearing from you soon.
                            </p>
                            <div class="form-contact-wrap">
                                <form method="post" class="form-default" id="contactform"
                                    action="https://themesflat.co/html/vineta/contact/contact-process.php">
                                    <div class="wrap">
                                        <div class="cols">
                                            <fieldset>
                                                <label for="name">Your name*</label>
                                                <input name="name" id="name" class="radius-8" type="text"
                                                    required>
                                            </fieldset>
                                            <fieldset>
                                                <label for="email">Your email*</label>
                                                <input name="email" id="email" class="radius-8" type="email"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <div class="cols">
                                            <fieldset class="textarea">
                                                <label for="message">Message*</label>
                                                <textarea name="message" id="message" required class="radius-8"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="button-submit send-wrap">
                                            <button class="tf-btn animate-btn" type="submit">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->





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
                                <img class="lazyload" data-src="images/demo/fashion-1.jpg" src="images/demo/fashion-1.jpg"
                                    alt="home-fashion">
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
    <!-- Reset pass -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Reset Your Password</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="#" class="form-login">
                    <div class="">
                        <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                            email to receive a link and securely reset it in just a few steps.</p>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Enter Your Email*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                Password</button>
                            <button type="button" data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
    <!-- Javascript -->
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/carousel.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/js/lazysize.min.js') }}"></script>
    <script src="{{ asset('asset/js/count-down.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/multiple-modal.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }} "></script>
    <script src="{{ asset('asset/js/sibforms.js') }}" defer></script>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
@endsection
