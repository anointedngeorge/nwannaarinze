@extends('frontend.theme1.layout')


@section('content')
    
    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="title-area-left center">
                        <span class="bg-title">Carrier</span>
                        <h1 class="title rts-text-anime-style-1">
                            Carrier & Partnership Program
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="invena/images/about/shape/01.png" alt="shape" class="one">
            <img src="invena/images/about/shape/02.png" alt="shape" class="two">
            <img src="invena/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->

    <!-- rts progress area start -->
    <div class="rts-progress-area-main-wrapper rts-section-gapBottom mt-dec-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="progress-circle-main-wrapper">
                        <div class="single-progress-area ininner" data-animation="fadeInUp" data-delay="0.2">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="76" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="invena/images/fun/04.svg" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="76">00</span>%
                                </h2>
                                <p>Total Students</p>
                            </div>
                        </div>
                        <div class="single-progress-area ininner" data-animation="fadeInUp" data-delay="0.3">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="89" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="invena/images/fun/05.svg" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="89">00</span>%
                                </h2>
                                <p>Program Completed</p>
                            </div>
                        </div>
                        <div class="single-progress-area ininner" data-animation="fadeInUp" data-delay="0.4">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="70" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35"
                                        style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%"
                                        transform="matrix(0, 1, -1, 0, 80, 0)"></text>
                                </svg>
                                <img src="invena/images/fun/06.svg" alt="fun">
                            </div>
                            <div class="right-counter">
                                <h2 class="counter title"><span class="odometer" data-count="70">00</span>%
                                </h2>
                                <p>Program Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts progress area end -->

    <!-- appoinment areas tart -->
    <div class="appoinment-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center" data-animation="fadeInUp" data-delay="0.2">
                <div class="col-lg-7">
                    <div class="appoinment-wrapper-one-start">
                        <div class="title-style-two mb--40 left">
                            {{-- <span class="bg-content">Hello</span> --}}
                            <span class="pre">Register For Our Carrier & Partnership</span>
                            <h2 class="title">Program</h2>
                        </div>
                        <form action="#">
                            <div class="single-input-wrapper">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="single-input">
                                <input type="text" placeholder="Your Name">
                            </div>
                            
                            <div class="single-input">
                                <input type="text" placeholder="Your State">
                            </div>

                            <div class="single-input mb--30">
                                <textarea placeholder="Type Your Message"></textarea>
                            </div>
                            <button class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appoinment-thumbnail">
                        <img src="{{ config('data.footer_logo') }}" alt="appoinment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment areas end -->

    <!-- rts testimoanisl area start -->
    <div class="rts-testimonials-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one eight center mb--30">
                        <span class="pre">Testimonial</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">What They Say About <br>
                            <span>Our Company</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <div class="col-lg-12">
                    <div class="testimonails-8-mian-wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="circle-text">
                                    <img src="invena/images/testimonials/07.webp" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="testimoanials-8-swiper">
                                    <div class="swiper mySwiper-testimonisl-8">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonails-inner-content">
                                                    <p class="disc">
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    </p>
                                                    <div class="author-area">
                                                        <div class="avatar">
                                                            <img src="invena/images/testimonials/avatar/03.webp"
                                                                alt="avatar">
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">William Henry</h5>
                                                            <p>Designer at <span>Vertex Agency</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonails-inner-content">
                                                    <p class="disc">
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    </p>
                                                    <div class="author-area">
                                                        <div class="avatar">
                                                            <img src="invena/images/testimonials/avatar/03.webp"
                                                                alt="avatar">
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">William Henry</h5>
                                                            <p>Designer at <span>Vertex Agency</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonails-inner-content">
                                                    <p class="disc">
                                                        I can't recommend The Gourmet Haven enough. It's a place for
                                                        special occasions,
                                                        date nights, or whenever you're in the mood for a culinary
                                                        adventure. The
                                                        combination of exceptional.
                                                    </p>
                                                    <div class="author-area">
                                                        <div class="avatar">
                                                            <img src="invena/images/testimonials/avatar/03.webp"
                                                                alt="avatar">
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title">William Henry</h5>
                                                            <p>Designer at <span>Vertex Agency</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimoanisl area end -->


    @include('frontend.theme1.component.general.brand')
    <!-- rts brand area end -->

    <!-- rts cta area start -->
    @include('frontend.theme1.component.general.subscribe')
    <!-- rts cta area end -->

    @endsection