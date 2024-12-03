<footer class="footer ">
    <img src="{{asset('/')}}front/assets/images/shapes/pattern.png" alt="" class="bg-pattern">
    <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element one">
    <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element two">
    <img src="{{asset('/')}}front/assets/images/gradients/footer-gradient.png" alt="" class="bg--gradient">

    <div class="container container-two">
        <div class="row gy-5">
            <div class="col-xl-3 col-sm-6">
                <div class="footer-item">
                    <div class="footer-item__logo">
                        <a href="{{route('home')}}"> <img src="{{asset($logo->mobile_logo)}}" alt=""></a>
                    </div>
                    <p class="footer-item__desc">Your Vision, Our Code—Achieve More with FirstSolutionIT</p>
                    <div class="footer-item__social">
                        <ul class="social-list">
                            <li class="social-list__item">
                                <a target="_blank" href="https://www.facebook.com/fastsolutionit" class="social-list__link flx-center"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.twitter.com/" class="social-list__link flx-center"> <i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.linkedin.com/" class="social-list__link flx-center"> <i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.pinterest.com/" class="social-list__link flx-center"> <i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.pinterest.com/" class="social-list__link flx-center"> <i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-xs-6">
                <div class="footer-item">
                    <h5 class="footer-item__title">Useful Link</h5>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="all-product.html" class="footer-menu__link">Product </a></li>
{{--                        <li class="footer-menu__item"><a href="product-details.html" class="footer-menu__link">Product Details</a></li>--}}
                        <li class="footer-menu__item"><a href="{{route('customer-profile')}}" class="footer-menu__link">Profile </a></li>
{{--                        <li class="footer-menu__item"><a href="cart.html" class="footer-menu__link">Shopping Cart</a></li>--}}
                        <li class="footer-menu__item"><a href="{{route('customer-dashboard')}}" class="footer-menu__link">Dashboard</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-1 d-xl-block d-none"></div>
            <div class="col-xl-2 col-sm-6 col-xs-6">
                <div class="footer-item">
                    <h5 class="footer-item__title">Quick Links</h5>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="{{route('customer-dashboard')}}" class="footer-menu__link">Dashboard </a></li>
                        <li class="footer-menu__item"><a href="{{route('customer-login')}}" class="footer-menu__link">Login </a></li>
                        <li class="footer-menu__item"><a href="{{route('customer-register')}}" class="footer-menu__link">Register</a></li>
                        <li class="footer-menu__item"><a href="{{route('front-allblogs')}}" class="footer-menu__link">Blog </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-1 d-xl-block d-none"></div>
            <div class="col-xl-2 col-sm-6 col-xs-6">
                <div class="footer-item">
                    <h5 class="footer-item__title">Cantact Us</h5>
                    <ul class="footer-menu">
                       <p>Mobile:01755766176</p>
                       <a target="_blank" href="https://wa.me/8801755766176">Whatsapp:01755766176</a>
                        Email:-
                    </ul>
                </div>
            </div>
{{--            <div class="col-xl-4 col-sm-6">--}}
{{--                <div class="footer-item">--}}
{{--                    <h5 class="footer-item__title">Subscribe</h5>--}}
{{--                    <p class="footer-item__desc">Subscribe our newsletter to get updated the latest news</p>--}}
{{--                    <form action="#" class="mt-4 subscribe-box d-flex align-items-center flex-column gap-2">--}}
{{--                        <input type="text" class="form-control common-input pill text-white" placeholder="Enter Mail">--}}
{{--                        <button type="submit" class="btn btn-main btn-lg w-100 pill">Subscribe Now</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer">
    <div class="container container-two">
        <div class="bottom-footer__inner flx-between gap-3">
            <p class="bottom-footer__text font-14"> Copyright &copy; 2024 FastSolutionsIt, All rights reserved.</p>
            <div class="footer-links">
                <a href="#" class="footer-link font-14">Terms of service</a>
                <a href="#" class="footer-link font-14">Privacy Policy</a>
                <a href="contact.html" class="footer-link font-14">cookies</a>
            </div>
        </div>
    </div>
</div>
