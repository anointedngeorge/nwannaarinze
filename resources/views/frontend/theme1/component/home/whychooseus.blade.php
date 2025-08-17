<?php
$contents = (object) [
    (object) [
        'title' => 'Business Consultancy',
        'image' => 'invena/images/why-choose/04.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => 'Creativity, and a commitment to quality to deliver solutions meet your unique needs.',
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],

    (object) [
        'title' => 'Target Marketing',
        'image' => 'invena/images/why-choose/05.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => 'Creativity, and a commitment to quality to deliver solutions meet your unique needs.',
        'link' => (object) [
            'title' => 'Read More',
            'link' => route('frontend.index')
        ]
    ],


    (object) [
        'title' => 'Investment Analysis',
        'image' => 'invena/images/why-choose/04.webp',
        'icon' => 'invena/images/why-choose/icons/01.svg',
        'content' => 'Creativity, and a commitment to quality to deliver solutions meet your unique needs.',
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
                    <span class="pre">Easy Business Solution</span>
                    <h2 class="title rts-text-anime-style-1">What We <span>Do</span></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">

            @foreach ($contents as $content)

                <div class="col-lg-4 col-md-6 col-sm-12 rts-jump__item">
                    <div class="single-why-choose-four">
                        <a href="{{ $content->link->link }}" class="thumbnail">
                            <img src="{{ $content->image }}" alt="choose">
                        </a>
                        <div class="inner-content">
                            <div class="icon">
                                <img src="{{ $content->icon }}" alt="why-choose">
                            </div>
                            <a href="#">
                                <h5 class="title">{{ $content->title }}</h5>
                            </a>
                            <p class="disc">
                                {{ substr($content->content, 0, 100) }}
                            </p>
                            <a href="{{ $content->link->link }}" class="read-more"> {{ $content->link->title }} <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>