<!doctype html>
    <head>
        <meta charset="utf-8" />
        <title>Home | Jobpulse</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="{{ asset("assets/libs/jsvectormap/css/jsvectormap.min.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("assets/libs/swiper/swiper-bundle.min.css") }}" rel="stylesheet" type="text/css"/>
        <script src="{{ asset("assets/js/layout.js") }}"></script>
        <script src="{{asset('assets/js/config.js')}}"></script>
        <script src="{{asset('assets/js/axios.min.js')}}"></script>
        <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/css/app.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />
      </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">

        <!-- Begin page -->
        @yield('content');

        <!-- end layout wrapper -->


        <!-- JAVASCRIPT -->
        <script src="{{asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/libs/simplebar/simplebar.min.js")}}"></script>
        <script src="{{asset("assets/libs/node-waves/waves.min.js")}}"></script>
        <script src="{{asset("assets/libs/feather-icons/feather.min.js")}}"></script>
        <script src="{{asset("assets/js/pages/plugins/lord-icon-2.1.0.js")}}"></script>
        <script src="{{asset("assets/js/plugins.js")}}"></script>
  
        <!-- apexcharts -->
        <script src="{{asset("assets/libs/apexcharts/apexcharts.min.js")}}"></script>
  
        <!-- Vector map-->
        <script src="{{asset("assets/libs/jsvectormap/js/jsvectormap.min.js")}}"></script>
        <script src="{{asset("assets/libs/jsvectormap/maps/world-merc.js")}}"></script>
  
        <!--Swiper slider js-->
        <script src="{{asset("assets/libs/swiper/swiper-bundle.min.js")}}"></script>
  
        <!-- Dashboard init -->
        <script src="{{asset("assets/js/pages/dashboard-ecommerce.init.js")}}"></script>
  
        <!-- App js -->
        <script src="{{asset("assets/js/app.js")}}"></script>
    </body>
</html>