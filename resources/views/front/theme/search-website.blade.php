@extends('front.master.master')
@section('seo')
    <meta name="keywords" content="Software Development Bangladesh, PHP Development Bangladesh, Laravel Development Bangladesh, Vue.js Development Bangladesh, Web Development Services Bangladesh, Custom Software Solutions Bangladesh, IT Solutions Bangladesh, E-commerce Development Bangladesh, Mobile App Development Bangladesh, Software Company in Bangladesh, Digital Solutions Bangladesh, Technology Services Bangladesh, Software Engineering Bangladesh, Web Application Development Bangladesh, IT Consultancy Bangladesh, Business Software Solutions Bangladesh, Cloud Computing Bangladesh, Digital Marketing Bangladesh, IT Support Services Bangladesh, Freelance Software Development Bangladesh, Offshore Software Development Bangladesh, Bangladesh IT Outsourcing, Tech Startups in Bangladesh, Software Testing Services Bangladesh, Web Design Services Bangladesh, Data Analytics Bangladesh, Responsive Web Design Bangladesh, Blockchain Development Bangladesh, Cybersecurity Services Bangladesh,Laravel 11 Web Application Development, Build Web Applications with Laravel 11, Laravel 11 Web Application Framework, Laravel 11 for Custom Web Applications, Laravel 11 Responsive Web Applications, Laravel 11 E-commerce Web Applications, Laravel 11 API-Driven Web Applications, Laravel 11 Full-Stack Web Development, Laravel 11 Frontend and Backend Integration, Laravel 11 Real-Time Web Applications,eCommerce Development, Online Store Solutions, eCommerce Website Design, Custom eCommerce Solutions, eCommerce Payment Gateway Integration, School Management System, Student Information System, Online School Management Software, Attendance Management for Schools, Gradebook Management System, Newspaper Development, Online Newspaper Solutions, News Publishing Platform, Digital Newspaper Solutions, Subscription Management for Newspapers, News Aggregator Development, Responsive Newspaper Website">    <meta name="description" content="Laravel & Vue js Web Solution Service">

    <meta name="title" content="Search Page Fast Solutions It"/>
    <meta name="description" content="Fast Solution It Web Software Company">

    <meta property="article:type" content="website">
    <meta property="article:title" content="Search Page Fast Solutions It">
    <meta property="article:url" content="{{request()->url()}}">
    <meta property="article:description" content="Fast Solution It Web Software Company">
    <meta property="article:image" content="{{asset($logo->mobile_logo)}}">


    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Fast Solution It" />
    <meta property="og:title" content="{{$logo->mobile_logo}}" />
    <meta property="og:description" content="Fast Solution It Web Software Company" />
    <meta property="og:image" content="{{ asset($logo->mobile_logo) }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{ asset($logo->mobile_logo) }}" />
    <meta property="og:image:alt" content="Search Page Fast Solutions It" />
    <link rel="image_src" href="{{ asset($logo->mobile_logo) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="fastsolutionsit.com">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta name="twitter:title" content="Search Page Fast Solutions It | {{env('APP_NAME')}}">
    <meta name="twitter:hashtags" content="Fast Solution It Web Software Company,Laravel Developer, PHP Developer, HTML, CSS, Bootstrap, Vue.js Developer,">
    <meta name="twitter:description" content="Fast Solution It Web Software Company">
    <meta name="twitter:image" content="{{ asset($logo->mobile_logo) }}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">

    <meta name="url" content="{{request()->url()}}" />
    <link rel="canonical" href="{{request()->url()}}" />
@endsection
@section('title')
    Search Page
@endsection
@section('body')

    <section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

        <img src="{{ asset('/') }}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

        <img src="{{ asset('/') }}front/assets/images/shapes/element-moon3.png" alt="" class="element one">
        <img src="{{ asset('/') }}front/assets/images/shapes/element-moon1.png" alt="" class="element three">

        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="breadcrumb-one-content">
                        <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">Laravel And Vue js Project available for purchase</h3>
                        <p class="breadcrumb-one-content__desc text-center text-black-three">Explore the best premium Project available for sale. Our unique collection is hand-curated by experts. Find and buy the perfect premium Project.</p>

                        <form action="{{ route('search-website') }}" class="search-box">
                            <input type="text" name="search" value="{{ request('search') }}" class="common-input common-input--lg pill shadow-sm" placeholder="Search theme, plugins &amp; more...">
                            <button type="submit" class="btn btn-main btn-icon icon border-0">
                                <img src="{{ asset('/') }}front/assets/images/icons/search.svg" alt="">
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb one Section End ===================== -->
    <!-- ======================== All Product Section Start ====================== -->
    <section class="all-product padding-y-120">
        <div class="container container-two">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-tab gap-3 flx-between">
                        <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                            <span class="icon icon-left"><img src="{{ asset('/') }}front/assets/images/icons/filter.svg" alt=""></span>
                            <span class="font-18 fw-500">Filters</span>
                        </button>

                        <div class="list-grid d-flex align-items-center gap-2">
                            <button class="list-grid__button list-button d-sm-flex d-none text-body"><i class="las la-list"></i></button>
                            <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                            <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4">
                    <!-- ===================== Filter Sidebar Start ============================= -->
                    <div class="filter-sidebar">
                        <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                        @foreach($categories as $category)
                            <div class="filter-sidebar__item">
                                <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">{{$category->name}}</button>
                                <div class="filter-sidebar__content">
                                    @php
                                        // Load subcategories with product count for the given category
                                        $subcategories = $category->subcategories()->withCount('themes')->get();
                                    @endphp

                                    <ul class="filter-sidebar-list">
                                        @foreach($subcategories as $subcategory)
                                            <li class="filter-sidebar-list__item">
                                                <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="filter-sidebar-list__text">
                                                    {{ $subcategory->name }}<span class="qty">{{ $subcategory->themes_count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- ===================== Filter Sidebar End ============================= -->
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">

                                @foreach($themes as $theme)
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="product-card section-bg">
                                            <div class="product-card__thumb d-flex">
                                                <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug])}}" class="link w-100">
                                                    <img src="{{ asset($theme->image) }}" alt="" class="cover-img">
                                                </a>
                                                <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                            </div>
                                            <div class="product-card__content">
                                                <h6 class="product-card__title">
                                                    <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug])}}" class="link">{{$theme->name}}</a>
                                                </h6>
                                                <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
                {{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                                    <div class="flx-align gap-2">
                                                        <h6 class="product-card__price mb-0">Tk.{{$theme->selling_price}}</h6>
                                                        <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme->regular_price}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-card__bottom flx-between gap-2">
                                                    <div>
                                                        {{--                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                        <div class="d-flex align-items-center gap-1">
                                                            {{--                                                        <ul class="star-rating">--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                        </ul>--}}
                                                            {{--                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                        </div>
                                                    </div>
                                                    <a target="_blank" href="{{$theme->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                                    <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug])}}" class="btn btn-success btn-sm pill">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination common-pagination">
                                    <li class="page-item">  {{ $themes->links() }}</a></li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
