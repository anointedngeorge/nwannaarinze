<!-- footer area start -->
<div class="footer-8-area-bg bg_image pt--65">
    <div class="container pb--65">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-logo-area-left-8">
                    <a href="#" class="logo">
                        <img src="{{ config('data.logo') }}" alt="logo">
                    </a>
                    <p class="disc">
                        {{ config('data.footer_about') }}
                    </p>
                    <ul class="social-area-wrapper-two">
                        <li><a href="{{ config('data.facebook') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{ config('data.twitter') }}"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="{{ config('data.linkedin') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="{{ config('data.instagram') }}"><i class="fa-brands fa-instagram"></i></a></li>
                        {{-- <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-4">
                <div class="footer-one-single-wized">
                    <div class="wized-title">
                        <h5 class="title">Quick Links</h5>
                        <img src="invena/images/footer/under-title.png" alt="finbiz_footer">
                    </div>
                    <div class="quick-link-inner">
                        <ul class="links">
                            <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Help &amp; FAQ</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Pricing &amp; Plans</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                        </ul>
                        <ul class="links margin-left-70">
                            <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3">
                <div class="footer-one-single-wized">
                    <div class="wized-title">
                        <h5 class="title">Contact Us</h5>
                        <img src="invena/images/footer/under-title.png" alt="finbiz_footer">
                    </div>
                    <div class="quick-link-inner d-block">
                        <div class="signle-footer-contact-8">
                            <div class="icon">
                                <i class="fa-solid fa-phone-alt"></i>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Call Us 24/7</h5>
                                <a href="#">{{ config('data.phone1') }}</a>
                            </div>
                        </div>
                        <div class="signle-footer-contact-8">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Work with us</h5>
                                <a href="#">{{ config('data.email') }}</a>
                            </div>
                        </div>
                        <div class="signle-footer-contact-8">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Our Location</h5>
                                <a href="#">{{ config('data.address') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-8-wrapper">
                        <p>{{ config('data.name') }} - Copyright <script>
                            document.write(
                                new Date().getFullYear()
                            )
                        </script>. All rights reserved.</p>
                        <ul>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-of-condition.html">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>