@extends('layout.landing-page')
@section('content')
<div class="layout-wrapper landing">
    @include('components.frontend.header')
    <!-- end navbar -->

    <!-- start hero section -->

    @include('components.frontend.section-banner')
    <!-- end hero section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4">
                    <div class="bg-primary-subtle">
                        <div class="card-body px-4 pb-4">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <div class="row align-items-center g-3">
                                        <div class="col-md-auto">
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-white rounded-circle">
                                                    <img src="{{ asset($job->company->logo)  }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div>
                                                <h4 class="fw-bold mb-3">{{ $job->title }}</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><i class="ri-building-line align-bottom me-1"></i> {{ $job->company->name }}</div>
                                                    <div class="vr"></div>
                                                    <div><i class="ri-map-pin-2-line align-bottom me-1"></i> {{ $job->company->location }}</div>
                                                    <div class="vr"></div>
                                                    <div>Application Deadline: <span class="fw-medium">{{ date('jS F Y', strtotime($job->due_date)) }}</span></div>
                                                    <div class="vr"></div>
                                                    <div class="badge rounded-pill bg-success fs-12">{{ $job->type }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <div class="hstack gap-1 flex-wrap mt-4 mt-md-0">
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-warning fs-16">
                                            <i class="ri-star-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary fs-16">
                                            <i class="ri-share-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary fs-16">
                                            <i class="ri-flag-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row mt-n5">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Job Description</h5>

                        <p class="text-muted mb-2">{{ $job->requirements }}</p>

                        <div>
                            <h5 class="mb-3">Skill & Experience</h5>
                            <p> {{ $job->benefits }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Job Overview</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">Title</td>
                                        <td>{{ $job->title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Company Name</td>
                                        <td>{{ $job->company->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Location</td>
                                        <td>{{ $job->company->location }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Time</td>
                                        <td><span class="badge bg-success-subtle text-success">{{ $job->type }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Job Application</td>
                                        <td>54 Application</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Due Date</td>
                                        <td>{{ date('jS F Y', strtotime($job->due_date)) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Salary</td>
                                        <td>{{ $job->salary }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="mt-4 pt-2 hstack gap-2">
                            <a href="{{ url('/apply-job',$job->id)}}" class="btn btn-primary w-100">Apply Now</a>
                            <a href="#!" class="btn btn-soft-danger btn-icon custom-toggle flex-shrink-0" data-bs-toggle="button">
                                <span class="icon-on"><i class="ri-bookmark-line align-bottom"></i></span>
                                <span class="icon-off"><i class="ri-bookmark-3-fill align-bottom"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





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
