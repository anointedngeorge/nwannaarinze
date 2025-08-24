<?php 
  
        $items = (object) [
    (object) [
        'name' => "Okey Barnabas",
        'tag' => 'Agbor, Delta State-Nigeria ',
        'content' => "When I saw what was brought to my family I was filled with tears and couldn't utter a word. Thank you NAF and staff."
    ],

    (object) [
        'name' => "Anu Roseline",
        'tag' => "Ijora, Ogun State-Nigeria ",
        'content' => "My tearS have been wiped away by this wonderful Organisation. I am very grateful Thank you NAF."
    ],
    (object) [
        'name' => "Mr. Anderson Koga",
        'tag' => "Northwest Zambia ",
        'content' => "We are and will remain grateful to you Nwanna Arinze Foundation for this gesture. Thank you a million time."
    ],
    (object) [
        'name' => "Okey Barnabas",
        'tag' => "Oba Anambra State-Nigeria ",
        'content' => "When I saw what was brought to my family I was filled with tears and couldn't utter a word. Thank you NAF and staff."
    ]
];

  ?>



<!--Testimonial Two Start-->
<section class="testimonial-two" id="testimonials">
    <div class="testimonial-two-bg" style="background-image: url(assets/images/images/testimonial-two-bg.png);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-two__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">our testimonials</span>
                        <h2 class="section-title__title">Happy Beneficiaries</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-two__right">
                    <div class="testimonial-two__carousel owl-carousel owl-theme">
                        @foreach ($items as $item)
                            <!--Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__content">
                                    <div class="testimonial-two__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <p class="testimonial-two__text">{{$item->content}}</p>
                                </div>
                                <div class="testimonial-two__client-info">
                                    <div class="testimonial-two__client-img">
                                        {{-- <img src="assets/images/logos/logo1.png" alt="{{ $item->name }}" style="width:30%; height: 30%;"> --}}
                                    </div>
                                    <div class="testimonial-two__client-details">
                                        <h5 class="testimonial-two__client-name">{{ $item->name }}</h5>
                                        <p class="testimonial-two__client-title">{{ $item->tag }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->