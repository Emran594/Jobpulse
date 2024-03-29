@extends('layout.admin.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Job Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Job Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Jobs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="36894">{{ $total_job }}</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="total_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Apply Jobs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="28410">{{ $apply_job }}</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="apply_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Company</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="4305">{{ $total_company }}</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
    <!-- container-fluid -->
</div>
@endsection
