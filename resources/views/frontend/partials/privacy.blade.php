@extends('frontend.layouts.app')
@section('content')
    <div id="wrapper">


        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">Privacy Policy</h4>
                    <div class="breadcrumb-list">
                         <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Privacy Policy</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Privacy policy -->
        <section class="s-term-user flat-spacing-13">
            <div class="container">
                <div class="content">

                    <div class="term-item">
                        <p class="term-title">
                            1. Information We Collect
                        </p>
                        <div class="text-wrap">
                            <p class="term-text body-text text-main">
                                When you visit the Zilly Bags website, we automatically collect certain information
                                about your device, including your web browser, IP address, time zone, and cookies
                                installed on your device. As you browse our site, we also collect information about
                                the pages or products you view, referral sources, and how you interact with our
                                website. This is referred to as “Device Information”.
                            </p>
                            <p class="term-text body-text text-main">
                                We collect Device Information using the following technologies:
                            </p>
                            <p class="term-text body-text text-main">
                                “Cookies” are data files placed on your device to improve your browsing experience.
                                You can disable cookies through your browser settings. <br><br>
                                “Log files” track actions occurring on the website and collect data such as IP
                                address, browser type, Internet service provider, referring/exit pages, and
                                date/time stamps. <br><br>
                                “Web beacons”, “tags”, and “pixels” are electronic files used to understand how users
                                browse the website.
                                <br><br>
                                When you make a purchase or attempt to purchase from Zilly Bags, we collect personal
                                information including your name, billing address, shipping address, payment
                                information, email address, and phone number. This is referred to as “Order
                                Information”.
                            </p>
                        </div>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            2. How We Use Your Information
                        </p>
                        <div class="text-wrap">
                            <p class="term-text body-text text-main">
                                We use the Order Information we collect to process and fulfill your orders,
                                including payment processing, shipping arrangements, and order confirmations.
                            </p>
                            <p class="term-text body-text text-main">
                                Additionally, we use your information to: <br>
                                Communicate with you regarding your orders and inquiries; <br>
                                Screen orders for potential fraud or risk; <br>
                                Provide you with updates, promotions, or marketing communications related to Zilly
                                Bags, based on your preferences.
                                <br><br>
                                Device Information helps us improve and optimize our website, analyze customer
                                behavior, and evaluate the effectiveness of our marketing efforts.
                            </p>
                        </div>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            3. Sharing Your Personal Information
                        </p>
                        <div class="text-wrap">
                            <p class="term-text body-text text-main">
                                We share your Personal Information with trusted third-party service providers who
                                assist us in operating our website, processing payments, delivering products, and
                                analyzing customer interactions. These parties are obligated to keep your
                                information secure.
                            </p>
                            <p class="term-text body-text text-main">
                                We may also share your information to comply with legal obligations, respond to
                                lawful requests, or protect the rights and safety of Zilly Bags and our customers.
                            </p>
                        </div>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            4. Data Retention
                        </p>
                        <p class="term-text body-text text-main">
                            We retain your Order Information for our records unless and until you request its
                            deletion, or as required by applicable laws.
                        </p>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            5. Your Rights
                        </p>
                        <p class="term-text body-text text-main">
                            You have the right to access, correct, or request deletion of your personal information.
                            You are responsible for maintaining the confidentiality of your account details.
                            <br><br>
                            Zilly Bags reserves the right to refuse service, terminate accounts, or cancel orders at
                            our discretion. By placing an order, you confirm that you are at least 18 years old and
                            that the information provided is accurate and complete.
                        </p>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            6. Changes to This Policy
                        </p>
                        <p class="term-text body-text text-main">
                            We may update this Privacy Policy from time to time to reflect changes in our business
                            practices, legal requirements, or operational reasons. Updates will be posted on this
                            page.
                        </p>
                    </div>

                    <div class="term-item">
                        <p class="term-title">
                            7. Contact Us
                        </p>
                        <div class="text-wrap">
                            <p class="term-text body-text text-main">
                                If you have any questions about this Privacy Policy or our data practices, please
                                contact us using the details below:
                            </p>
                            <a href="mailto:support@zillybags.com" class="link body-text fw-medium">
                                support@zillybags.com
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
      


    </div>

   

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
@endsection