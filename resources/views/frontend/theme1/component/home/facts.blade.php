<?php
$facts = (object) [
    (object) [
        'title' => 'Business Solution',
        'counter' => '1200',
        'icon' => 'invena/images/fun-facts/01.svg'
    ],
    (object) [
        'title' => 'Solution Experts',
        'counter' => '2.2',
        'icon' => 'invena/images/fun-facts/02.svg'
    ],
    (object) [
        'title' => 'Worldwide Partner',
        'counter' => '196',
        'icon' => 'invena/images/fun-facts/03.svg'
    ],

];
?>

<div class="rts-fun-facts-area rts-section-gapBottom">
    <div class="container">
        <div class="row g-5">

            @foreach ($facts as $fact)

                <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="{{ $fact->icon }}" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="{{ $fact->counter }}">00</span>k
                        </h2>
                        <span class="bototm">{{ $fact->title }}</span>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>