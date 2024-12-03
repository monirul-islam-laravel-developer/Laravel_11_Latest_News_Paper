@extends('front.master.master')
@section('seo')

    <meta itemprop="name" content="{{$theme->name}}">
    <meta itemprop="description" content="Latest Larave & Vue Js All Website Solutions">
    <meta itemprop="image" content="{{asset($theme->image)}}">
    <meta name="keywords" content="Software Development Bangladesh, PHP Development Bangladesh, Laravel Development Bangladesh, Vue.js Development Bangladesh, Web Development Services Bangladesh, Custom Software Solutions Bangladesh, IT Solutions Bangladesh, E-commerce Development Bangladesh, Mobile App Development Bangladesh, Software Company in Bangladesh, Digital Solutions Bangladesh, Technology Services Bangladesh, Software Engineering Bangladesh, Web Application Development Bangladesh, IT Consultancy Bangladesh, Business Software Solutions Bangladesh, Cloud Computing Bangladesh, Digital Marketing Bangladesh, IT Support Services Bangladesh, Freelance Software Development Bangladesh, Offshore Software Development Bangladesh, Bangladesh IT Outsourcing, Tech Startups in Bangladesh, Software Testing Services Bangladesh, Web Design Services Bangladesh, Data Analytics Bangladesh, Responsive Web Design Bangladesh, Blockchain Development Bangladesh, Cybersecurity Services Bangladesh,Laravel 11 Web Application Development, Build Web Applications with Laravel 11, Laravel 11 Web Application Framework, Laravel 11 for Custom Web Applications, Laravel 11 Responsive Web Applications, Laravel 11 E-commerce Web Applications, Laravel 11 API-Driven Web Applications, Laravel 11 Full-Stack Web Development, Laravel 11 Frontend and Backend Integration, Laravel 11 Real-Time Web Applications,eCommerce Development, Online Store Solutions, eCommerce Website Design, Custom eCommerce Solutions, eCommerce Payment Gateway Integration, School Management System, Student Information System, Online School Management Software, Attendance Management for Schools, Gradebook Management System, Newspaper Development, Online Newspaper Solutions, News Publishing Platform, Digital Newspaper Solutions, Subscription Management for Newspapers, News Aggregator Development, Responsive Newspaper Website">    <meta name="description" content="Laravel & Vue js Web Solution Service">

    <meta name="title" content="Larave & Vue Js All Website"/>
    <meta name="description" content="Latest Larave & Vue Js All Website ">

    <meta property="article:type" content="website">
    <meta property="article:title" content="{{$theme->name}}">
    <meta property="article:url" content="{{request()->url()}}">
    <meta property="article:description" content="Latest Larave & Vue Js All Website Solutions">
    <meta property="article:image" content="{{asset($theme->image)}}">

    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Fast Solutions It Software Company" />
    <meta property="og:title" content="{{$theme->name}}" />
    <meta property="og:description" content="Latest Larave & Vue Js All Website Solutions" />
    <meta property="og:image" content="{{asset($theme->image)}}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{asset($theme->image)}}" />
    <meta property="og:image:alt" content="Larave & Vue Js All Website" />
    <link rel="image_src" href="{{asset($theme->image)}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="fastsolutionsit.com">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta name="twitter:title" content="{{$theme->name}}| {{env('APP_NAME')}}">
    <meta name="twitter:hashtags" content="Laravel Developer, PHP Developer, HTML, CSS, Bootstrap, Vue.js Developer,">
    <meta name="twitter:description" content="Latest Larave & Vue Js All Website Solutions">
    <meta name="twitter:image" content="{{asset($theme->image)}}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">

    <meta name="url" content="{{request()->url()}}" />
    <link rel="canonical" href="{{request()->url()}}" />
@endsection
@section('title')
    Detail Page
@endsection
@section('body')
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{asset('/')}}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{route('home')}}" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a class="breadcrumb-list__link text-body hover-text-main">{{$theme->category->name}}</a>
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{ route('single-category',['slug' => $theme->sub_category->slug]) }}" class="breadcrumb-list__link text-body hover-text-main">{{$theme->sub_category->name}}</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-item" >{{$theme->name}}</span>

                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">Details</span>
                                </li>
                            </ul>

                            <h3 style="
    text-align: center;
    padding: 15px;
    background-color: #f8f9fa; /* Light background */
    border: 1px solid #dee2e6; /* Border color */
    border-radius: 8px; /* Rounded corners */
    display: inline-block; /* Shrinks the box to fit the text */
    width: 100%;
    font-weight: bold;
" class="breadcrumb-two-content__title mb-3 text-capitalize">
                                {{$theme->name}}
                            </h3>

                            <div class="breadcrumb-content flx-align gap-3">
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">

                                </div>
{{--                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">--}}
{{--                                <span class="icon">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/cart-icon.svg" alt="" class="white-version">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/cart-white.svg" alt="" class="dark-version w-20">--}}
{{--                                </span>--}}

{{--                                </div>--}}
{{--                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">--}}
{{--                                <span class="icon">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/check-icon.svg" alt="" class="white-version">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/check-icon-white.svg" alt="" class="dark-version">--}}
{{--                                </span>--}}
{{--                                    <span class="text">Recently Updated</span>--}}
{{--                                </div>--}}
{{--                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">--}}
{{--                                <span class="icon">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/check-icon.svg" alt="" class="white-version">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/icons/check-icon-white.svg" alt="" class="dark-version">--}}
{{--                                </span>--}}
{{--                                    <span class="text">Well Documented</span>--}}
{{--                                </div>--}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="container container-two">--}}
{{--            <div class="breadcrumb-tab flx-wrap align-items-start gap-lg-4 gap-2">--}}
{{--                <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link active" id="pills-product-details-tab" data-bs-toggle="pill" data-bs-target="#pills-product-details" type="button" role="tab" aria-controls="pills-product-details" aria-selected="true">Product Details</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill" data-bs-target="#pills-rating" type="button" role="tab" aria-controls="pills-rating" aria-selected="false">--}}
{{--                    <span class="d-flex align-items-center gap-1">--}}
{{--                        <span class="star-rating">--}}
{{--                            <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>--}}
{{--                            <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>--}}
{{--                            <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>--}}
{{--                            <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>--}}
{{--                            <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>--}}
{{--                        </span>--}}
{{--                        <span class="star-rating__text text-body"> 5.0</span>--}}
{{--                        <span class="star-rating__text text-body"> (180)</span>--}}
{{--                    </span>--}}
{{--                        </button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="pills-comments-tab" data-bs-toggle="pill" data-bs-target="#pills-comments" type="button" role="tab" aria-controls="pills-comments" aria-selected="false">Comments (50)</button>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="social-share">--}}
{{--                    <button type="button" class="social-share__button">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/icons/share-icon.svg" alt="">--}}
{{--                    </button>--}}
{{--                    <div class="social-share__icons">--}}
{{--                        <ul class="social-list colorful-style">--}}
{{--                            <li class="social-list__item">--}}
{{--                                <a href="https://www.facebook.com/" class="social-list__link text-body flex-center"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="social-list__item">--}}
{{--                                <a href="https://www.twitter.com/" class="social-list__link text-body flex-center"> <i class="fab fa-linkedin-in"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="social-list__item">--}}
{{--                                <a href="https://www.google.com/" class="social-list__link text-body flex-center"> <i class="fab fa-twitter"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- ======================= Product Details Section Start ==================== -->
    <div class="product-details mt-32 padding-b-120">
        <form action="{{route('order-page',[$theme->id,$theme->slug])}}" method="get">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product-details" role="tabpanel" aria-labelledby="pills-product-details-tab" tabindex="0">
                            <!-- Product Details Content Start -->
                            <div class="product-details">
                                <div class="product-details__thumb">
                                    <img src="{{asset($theme->image)}}" alt="" >
                                </div>
                                <div class="product-details__buttons flx-align justify-content-center gap-3">
                                    <a target="_blank" href="{{$theme->link}}" class="btn btn-main d-inline-flex align-items-center gap-2 pill px-sm-5 justify-content-center">Live Demo
                                        <img src="{{asset('/')}}front/assets/images/icons/eye-outline.svg" alt="">
                                    </a>
                                    <a target="_blank" href="{{route('order-page',[$theme->id,$theme->slug])}}" class="btn btn-main d-inline-flex align-items-center gap-2 pill px-sm-5 justify-content-center">Order Now
                                        <img src="{{asset('/')}}front/assets/images/icons/add-to-cart.svg" alt="">
                                    </a>



                                </div>
                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-3">Template Features</h5>
                                    <ul class="product-list">
                                        <li class="product-list__item">Modern and Professional design</li>
                                        <li class="product-list__item">Built with Elementor Pro</li>
                                        <li class="product-list__item">100% Responsive & mobile-friendly</li>
                                        <li class="product-list__item">12+ pre-built templates</li>
                                        <li class="product-list__item">Easy to customize</li>
                                        <li class="product-list__item">Fully responsive website</li>
                                    </ul>
                                </div>
                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-3">Layout Features</h5>
                                    <ul class="product-list">
                                        <li class="product-list__item">One-Click demo import</li>
                                        <li class="product-list__item">Unlimited color style</li>
                                        <li class="product-list__item">850+ google fonts</li>
                                        <li class="product-list__item">Powered by FastSolutionsIt</li>
                                        <li class="product-list__item">Hight resolution images</li>
                                        <li class="product-list__item">Easy to customize</li>
                                    </ul>
                                </div>
                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-3">Font Family</h5>
                                    <ul class="product-list">
                                        <li class="product-list__item text-heading">
                                            <a href="https://fonts.google.com/specimen/Fira+Sans?query=fira" class="link text-body hover-text-main hover-text-decoration-underline">Fira Sans</a>
                                        </li>
                                        <li class="product-list__item text-heading">
                                            <a href="https://fonts.google.com/specimen/Inter?query=inter" class="link text-body hover-text-main hover-text-decoration-underline">Inter</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-3">Support</h5>
                                    <p class="product-details__desc">{!! $theme->support !!}</p>
                                </div>



                            </div>
                            <!-- Product Details Content End -->
                        </div>
                        <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab" tabindex="0">
                            <div class="product-review-wrapper">
                                <div class="product-review">
                                    <div class="product-review__top flx-between">
                                        <div class="product-review__rating flx-align">
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-body"> 5.0</span>
                                            </div>
                                            <span class="product-review__reason">For <span class="product-review__subject">Customer Support</span> </span>
                                        </div>
                                        <div class="product-review__date">
                                            by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
                                        </div>
                                    </div>
                                    <div class="product-review__body">
                                        <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam, eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit illo doloremque.</p>
                                    </div>
                                </div>
                                <div class="product-review">
                                    <div class="product-review__top flx-between">
                                        <div class="product-review__rating flx-align">
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-body"> 5.0</span>
                                            </div>
                                            <span class="product-review__reason">For <span class="product-review__subject">Customer Support</span> </span>
                                        </div>
                                        <div class="product-review__date">
                                            by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
                                        </div>
                                    </div>
                                    <div class="product-review__body">
                                        <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam, eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit illo doloremque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab" tabindex="0">

                            <!-- Comment Start -->
                            <div class="comment mt-64 mb-64">
                                <h5 class="mb-32">2 Comments</h5>
                                <ul class="comment-list">
                                    <li class="comment-list__item d-flex align-items-start gap-sm-4 gap-3">
                                        <div class="comment-list__thumb flex-shrink-0">
                                            <img src="{{asset('/')}}front/assets/images/thumbs/comment1.png" class="cover-img" alt="">
                                        </div>
                                        <div class="comment-list__content">
                                            <div class="flx-between gap-2 align-items-start">
                                                <div>
                                                    <h6 class="comment-list__name font-18 mb-sm-2 mb-1">Jenny Wilson</h6>
                                                    <span class="comment-list__date font-14">Jan 21, 2024 at 11:25 pm</span>
                                                </div>
                                                <a class="comment-list__reply fw-500 flx-align gap-2 hover-text-decoration-underline" href="#comment-box">
                                                    Reply
                                                    <span class="icon"><img src="{{asset('/')}}front/assets/images/icons/reply-icon.svg" alt=""></span>
                                                </a>
                                            </div>
                                            <p class="comment-list__desc mt-3">Lorem ipsum dolor sit amet consectetur. Nec nunc pellentesque massa pretium. Quam sapien nec venenatis vivamus sed cras faucibus mi viverra. Quam faucibus morbi cras vitae neque. Necnunc pellentesque massa pretium.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="comment-list comment-list--two">
                                            <li class="comment-list__item d-flex align-items-start gap-sm-4 gap-3">
                                                <div class="comment-list__thumb flex-shrink-0">
                                                    <img src="{{asset('/')}}front/assets/images/thumbs/comment2.png" class="cover-img" alt="">
                                                </div>
                                                <div class="comment-list__content">
                                                    <div class="flx-between gap-2 align-items-start">
                                                        <div>
                                                            <h6 class="comment-list__name font-18 mb-sm-2 mb-1">Courtney Henry</h6>
                                                            <span class="comment-list__date font-14">Jan 21, 2024 at 11:25 pm</span>
                                                        </div>
                                                        <a class="comment-list__reply fw-500 flx-align gap-2 hover-text-decoration-underline" href="#comment-box">
                                                            Reply
                                                            <span class="icon"><img src="{{asset('/')}}front/assets/images/icons/reply-icon.svg" alt=""></span>
                                                        </a>
                                                    </div>
                                                    <p class="comment-list__desc mt-3">Lorem ipsum dolor sit amet consectetur. Nec nunc pellentesque massa pretium. Quam sapien nec venenatis vivamus sed cras faucibus.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Comment End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- ======================= Product Sidebar Start ========================= -->
                    <div class="product-sidebar section-bg">
                        <div class="product-sidebar__top position-relative flx-between gap-1">
                            <button type="button" class="btn-has-dropdown font-heading font-18">Extended License</button>
                            <div class="license-dropdown">
                                <div class="license-dropdown__item mb-3">
                                    <h6 class="license-dropdown__title font-body mb-1 font-16">Regular License</h6>
                                    <p class="license-dropdown__desc font-13">Use, by you or one client, in a solitary finished result which end clients are not charged for. The complete cost incorporates the thing cost and a purchaser expense..</p>
                                </div>
                                <div class="license-dropdown__item">
                                    <h6 class="license-dropdown__title font-body mb-1 font-16">Extended License</h6>
                                    <p class="license-dropdown__desc font-13">Use, by you or one client, in a solitary final result which end clients can be charged for. The all out cost incorporates the thing cost and a purchaser expense.</p>
                                </div>
                                <div class="mt-3 pt-2 border-top text-center ">
                                    <a href="#" class="link hover-text-decoration-underline font-14 text-main fw-500">View License Details</a>
                                </div>
                            </div>
                            <h6 class="product-sidebar__title">Tk.{{$theme->selling_price}}</h6>
                        </div>
                        <ul class="sidebar-list">
                            <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                                <span class="icon"><img src="{{asset('/')}}front/assets/images/icons/check-cirlce.svg" alt=""></span>
                                <span class="text">Quality verified</span>
                            </li>
                            <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                                <span class="icon"><img src="{{asset('/')}}front/assets/images/icons/check-cirlce.svg" alt=""></span>
                                <span class="text">Use for a single project</span>
                            </li>
                            <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                                <span class="icon"><img src="{{asset('/')}}front/assets/images/icons/check-cirlce.svg" alt=""></span>
                                <span class="text">Non-paying users only</span>
                            </li>
                        </ul>

                        <div class="flx-between mt-3">
                            <div class="common-check mb-0">
                                <input class="form-check-input" type="checkbox"  checked name="checkbox" id="extended">
                                <label class="form-check-label mb-0 fw-300 text-body" for="extended">Extended support 12 month</label>
                            </div>
                            <div class="flx-align gap-2">
                                <span class="product-card__prevPrice text-decoration-line-through"></span>
                                <h6 class="product-card__price mb-0 font-14 fw-500"></h6>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-32">
                            <img src="{{asset('/')}}front/assets/images/icons/add-to-cart.svg" alt="">
                             Order Now
                        </button>

                        <!-- Author Details Start-->
                        <!-- Author Details End -->

                        <!-- Meta Attribute List Start -->
                        <ul class="meta-attribute">
                            <li class="meta-attribute__item">
                                <span class="name">Last Update</span>
                                {{ \Carbon\Carbon::parse($theme->updated_at)->format('d F Y') }}

                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Published</span>
                                <span class="details">{{ \Carbon\Carbon::parse($theme->created_at)->format('d F Y') }}</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Category</span>
                                <span class="details">{{$theme->sub_category->name}}</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Widget Ready</span>
                                <span class="details">Yes</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">High Resolution</span>
                                <span class="details">Yes</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Framework</span>
                                <span class="details">{{$theme->category->name}}</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Software Version</span>
                                <span class="details">
                <a href="#" class="hover-text-decoration-underline">{{$theme->software_version}}</a>
            </span>
                            </li>
                            <li class="meta-attribute__item">
            <span class="name">Marketplace Files
                Included</span>
                                <span class="details">
                <a href="#" class="hover-text-decoration-underline">PHP Files,</a>
                <a href="#" class="hover-text-decoration-underline">CSS Files,</a>
                <a href="#" class="hover-text-decoration-underline">SCSS Files,</a>
                <a href="#" class="hover-text-decoration-underline">JS Files,</a>
            </span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Layout</span>
                                <span class="details">Responsive</span>
                            </li>
                            <li class="meta-attribute__item">
                                <span class="name">Browser Support</span>
                                <span class="details">
                <a  class="hover-text-decoration-underline">Google Chrome,</a>
                <a class="hover-text-decoration-underline">Mozilla,</a>
                <a class="hover-text-decoration-underline">Firefox,</a>
                <a  class="hover-text-decoration-underline">Internet,</a>
                <a  class="hover-text-decoration-underline">Explorer,</a>
                <a  class="hover-text-decoration-underline">Microsoft Edge,</a>
                <a  class="hover-text-decoration-underline">Safari,</a>
                <a  class="hover-text-decoration-underline">Sogou Explorer,</a>
                <a  class="hover-text-decoration-underline">Opera,</a>
                <a  class="hover-text-decoration-underline">Yandex,</a>
                <a  class="hover-text-decoration-underline">UC Browser,</a>
                <a  class="hover-text-decoration-underline">Baidu,</a>
                <a  class="hover-text-decoration-underline">Maxthon,</a>
                <a  class="hover-text-decoration-underline">Chromium,</a>
                <a  class="hover-text-decoration-underline">Vivaldi,</a>
                <a  class="hover-text-decoration-underline">Amigo,</a>
                <a  class="hover-text-decoration-underline">Etc,</a>
            </span>
                            </li>
                        </ul>
                        <!-- Meta Attribute List End -->
                    </div>
                    <!-- ======================= Product Sidebar End ========================= -->
                </div>
            </div>
        </div>
        </form>
    </div>

    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">

        <div class="container container-two">
            <div class="section-heading">
                <h3 class="section-heading__title">New Arrival Website</h3>
            </div>


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row gy-4">
                        @foreach($themes8 as $theme8)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-card ">
                                <div class="product-card__thumb d-flex">
                                    <a href="" class="link w-100">
                                        <img src="{{asset($theme8->image)}}" alt="" class="cover-img">
                                    </a>
                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-card__content">
                                    <h6 class="product-card__title">
                                        <a href="" class="link">{{$theme8->name}}</a>
                                    </h6>
                                    <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-card__price mb-0">Tk.{{$theme8->selling_price}}</h6>
                                            <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme8->regular_price}}</span>
                                        </div>
                                    </div>
                                    <div class="product-card__bottom flx-between gap-2">

                                        <a target="_blank" href="{{$theme8->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        <a href="{{route('detail',['categorySlug'=>$theme8->sub_category->slug,'postSlug'=>$theme8->slug])}}" class="btn btn-success btn-sm ">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>

            <div class="text-center mt-64">
                <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                    View All Products
                </a>
            </div>

        </div>
    </section>

@endsection

