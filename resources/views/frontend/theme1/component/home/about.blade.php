<?php
$about = (object) [
    "topTitle" => config('data.name'),
    'title' => 'Innovative Solutions',
    'subTitle' => 'for Modern Agriculture',
    'description' => 'Commodo dignissim nibh tristique urna arcu sagittis nec sapien velit, praesent at for it dictumst sollicitudin cursus tellus senectus aliquet',
    'bigImage' => asset('invena/images/about/08.webp'),
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
                        <h2 class="title rts-text-anime-style-1">{{ $about->title }} <br> <span>{{ $about->subTitle }}</span></h2>
                    </div>
                    <p class="disc">{{ $about->description }}</p>
                    <div class="progress-wrapper-about-4">

                        @foreach ($about->dataList as $list )
                            
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
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="thumbnail-about-right-4">
                    <div class="large-iamge">
                        <img src="{{ $about->bigImage }}" alt="about">
                    </div>
                    <div class="small-image images-r">
                        <img src="{{ $about->smallImage }}" alt="about">
                    </div>
                    <div class="poligon-shape images-r">
                        <img src="{{ asset('invena/images/about/poligon-shape.svg') }}" alt="">
                    </div>
                    <div class="video-area">
                        <img src="{{ asset('invena/images/about/video.svg') }}" alt="video">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video"
                                href="{{ $about->link }}">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>