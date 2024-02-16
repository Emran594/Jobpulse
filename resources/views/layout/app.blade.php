<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
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

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden border-0">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="assets/images/logo-light.png" alt="" height="60">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                @yield('content')
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  © Velzon.
                </div>
                <div class="col-sm-6">
                  <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Emran Sikder
                  </div>
                </div>
              </div>
            </div>
          </footer>
        <!-- end Footer -->
    </div>
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
