<?php
$slides = [
    (object) [
        'title' => (object) ['first'=>'Strengthen You', 'in'=> 'Market', 'last'=>'Presence'],
        'description' => 'Our team of dedicated professionals brings expertise, passion, and a
                            customer-first approach to every project, ensuring you receive the highest level of service.',
        'image' => '',
        'subTitle' => 'Make Your Strategy Strong',
        'btn1' => (object) ['title'=> 'Contact us', 'url' => route('frontend.index', ['q'=>'contact'])],
        'btn2' => (object) ['title'=> 'Our Profile', 'url' => route('frontend.index', ['q'=>'about'])],
    ],


    (object) [
        'title' => (object) ['first'=>'Business Marketing', 'in'=> 'Strategy', 'last'=>'Tips'],
        'description' => 'Our team of dedicated professionals brings expertise, passion, and a
                            customer-first approach to every project, ensuring you receive the highest level of service.',
        'image' => '',
        'subTitle' => 'Make Your Strategy Strong',
        'btn1' => (object) ['title'=> 'Contact us', 'url' => route('frontend.index', ['q'=>'contact'])],
        'btn2' => (object) ['title'=> 'Our Profile', 'url' => route('frontend.index', ['q'=>'about'])],
    ],

  
];
?>

<div class="banner-four-area-main-wrapper" id="home">

    <div class="swiper mySwiper-banner-four">
        <div class="swiper-wrapper">
            {{-- --}}
            @foreach ($slides as $slide)

                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner">
                                            <span class="pre">{{ $slide->subTitle }}</span>
                                            <h1 class="title">
                                                {{ $slide->title->first }}<br> <span class="in">{{ $slide->title->in }}</span> {{ $slide->title->last }}
                                            </h1>
                                            <p class="disc">{{ $slide->description }}</p>
                                            <div class="button-wrapper">
                                                <a href="{{ $slide->btn1->url }}" class="rts-btn btn-primary btn-white">{{ $slide->btn1->title }}</a>
                                                <a href="{{ $slide->btn2->url }}" class="rts-btn btn-primary btn-border">{{ $slide->btn2->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach;

            {{-- --}}

        </div>
    </div>

    <div class="swiper-pagination"></div>
    <div class="banner-shape-left-right">
        <div class="left">
            <img src="{{ asset('invena/images/banner/shape/left.svg') }}" alt="left">
        </div>
        <div class="right">
            <img src="{{ asset('invena/images/banner/shape/right.svg') }}" alt="left">
        </div>
    </div>
</div>