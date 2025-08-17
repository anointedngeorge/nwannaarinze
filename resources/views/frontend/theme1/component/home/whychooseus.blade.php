<?php
$contents = (object) [
    (object) [
        'title' => 'SHABU INTEGRATED FARMS LTD',
        'image' => 'invena/images/banner/farm1.jpg',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "Shabu Integrated Farms Ltd (SIFL) was incorporated on 23d March 2019. The farm
has 3000 hectares of land devoted for the production of arable crops. These crops
include Maize, Sorghum Soybeans, Sesame, Ginger, Cassava & Yam. In addition,
the farm has Plantain and Banana Plantations, pasture for animal grazing and a
high-tech green house for increased vegetable production such as Bell Pepper, Habanero Pepper, Eva and Top Tomatoes.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],

    (object) [
        'title' => 'DAN GATA EGGS LTD',
        'image' => 'invena/images/banner/fowl.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "Dan Gata Eggs Ltd is a poultry farm which has as its products good quality eggs and
broilers for the market.
The farm is located at Marmara in Nasarawa Local Government Area. The company
was incorporated on 19th December 2019. The farm presently has a total of 21,500
layers with a plan to introduce a broiler arm of 5000 birds. The layers were brought
in as Day-Old-Chics (DOCs) at different periods and categorized into three batches.
The Batch A birds comprise of 5000 birds arrived in June of 2019, Batch B of 6500
birds arrived in November 2019 while Batch C of 10000 birds arrived in April 2020.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],


    (object) [
        'title' => 'RAHAMA FISHERIES LTD.',
        'image' => 'invena/images/banner/catfish.jpg',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "Rahama Fisheries Limited (RFL) is considered one of the leading fish farm in north
central Nigeria. Incorporated on the 20 of December 2019, RFL is becoming widely
known in the nation as according to the market analysis, internal fish sales from RFL in
Maiduguri exceed the forecast and are expected to see a huge demand in numerous
cities such as Port Harcourt, Lagos, Abuja and Kano over the next 2 years.
RFL has a total of 30 ponds capable of stocking 8000 fingerlings and juveniles per pond
and produces table size fish round the year. In addition the farm has a hatchery, dry fish
and feed mill sections.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],


    (object) [
        'title' => 'NAGARI FRESH FARMS LTD',
        'image' => 'invena/images/banner/cows1.jpg',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "Nagari Fresh Farm Produce Ltd has an arable crop farm, economic trees, cassava farm
and a garri processing factory. The farm is in Marmara with a branch of the farm in
Shamagi. The farm covers an estimated 500 hectares of land in Marmara and 50
hectares in Shamagi. The farm has an orange plantation, mango plantation, moringa,
palm trees and a cattle feed lot.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],




    (object) [
        'title' => 'ADA Microfinance Bank Ltd',
        'image' => 'invena/images/why-choose/04.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "ADA Microfinance Bank Limited was incorporated in Nigeria under the
Companies and Allied Matter Act as a Private Limited Liability Company on the
8th November 2010. It was granted approval to carry on business of Unit Banking
on the 4th October 2011 by the Central Bank of Nigeria dated 8th September 2011
and was issued final operating license on the 4th November 2011. On 2nd January
2018 the bank commenced operation in her newly established Branch at
Garaku.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],



    (object) [
        'title' => 'HALAL-CUTS ULTRA MODERN ABATTOIR LTD',
        'image' => 'invena/images/why-choose/04.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => "Rahama Fisheries Limited (RFL) is considered one of the leading fish farm in north
central Nigeria. Incorporated on the 20 of December 2019, RFL is becoming widely
known in the nation as according to the market analysis, internal fish sales from RFL in
Maiduguri exceed the forecast and are expected to see a huge demand in numerous
cities such as Port Harcourt, Lagos, Abuja and Kano over the next 2 years.
RFL has a total of 30 ponds capable of stocking 8000 fingerlings and juveniles per pond
and produces table size fish round the year. In addition the farm has a hatchery, dry fish
and feed mill sections.",
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],


]
?>


<div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-four center">
                    <span class="pre">
                        {{ config('data.name') }}
                    </span>
                    <h2 class="title rts-text-anime-style-1">Integrated <span>Companies</span></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">

            <div class="swiper mySwiperh2_clients" dir="ltr">
                <div class="swiper-wrapper">
                    @foreach ($contents as $content)
                        <div class="swiper-slide col-lg-4 col-md-6 col-sm-12 rts-jump__item" data-animation="fadeInUp"
                            data-delay="0.2" data-duration="1.2">

                            <div class="single-why-choose-four">
                                <a href="{{ $content->link->link }}" class="thumbnail">
                                    <img src="{{ $content->image }}" style="height: 400px;"  alt="choose">
                                </a>
                                <div class="inner-content">
                                    {{-- <div class="icon">
                                        <img src="{{ $content->icon }}" alt="why-choose">
                                    </div> --}}
                                    <a href="#" class="bg-warning">
                                        <h6 class="title">{{ $content->title }}</h6>
                                    </a>
                                    <p class="disc size-3">
                                        {{ substr($content->content, 0, 88) }}
                                    </p>
                                    <a href="{{ $content->link->link }}" class="read-more"> {{ $content->link->title }} <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>