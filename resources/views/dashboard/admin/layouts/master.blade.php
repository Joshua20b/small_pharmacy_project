<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} || {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/backend/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/backend/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/backend/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/backend/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/backend/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/backend/assets/css/style.css">
    <link rel="stylesheet" href="/backend/assets/css/components.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('dashboard.admin.layouts.header')
            @include('dashboard.admin.layouts.sidebar')

            <!-- Main Content -->
            @yield('content')

            @include('dashboard.admin.layouts.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="/backend/assets/modules/jquery.min.js"></script>
    <script src="/backend/assets/modules/popper.js"></script>
    <script src="/backend/assets/modules/tooltip.js"></script>
    <script src="/backend/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/backend/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/backend/assets/modules/moment.min.js"></script>
    <script src="/backend/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/backend/assets/modules/jquery.sparkline.min.js"></script>
    <script src="/backend/assets/modules/chart.min.js"></script>
    <script src="/backend/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/backend/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/backend/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="/backend/assets/js/scripts.js"></script>
    <script src="/backend/assets/js/custom.js"></script>
    <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>