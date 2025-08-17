<?php
$teams = (object) [
    (object) [
        'name' => 'PROF ODE OJOWU, OFR',
        'image' => 'invena/images/team/01.webp',
        'position' => 'Chairman of the Board',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],
    (object) [
        'name' => 'Arc. Kabir Ibrahim',
        'image' => 'invena/images/team/02.webp',
        'position' => 'Director',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],

    (object) [
        'name' => 'DR. ABDULKARIM KANA',
        'image' => 'invena/images/team/03.webp',
        'position' => 'Director',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],
    (object) [
        'name' => 'ENGR. MUHAMMAD NURAINI',
        'image' => 'invena/images/team/03.webp',
        'position' => 'Director',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],

    (object) [
        'name' => 'MUHAMMAD KABIR ABUBAKAR',
        'image' => 'invena/images/team/03.webp',
        'position' => 'Director',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],

    (object) [
        'name' => 'PIUS ADEMU AKUBO, SAN, FCArb',
        'image' => 'invena/images/team/03.webp',
        'position' => 'Director',
        'fb' => '#',
        'lk' => '#',
        'is' => '#'
    ],
    
];
?>


<div class="rts-team-area-start-four rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-four center">
                    <span class="pre">CHAIRMAN AND MEMBERS</span>
                    <h2 class="title rts-text-anime-style-1">
                        OF BOARD  <span>OF DIRECTORS</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--30 g-sm-30 g-5">

            <div class="swiper mySwiperh2_clients" dir="ltr">
                <div class="swiper-wrapper">
                    @foreach ($teams as $team)
                        <div class="swiper-slide col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2"
                            data-duration="1.2">
                            {{-- <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2"
                                data-duration="1.2"> --}}
                                <div class="single-team-area-one-start">
                                    <a href="team-details.html" class="thumbnail">
                                        <img src="{{ asset($team->image) }}" alt="team">
                                    </a>
                                    <div class="inner-content">
                                        <div class="inner">
                                            <div class="text-top">
                                                <a href="team-details.html">
                                                    <h5 class="title">{{ $team->name }}</h5>
                                                </a>
                                                <span>{{ $team->position }}</span>
                                            </div>
                                            {{-- <div class="social-one-wrapper">
                                                <ul>
                                                    <li><a href="{{ $team->fb }}"><i
                                                                class="fa-brands fa-facebook-f"></i></a></li>
                                                    <li><a href="{{ $team->lk }}"><i class="fa-brands fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="{{ $team->is }}"><i class="fa-brands fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                {{--
                            </div> --}}

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>


            {{-- @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="single-team-area-one-start">
                    <a href="team-details.html" class="thumbnail">
                        <img src="{{ asset($team->image) }}" alt="team">
                    </a>
                    <div class="inner-content">
                        <div class="inner">
                            <div class="text-top">
                                <a href="team-details.html">
                                    <h5 class="title">{{ $team->name }}</h5>
                                </a>
                                <span>{{ $team->position }}</span>
                            </div>
                            <div class="social-one-wrapper">
                                <ul>
                                    <li><a href="{{ $team->fb }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $team->lk }}"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="{{ $team->is }}"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>