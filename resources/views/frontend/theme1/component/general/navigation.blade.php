


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-main-one-wrapper">
                <div class="thumbnail">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset(config('data.logo')) }}" alt="finbiz-logo">
                    </a>
                </div>
                <div class="main-header">
                    <div class="nav-area">
                        <ul>
                            <li class="main-nav mega-menu project-a-after">
                                <a href="{{ route('frontend.index') }}">Home</a>
                            </li>
                    
                            <li class="main-nav mega-menu">
                                <a href="{{ route('frontend.index', ['q' => 'about']) }}">About</a>
                            </li>
                            <li class="main-nav mega-menu">
                                <a href="{{ route('frontend.index', ['q' => 'gallery']) }}">Gallery</a>
                            </li>
                            {{-- <li class="main-nav mega-menu">
                                <a href="#project">Project</a>
                            </li>
                            <li class="main-nav project-a-after">
                                <a href="#blog">Blog</a>
                            </li> --}}
                            <li class="main-nav"><a href="{{ route('frontend.index', ['q' => 'contact']) }}">Contact</a></li>
                        </ul>
                    </div>


                    <div class="loader-wrapper">
                        <div class="loader">
                        </div>
                        <div class="loader-section section-left"></div>
                        <div class="loader-section section-right"></div>
                    </div>
                    <div class="button-area">
                        <button class="search" id="search" aria-label="Search"><i
                                class="far fa-search"></i></button>
                        <a href="contact.html"
                            class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Register</a>
                        <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                            <img class="menu-light" src="{{ asset("invena/images/icons/01.svg") }}" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>