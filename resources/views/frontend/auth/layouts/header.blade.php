<header>
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-0 col-md-7 offset-md-1">
                    <div class="header-info">
                        <span><i class="fas fa-phone"></i>{{ config('app.address') }}</span>
                        <span><i class="fas fa-envelope"></i> <a href="#">{{ config('app.email') }}</a></span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="header-top-right-btn f-right">
                        <a href="{{ route('product') }}" class="btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="logo logo-circle pos-rel">
                        <a href="/"><img src="/logo/logo.png" alt="{{ config('app.name') }}"></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="header-right f-right">
                        <div class="header-lang f-right pos-rel d-none d-lg-block">
                            {{-- <div class="lang-icon">
                                <img src="img/icon/lang.png" alt="">
                                <span>EN<i class="fas fa-angle-down"></i></span>
                            </div>
                            <ul class="header-lang-list">
                                <li><a href="#">USA</a></li>
                                <li><a href="#">UK</a></li>
                                <li><a href="#">CA</a></li>
                                <li><a href="#">AU</a></li>
                            </ul> --}}
                        </div>
                        <div class="header-social-icons f-right d-none d-xl-block">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">Home +</a></li>
                                <li><a href="{{ route('product') }}">Services</a></li>
                                <li><a href="{{ route('product') }}">Products</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>