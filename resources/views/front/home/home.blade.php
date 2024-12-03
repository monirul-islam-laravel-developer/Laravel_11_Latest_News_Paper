@extends('front.master.master')
@section('seo')
    <meta name="title" content="FastSolution IT" />
    <meta name="keywords" content="Software Development Bangladesh, PHP Development Bangladesh, Laravel Development Bangladesh, Vue.js Development Bangladesh, Web Development Services Bangladesh, Custom Software Solutions Bangladesh, IT Solutions Bangladesh, E-commerce Development Bangladesh, Mobile App Development Bangladesh, Software Company in Bangladesh, Digital Solutions Bangladesh, Technology Services Bangladesh, Software Engineering Bangladesh, Web Application Development Bangladesh, IT Consultancy Bangladesh, Business Software Solutions Bangladesh, Cloud Computing Bangladesh, Digital Marketing Bangladesh, IT Support Services Bangladesh, Freelance Software Development Bangladesh, Offshore Software Development Bangladesh, Bangladesh IT Outsourcing, Tech Startups in Bangladesh, Software Testing Services Bangladesh, Web Design Services Bangladesh, Data Analytics Bangladesh, Responsive Web Design Bangladesh, Blockchain Development Bangladesh, Cybersecurity Services Bangladesh,Laravel 11 Web Application Development, Build Web Applications with Laravel 11, Laravel 11 Web Application Framework, Laravel 11 for Custom Web Applications, Laravel 11 Responsive Web Applications, Laravel 11 E-commerce Web Applications, Laravel 11 API-Driven Web Applications, Laravel 11 Full-Stack Web Development, Laravel 11 Frontend and Backend Integration, Laravel 11 Real-Time Web Applications,eCommerce Development, Online Store Solutions, eCommerce Website Design, Custom eCommerce Solutions, eCommerce Payment Gateway Integration, School Management System, Student Information System, Online School Management Software, Attendance Management for Schools, Gradebook Management System, Newspaper Development, Online Newspaper Solutions, News Publishing Platform, Digital Newspaper Solutions, Subscription Management for Newspapers, News Aggregator Development, Responsive Newspaper Website">
    <meta name="description" content="Laravel & Vue js Web Solution Service">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Web Software Company">
    <meta itemprop="description" content="Fast Solutions It Laravel and Vue js Web Solutions">
    <meta itemprop="image" content="{{asset($logo->mobile_logo)}}">

    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Laravel & Vue js Web Solution Service" />
    <meta property="og:description" content="Web Software Company" />
    <meta property="og:image" content="{{asset($logo->mobile_logo)}}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{asset($logo->mobile_logo)}}" />
    <link rel="image_src" href="{{asset($logo->mobile_logo)}}" title="Fast Solution It">

    <meta name="url" content="{{route('home')}}" />
    <link rel="canonical" href="{{route('home')}}">
@endsection

@section('title')

    Home
@endsection
@section('body')
    <section class="banner section-bg z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient white-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element-moon1.png" alt="" class="element one">
        <img src="{{asset('/')}}front/assets/images/shapes/element-moon2.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row align-items-center gy-sm-5 gy-4">
                <div class="col-lg-6">
                    <div class="banner-inner position-relative pe-lg-5">
                        <div class="banner-content">
                            <h1 class="banner-content__title">Full Responsive Dinamic Web Service</h1>
                            <p class="banner-content__desc font-18">Explore the best premium Website available for sale.Our unique collection is hand-curated by experts. Find and buy the perfect premium theme today.</p>
                            <form action="{{ route('search-website') }}" method="GET" class="mb-3">
                                <div class="search-box">
                                    <input type="text" name="search" class="form-control" placeholder="Search themes" value="{{ request('search') }}">
                                    <button type="submit" class="btn btn-main btn-icon icon border-0">
                                        <img src="{{asset('/')}}front/assets/images/icons/search.svg" alt="">
                                    </button>
                                </div>
                            </form>


                            <!-- Tech List Start -->
                            <div class="tech-list">

                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Laravel">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon2.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PHP">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon3.png" alt="" class="white-version">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon-white3.png" alt="" class="dark-version">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="HTML">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon4.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sketch">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon5.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Figma">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon6.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bootstrap">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon7.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tailwind">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon8.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="React">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon9.png" alt="">
                                </a>
                            </div>
                            <!-- Tech List End -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumb">
                        <img src="{{asset('/')}}front/assets/images/thumbs/banner-img.png" alt="">
                        <img src="{{asset('/')}}front/assets/images/shapes/dots.png" alt="" class="dotted-img white-version">
                        <img src="{{asset('/')}}front/assets/images/shapes/dots-white.png" alt="" class="dotted-img dark-version">
                        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element two end-0">

                        <div class="statistics animation bg-main text-center">
                            <h5 class="statistics__amount text-white">100%</h5>
                            <span class="statistics__text text-white font-14">Happy</span>
                            <span class="statistics__text text-white font-14">Customers</span>
                        </div>

                        <div class="statistics style-two bg-white text-center">
                            <h5 class="statistics__amount statistics__amount-two text-heading">100%</h5>
                            <span class="statistics__text text-heading font-14">Full Responsive</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========================== Banner Section End ==========================-->

    <!-- ======================== popular Section Start =========================== -->
    <section class="popular padding-y-120 overflow-hidden">
        <div class="container container-two">
            <div class="section-heading style-left mb-64">
                <h4 class="section-heading__title">We Used Most Popular Technologi Our Project</h4>
            </div>
            <div class="popular-slider arrow-style-two row gy-4">
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon3.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">HTML</h6>
                        <span class="popular-item__qty text-body">5</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/css.png" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Css</h6>
                        <span class="popular-item__qty text-body">3</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/bootstrap.png" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Bootstrap</h6>
                        <span class="popular-item__qty text-body">5</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon4.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Java Script</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a  class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon6.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">PHP</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/laravel.svg" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Laravel</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a  class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/ecmascript6.webp" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">EcmaScript 6</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/vuejs.webp" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Vue js</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================== popular Section End =========================== -->
    <!-- =========================== Arrival Product Section Start ========================== -->
{{--    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">--}}
{{--        <img src="{{asset('/')}}front/assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">--}}

{{--        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">--}}

{{--        <div class="container container-two">--}}
{{--            <div class="section-heading">--}}
{{--                <h3 class="section-heading__title">Latest Laravel Project</h3>--}}
{{--            </div>--}}

{{--            <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All Item</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-wordPress-tab" data-bs-toggle="pill" data-bs-target="#pills-wordPress" type="button" role="tab" aria-controls="pills-wordPress" aria-selected="false">wordPress</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php" type="button" role="tab" aria-controls="pills-php" aria-selected="false">php</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-siteTemplate-tab" data-bs-toggle="pill" data-bs-target="#pills-siteTemplate" type="button" role="tab" aria-controls="pills-siteTemplate" aria-selected="false">site Template</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-blogging-tab" data-bs-toggle="pill" data-bs-target="#pills-blogging" type="button" role="tab" aria-controls="pills-blogging" aria-selected="false">blogging</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">marketing</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-plugins-tab" data-bs-toggle="pill" data-bs-target="#pills-plugins" type="button" role="tab" aria-controls="pills-plugins" aria-selected="false">plugins</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-uiTemplate-tab" data-bs-toggle="pill" data-bs-target="#pills-uiTemplate" type="button" role="tab" aria-controls="pills-uiTemplate" aria-selected="false">UI Template</button>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="tab-content" id="pills-tabContent">--}}
{{--                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}

{{--                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Add To Cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-wordPress" role="tabpanel" aria-labelledby="pills-wordPress-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel" aria-labelledby="pills-siteTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel" aria-labelledby="pills-uiTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="text-center mt-64">--}}
{{--                <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">--}}
{{--                    View All Products--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">

        <div class="container container-two">
            <div class="section-heading">
                <h3 class="section-heading__title">Laravel Latest Projet</h3>
            </div>

            <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">
                @foreach($subcategories as $subcategory)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="pills-{{ $subcategory->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $subcategory->id }}" type="button" role="tab" aria-controls="pills-{{ $subcategory->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{$subcategory->name }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($subcategories as $subcategory)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $subcategory->id }}" role="tabpanel" aria-labelledby="pills-{{ $subcategory->id }}-tab" tabindex="0">

                        <div class="row gy-4">
                            @foreach($subcategory->themes as $theme)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-card ">
                                    <div class="product-card__thumb d-flex">
                                        <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link w-100">
                                            <img src="{{asset($theme->image)}}" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link">{{$theme->name}}</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
{{--                                                by--}}
{{--                                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">Tk.{{$theme->selling_price}}</h6>
                                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme->regular_price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
{{--                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                                <div class="d-flex align-items-center gap-1">--}}
{{--                                                    <ul class="star-rating">--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                </div>
                                            </div>
                                            <a  target="_blank" href="{{$theme->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="btn btn-outline-light btn-sm pill">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="text-center mt-64">
                        @if($subcategory->themes->isNotEmpty()) <!-- Check if there are websites in this category -->
                            <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="btn btn-main btn-lg pill fw-300">
                                This Category All Website
                            </a>
                            @else
                                <p class="text-muted">This Category Has No Website Right Now</p>
                            @endif
                        </div>

                    </div>

                @endforeach

            </div>

            {{--                <div class="tab-pane fade" id="pills-wordPress" role="tabpanel" aria-labelledby="pills-wordPress-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel" aria-labelledby="pills-siteTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel" aria-labelledby="pills-uiTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>



    </section>
    <!-- =========================== Arrival Product Section End ========================== -->
    <!-- ======================= Featured Products Start =============================== -->
    <section class="featured-product padding-y-120 position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 flex-wrap-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="row gy-4 card-wrapper">
                        @foreach($news_templets1 as $newstemplet)
                        <div class="col-sm-6">
                            <div class="product-card box-shadow">
                                <div class="product-card__thumb d-flex">
                                    <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="link w-100">
                                        <img src="{{asset($newstemplet->image)}}" alt="" height="400" width="600" class="cover-img">
                                    </a>
                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-card__content">
                                    <h6 class="product-card__title">
                                        <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="link">{{$newstemplet->name}}</a>
                                    </h6>
                                    <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-card__price mb-0">Tk.{{$newstemplet->selling_price}}</h6>
                                            <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$newstemplet->regular_price}}</span>
                                        </div>
                                    </div>
                                    <div class="product-card__bottom flx-between gap-2">
                                        <div>
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                            <div class="d-flex align-items-center gap-1">
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                            </div>
                                        </div>
                                        <a  target="_blank" href="{{$newstemplet->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="btn btn-success btn-sm pill">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Laravel News Project</h3>
                        </div>
                        <a href="{{route('single-category',['slug'=>$newstemplet->sub_category->slug])}}" class="btn btn-main btn-lg pill fw-300">
                            View All Items
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Featured Products End =============================== -->

    <!-- ======================= Selling Products Start ========================= -->
    <section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">

        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">
        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <img src="{{asset('/')}}front/assets/images/shapes/curve-pattern1.png" alt="" class="position-absolute start-0 top-0 z-index--1">
        <img src="{{asset('/')}}front/assets/images/shapes/curve-pattern2.png" alt="" class="position-absolute end-0 top-0 z-index--1">

        <div class="container container-two">
            <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
                <div style="display: flex; justify-content: center; width: 100%;">
                    <h3 class="section-heading__title">Latest All Project</h3>
                </div>
            </div>
            <div class="selling-product-slider">
                @foreach($templetes8 as $templete8)
                <div class="product-card shadow-sm overlay-none">
                    <div class="product-card__thumb d-flex max-h-unset">
                        <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="link w-100">
                            <img src="{{asset($templete8->image)}}" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-card__content">
                        <h6 class="product-card__title">
                            <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="link">{{$templete8->name}}</a>
                        </h6>
                        <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-card__price mb-0">Tk.{{$templete8->selling_price}}</h6>
                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$templete8->regular_price}}</span>
                            </div>
                        </div>
                        <div class="product-card__bottom flx-between gap-2">
                            <div>
{{--                                <span class="product-card__sales font-16 mb-2">1230 Sales</span>--}}
{{--                                <ul class="star-rating gap-2">--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="flx-align gap-2">
{{--                                <a href="product-details.html" class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">--}}
{{--                    <span class="icon">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/icons/download.svg" alt="" class="white-version">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/icons/download-white.svg" alt="" class="dark-version">--}}
{{--                    </span>--}}
{{--                                </a>--}}
                                <a target="_blank" href="{{$templete8->link}}" class="btn btn-outline-light pill">Live Demo</a>
                                <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="btn btn-success pill">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ======================= Selling Products End ========================= -->

    <!-- ======================= To Featured Author Start =============================== -->
    <section class="top-author padding-y-120 section-bg position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 start-0 z-index--1 white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white2.png" alt="" class="spider-net position-absolute top-0 start-0 z-index--1 dark-version">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-curve-three.png" alt="" class="position-absolute top-0 end-0 z-index--1">

        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Laravel Ecommerce</h3>
{{--                            <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for you. This month's best web themes & templates have arrived, chosen by our content specialists.</p>--}}
                        </div>
                        <div class="author-info d-flex align-items-center gap-3">
                            <div class="author-info__thumb">
                                <img src="{{asset($logo->fav_icon)}}" alt="">
                            </div>
                            <a target="_blank" href="https://facebook.com/fastsolutionit" class="btn btn-main btn-lg pill fw-300">Visit Facebook</a>
                            <div class="author-info__content">
{{--                                <h4 class="author-info__name mb-1">Amplify</h4>--}}
{{--                                <span class="author-info__text">Member Since 2021</span>--}}
                            </div>
                        </div>
{{--                        <div class="flx-align gap-2 mt-48">--}}
{{--                            <a target="_blank" href="https://facebook.com/fastsolutionit" class="btn btn-main btn-lg pill fw-300">Visit Facebook</a>--}}
{{--                            <button type="button" class="follow-btn btn btn-outline-light btn-lg pill">Follow</button>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="circle-content position-relative">
                        <div class="circle static-circle">
                            <div class="circle__badge">
                                <img src="{{asset('/')}}front/assets/images/icons/featured-badge.png" alt="">
                            </div>
                            <div class="circle__text">
                                <p>
                                    FastSolutionsIt Top Featured
                                </p>
                            </div>
                        </div>
                        <div class="row gy-4 card-wrapper">
                            @foreach($templetes4 as $templet4)
                            <div class="col-sm-6">
                                <div class="product-card box-shadow">
                                    <div class="product-card__thumb d-flex">
                                        <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="link w-100">
                                            <img src="{{asset($templet4->image)}}" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="link">{{$templet4->name}}</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">Tk.{{$templet4->selling_price}}</h6>
                                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$templet4->regular_price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
{{--                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                <div class="d-flex align-items-center gap-1">
{{--                                                    <ul class="star-rating">--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                </div>
                                            </div>
                                            <a target="_blank" href="{{$templet4->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="btn btn-success btn-sm pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= To Featured Author End =============================== -->
    <!-- ======================= Top performance Author Start =============================== -->
{{--    <section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 white-version">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/pattern-curve-four.png" alt="" class="position-absolute top-0 start-0 z-index--1">--}}

{{--        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element two">--}}

{{--        <div class="container container-two">--}}
{{--            <div class="row gy-4 align-items-center flex-wrap-reverse">--}}
{{--                <div class="col-lg-7 pe-lg-5">--}}
{{--                    <div class="position-relative">--}}
{{--                        <div class="circle style-two static-circle">--}}
{{--                            <div class="circle__badge">--}}
{{--                                <img src="{{asset('/')}}front/assets/images/icons/featured-badge.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="circle__desc circle__text">--}}
{{--                                <p>--}}
{{--                                    Our Top Performance--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="performance-content">--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18">Email Subscription</span>--}}
{{--                                <h4 class="performance-content__count">49,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Total Products</span>--}}
{{--                                <h4 class="performance-content__count">45,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Total Download</span>--}}
{{--                                <h4 class="performance-content__count">48,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Monthly Visitor</span>--}}
{{--                                <h4 class="performance-content__count">65,000+</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-content">--}}
{{--                        <div class="section-heading style-left">--}}
{{--                            <h3 class="section-heading__title">Top Performance</h3>--}}
{{--                            <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for you. This month's best web themes & templates have arrived, chosen by our content specialists.</p>--}}
{{--                        </div>--}}
{{--                        <a href="register.html" class="btn btn-main btn-lg pill fw-300"> Get Started </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ======================= Top performance Author End =============================== -->
    <!-- =========================== Blog Section Start ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
{{--                <div class="section-heading__inner">--}}
{{--                    <h3 class="section-heading__title">Browse all latest blogs and articles</h3>--}}
{{--                </div>--}}
                <a href="{{route('front-allblogs')}}" class="btn btn-main btn-lg pill">Browse All Blogs </a>
            </div>
            <div class="row gy-4">
                @foreach($blogs3 as $blog3)
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="blog-item__thumb">
                            <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="link">
                                <img src="{{ asset($blog3->image) }}" class="cover-img" alt="Blog Image" style="height: 300px; width: 500px;">

                            </a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__top flx-align">
{{--                                <a href="blog.html" class="blog-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>--}}
                                <div class="blog-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                    <span class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar.svg" alt="" class="white-version">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                    </span>
                                    <span class="text">{{ $blog3->created_at->format('F j, Y') }}</span>

                                </div>
                            </div>
                            <h5 class="title">
                                <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="link">{{ $blog3->title}}</a>
                            </h5>
                            <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- =========================== Blog Section End ========================== -->

    <!-- ======================= Become seller section start ==================== -->
{{--    <section class="seller padding-y-120">--}}
{{--        <div class="container container-two">--}}
{{--            <div class="row gy-4">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="seller-item position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/seller-bg.png" class="position-absolute--}}
{{--                    start-0 top-0 z-index--1" alt="">--}}
{{--                        <h3 class="seller-item__title">Earn 75% of the ItemD Price</h3>--}}
{{--                        <p class="seller-item__desc fw-500 text-heading">Sellers receive 75% of the Itemp Price for items Dsold exclusively and 50% for items sold non-exclusively. See detailed informationabout the fee structure on Market.</p>--}}
{{--                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become a Seller</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="seller-item bg-two position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/seller-bg-two.png" class="position-absolute--}}
{{--                    start-0 top-0 z-index--1" alt="">--}}
{{--                        <h3 class="seller-item__title">Earn until 40% commission</h3>--}}
{{--                        <p class="seller-item__desc fw-500 text-heading">Our Market is the world’s largest creative market place, selling millions of digital assets every year. With 30% affiliate commission, earning money has never been easier!</p>--}}
{{--                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become an Affiliate</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="support position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-sm.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/arrow-shape.png" alt="" class="arrow-shape">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-lg-1 d-lg-block d-none"></div>--}}
{{--                            <div class="col-lg-3 col-md-4 d-md-block d-none">--}}
{{--                                <div class="support-thumb text-center">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/thumbs/support-img.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 d-lg-block d-none"></div>--}}
{{--                            <div class="col-lg-5 col-md-8">--}}
{{--                                <div class="support-content">--}}
{{--                                    <h3 class="support-content__title mb-3">Support 24/7</h3>--}}
{{--                                    <p class="support-content__desc">Wanna talk? Send us a message</p>--}}
{{--                                    <a href="mailto:infomail@office.com" class="btn btn-static-black btn-lg fw-300 pill">infomail@office.com</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ======================= Become seller section End ==================== -->

    <!-- ======================== Brand Section Start ========================= -->
{{--    <div class="brand ">--}}
{{--        <div class="container container">--}}
{{--            <div class="brand-slider">--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img1.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img1.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img2.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img2.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img3.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img4.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img4.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img5.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img5.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img3.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection