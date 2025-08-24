<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $page_title }}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(config('data.footer_logo')) }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(config('data.footer_logo')) }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(config('data.footer_logo')) }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="{{ config('data.footer_about') }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Fredoka+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/pifoxen-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/pifoxen.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pifoxen-responsive.css') }}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="150" src="{{ config('data.footer_logo') }}" alt="logo" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-two clearfix">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__logo">
                            <a href="{{ route('frontend.index') }}">
                                <img src="{{ asset(config('data.logo')) }}" alt="">
                            </a>
                        </div>
                        <div class="main-header-two__right">
                            <ul class="list-unstyled main-header-two__top-menu">
                                {{-- <li><a href="blog.html">News & Media</a></li>
                                <li><span>/</span></li> --}}
                                {{-- <li>{{ config('data.name') }}</li>
                                <li><span>/</span></li> --}}
                                {{-- <li>
                                    <h5 class="testimonial-two__client-name">{{ config('data.phone1') }}</h5>
                                </li> --}}
                                {{-- <li><span>/</span></li> --}}
                                {{-- <li><a href="{{ route('frontend.index',['q'=>'about']) }}">About</a></li> --}}
                            </ul>
                            <div class="main-header-two__search-cart-donate-btn">
                                <a href="#" class="main-header-two__search search-toggler icon-magnifying-glass"></a> 
                                <a href="{{ route('login') }}"
                                    class="main-header-two__cart icon-avatar mini-cart__toggler"></a>
                                <a href="{{ route('frontend.index', ['q' => 'partnership']) }}"
                                    class="donate-btn main-header-two__btn"> <i class="fa fa-heart"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-two-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-two-wrapper-inner clearfix">
                            <div class="main-menu-two-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    @foreach ($navigationProvider as $nav)
                                        {{-- current --}}
                                        @if ($nav->show_on_header)
                                            <li class="{{ $nav->current? 'current': '' }}  scrollToLink" data-scroll-offset="60">
                                                <a href="{{ $nav->url }}">{{ $nav->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="main-menu-two-wrapper__right">
                                <div class="main-menu-two__top-social">
                                    <a href="{{ config('data.twitter') }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ config('data.facebook') }}"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->