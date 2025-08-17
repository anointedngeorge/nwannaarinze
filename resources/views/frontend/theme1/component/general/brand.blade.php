<?php
$brands = [
    asset('invena/images/brand/01.webp'),
    asset('invena/images/brand/02.webp'),
    asset('invena/images/brand/03.webp'),
    asset('invena/images/brand/02.webp'),
    asset('invena/images/brand/03.webp'),
    asset('invena/images/brand/01.webp'),
    asset('invena/images/brand/03.webp'),
];
?>


<div class="rts-brand-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-style-two-wrapper">
                    <div class="swiper mySwiper-brand-2">
                        <div class="swiper-wrapper">
                            @foreach ($brands as $brand)
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <img src="{{ $brand }}" alt="brand">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>