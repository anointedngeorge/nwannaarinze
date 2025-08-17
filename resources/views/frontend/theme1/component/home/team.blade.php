<?php
$teams = config('data.teams')
?>


<div class="rts-team-area-start-four rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-four center">
                    <span class="pre">Our Experts</span>
                    <h2 class="title rts-text-anime-style-1">
                        Our Team <span>Mates</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--30 g-sm-30 g-5">
            @foreach ($teams as $team)
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
            @endforeach
        </div>
    </div>
</div>