<?php
$about = (object) [
    "topTitle" => config('data.name'),
    'title' => 'Innovative Solutions',
    'subTitle' => 'for Modern Agriculture',
    'description' => (object) [
        (object) [
            'title' => 'Profile',
            'content' => 'Al\'Hakam Holdings Ltd derives its name from an Arabic word Al\'Hakam meaning "the one who always delivers justice, in every situation, to everyone." It is a private equity and investment holding company. The company proactively identifies growth opportunities in various industries of interest. Founded in 2020, Al\'Hakam Holdings has built a sizable portfolio of investments. Our main focus is on creating and optimising value on shareholders\' interest through our continuous effort to build a long-term sustainable group of companies. Al\'Hakam Holdings is committed to a philosophy of transparent work ethics, business integrity and accountability throughout all our business transactions.',
        ],
        (object) [
            'title' => '',
            'content' => "Our key area of focus is on incorporating the country's agricultural
transformation agenda, therefore, becoming one of the dominant
contributors in sustainable economic growth through our investments and
job creation especially in the area of agriculture..."
        ]
    ],

    'bigImage' => asset('invena/images/about/founder.png'),
    'smallImage' => asset('invena/images/about/09.webp'),
    'link' => 'https://www.youtube.com/watch?v=vZE0j_WCRvI',
    'dataList' => (object) [
        (object) [
            'title' => 'Business Solution',
            'percent' => '100%'
        ],
        (object) [
            'title' => 'Empowering Success',
            'percent' => '100%'
        ],
        (object) [
            'title' => 'Simplifying Success',
            'percent' => '99%'
        ],
    ]

]
?>



<div class="rts-about-area about-bg-four bg_image rts-section-gap" id="about">
    <div class="container pt--50">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-content-four-left">
                    <div class="title-style-four left">
                        <span class="pre">{{ $about->topTitle }}</span>
                        <h2 class="title rts-text-anime-style-1">{{ $about->title }} <br>
                            <span>{{ $about->subTitle }}</span>
                        </h2>
                    </div>
                    @foreach ($about->description as $d)
                        {{-- <h3>{{ $d->title }}</h3> --}}
                        <p class="disc">
                            {{ $d->content }}
                        </p>
                    @endforeach
                    
                    <a href="{{ route('frontend.index', ['q' => 'about']) }}" class="rts-btn btn-primary">Continue Reading...</a>

                    {{-- <div class="progress-wrapper-about-4">

                        @foreach ($about->dataList as $list)

                            <div class="single-progress">
                                <h6 class="title">{{ $list->title }}</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s"
                                        role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                    <span class="progress-number">{{ $list->percent }}</span>
                                </div>
                            </div>

                        @endforeach

                    </div> --}}
                </div>
            </div>
            <div class="col-lg-5">
                <div class="thumbnail-about-right-4">
                    <div class="large-iamge">
                        <img src="{{ $about->bigImage }}" alt="about">
                    </div>
                    {{-- <div class="small-image images-r">
                        <img src="{{ $about->smallImage }}" alt="about">
                    </div> --}}
                    {{-- <div class="poligon-shape images-r">
                        <img src="{{ asset('invena/images/about/poligon-shape.svg') }}" alt="">
                    </div> --}}
                    {{-- <div class="video-area">
                        <img src="{{ asset('invena/images/about/video.svg') }}" alt="video">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video" href="{{ $about->link }}">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>