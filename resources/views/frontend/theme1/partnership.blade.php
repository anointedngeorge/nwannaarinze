@extends('frontend.theme1.layout')


@section('content')


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/images/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    {{-- <h2>Become a Volunteer</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Volunteers</li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer__Left">
                            <h3>Become A Partner</h3>
                            <br>
                            <div class="become-volunteer__images">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="become-volunteer__img-single">
                                            <img src="assets/images/images/become-volunteer-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="become-volunteer__img-single">
                                            <img src="assets/images/images/become-volunteer-img-2.jpg" alt="">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="become-volunteer__content">
                                <h3 class="become-volunteer__title">Requirements</h3>
                                <p class="become-volunteer__text">Aliquam hendrerit a augue insu image pellentes que id
                                    erat quis sollicitud null mattis Ipsum is simply dummy typesetting industry. Alienum
                                    phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in meifn
                                    pericula euripidis.</p>
                                <ul class="list-unstyled become-volunteer__points">
                                    <li>Nsectetur cing do not elit.</li>
                                    <li>Suspe ndisse suscipit sagittis in leo.</li>
                                    <li>Entum estibulum dignissim lipsm posuere.</li>
                                </ul>
                                <div class="become-volunteer__contact">
                                    <p>
                                        <a href="tel:{{ config('data.phone1') }}" class="become-volunteer__phone">{{config('data.phone1')}}</a>
                                        <a href="mailto:{{ config('data.email') }}"
                                            class="become-volunteer__email">{{ config('data.email') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer__right">
                            <form class="become-volunteer__form" method="POST" action="{{ route( 'frontend.partners' ) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="file" class="form-control" required name="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Date of Birth" name="dob" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Occupation" name="occupation">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input become-volunteer__message-box">
                                            <textarea name="content" placeholder="Write a Comment"></textarea>
                                        </div>
                                        <div class="become-volunteer__btn-box">
                                            <button type="submit" class="thm-btn become-volunteer__btn">Send us a
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

 
@endsection