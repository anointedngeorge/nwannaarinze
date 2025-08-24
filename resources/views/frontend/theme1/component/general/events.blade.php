@php
    $items = $frontendData->events ?? [
        [
            'title' => 'Hand for Children',
            'content' => '',
            'start' => '',
            'end' => '',
            'address' => '',
            'date' => '',
            'image' => 'assets/images/resources/events-img-1.jpg',
            'time' => '4:00pm 6:00pm'
        ],
        [
            'title' => 'Hand for Children',
            'content' => '',
            'start' => '',
            'end' => '',
            'address' => '',
            'date' => '',
            'image' => 'assets/images/resources/events-img-1.jpg',
            'time' => '4:00pm 6:00pm'
        ],

        [
            'title' => 'Hand for Children',
            'content' => '',
            'start' => '',
            'end' => '',
            'address' => '',
            'date' => '',
            'image' => 'assets/images/resources/events-img-1.jpg',
            'time' => '4:00pm 6:00pm'
        ],
    ]
@endphp

<!--Events Page Start-->
<section class="events-page events--carousel ">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Recent Events</span>
            <h2 class="section-title__title">Events Highlight</h2>
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
                            <img src="{{ $item['image'] }}" alt="">
                            <div class="events__date">
                                <p>20 <br> oct</p>
                            </div>
                        </div>
                        <div class="events__content">
                            <h3 class="events__title"><a href="event-details.html"> {{ $item['title'] }} </a></h3>
                            <ul class="list-unstyled events__meta">
                                <li><i class="far fa-clock"></i>{{ $item['time'] }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $item['address'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--Events Page End-->