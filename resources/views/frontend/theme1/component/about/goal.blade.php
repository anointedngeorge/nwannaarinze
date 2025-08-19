<div class="business-goal-area-2 rts-section-gapBottom">
    <div class="container pt--30">
        <div class="row">
            <div class="col-lg-6">
                <div class="consultancy-style-one">
                    <div class="title-style-two mb--40 left">
                        {{-- <span class="bg-content">Business Goal</span> --}}
                        <span class="pre">{{ config('data.name') }}</span>
                        <p class="p rts-text-anime-style-1">
                            We are a holding company with business interest in diverse sectors of the
                            economy including; Hospitality, Agriculture, Manufacturing, Financial
                            Services, Commodity Exports, Real Estate and Infrastructures Development.
                        </p>
                    </div>
                    <div class="signle-consultancy mb--30">
                        <div class="icon">
                            <img src="invena/images/about/icons/01.svg" alt="">
                        </div>
                        <div class="information">
                            <h4 class="title">Our Vision</h4>
                            <p class="disc">
                                To be a clear leader in our chosen business interest in Nigeria and a Regional
                                market.
                            </p>
                        </div>
                    </div>
                    <div class="signle-consultancy">
                        <div class="icon">
                            <img src="invena/images/about/icons/02.svg" alt="">
                        </div>
                        <div class="information">
                            <h4 class="title">Our Mission</h4>
                            <p class="disc">
                                To meet and exceed our customer's needs by providing quality and safe
                                products and services based on global standards and in an ethical manner.
                            </p>
                        </div>
                    </div>
                    <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                        <a href="{{ route('frontend.index', ['q' => 'contact']) }}" class="rts-btn btn-primary">Contact Us</a>
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video"
                                href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail-business-area-right-two">
                    <div class="large-thumbnail">
                        <img src="{{ asset(config('data.footer_logo')) }}" alt="">
                    </div>
                    <div class="small-thumbnail images-r">
                        <img src="{{ asset(config('data.footer_logo'),) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>