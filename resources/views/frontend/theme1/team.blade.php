@extends('frontend.theme1.layout')


@section('content')
    

<!--Cause Two End-->
<?php 
    
    $items = !empty($frontendData->team) ? $frontendData->team : [
    [
        'image' => 'assets/images/image2/ifeoma.jpg',
        'designation' => 'Volunteer',
        'name' => 'Ifeoma Ajumobi (IfyMelody)',
        'description' => "I love to see humanity in harmony, that's why I have taken this decision to be a part of this move.",
    ],
    [
        'image' => 'assets/images/image2/ukafrancis.jpeg',
        'designation' => 'Volunteer',
        'name' => 'Uka Francis',
        'description' => "The smile of others is likewise yours, I'm glad to do this & encourage others to do same."
    ],
    [
        'image' => 'assets/images/image2/ekechi.jpeg',
        'designation' => 'Volunteer',
        'name' => 'Ekechi Thomas Arogor',
        'description' => "Our world needs lifters and I'm glad to be associated with that positive move."
    ],
    [
        'image' => 'assets/images/image2/onovo.jpg',
        'designation' => 'Volunteer',
        'name' => 'Onovo Arinzechukwu George',
        'description' => "I am an avid supporter of what NAF stands for and I'm glad to be useful in the great project."
    ],
];
 
 ?>


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

     <section class="causes-one causes-two" id="causes">
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">Meet Our </span>
            <h2 class="section-title__title">NAF Team</h2>
        </div>
        <div class="row">
                    <!--Cause One Single-->
                    @foreach ($items as $item)
                        <div class="col-xl-4 causes-one__single">
                            <div class="volunteers-one__single">
                                <div class="volunteers-one__img">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"
                                        style="width:100%; height: 400px;">
                                    <div class="volunteers-one__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        {{-- <a href="#"><i class="fab fa-pinterest-p"></i></a> --}}
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="volunteers-one__content">
                                    <h4 class="volunteers-one__name">{{ $item['name'] }}</h4>
                                    <p class="volunteers-one__title">{{ $item['designation'] }}</p>
                                    {{-- <p>{{ $item->description }}</p> --}}
                                </div>
                            </div>
                        </div>
                        <!--Cause One Single-->
                    @endforeach
               
         
        </div>
    </div>
</section>

 
@endsection