@extends('frontend.theme1.layout')


@section('content')


    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/images/page-header-bg.jpg') }})">
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
                    <h3 class="text text-center"> {{ $event->title }} </h3>
                    <br>
                    <div class="become-volunteer__Left">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="become-volunteer__img-single">
                                    <img src="{{ asset("storage/" . $event->image ?? 'assets/images/images/become-volunteer-img-2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="become-volunteer__content">

                            <p>
                                {{ $event->content }}
                            </p>

                        </div>
                    </div>
                </div>
                @if ($event->google_form_link)
                     <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__right">
                        <div class="google-form-container">
                            <iframe src="{{ $event->google_form_link }}" class="google-form-frame" frameborder="0"
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
                @endif
               
            </div>
        </div>

        @include('frontend.theme1.component.general.events')

    </section>
    <!--Become Volunteer End-->


@endsection