<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.html"><img class="logo" src="{{ asset(config('data.logo')) }}" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                {{ config('data.footer_about') }}
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel: {{ config('data.phone1') }}">{{ config('data.phone1') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto: {{ config('data.email') }}">{{ config('data.email') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">{{ config('data.url') }}</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">{{ config('data.address') }}</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="{{ config('data.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ config('data.twitter') }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ config('data.whatsapp') }}"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                @foreach ($navigationProvider as $n)
                    <li class="main-nav mega-menu project-a-after">
                        <a href="{{ $n->url }}">{{ $n->title }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="{{ config('data.facebook') }}">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('data.twitter') }}">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('data.youtube') }}">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ config('data.linkedin') }}">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>