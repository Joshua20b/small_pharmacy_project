<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} || {{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.png">
    <!-- Place favicon.png in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css"> 
    <link rel="stylesheet" href="/frontend/css/animate.min.css">
    <link rel="stylesheet" href="/frontend/css/nice-select.css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/css/all.min.css">
    <link rel="stylesheet" href="/frontend/css/meanmenu.css">
    <link rel="stylesheet" href="/frontend/css/slick.css">
    <link rel="stylesheet" href="/frontend/css/default.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/responsive.css">
</head>

<body>

    <!-- header begin -->
    @include('frontend.auth.layouts.header') 
    <!-- header end -->

    <main>
        <!-- hero-area start -->
        <section class="breadcrumb-bg pt-200 pb-180" data-background="img/page/page-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="page-title">
                            <p class="small-text pb-15">We are here for your care.</p>
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="page-breadcumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->

        @yield('content')

    </main>

    <!-- footer start -->
    @include('frontend.auth.layouts.footer') 
    <!-- footer end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/isotope.pkgd.min.js"></script>
    <script src="/frontend/js/one-page-nav-min.js"></script>
    <script src="/frontend/js/slick.min.js"></script>
    <script src="/frontend/js/ajax-form.js"></script>
    <script src="/frontend/js/wow.min.js"></script>
    <script src="/frontend/js/jquery.nice-select.min.js"></script>
    <script src="/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="/frontend/js/jquery.meanmenu.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <script src="/frontend/js/waypoints.min.js"></script>
    <script src="/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY"></script>
    <script src="/frontend/js/plugins.js"></script>
    <script src="/frontend/js/main.js"></script>
</body>


</html>