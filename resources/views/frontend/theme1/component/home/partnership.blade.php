<!--Cause Two End-->
<?php 
    
    $items = $frontendData->partners ?? [
    [
        'image' => 'assets/images/image2/ifeoma.jpg',
        'tag' => 'Volunteer',
        'name' => 'Ifeoma Ajumobi (IfyMelody)',
        'content' => "I love to see humanity in harmony, that's why I have taken this decision to be a part of this move.",
    ],
    [
        'image' => 'assets/images/image2/ukafrancis.jpeg',
        'tag' => 'Volunteer',
        'name' => 'Uka Francis',
        'content' => "The smile of others is likewise yours, I'm glad to do this & encourage others to do same."
    ],
    [
        'image' => 'assets/images/image2/ekechi.jpeg',
        'tag' => 'Volunteer',
        'name' => 'Ekechi Thomas Arogor',
        'content' => "Our world needs lifters and I'm glad to be associated with that positive move."
    ],
    [
        'image' => 'assets/images/image2/onovo.jpg',
        'tag' => 'Volunteer',
        'name' => 'Onovo Arinzechukwu George',
        'content' => "I am an avid supporter of what NAF stands for and I'm glad to be useful in the great project."
    ],
];
 
 ?>

<section class="causes-one causes-two" id="causes">
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">Ready to help you</span>
            <h2 class="section-title__title">Happy Partners</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    <!--Cause One Single-->
                    @foreach ($items as $item)
                        <div class="causes-one__single">
                            <div class="volunteers-one__single">
                                <div class="volunteers-one__img">
                                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
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
                                    <p class="volunteers-one__title">{{ $item['tag'] }}</p>
                                    {{-- <p>{{ $item->content }}</p> --}}
                                </div>
                            </div>
                        </div>
                        <!--Cause One Single-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cause Two End-->