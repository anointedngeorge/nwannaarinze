<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('data.fav')) }}">
    <title> @if ($page_title)
        {{ $page_title }}
    @endif </title>
    <link rel="stylesheet" href="{{ asset('invena/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('invena/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('invena/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('invena/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('invena/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('invena/css/vendor/bootstrap.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="stylesheet" href="{{ asset('invena/css/style.css') }}">
</head>

<body class="onepage">
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    {{-- header section --}}
    @include('frontend.theme1.component.general.headerblack')
    {{-- endofheader --}}




    @yield("content")


    {{-- footer section --}}
    @include('frontend.theme1.component.general.footerblack')
    {{-- end of footer --}}

    @include('frontend.theme1.component.general.sidebar')
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->
    @include('frontend.theme1.component.general.search')
    
    <div id="anywhere-home" class="">
    </div>
    <!-- rtl btn area start -->
    <div class="rtl-ltr-switcher-btn">
        <span class="rtl show">View RTL</span>
        <span class="ltr">View LTR</span>
    </div>
    <!-- rtl btn area end -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <script src="{{ asset('invena/js/plugins/jquery.js') }}"></script>



    <script src="{{ asset('invena/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/jquery-appear.js') }}"></script>


    <script src="{{ asset('invena/js/plugins/gsap.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/split-text.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/scroll-trigger.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/metismenu.js') }}"></script>

    <script src="https://html.themewant.com/golfy/invena/js/plugins/magnific-popup.js"></script>

    <script src="{{ asset('invena/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('invena/js/plugins/swiper.js') }}"></script>

    <script src="{{ asset('invena/js/main.js') }}"></script>
</body>

</html>