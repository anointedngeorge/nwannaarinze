<?php

$items = !empty($frontendData->scholarships) ? $frontendData->scholarships : null;
?>

@if (!empty($items) && count($items) > 0)
    <section class="events-page events--carousel ">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Upcoming Scholarships</span>
                <h2 class="section-title__title">Scholarship Opportunities</h2>
            </div>
            <div class="thm-owl__carousel events__carousel  carousel--have-shadow owl-carousel" data-owl-options='{
                "loop": true,
                "margin": 30,
                "items": 1,
                "nav": true,
                "dots": true,
                "smartSpeed": 700,
                "navText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
                "responsive": {
                    "0": {
                        "items": 1,
                        "margin": 0
                    },
                    "768": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    }
                }
            }'>

                @foreach ($items as $item)
                    <div class="item">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <a href="{{ $item['google_form_link'] }}" target="_blank">
                                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" style="height: 260px;">
                                </a>
                                {{-- <div class="events__date">
                                    <p>20 <br> oct</p>
                                </div> --}}
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="{{ $item['google_form_link'] }}" target="_blank">
                                        {{ $item['title'] }} </a></h3>
                                <p>
                                    {{ $item['description'] }}
                                </p>

                                <div class="events__meta text-center">
                                    <a href="{{ route('frontend.scholarships.apply', ['scholarship' => $item['id']]) }}" target="_blank"
                                        class="events__meta-btn thm-btn">Apply Now</a>
                                </div>
                            </div>

                        </div>
                @endforeach

                </div>
            </div>
    </section>
@endif