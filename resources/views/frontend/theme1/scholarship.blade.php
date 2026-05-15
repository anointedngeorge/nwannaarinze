@extends('frontend.theme1.layout')


@section('content')


    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({ $result->image })">
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
                <div class="col-xl-4 col-lg-4">
                    <div class="become-volunteer__Left">
                        <h3>{{ $result->title ?? "Nwanna Arinze Foundation Application" }}</h3>
                        <br>
                        <div class="become-volunteer__images">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="become-volunteer__img-single">
                                        <img src="{{ $result->image }}" class="image-cover" alt="">
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="become-volunteer__img-single">
                                        <img src="assets/images/images/become-volunteer-img-2.jpg" alt="">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="become-volunteer__content">
                            <h3 class="become-volunteer__title">Requirements</h3>
                            <p class="become-volunteer__text">To become a partner, you’ll need to meet the following
                                criteria:</p>
                            <ul class="list-unstyled become-volunteer__points">
                                <li>Possess a strong commitment and readiness to collaborate effectively.</li>
                                <li>Demonstrate reliability and professionalism in all engagements.</li>
                                <li>Maintain a solid understanding of your industry and services.</li>
                                <li>Be prepared to uphold high standards and deliver quality consistently.</li>
                            </ul>
                            <p>These requirements ensure a smooth and successful partnership built on trust and mutual
                                growth.</p>
                            <div class="become-volunteer__contact">
                                <p>
                                    <a href="tel:{{ config('data.phone1') }}"
                                        class="become-volunteer__phone">{{config('data.phone1')}}</a>
                                    <a href="mailto:{{ config('data.email') }}" class="become-volunteer__email">{{
                                        config('data.email') }}</a>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="become-volunteer__right">

                        <div class="google-form-container">
                            <iframe src="{{ $result->google_form_link }}" class="google-form-frame" frameborder="0"
                                loading="lazy" allowfullscreen>
                            </iframe>
                        </div>

                        <style>
                            .google-form-container {
                                width: 100%;
                                max-width: 100%;
                                overflow: hidden;
                                border-radius: 16px;
                                background: #ffffff;
                                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                                border: 1px solid #e5e7eb;
                                padding: 0;
                            }

                            .google-form-frame {
                                width: 100%;
                                min-height: 700px;
                                border: none;
                                display: block;
                                background: #fff;
                            }

                            @media (max-width: 768px) {
                                .google-form-frame {
                                    min-height: 600px;
                                }

                                .google-form-container {
                                    border-radius: 12px;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>


        @include('frontend.theme1.component.home.partnership')


    </section>
    <!--Become Volunteer End-->


@endsection