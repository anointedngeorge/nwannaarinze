<?php
$contents = (object) [
    (object) [
        'title' => 'Corporate Goals',
        'content' => [
            'To increase profit after Tax (PAT) and ROI by 10% yearly',
            'To maintain a right balance between liquidity and profitability',
            'To guarantee sustainable growth year on year',
            'To secure unique customer experience'
        ]
    ],
    (object) [
        'title' => 'R&D',
        'content' => [
            'Customer focused research',
            'Market intelligence',
            'Technological research',
            'Information system'
        ]
    ],
    (object) [
        'title' => 'Information System',
        'content' => [
            'Implement IT driven efficiency improvement programs',
            'Technology optimization and IT transformation',
            'Strengthen MIS'
        ]
    ],
    (object) [
        'title' => 'Procurement',
        'content' => [
            'Bulk and direct procurement',
            'Monitor procurement procedures',
            'Strategic procurement planning',
            'Price information'
        ]
    ],
    (object) [
        'title' => 'Human Resources',
        'content' => [
            'Develop new competencies',
            'Setup recruitment of best in class professionals',
            'Implement robust performance and reward systems',
            'Talent management schemes like strategic secondments and exchange'
        ]
    ],
    (object) [
        'title' => 'Estates & Engineering Services',
        'content' => [
            'Maintenance of the company assets and real estate',
            'Equipment and machinery maintenance and safeguard',
            'Bundled services offering'
        ]
    ],
    (object) [
        'title' => 'Finance & Inv',
        'content' => [
            'Build strategic alliances with financiers locally and internationally',
            'Strengthen internal control and compliance',
            'Generate quality financial information for management decision making',
            'Strengthen financial management system'
        ]
    ],
    (object) [
        'title' => 'Branding & Marketing',
        'content' => [
            'Enhance corporate visibility in the market',
            'Establish a dedicated business development unit',
            'Establish incentive system for marketing and sales',
            'Intensify advert, promotion and sales activities'
        ]
    ],

];

?>


<div class="business-solution-area rts-section-gap">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-6">
                <div class="business-solution-area-left-thumbnail">
                    <div class="iamge-large">
                        <img src="{{ asset(config('data.footer_logo'),) }}" alt="choose">
                    </div>
                    {{-- <div class="small-mobile">
                        <img src="invena/images/why-choose/07.webp" alt="choose">
                    </div> --}}
                    <div class="success-rate-area">
                        <div class="inner">
                            <h2 class="counter title"><span class="odometer" data-count="95">00</span>%
                            </h2>
                            <span>Success Rate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--80 mt_sm--100">
                <div class="business-solution-area-right-content">
                    <div class="title-style-four left">
                        <span class="pre">{{ config('data.name') }}</span>
                        <h2 class="title rts-text-anime-style-1">COMPANY STRUCTURE <br>
                            <span>Driving Success </span>
                        </h2>
                    </div>
                    <p class="disc">
                        The holding company is set up as a parent company to transact business in its own
                        name.
                        In addition, the holding company is expected to lend management expertise and
                        surveillance to SBU for deliberate business turnaroundand transformation.
                        The Holding Company only has significant but not controlling influence in SBUs based
                        on shareholding structure.
                    </p>

                    {{-- <div class="featuremain-wrapper"> --}}

                        <div class="swiper mySwiperh2_clients" dir="ltr">
                            <div class="swiper-wrapper">
                                @foreach ($contents as $c)
                                    <div class="swiper-slide content-center">
                                        {{-- <div class="single-feature-wrapper"> --}}
                                            <img src="invena/images/why-choose/icons/06.svg" width="50" alt="icon">
                                            <h5 class="title">{{ $c->title }}</h5>
                                            <div class="disc">
                                            <ul style="max-height: 300px; overflow-y: scroll;">
                                                @foreach ($c->content as $cc)
                                                    <li>{{ $cc }}</li>
                                                @endforeach
                                            </ul>
                                            </div>
                                        {{-- </div> --}}

                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
