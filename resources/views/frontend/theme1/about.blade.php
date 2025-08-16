@extends('frontend.theme1.layout')

@section('content')


    <!-- about us area wrapper main -->
    @include('frontend.theme1.component.about.banner')
    <!-- about us area wrapper main end -->

  

    <!-- rts about area start -->
    @include('frontend.theme1.component.about.about')
    <!-- rts about area end -->


    <!-- rts team area start -->
    @include('frontend.theme1.component.about.team')
    <!-- rts team area end -->


    <!-- rts business goal area start -->
    @include('frontend.theme1.component.about.goal')

    <!-- rts clients review area start -->
    @include('frontend.theme1.component.about.clientreview')
    <!-- rts clients review area end -->
    @include('frontend.theme1.component.general.brand')
    
    <!-- rts brand area end -->

    <!-- rts cta area start -->
    @include('frontend.theme1.component.general.subscribe')
    <!-- rts cta area end -->

@endsection