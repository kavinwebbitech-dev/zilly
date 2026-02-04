<footer id="footer" class="footer-default xl-pb-70">
    <style>
        /* Footer General */
.footer-default {
     background-color: #fff;
    color: #333;
    font-family: 'Arial', sans-serif;
}

/* Footer Top */
.footer-top-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-logo img {
    max-width: 150px;
}

.tf-social-icon {
    display: flex;
    gap: 15px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.tf-social-icon li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background-color: #fff;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.tf-social-icon li a:hover {
    background-color: #000;
    color: #fff;
}

/* Footer Body */
.row-footer {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
}

.footer-col-block {
    flex: 1 1 250px; /* Flexible width */
}

.footer-inner-wrap {
    display: flex;
    flex: 2; /* Make About & Resource take double space if needed */
    justify-content: space-between;
    gap: 40px;
}

.footer-heading {
    margin-bottom: 15px;
}

/* Footer Info List */
.footer-info {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-info .item {
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.footer-info .item a {
    color: #333;
    text-decoration: none;
}

.footer-info .item a:hover {
    color: #000;
}

/* Footer Bottom */
.footer-bottom-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.tf-payment {
    display: flex;
    gap: 15px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.tf-payment li img {
    max-height: 30px;
    object-fit: contain;
}

/* Responsive */
@media (max-width: 991px) {
    .footer-top-wrap,
    .footer-bottom-wrap {
        flex-direction: column;
        align-items: flex-start;
    }

    .footer-inner-wrap {
        flex-direction: column;
    }
}

        </style>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="footer-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('asset/images/logo/zillylogo.webp') }}" class="logo" alt="Zilly Bags Logo">
                    </a>
                </div>
                <ul class="tf-social-icon style-large">
                    <li>
                        <a href="https://www.facebook.com/zillybags" class="social-item social-facebook">
                            <i class="icon icon-fb"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/zillybags" class="social-item social-instagram">
                            <i class="icon icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/zillybags" class="social-item social-linkedin">
                            <i class="icon icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/zillybags" class="social-item social-x">
                            <i class="icon icon-x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-body">
        <div class="container">
            <div class="row-footer">

                <!-- Business Contact -->
                <div class="footer-col-block s1">
                    <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                        Business Contact
                    </div>
                    <div class="tf-collapse-content">
                        <div class="footer-contact">
                            <ul class="footer-info">

                                <li class="item">
                                    <span class="box-icon">
                                        <i class="icon icon-location"></i>
                                    </span>
                                    <a target="_blank"
                                        href="https://www.google.com/maps?q=ZAYN+Importique,+Nava+India,+Coimbatore">
                                        <strong>ZAYN Importique</strong><br>
                                        Door no 35/9,<br>  
                                        Betaspace, Desabandhu street,<br>
                                        Ramnagar, <br>
                                        Coimbatore - 641009
                                    </a>
                                </li>

                                <li class="item">
                                    <span class="box-icon">
                                        <i class="icon icon-phone"></i>
                                    </span>
                                    <a href="tel:+918667873341">+91 86678 73341</a>
                                </li>

                                <li class="item">
                                    <span class="box-icon">
                                        <i class="icon icon-mail"></i>
                                    </span>
                                    <a href="mailto:support@zillybags.com">zaynimportique@gmail.com</a>
                                </li>

                            </ul>

                            <a href="https://www.google.com/maps?q=ZAYN+Importique,+Nava+India,+Coimbatore"
                                class="tf-btn btn-line-dark fw-normal">
                                <span class="text-sm text-transform-none">
                                    Get Direction
                                </span>
                                <i class="icon-arrow-top-left fs-8"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                

                <!-- About & Resource -->
                <div class="footer-inner-wrap s3">
                    <div class="footer-col-block inner-col">
                        <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                            About Us
                        </div>
                        <div class="tf-collapse-content">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('about') }}">About Zilly Bags</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('product') }}">Shop Bags</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-col-block inner-col">
                        <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                            Resource
                        </div>
                        <div class="tf-collapse-content">
                            <ul class="footer-menu-list">
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('term-and-condition') }}">Terms & Conditions</a></li>
                                <li><a href="{{ route('return-refund') }}">Returns & Refunds</a></li>
                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                                {{-- <li><a href="shipping.php">Shipping Info</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-wrap">
                <p class="text-dark">
                    Copyright © 2025
                    <span class="fw-medium">Zilly Bags.</span>
                    All Rights Reserved.
                </p>
                <ul class="tf-payment">
                    <li class="item"><img src="{{ asset('asset/images/payment/Visa.png') }}" alt="Visa"></li>
                    <li class="item"><img src="{{ asset('asset/images/payment/Mastercard.png') }}"
                            alt="Mastercard"></li>
                    <li class="item"><img src="{{ asset('asset/images/payment/GooglePay.png') }}"
                            alt="Google Pay"></li>
                    <li class="item"><img src="{{ asset('asset/images/payment/ApplePay.png') }}" alt="Apple Pay">
                    </li>
                    <li class="item"><img src="{{ asset('asset/images/payment/UnionPay.png') }}" alt="UnionPay">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
