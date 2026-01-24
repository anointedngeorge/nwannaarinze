@php
    $donations = [
        [
            "icon" => "icon-social-campaign",
            "class" => "",
            "dataCount" => "4850",
            "dataCountText" => "10M+",
            "delay" => "100ms",
            "text" => "Fund Raised"
        ],
        [
            "icon" => "icon-social-campaign",
            "class" => " we-change__counter-icon-clr-secondary",
            "dataCount" => "30",
            "dataCountText" => "30",
            "delay" => "300ms",
            "text" => "Donation"
        ],
        [
            "icon" => "icon-social-campaign",
            "class" => " we-change__counter-icon-clr-extra",
            "dataCount" => "5",
            "dataCountText" => "5",
            "delay" => "200ms",
            "text" => "Completed Project"
        ],
        [
            "icon" => "icon-social-campaign",
            "class" => " we-change__counter-icon-clr-secondary",
            "dataCount" => "20",
            "dataCountText" => "20",
            "delay" => "300ms",
            "text" => "Volunteer"
        ],







    ];
@endphp



<section class="testimonials-page testimonials--carousel">
    <div class="container">
        <div class="thm-owl__carousel testimonials__carousel carousel--have-shadow owl-carousel" data-owl-options='{
					"loop": true,
					"margin": 30,
					"items": 1,
					"nav": true,
					"dots": true,
					"smartSpeed": 700,
					"navText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
					"responsive": {
						"0": {
							"items": 1,
							"margin": 0
						},
						"768": {
							"items": 2,
							"margin": 30
						},
						"992": {
							"items": 3,
							"margin": 30
						}
					}
				}'>
            @foreach ($donations as $dt)
                <div class="item ">
                    <div class="we-change__counter-icon {{ $dt['class'] }}">
                        {{-- <span class="icon-campaign"></span> --}}
                        <span class="we-change__counter-content {{ $dt['icon'] }}"></span>

                    </div>
                    <div class="we-change__counter-content">
                        <h3 class="odomete" data-count="{{ $dt['dataCount'] }}">{{ $dt['dataCountText'] }}</h3>
                        <p class="we-change__counter-text">{{ $dt['text'] }}</p>
                    </div>
                </div>
            @endforeach

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>