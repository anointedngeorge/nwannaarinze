     
     <?php
     
        $items = [
            "assets/images/image2/use.jpg",
            "assets/images/image2/res1.jpg",
            "assets/images/image2/R.jpg",
            "assets/images/image2/widows.jpg",
            "assets/images/image2/water.jpg",
        ]

     ?>
     
     <!--Gallery One Start-->
     <section class="gallery-one">
        <div class="gallery-one__container">
            <ul class="gallery-one__content list-unstyled">

                @foreach ($items as $item )
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-one__img-box">
                        <div class="gallery-one__img-inner">
                            <img style="height: 200px;" src="{{ asset($item) }}" alt="">
                        </div>
                        <div class="gallery-one__img-overly">
                            <div class="gallery-one__icon-bg">
                                <img src="assets/images/shapes/gallery-shape.png" alt="">
                            </div>
                            <a class="img-popup" href="{{ asset($item) }}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </section>
    <!--Gallery One End-->