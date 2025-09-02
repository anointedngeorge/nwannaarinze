<!--Cause Two End-->
<?php 
 
    $items = (object) [
    (object) [
        'image' => 'assets/images/image2/R.jpg',
        'tag' => 'School Projects',
        'title' => 'Back To School',
        'content' => "We help parents with school materials and tuition fees in ensuring education for every child.",
    ],
    (object) [
        'image' => 'assets/images/image2/widows.jpg',
        'tag' => 'Widows Project',
        'title' => 'Helping Widows',
        'content' => "We help put our widows happy again in various bussines for the betterment of our children.",
    ],
    (object) [
        'image' => 'assets/images/image2/rows1.jpg',
        'tag' => 'Youth Empowerment',
        'title' => 'Skills Acquisition',
        'content' => "We empower the African youths in various vocational training for fruitful living in the society.",
    ],
    (object) [
        'image' => 'assets/images/image2/water3.jpeg',
        'tag' => 'Water Projects',
        'title' => 'Changing lives',
        'content' => "Let's help make our world a better place to live in through clean water supply for all.",
    ],
];
 
 ?>

<section class="causes-one causes-two" id="causes">
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">Project</span>
            <h2 class="section-title__title">Our Campaign</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    <!--Cause One Single-->
                    @foreach ($items as $item)
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 250px;">
                                <div class="causes-one__category">
                                    <span>{{ $item->tag }}</span>
                                </div>
                            </div>
                            <div class="causes-one__content-box">
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title">
                                        <a href="give-them-education.html">{{ $item->title }}</a>
                                    </h3>
                                    <p class="causes-one__text">{{ $item->content }}</p>
                                </div>
                                <div class="causes-one__progress causes-one__progress-2">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    {{-- <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div> --}}
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