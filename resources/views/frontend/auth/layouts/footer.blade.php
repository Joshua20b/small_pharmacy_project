<footer>
    <div class="footer-top primary-bg footer-map pos-rel pt-120 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-contact-info footer-contact-info-3 mb-40">
                        <div class="footer-logo mb-35">
                            <a href="#"><img src="/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer-contact-content mb-25">
                            <p></p>
                        </div>
                        <div class="footer-emailing">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="#">{{ config('app.email') }}</a>
                                </li>
                                <li><i class="far fa-clone"></i>{{ config('app.url') }}</li>
                                <li><i class="far fa-flag"></i>{{ config('app.address') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h3>Departments</h3>
                        </div>
                        <div class="footer-menu footer-menu-2">
                            <ul>
                                <li><a href="{{ route('product') }}">Services</a></li>
                                <li><a href="{{ route('product') }}">Product</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    {{-- <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h3>News Feeds</h3>
                        </div>
                        <div class="blog-feeds pr-15">

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-25 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-copyright footer-copyright-3 text-center">
                        <p>Copyright by@ {{ config('app.name') }} 2013 - {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>