<header class="header-one style-four top-transparent-header header--sticky">
    <div class="header-top-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one-wrapper">
                        <div class="right">
                            <p>Are you ready to grow up your business? <a href="{{ route('frontend.index', ['q'=>'contact']) }}">Contact Us <i
                                        class="fa-solid fa-arrow-right"></i></a></p>
                        </div>
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i>
                                    {{ config('data.email') }}</a>
                            </div>
                            <div class="mail">
                                <a href="mailto:webmaster@example.com"><i class="fa-solid fa-phone-flip"></i>
                                    Hotline: {{ config('data.phone1') }}</a>
                            </div>
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