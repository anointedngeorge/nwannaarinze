@extends('frontend.theme1.layout')

 @section('content')
 <div class="rts-breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-left center">
                    <span class="bg-title">Contact</span>
                    <h1 class="title rts-text-anime-style-1">
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-area">
        <img src="invena/images/about/shape/01.png" alt="shape" class="one">
        <img src="invena/images/about/shape/02.png" alt="shape" class="two">
        <img src="invena/images/about/shape/03.png" alt="shape" class="three">
    </div>
</div>


<!-- contact areas main -->
<div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-info-area-wrapper-p new">
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="fa-solid fa-phone-flip"></i>
                        </div>
                        <div class="info-wrapper">
                            <span>Call Us 24/7</span>
                            <a href="#">(+256) 2145.2156</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-wrapper">
                            <span>Work with us</span>
                            <a href="#">info@Invena.com</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info-wrapper">
                            <span>Our Location</span>
                            <a href="#">125 Town, United State</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-p new">
                    <form class="form__content" method="post" action="mailer.php" id="contact-form">
                        <h4 class="title">Get In Touch</h4>
                        <input name="name" id="name" type="text" placeholder="Your Name">
                        <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com">
                        <textarea name="message" id="message" placeholder="Message"></textarea>

                        <div id="form-messages"></div>
                        <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact areas main end -->

<!-- map area start -->
<div class="google-map-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map">
                    @include('frontend.theme1.component.general.map')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- map area end -->

 @endsection