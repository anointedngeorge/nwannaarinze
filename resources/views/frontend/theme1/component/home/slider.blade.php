<!--Main Slider Two Start-->
<section class="main-slider main-slider-two" id="home">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/images/main-slider-2-1.jpg') }});">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2>Every Good <br> Act is a Charity</h2>
                                <p>We are here to support you every step of the way</p>
                                <a href="about.html" class="thm-btn">Discover More</a>
                                <div class="main-slider-two-map">
                                    <img src="{{ asset('assets/images/shapes/main-slider-two-map.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/images/main-slider-2-2.jpg') }});">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2>Every Good <br> Act is a Charity</h2>
                                <p>We are here to support you every step of the way</p>
                                <a href="about.html" class="thm-btn">Discover More</a>
                                <div class="main-slider-two-map">
                                    <img src="{{ asset('assets/images/shapes/main-slider-two-map.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/image2/res1.jpg') }});">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <h2>Every Good <br> Act is a Charity</h2>
                                <p>We are here to support you every step of the way</p>
                                <a href="about.html" class="thm-btn">Discover More</a>
                                <div class="main-slider-two-map">
                                    <img src="{{ asset('assets/images/shapes/main-slider-two-map.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav-two">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-right angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider Two End-->