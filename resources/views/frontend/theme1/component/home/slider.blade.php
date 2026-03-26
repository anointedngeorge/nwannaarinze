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

            @php
                $sliders = $frontendData->sliders;
            @endphp

            @foreach ($sliders as $slider)
                <div class="swiper-slide"  >
                    
                    <div class="image-layer" style="background-image: url('{{ Storage::url($slider->image) }}'); background-position: top;"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2> {{ $slider->title }} </h2> 
                                    <h3 class="text text-white h4 mt-4 mb-4">{{ $slider->sub_title }}</h3>
                                    <a href="{{ $slider->btn_url }}" class="thm-btn">{{ $slider->btn_title }}</a>
                                    {{-- <div class="main-slider-two-map">
                                        <img src="{{ Storage::url($slider->image) }}" alt="">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


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