<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }} || {{ config('app.name') }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="#">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
    @include('frontend.layouts.header')
    <!-- header end -->

    <main>
        @yield('content')
        @include('frontend.layouts.footer')
    </main>

    <!-- JS here -->
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
    <script src="/frontend/js/plugins.js"></script>
    <script src="/frontend/js/main.js"></script>
</body>



</html>