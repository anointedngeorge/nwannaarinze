@extends('frontend.theme1.layout')

@section('content')
        
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/images/page-header-bg.jpg)">
            </div>
            <div class="container mt-12">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html"></a></li>
                        <li><span></span></li>
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact with us</span>
                                <h2 class="section-title__title">Get in Touch With us</h2>
                            </div>
                            <p class="contact-page__text">
                                Have questions, ideas, or want to make a difference? We’d love to hear from you! Whether you’re looking to volunteer, donate, or simply learn more about our mission, our team is here to help. Reach out today and let’s work together to create lasting impact.
                            </p>
                            <div class="contact-page__social">
                                <a href="{{ config('data.twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ config('data.facebook') }}"><i class="fab fa-facebook"></i></a>
                                <a href="{{ config('data.instagram') }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <form method="POST" action="{{ route('frontend.contacts') }}" class="comment-one__form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input required type="text" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input required type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input required  type="text" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="subject" required>
                                                <option value="">Subject</option>
                                                <option value="donation">Donation</option>
                                                <option value="volunteer">Volunteer</option>
                                                <option value="partnership">Partnership</option>
                                            </select><!-- /# -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="content" placeholder="Write a Comment"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Send us a
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Info Start-->
        <section class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single">
                            <h4 class="contact-info__title">About</h4>
                            <p class="contact-info__text">{{ substr(config('data.footer_about'), 0, 70) }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single contact-info__single-2">
                            <h4 class="contact-info__title">Address</h4>
                            <p class="contact-info__text">{{ config('data.address') }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Contact Info Single-->
                        <div class="contact-info__single contact-info__single-3">
                            <h4 class="contact-info__title">Contact</h4>
                            <p class="contact-info__email-phone">
                                <a href="mailto:{{ config('data.email') }}"
                                    class="contact-info__email">{{ config('data.email') }}</a>
                                <a href="tel:{{ config('data.phone1') }}" class="contact-info__phone">{{ config('data.phone1') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Info End-->

        <!--Contact page Google Map Start-->
        <section class="contact-page-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3964.7259649719144!2d7.521318826207445!3d6.429240293561847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo.%2054%20Federal%20College%20Road%2C%20Independence%20Layout%20by%20ESBS%2C%20Enugu!5e0!3m2!1sen!2sng!4v1755953095759!5m2!1sen!2sng" style="border:0; width: 100%; height: 600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <!--Google Map End-->






@endsection