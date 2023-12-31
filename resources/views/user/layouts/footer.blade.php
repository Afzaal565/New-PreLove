    <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
            <div class="footer-newsletter bg-primary">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase font-weight-bold">Subscribe To
                                        Our Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="javascript:void(0)"
                                class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="mail" id="mail"
                                    placeholder="Your E-mail Address" />
                                <button class="btn btn-dark btn-rounded" type="reset" id="subscribe">Subscribe<i
                                        class="w-icon-long-arrow-right"></i></button>
                            </form>
                            <div id="validation-errors"></div>
                            <div id="success-subscribe"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.html" class="logo-footer">
                                    <!-- <img src="{{asset('frontend-assets/assets/images/logo_footer.png')}}" alt="logo-footer" width="144"
                                        height="45" /> -->
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        & coupons ster now toon.
                                    </p>

                                    <!-- <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul class="widget-body">
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="{{route('shop')}}">Shop </a></li>
                                    <li><a href="{{route('vendor-store')}}">Vendor Store</a></li>
                                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                                    <!-- <li><a href="{{route('vendor.register')}}">Become A Vendor</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="{{route('cart')}}">View Cart</a></li>
                                    <li><a href="{{route('Login')}}">Sign In</a></li>
                                    <li><a href="{{route('Login')}}">Register </a></li>

                                    <li><a href="{{route('wishlist')}}">My Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2022 BS3 Designs . All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="{{asset('frontend-assets/assets/images/payment.png')}}" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->



