<?php
$slides = [
    (object) [
        'title' => (object) ['first' => 'SHABU INTEGRATED  ', 'in' => 'FARMS', 'last' => 'LIMITED'],
        'description' => 'Shabu Integrated Farms Ltd (SIFL) was incorporated on 23d March 2019. The farm
has 3000 hectares of land devoted for the production of arable crops. ',
        'image' => 'invena/images/banner/farm1.jpg',
        'subTitle' => 'RC-1587331',
        'btn1' => (object) ['title' => 'Contact us', 'url' => route('frontend.index', ['q' => 'contact'])],
        'btn2' => (object) ['title' => 'Our Profile', 'url' => route('frontend.index', ['q' => 'about'])],
    ],


    (object) [
        'title' => (object) ['first' => 'DAN GATA', 'in' => 'EGGS', 'last' => 'LIMITED'],
        'description' => 'Dan Gata Eggs Ltd is a poultry farm which has as its products good quality eggs and
broilers for the market.
The farm is located at Marmara in Nasarawa Local Government Area. The company
was incorporated on 19th December 2019. ',
        'image' => 'invena/images/banner/fowl.webp',
        'subTitle' => 'RC-1642966',
        'btn1' => (object) ['title' => 'Contact us', 'url' => route('frontend.index', ['q' => 'contact'])],
        'btn2' => (object) ['title' => 'Our Profile', 'url' => route('frontend.index', ['q' => 'about'])],
    ],

    (object) [
        'title' => (object) ['first' => 'RAHAMA', 'in' => 'FISHERIES', 'last' => 'LIMITED'],
        'description' => "Rahama Fisheries Limited (RFL) is considered one of the leading fish farm in north
central Nigeria. Incorporated on the 20 of December 2019, RFL is becoming widely
known in the nation as according to the market analysis, internal fish sales from RFL in
Maiduguri exceed the forecast and are expected to see a huge demand in numerous
cities such as Port Harcourt, Lagos, Abuja and Kano over the next 2 years.",
        'image' => 'invena/images/banner/catfish.jpg',
        'subTitle' => 'RC-1643283',
        'btn1' => (object) ['title' => 'Contact us', 'url' => route('frontend.index', ['q' => 'contact'])],
        'btn2' => (object) ['title' => 'Our Profile', 'url' => route('frontend.index', ['q' => 'about'])],
    ],


    (object) [
        'title' => (object) ['first' => 'NAGARI FRESH FARMS ', 'in' => 'PRODUCE', 'last' => 'LIMITED'],
        'description' => "Nagari Fresh Farm Produce Ltd has an arable crop farm, economic trees, cassava farm
and a garri processing factory. The farm is in Marmara with a branch of the farm in
Shamagi. The farm covers an estimated 500 hectares of land in Marmara and 50
hectares in Shamagi. The farm has an orange plantation, mango plantation, moringa,
palm trees and a cattle feed lot.",
        'image' => 'invena/images/banner/cows1.jpg',
        'subTitle' => 'RC-469703',
        'btn1' => (object) ['title' => 'Contact us', 'url' => route('frontend.index', ['q' => 'contact'])],
        'btn2' => (object) ['title' => 'Our Profile', 'url' => route('frontend.index', ['q' => 'about'])],
    ],


];
?>

<div class="banner-four-area-main-wrapper" id="home">

    <div class="swiper mySwiper-banner-four">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)

                <div class="swiper-slide">
                    <div class="swiper-area-banner-four-wrapper">
                        <div class="banner-four-bg bg_image" style="background-image: url('{{ asset($slide->image) }}');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inner-content-wrapper-four-banner">
                                            <span class="pre">{{ $slide->subTitle }}</span>
                                            <h1 class="title">
                                                {{ $slide->title->first }}<br> <span
                                                    class="in">{{ $slide->title->in }}</span> {{ $slide->title->last }}
                                            </h1>
                                            <p class="disc">{{ substr($slide->description, 0, 200) }}</p>
                                            <div class="button-wrapper">
                                                <a href="{{ $slide->btn1->url }}"
                                                    class="rts-btn btn-primary btn-white">{{ $slide->btn1->title }}</a>
                                                <a href="{{ $slide->btn2->url }}"
                                                    class="rts-btn btn-primary btn-border">{{ $slide->btn2->title }}</a>
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