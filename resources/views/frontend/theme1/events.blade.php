@extends('frontend.theme1.layout')






@section('content')
@php
    $items =!empty($frontendData->events) ? $frontendData->events : [
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

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/images/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                {{-- <h2>Upcoming Events</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Events</li>
                </ul> --}}
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Events Page Start-->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @foreach ($items as $item)

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                                <div class="events__date">
                                    <p>{{ $item['start'] }}</p>
                                </div>
                            </div>
                            <div class="events__content">
                                <h3 class="events__title"><a href="event-details.html">{{ $item['title'] }}</a></h3>
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


@endsection