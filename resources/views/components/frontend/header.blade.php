@php
use App\Helper\JWTToken;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
@endphp

<nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset("assets/images/logo-dark.png") }}" class="card-logo card-logo-dark" alt="logo dark" height="100">
            <img src="{{ asset("assets/images/logo-light.png") }}" class="card-logo card-logo-light" alt="logo light" height="100">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link fs-15 active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="{{ url('/jobs') }}">jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

            @if(request()->cookie('token'))
            @php
                $token = request()->cookie('token');
                $key = env('JWT_KEY');
                $userData = JWT::decode($token, new Key($key, 'HS256'));;
            @endphp

            @if ($userData && isset($userData->userRole))
                @switch($userData->userRole)
                    @case(1)
                        <!-- Redirect to admin dashboard -->
                        <div class="">
                            <a href="{{ url('/adminDashboard') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i>Dashboard</a>
                        </div>
                        @break

                    @case(2)
                        <!-- Redirect to company dashboard -->
                        <div class="">
                            <a href="{{ url('/companyDashboard') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i>Dashboard</a>
                        </div>
                        @break

                    @case(3)
                        <!-- Redirect to candidate dashboard -->
                        <div class="">
                            <a href="{{ url('/candidatesDashboard') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i>Dashboard</a>
                        </div>
                        @break

                    @default
                        <!-- If role is not defined, display generic dashboard link -->
                        <div class="">
                            <a href="{{ url('/dashboard') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i> Dashboard</a>
                        </div>
                @endswitch
            @endif
        @else
            <!-- If JWT token is not present, user is not authenticated -->
            <div class="">
                <a href="{{ url('/userLogin') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i> Login Or Registration</a>
            </div>
        @endif

        </div>

    </div>
</nav>
