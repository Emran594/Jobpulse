@extends('layout.landing-page')
@section('content')
<div class="layout-wrapper landing">
    @include('components.frontend.header')
    <!-- end navbar -->

    <!-- start hero section -->

    @include('components.frontend.blog-hero')
    <!-- end hero section -->


    <!-- start blog -->

    @include('components.frontend.section-blog')
    <!-- end blog -->


    <!-- Start footer -->

    @include('components.frontend.footer')
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
@endsection
