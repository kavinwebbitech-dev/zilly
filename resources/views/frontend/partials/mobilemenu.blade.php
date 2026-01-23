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
                    <a href="{{ route('wish-list') }}" class="site-nav-icon">
                        <i class="icon icon-heart"></i>
                        Wishlist
                    </a>
                    <a href="#login" data-bs-toggle="offcanvas" class="site-nav-icon">
                        <i class="icon icon-user"></i>
                        Login / Register
                    </a>
                </div>
                <div class="mb-notice">
                    <a href="contact-us.php" class="text-need">Need Help?</a>
                </div>
                <div class="mb-contact">
                    <p>Address: Zilly Bags, Chennai, Tamil Nadu, India</p>
                </div>
                <ul class="mb-info">
                    <li>
                        Email:
                        <b class="fw-medium">support@zillybags.com</b>
                    </li>
                    <li>
                        Phone:
                        <b class="fw-medium">+91 98765 43210</b>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <div class="bottom-bar-language">
                <div class="tf-currencies">
                    <select class="image-select center style-default type-currencies">
                        <option selected data-thumbnail="images/country/in.png">INR</option>
                        <option data-thumbnail="images/country/us.png">USD</option>
                        <option data-thumbnail="images/country/eu.png">EUR</option>
                    </select>
                </div>
                <div class="tf-languages">
                    <select class="image-select center style-default type-languages">
                        <option selected>English</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /mobile menu -->
