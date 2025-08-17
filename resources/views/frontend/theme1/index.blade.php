@extends('frontend.theme1.layout')


@section('content')
    <!-- banner three area start -->
    @include('frontend.theme1.component.home.slider')
    <!-- banner three area end -->

    <!-- rts about area start -->
    @include('frontend.theme1.component.home.about')
    <!-- rts about area end -->

    <!-- rts brand area start -->
    {{-- @include('frontend.theme1.component.home.brand') --}}
    <!-- rts brand area end -->

    <!-- why choose us area start -->
    @include('frontend.theme1.component.home.whychooseus')
    <!-- why choose us area end -->

    <!-- rts call to action area start -->
    {{-- @include('frontend.theme1.component.home.calltoaction') --}}
    @include('frontend.theme1.component.general.subscribe')
    <!-- rts call to action area end -->


    {{-- mission --}}
    @include('frontend.theme1.component.general.mission')
    {{-- end mission --}}

    <!-- business solution area start -->
    @include('frontend.theme1.component.home.business')
    <!-- business solution area end -->

    <!-- rts fun facts area start -->
    @include('frontend.theme1.component.home.facts')
    <!-- rts fun facts area end -->

    <!-- rts business case area start -->
    @include('frontend.theme1.component.home.businesscase')
    <!-- rts business case area end -->

    <!-- rtsd faq area start -->
    @include('frontend.theme1.component.home.faq')
    <!-- rtsd faq area end -->

    <!-- rts team area start -->
    @include('frontend.theme1.component.home.team')
    <!-- rts team area end -->

    <!-- rts appoinment area start -->
    @include('frontend.theme1.component.home.appointment')
    <!-- rts appoinment area end -->

    <!-- rts blog area start -->
    @include('frontend.theme1.component.home.blog')
    <!-- rts blog area end -->

    <!-- rts galllery area start -->
    {{-- @include('frontend.theme1.component.home.gallery') --}}
    <!-- rts galllery area end -->


@endsection