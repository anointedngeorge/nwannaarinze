<?php

$items = $frontendData->blogs || [
    [
        'image' => "assets/images/image2/afcc.webp",
        'date' => "26 oct",
        'title' => "Fake Charity: EFCC arrests 2 men over N21m fraud in Kaduna",
        'content' => "The Kaduna Zonal Command of the Economic and Financial Crimes Commission has arrested the duo of Michael Yusuf Michael and Martha Daniel, promoters of MYM123CARE for allegedly obtaining money by false pretence. ADVERTISING Their arrest followed a petition alleging that the suspects on the pr",
    ],

    [
        'image' => "assets/images/image2/efcc.webp",
        'date' => "27 sept",
        'title' => "EFCC remands man in prison over N55m medical charity scam",
        'content' => "The Kaduna Zonal Command of the Economic and Financial Crimes Commission has arraigned the duo of Michael Yusuf Michael and Martha Daniel Yusuf, both siblings, before Justice Hannnatu A.L Balogun on an eight-count charge bordering on obtaining by false pretence. The defendants allegedly floate"
    ],

    [
        'image' => "assets/images/image2/800ht.jpg",
        'date' => "30 dec",
        'title' => "Nwanna Arinze foundation empowers school children in Enugu",
        'content' => "The programme which was tagged back to school project distributed learning materials to tje kids. speaking at the event, the president and founder Mr Arinze Nwanna who was represented by the oriject manager Mr Ogbenjuwa Moses urged the children to be of good behaviours"
    ],
];

?>


<!--Blog Two Start-->
<section class="blog-one blog-two" id="news">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">From the Blog</span>
            <h2 class="section-title__title">News & Articles</h2>
        </div>
        <div class="row">
            <!--Blog One single-->
            @foreach ($items as $item)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" style="width: 100%; height: 300px;">
                            <div class="blog-one__date">
                                <p>{{ $item['date'] }}</p>
                            </div>
                            <a href="#">
                                <span class="news-one__plus"></span>
                            </a>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                {{-- <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                                --}}
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="#">{{$item['title']}}</a>
                            </h3>
                            <p class="blog-one__text">{{ $item['content'] }}
                            </p>
                            <div class="blog-one__bottom">
                                <a href="#" class="blog-one__btn">Read More</a>
                                <a href="#" class="blog-one__arrow"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!--Blog Two End-->