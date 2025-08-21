<?php 
    $faqs = (object) [
    // 
    (object) [
        "title" => "What personal details should I include?",
        "content" => "You should include only relevant information such as your full name, email address, phone number, and optionally your LinkedIn profile or portfolio link. Avoid adding sensitive data like your national ID or bank details unless specifically required.",
    ],


    (object) [
        "title" => "How can I improve my business profile?",
        "content" => "Focus on highlighting your unique value proposition, showcasing successful projects, and including client testimonials. Also, make sure your profile is visually appealing and up to date with your latest achievements.",
    ],

    (object) [
        'title' => "What makes a business solution effective?",
        'content' => "An effective business solution should solve a specific problem, streamline processes, increase efficiency, and deliver measurable results. It should also be scalable and adaptable to changing business needs."
    ],

];

?>




<div class="rts-faq-area rts-section-gap faq-bg-one bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-main-wrapper-content-inner-four">
                    <div class="title-style-four left">
                        <span class="pre">faq</span>
                        <h2 class="title rts-text-anime-style-1">Innovative Business Solutions <br>
                            <span>Backed by Experience</span>
                        </h2>
                    </div>
                    <div class="accordion mt--40" id="accordionExample">
                        @foreach ($faqs as $num => $faq)
                            @php
                                $collapseId = 'collapse' . $num;
                                $headingId = 'heading' . $num;
                            @endphp

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="{{ $headingId }}">
                                    <button class="accordion-button {{ $num !== 0 ? 'collapsed' : '' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                        aria-expanded="{{ $num === 0 ? 'true' : 'false' }}"
                                        aria-controls="{{ $collapseId }}">
                                        {{ $num + 1 }}. {{ $faq->title }}
                                    </button>
                                </h2>
                                <div id="{{ $collapseId }}"
                                    class="accordion-collapse collapse {{ $num === 0 ? 'show' : '' }}"
                                    aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $faq->content }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-one-thumbnail-wrapper-right" data-animation="zoomOut" data-delay="0.2"
                    data-duration="1.2">
                    <div class="thumbnail">
                        <img src="{{ asset(config('data.footer_logo'), ) }}" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>