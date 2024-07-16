<footer>
    <div class="footer-top primary-bg pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="footer-contact-info mb-30">
                        <div class="emmergency-call fix">
                            <div class="emmergency-call-icon f-left">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="emmergency-call-text f-left">
                                <h6>Emergency number</h6>
                                <span>{{ config('app.phone') }}</span>
                            </div>
                        </div>
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
                <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                    <div class="footer-widget mb-30">
                        <div class="footer-title">
                            <h3>Departments</h3>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('product') }}">Products</a></li>
                                <li><a href="{{ route('product') }}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-3 d-md-none d-lg-block">
                    <div class="footer-widget mb-30">
                        <div class="footer-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-25 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-copyright text-center">
                        <p class="white-color">Copyright by@ {{ config('app.name') }} 2013 - {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>