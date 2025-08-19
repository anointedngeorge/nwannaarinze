@extends('frontend.theme1.layout')


<?php

$photos = (object) [
    (object) [
        'title' => '#',
        'url' => '#',
        'image' => asset(config('data.footer_logo'),)
    ],
    (object) [
        'title' => '#',
        'url' => '#',
        'image' => asset(config('data.footer_logo'),)
    ],
    (object) [
        'title' => '#',
        'url' => '#',
        'image' => asset(config('data.footer_logo'),)
    ],
    (object) [
        'title' => '#',
        'url' => '#',
        'image' => asset(config('data.footer_logo'),)
    ],
];

?>


@section('content')
    <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Gallery</span>
                        <h1 class="title">
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->
    <!-- rts galllery area start -->
    <div class="rts-gallery-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-area-main-wrapper-4">
                        <div class="row g-5">

                            @foreach ($photos as $photo)
                                <div class="col-md-4">
                                    <div class="single-gallery">
                                        <a href="#" class="thumbnail gallery-image">
                                            <img src="{{ $photo->image }}" alt="gallery">
                                        </a>
                                        <div class="instagram">
                                            <img src="{{ asset('invena/images/gallery/instagram.svg') }}" alt="instagram.svg">
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
    <!-- rts galllery area end -->
    <!-- rts cta area start -->
    @include('frontend.theme1.component.general.subscribe')

    <!-- rts cta area end -->

@endsection