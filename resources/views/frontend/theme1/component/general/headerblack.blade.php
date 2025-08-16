<header class="header-one header--sticky">
    <div class="header-top-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one-wrapper">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:{{ config('data.email') }}"><i class="fal fa-envelope"></i>
                                    {{ config('data.email') }}</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: {{ config('data.time') }}</p>
                            </div>
                        </div>
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="blog-list.html">Company news</a></li>
                                {{-- <li><a href="faq.html">Faq</a></li> --}}
                                <li><a href="{{ route('frontend.index', ['q'=>'contact']) }}">Contact</a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="{{ config('data.facebook') }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ config('data.twitter') }}" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ config('data.instagram') }}" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="{{ config('data.linkedin') }}" aria-label="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        @include('frontend.theme1.component.general.navigation')
    </div>
</header>