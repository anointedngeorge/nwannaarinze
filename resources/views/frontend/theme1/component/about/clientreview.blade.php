<?php
$reviews = (object) [
    (object) [
        'name' => 'MGT',
        'content' => "Working with this team has been an incredible experience. They understood my business needs perfectly and delivered solutions that exceeded my expectations. Highly professional and reliable — I couldn’t ask for better!",
        'pos' => (object) ['first' => 'Designer at', 'last' => 'nagari farms'],
        'image' => asset(config('data.footer_logo'), )
    ],
    (object) [
        'name' => 'MGT',
        'content' => "I was impressed by their level of expertise and commitment. From the initial consultation to the final delivery, everything was seamless. Our productivity has improved significantly thanks to their innovative approach.”",
        'pos' => (object) ['first' => 'Designer at', 'last' => 'Operations Manager'],
        'image' => asset(config('data.footer_logo'), )
    ],
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