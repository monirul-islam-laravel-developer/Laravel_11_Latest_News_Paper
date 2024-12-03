@extends('front.master.master')
@section('seo')

    <meta itemprop="name" content="Contact Page">
    <meta itemprop="description" content="Fast Solutions It Latest Laravel & Vue Js Web Solutions">
    <meta itemprop="image" content="{{asset($logo->mobile_logo)}}">

    <meta name="keywords" content="Software Development Bangladesh, PHP Development Bangladesh, Laravel Development Bangladesh, Vue.js Development Bangladesh, Web Development Services Bangladesh, Custom Software Solutions Bangladesh, IT Solutions Bangladesh, E-commerce Development Bangladesh, Mobile App Development Bangladesh, Software Company in Bangladesh, Digital Solutions Bangladesh, Technology Services Bangladesh, Software Engineering Bangladesh, Web Application Development Bangladesh, IT Consultancy Bangladesh, Business Software Solutions Bangladesh, Cloud Computing Bangladesh, Digital Marketing Bangladesh, IT Support Services Bangladesh, Freelance Software Development Bangladesh, Offshore Software Development Bangladesh, Bangladesh IT Outsourcing, Tech Startups in Bangladesh, Software Testing Services Bangladesh, Web Design Services Bangladesh, Data Analytics Bangladesh, Responsive Web Design Bangladesh, Blockchain Development Bangladesh, Cybersecurity Services Bangladesh,Laravel 11 Web Application Development, Build Web Applications with Laravel 11, Laravel 11 Web Application Framework, Laravel 11 for Custom Web Applications, Laravel 11 Responsive Web Applications, Laravel 11 E-commerce Web Applications, Laravel 11 API-Driven Web Applications, Laravel 11 Full-Stack Web Development, Laravel 11 Frontend and Backend Integration, Laravel 11 Real-Time Web Applications,eCommerce Development, Online Store Solutions, eCommerce Website Design, Custom eCommerce Solutions, eCommerce Payment Gateway Integration, School Management System, Student Information System, Online School Management Software, Attendance Management for Schools, Gradebook Management System, Newspaper Development, Online Newspaper Solutions, News Publishing Platform, Digital Newspaper Solutions, Subscription Management for Newspapers, News Aggregator Development, Responsive Newspaper Website">    <meta name="description" content="Laravel & Vue js Web Solution Service">

    <meta name="title" content="Contact Page"/>
    <meta name="description" content="Latest Laravel & Vue Js Web Solutions">

    <meta property="article:type" content="website">
    <meta property="article:title" content="Contact Page">
    <meta property="article:url" content="{{request()->url()}}">
    <meta property="article:description" content="Latest Laravel & Vue Js Web Solutions">
    <meta property="article:image" content="{{asset($logo->mobile_logo)}}">


    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Fast Solutions It Software Company" />
    <meta property="og:title" content="Contact Page" />
    <meta property="og:description" content="Latest Laravel & Vue Js Web Solutions" />
    <meta property="og:image" content="{{asset($logo->mobile_logo)}}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{asset($logo->mobile_logo)}}" />
    <meta property="og:image:alt" content="Contact Page" />
    <link rel="image_src" href="{{asset($logo->mobile_logo)}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="fastsolutionsit.com">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta name="twitter:title" content="All Blog | {{env('APP_NAME')}}">
    <meta name="twitter:hashtags" content="Laravel Developer, PHP Developer, HTML, CSS, Bootstrap, Vue.js Developer,">
    <meta name="twitter:description" content="Latest Laravel & Vue Js Web Solutions">
    <meta name="twitter:image" content="{{asset($logo->mobile_logo)}}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">

    <meta name="url" content="{{request()->url()}}" />
    <link rel="canonical" href="{{request()->url()}}" />
@endsection
@section('title')
    Cantact Page

@endsection
@section('body')

    <!-- ======================== Breadcrumb Two Section Start ===================== -->
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{asset('/')}}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{route('home')}}" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">Contact</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- =========================== Contact Section Start ========================== -->
    <section class="contact padding-t-120 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/gradients/banner-two-gradient.png" alt="" class="bg--gradient">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">

        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3 class="contact-info__title">Get in touch with us today</h3>
                        <p class="contact-info__desc">Have a project in mind? Whether you're looking to build a new website, upgrade an existing one, or explore custom solutions, we’re here to help! Our team specializes in responsive, high-performance web development tailored to meet your business goals.</p>

                        <div class="contact-info__item-wrapper flx-between gap-4">
                            <div class="contact-info__item">
                                <span class="contact-info__text text-capitalize d-block mb-1">Give Us A Call</span>
                                <a href="tel:01812345678" class="contact-info__link font-24 fw-500 text-heading hover-text-main">01755766176</a>
                            </div>
                            <div class="contact-info__item">
                                <span class="contact-info__text text-capitalize d-block mb-1">Give Us An Email</span>
                                <a href="tel:dpmarket@gmail.com" class="contact-info__link font-24 fw-500 text-heading hover-text-main">dpmarket@gmail.com</a>
                            </div>
                        </div>

                        <div class="mt-24">
                            <ul class="social-list">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com/" class="social-list__link text-heading flx-center"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com/" class="social-list__link text-heading flx-center"> <i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com/" class="social-list__link text-heading flx-center"> <i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.pinterest.com/" class="social-list__link text-heading flx-center"> <i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.pinterest.com/" class="social-list__link text-heading flx-center"> <i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="card common-card p-sm-4">
                        <div class="card-body">
                            <form action="{{route('inquary-submit')}}" method="POST" autocomplete="off">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Full Name</label>
                                        <input type="text" class="common-input common-input--grayBg border" name="name" id="name" required placeholder="Your name here">
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Your Mail</label>
                                        <input type="email" class="common-input common-input--grayBg border" name="email" id="email" required placeholder="Your email here ">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Your Whatsapp Number</label>
                                        <input type="number"  class="common-input common-input--grayBg border" id="email" required  name="whatsapp_number" placeholder="Your Whatsapp Number Here">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="message" class="form-label mb-2 font-18 font-heading fw-600">Your Message</label>
                                        <textarea class="common-input common-input--grayBg border" name="message" id="message" required placeholder="Write Your Message Here"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-main btn-lg pill w-100"> Submit Now </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Contact Section End ========================== -->

    <!-- ===================== Newsletter Two Start ============================ -->
    @endsection

