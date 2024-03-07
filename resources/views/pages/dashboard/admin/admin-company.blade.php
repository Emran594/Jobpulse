@extends('layout.admin.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-sm-6">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-medium text-muted mb-0">Total Companie</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="547">{{ $count_company }}</span></h2>
                                <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                        <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                    </span> vs. previous month</p>
                            </div>
                            <div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                        <i class="ri-ticket-2-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div> <!-- end card-->
            </div>
            <!--end col-->
            <div class="col-xxl-3 col-sm-6">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-medium text-muted mb-0">Pending </p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="124">0</span>k</h2>
                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                        <i class="ri-arrow-down-line align-middle"></i> 0.96 %
                                    </span> vs. previous month</p>
                            </div>
                            <div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                        <i class="mdi mdi-timer-sand"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div>
            <!--end col-->
            <div class="col-xxl-3 col-sm-6">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-medium text-muted mb-0">Closed</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="107">0</span>K</h2>
                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                        <i class="ri-arrow-down-line align-middle"></i> 3.87 %
                                    </span> vs. previous month</p>
                            </div>
                            <div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                        <i class="ri-shopping-bag-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div>
            <!--end col-->
            <div class="col-xxl-3 col-sm-6">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-medium text-muted mb-0">Deleted</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="15.95">0</span>%</h2>
                                <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                        <i class="ri-arrow-up-line align-middle"></i> 1.09 %
                                    </span> vs. previous month</p>
                            </div>
                            <div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                        <i class="ri-delete-bin-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div>
            <!--end col-->
        </div>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Companies List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Companies</a></li>
                            <li class="breadcrumb-item active">Companies List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search bg-light border-light" id="searchCompany" placeholder="Search for company, industry type...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <input type="text" class="form-control bg-light border-light" id="datepicker" data-date-format="d M, Y" placeholder="Select date">
                                </div>
                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div class="input-light">
                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idType">
                                            <option value="all" selected>All</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-xxl-2 col-sm-4">
                                    <button type="button" class="btn btn-primary w-100" onclick="filterData();">
                                        <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                    </button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>

                <div class="row job-list-row" id="companies-list">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">All Companie List</h4>
                            <div class="flex-shrink-0">
                                <a href="#!" class="btn btn-soft-primary btn-sm">View All Companies <i class="ri-arrow-right-line align-bottom"></i></a>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                    <tbody>
                                        @foreach ($company as $item)

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs me-2 flex-shrink-0">
                                                        <div class="avatar-title bg-secondary-subtle rounded">
                                                            <img src="{{ $item->logo }}" alt="" height="16">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-0">{{ $item->name }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> {{ $item->location }}
                                            </td>
                                            <td>
                                                <a href="{{ url('/company-details', $item->id) }}" class="btn btn-link btn-sm">View details <i class="ri-arrow-right-line align-bottom"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                                <div class="flex-shrink-0 mb-2 mb-md-0">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                    </div>
                                </div>
                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">←</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">→</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- .card-->


                </div>

                <div class="row g-0 justify-content-end mb-4" id="pagination-element">
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                            <div class="page-item">
                                <a href="" class="page-link" id="page-prev">Previous</a>
                            </div>
                            <span id="page-num" class="pagination"></span>
                            <div class="page-item">
                                <a href="" class="page-link" id="page-next">Next</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!--end row-->
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection
