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

            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__right">
                    <form class="become-volunteer__form" method="POST" action="{{ route("
                            frontend.event_registration_store" ) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="become-volunteer__input">
                                    <input class="form-control" type="text" hidden value="{{ $event->id }}"
                                        name="event">
                                    <input class="form-control" type="text" placeholder="First name" required
                                        name="first_name">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Last name" name="last_name" required>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Middle name" name="middle_name">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="email" placeholder="Email Address" required name="email">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="state of resident" name="state_of_resident"
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="submit expectation" name="submit_expectation"
                                        required id="submit_expectation">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="Occupation" name="occupation" required>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer__input">
                                    <input type="text" placeholder="civic interest" name="civic_interest" required>
                                </div>
                            </div>
                            @if ($event->can_register)
                            <div class="col-xl-12">
                                <button type="submit" class="thm-btn become-volunteer__btn">Register</button>
                            </div>
                            @endif

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    @include('frontend.theme1.component.general.events')

</section>
<!--Become Volunteer End-->


@endsection