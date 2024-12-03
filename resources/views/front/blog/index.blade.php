@extends('front.master.master')
@section('seo')

    <meta itemprop="name" content="All Blog">
    <meta itemprop="description" content="Fast Solutions It Latest Laravel & Vue Js Web Solutions">
    <meta itemprop="image" content="{{asset($logo->mobile_logo)}}">

    <meta name="keywords" content="Software Development Bangladesh, PHP Development Bangladesh, Laravel Development Bangladesh, Vue.js Development Bangladesh, Web Development Services Bangladesh, Custom Software Solutions Bangladesh, IT Solutions Bangladesh, E-commerce Development Bangladesh, Mobile App Development Bangladesh, Software Company in Bangladesh, Digital Solutions Bangladesh, Technology Services Bangladesh, Software Engineering Bangladesh, Web Application Development Bangladesh, IT Consultancy Bangladesh, Business Software Solutions Bangladesh, Cloud Computing Bangladesh, Digital Marketing Bangladesh, IT Support Services Bangladesh, Freelance Software Development Bangladesh, Offshore Software Development Bangladesh, Bangladesh IT Outsourcing, Tech Startups in Bangladesh, Software Testing Services Bangladesh, Web Design Services Bangladesh, Data Analytics Bangladesh, Responsive Web Design Bangladesh, Blockchain Development Bangladesh, Cybersecurity Services Bangladesh,Laravel 11 Web Application Development, Build Web Applications with Laravel 11, Laravel 11 Web Application Framework, Laravel 11 for Custom Web Applications, Laravel 11 Responsive Web Applications, Laravel 11 E-commerce Web Applications, Laravel 11 API-Driven Web Applications, Laravel 11 Full-Stack Web Development, Laravel 11 Frontend and Backend Integration, Laravel 11 Real-Time Web Applications,eCommerce Development, Online Store Solutions, eCommerce Website Design, Custom eCommerce Solutions, eCommerce Payment Gateway Integration, School Management System, Student Information System, Online School Management Software, Attendance Management for Schools, Gradebook Management System, Newspaper Development, Online Newspaper Solutions, News Publishing Platform, Digital Newspaper Solutions, Subscription Management for Newspapers, News Aggregator Development, Responsive Newspaper Website">    <meta name="description" content="Laravel & Vue js Web Solution Service">

    <meta name="title" content="All Blog"/>
    <meta name="description" content="Latest Laravel & Vue Js Web Solutions">

    <meta property="article:type" content="website">
    <meta property="article:title" content="All Blog">
    <meta property="article:url" content="{{request()->url()}}">
    <meta property="article:description" content="Latest Laravel & Vue Js Web Solutions">
    <meta property="article:image" content="{{asset($logo->mobile_logo)}}">


    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Fast Solutions It Software Company" />
    <meta property="og:title" content="All Blog" />
    <meta property="og:description" content="Latest Laravel & Vue Js Web Solutions" />
    <meta property="og:image" content="{{asset($logo->mobile_logo)}}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{asset($logo->mobile_logo)}}" />
    <meta property="og:image:alt" content="All Blog" />
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
    All Blog

@endsection
@section('body')
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
                                    <span class="breadcrumb-list__text">Blog</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">Latest Blogs And Articles</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- =========================== Blog Section Start ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="row gy-4">
                @foreach($allblogs as $blogs)
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="blog-item__thumb">
                            <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="link">
                                <img src="{{asset($blogs->image)}}" class="cover-img" alt="Blog Image" style="height: 300px; width: 500px;">
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
                                    <span class="text">{{$blogs->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                            <h5 class="title">
                                <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="link">{{$blogs->title}}</a>
                            </h5>
                            <a href="{{route('blogs-detail',['id'=>$blogs->id])}}" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination Start -->
            <nav aria-label="Page navigation">
                <ul class="pagination common-pagination">
                    <li class="page-item">  {{ $allblogs->links() }}</a></li>
                </ul>
            </nav>
            <!-- Pagination End -->


        </div>
    </section>
@endsection
