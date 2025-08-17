<div class="rts-team-area rts-section-gapBottom pt--40">
    <div class="container">
        <div class="row">
            <div class="title-style-two center">
                <span class="bg-content">Members</span>
                <span class="pre">Expert Members</span>
                <h2 class="title rts-text-anime-style-1">Professionals Team
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper mySwiperh1_team pt--50 pb--80">
                    <div class="swiper-wrapper">

                        @foreach (config('data.teams') as $team)
                            <div class="swiper-slide">
                                <div class="team-single-one-start">
                                    <div class="team-image-area">
                                        <a href="team-details.html">
                                            <img src="{{ asset($team->image) }}" alt="Business_Team_single">
                                            <div class="team-social">
                                                <div class="main">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                                <div class="team-social-one">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-twitter"></i>
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-details">
                                        <a href="team-details.html">
                                            <h5 class="title">{{ $team->name }}</h5>
                                        </a>
                                        <p>{{ $team->position }}</p>
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
</div>