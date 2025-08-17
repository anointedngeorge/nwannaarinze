<?php
$contents = (object) [
    (object) [
        'title' => 'Pro Business Solution',
        'subTitle' => 'Case Study, Growth',
        'icon' => asset('invena/images/project/01.svg'),
        'image' => asset('invena/images/project/11.webp'),
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sint consequatur accusantium, nam optio odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sint consequatur accusantium, nam optio odit.',
        'link' => (object) [
            'title' => 'Read More',
            'url' => '#'
        ]
    ],
];
?>



<div class="rts-project-area rts-section-gap bg_project-5 bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-five center">
                    <span class="pre">Mission & Vision</span>
                    <h2 class="title">Who We Are</h2>
                </div>
            </div>
        </div>
       
        <div class="row mt--50">
            <div class="col-lg-12">
                <div class="project-swiper-5-area">
                    <div class="swiper mySwiper-project-five" dir="ltr">
                        <div class="swiper-wrapper">
                            @foreach ($contents as $content )
                            <div class="swiper-slide">
                                <div class="row g-5">
                                    <div class="col-lg-5">
                                        <div class="project-content-left-5">
                                            <div class="icon">
                                                <img src="{{ $content->icon }}" alt="project">
                                            </div>
                                            <div class="title-area">
                                                <h6 class="title">{{ $content->title }}</h6>
                                                <span>{{ $content->subTitle }}</span>
                                            </div>
                                            <div class="inner">
                                                <p class="disc">{{ substr($content->content, 0, 160) }}</p>
                                                <a href="{{ $content->link->url }}" class="rts-btn btn-primary">{{ $content->link->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="thumbnail-project-5">
                                            <img src="{{ $content->image }}" alt="project">
                                        </div>
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