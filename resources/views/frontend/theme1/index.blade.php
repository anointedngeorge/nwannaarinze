@extends('frontend.theme1.layout')


@section('content')
    <!--Main Slider Two Start-->
    @include('frontend.theme1.component.home.slider')
    <!--Main Slider Two End-->

    <!--Feature Two Start-->
    @include('frontend.theme1.component.home.feature')
    <!--Feature Two End-->

    <!--About One Start-->
    @include('frontend.theme1.component.home.about')
    <!--About One End-->

    <!--Fundraising Start-->
    @include('frontend.theme1.component.home.fundraising')
    <!--Fundraising End-->

    <!--Cause Two End-->
    @include('frontend.theme1.component.home.project')
    <!--Cause Two End-->

    <!--Gallery One Start-->
    @include('frontend.theme1.component.home.gallery')
    <!--Gallery One End-->

    <!--Testimonial Two Start-->
    @include('frontend.theme1.component.home.testimonial')
    <!--Testimonial Two End-->

    <!--Volunteers One Start-->
    @include('frontend.theme1.component.home.volunteers2')
    <!--Volunteers One End-->

    <!--We Change Start-->
    @include('frontend.theme1.component.home.we_change')
    <!--We Change End-->

    <!--Brand Two Start-->
    {{-- @include('frontend.theme1.component.home.brand') --}}
    <!--Brand Two End-->

    <!--Blog Two Start-->
    @include('frontend.theme1.component.home.blog')
    <!--Blog Two End-->

     <!--events Two Start-->
     @include('frontend.theme1.component.general.events')
     <!--events Two End-->

    <!--Help People Start-->
    @include('frontend.theme1.component.home.help')
    <!--Help People End-->

@endsection