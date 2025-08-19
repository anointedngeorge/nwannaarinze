<?php 
    $galleries = (object) [
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/logo/logo-3.png'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/logo/logo-3.png'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/logo/logo-3.png'),
        'subTitle' => 'Business Strategy',
    ],
    (object) [
        'title' => 'Digital Business Solution',
        'image' => asset('invena/images/logo/logo-3.png'),
        'subTitle' => 'Business Strategy',
    ],
]

?>




<div class="rts-business-case-area rts-section-gapBottom" id="project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-four center">
                    <span class="pre">Gallery</span>
                    <h2 class="title rts-text-anime-style-1">
                        Our <span> Gallery</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-1680 mt--40">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-wrapper-main-5">
                    <div class="swiper mySwiper-case-studies-5">
                        <div class="swiper-wrapper">

                            @foreach ($galleries as $dt)
                                <div class="swiper-slide">
                                    <div class="single-case-studies-four">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ $dt->image }}" alt="project">
                                        </a>
                                        <div class="inner">
                                            <a href="#">
                                                <h3 class="title">{{ $dt->title }}</h3>
                                                <span>{{ $dt->subTitle }}</span>
                                            </a>
                                        </div>
                                        <div class="eye">
                                            <img src="{{ asset('invena/images/project/eye.svg') }}" alt="project">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination-fraction"></div>
                        <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>