@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">

        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Terms & Conditions</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Terms & Conditions</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Term -->
        <section class="s-term-user flat-spacing-25">
            <div class="container">
                <div class="content">
                    <div class="term-item">
                        <p class="term-title">
                            Copyright and Trademark
                        </p>
                        <p class="term-text body-text text-main">
                            Unless otherwise indicated, material on this website, including but not limited
                            to texts, images, illustrations, software, audio clips, video clips, animation
                            files, is subject to the copyright and trademark rights of The Company Private
                            Limited. Consequently, the material on this website may not be copied,
                            reproduced, modified, posted, transmitted, distributed, in whole or in part in
                            any form whatsoever, without the prior written consent of The Company Private
                            Limited. All rights reserved.
                        </p>
                    </div>
                    <div class="term-item">
                        <p class="term-title">
                            Products, Content and Specifications
                        </p>
                        <p class="term-text body-text text-main">
                            All features, content, specifications, products and prices of products and
                            services described or depicted on this website are subject to change at any time
                            without notice. Certain weights, measures and similar descriptions are
                            approximate and are provided for convenience purposes only. We make all
                            reasonable efforts to accurately display the attributes of our products,
                            including the applicable colors; however, the actual color you see will depend
                            on your computer system and we cannot guarantee that your computer will
                            accurately display such colors. The inclusion of any products or services in
                            this website at a particular time does not imply or warrant that these products
                            or services will be available at any time. It is your responsibility to
                            ascertain and obey all applicable local, state and international laws in regard
                            to the possession, use and sale of any item purchased from this website. By
                            placing an order, you represent that the products ordered will be used only in a
                            lawful manner.
                        </p>
                    </div>
                    <div class="term-item">
                        <p class="term-title">
                            Shipping Limitations
                        </p>
                        <p class="term-text body-text text-main">
                            When an order is placed, it will be shipped to an address designated by the
                            purchaser as long as that shipping address is compliant with the shipping
                            restrictions contained on this website. All purchases from this website are made
                            pursuant to a shipment contract. As a result, risk of loss and title for items
                            purchased from this website pass to you upon delivery of the items to the
                            carrier. You are responsible for filing any claims with carriers for damaged
                            and/or lost shipments.
                        </p>
                    </div>
                    <div class="term-item">
                        <p class="term-title">
                            Duties and Taxes
                        </p>
                        <p class="term-text body-text text-main">
                            You are responsible for duties and taxes outside Singapore. All items entering a
                            foreign country are subject to customs inspection and assessment of the duties
                            and taxes in accordance with that country’s national laws.
                        </p>
                    </div>
                    <div class="term-item">
                        <p class="term-title">
                            Your Account
                        </p>
                        <p class="term-text body-text text-main">
                            You are responsible for maintaining the confidentiality of your account and
                            password information, and you agree to accept responsibility for all activities
                            that occur under your account and password. This website and The Company Pte Ltd
                            reserves the right to refuse service, terminate accounts remove or edit content
                            or cancel orders.By placing an order, you warrant that you are over 18 years of
                            age, and that you are providing shop.company.com or shop.beetle.com.sg with
                            accurate, truthful information and that you have the authority to place the
                            order.
                        </p>
                    </div>
                    <div class="term-item">
                        <p class="term-title">
                            Exchange and Refund Policy (Online Shop)
                        </p>
                        <div class="text-wrap">
                            <p class="term-text body-text text-main">
                                Electronic Communications
                            </p>
                            <p class="term-text body-text text-main">
                                When you visit this website and/or send email to us, you consent to receive
                                electronic communications from us. You agree that all agreements, notices,
                                disclosures and other communications that we sent you electronically satisfy
                                any
                                legal requirement that such communications be in writing
                                Exclusions of Warranties
                            </p>
                            <p class="term-text body-text text-main">
                                The Company Private Limited makes no representative or warranty regarding
                                the good working order or condition of this website, its suitability for
                                use, or that its use will be uninterrupted or error-free. All information or
                                material provided in this website to you â€œas isâ€ and without warranties
                                of any kind, expressed or implied, including without limitation, warranties
                                or conditions of merchantability, fitness, quality, durability or
                                suitability for any particular purpose, or non-infringement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Term -->

    </div>
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
                                <img class="lazyload" data-src="images/demo/fashion-2.jpg" src="images/demo/fashion-2.jpg"
                                    alt="home-fashion">
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
    <!-- /modal demo -->

    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    </ul>
                </div>
                <div class="mb-other-content">
                    <div class="group-icon">
                        <a href="wish-list.html" class="site-nav-icon">
                            <i class="icon icon-heart"></i>
                            Wishlist
                        </a>
                        <a href="#login" data-bs-toggle="offcanvas" class="site-nav-icon">
                            <i class="icon icon-user"></i>
                            Login
                        </a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-us.html" class="text-need">Need Help?</a>
                    </div>
                    <div class="mb-contact">
                        <p>Address: 123 Yarran st, Punchbowl, NSW 2196, Australia</p>
                    </div>
                    <ul class="mb-info">
                        <li>
                            Email:
                            <b class="fw-medium">clientcare@ecom.com</b>
                        </li>
                        <li>
                            Phone:
                            <b class="fw-medium">1.888.838.3022</b>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="images/country/us.png">USD</option>
                            <option data-thumbnail="images/country/fr.png">EUR</option>
                            <option data-thumbnail="images/country/ger.png">EUR</option>
                            <option data-thumbnail="images/country/vn.png">VND</option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->

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
