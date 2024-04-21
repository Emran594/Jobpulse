@extends('layout.landing-page')
@section('content')
<div class="layout-wrapper landing">
    @include('components.frontend.header')
    <!-- end navbar -->

    <!-- start hero section -->

    @include('components.frontend.contact-hero')

<section class="section job-hero-section  pb-0" id="hero">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <div>
                    <h1 class="display-6 fw-bold text-capitalize mb-3 lh-base">Contact With Us</h1>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <form action="your_php_script.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


    @include('components.frontend.footer')
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
@endsection
