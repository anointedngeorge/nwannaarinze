<?php
$reviews = (object) [
    (object) [
        'name' => 'William Henry',
        'content' => "I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.",
        'pos' => (object) ['first' => 'Designer at', 'last' => 'Vertex Agency'],
        'image' => asset('invena/images/testimonials/01.webp')
    ]
];
?>


<div class="rts-client-review-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Review</span>
                        <span class="pre">Our Testimonial</span>
                        <h2 class="title rts-text-anime-style-1">Our Client Reviews
                        </h2>
                    </div>
                    <div class="pagination-wrapper">
                        <div class="swiper-pagination-fraction"></div>
                        <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="testimonials-wrapper-swiper-demo-2">
                    <div class="swiper mySwiper-testimonials-dmeo-2">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="{{ $review->image }}" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">{{ $review->content }}</p>
                                            <div class="name-desig">
                                                <h6 class="title">{{ $review->name }}</h6>
                                                <p>{{ $review->pos->first }} <b> {{ $review->pos->last }} </b></p>
                                            </div>
                                        </div>
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