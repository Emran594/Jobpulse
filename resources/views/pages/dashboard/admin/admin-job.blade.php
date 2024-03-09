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
                                <p class="fw-medium text-muted mb-0">Total Job</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="547">{{ $count_job }}</span></h2>
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
                                <p class="fw-medium text-muted mb-0">Vacancy </p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="124">{{ $vacancy }}</span></h2>
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
                                <p class="fw-medium text-muted mb-0">Total Application</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="107">{{ $application }}</span></h2>
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
                                <p class="fw-medium text-muted mb-0">Hired</p>
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
                    <h4 class="mb-sm-0">Job List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                            <li class="breadcrumb-item active">Jobs List</li>
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
                            <div class="row g-8">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search bg-light border-light" name="search" id="searchCompany" placeholder="Search job, job title" value="{{ $search }}">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-xxl-2 col-sm-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="ri-equalizer-fill me-1 align-bottom"></i> Search
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
                                        @foreach ($job as $item)

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0">{{ $item->title }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0">{{ $item->position }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0">{{ $item->type }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0">{{ $item->salary }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ url('/job-details', $item->id) }}" class="btn btn-link btn-sm">View details <i class="ri-arrow-right-line align-bottom"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                                <div class="flex-shrink-0 mb-2 mb-md-0">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">{{ $job->firstItem() }}</span> to <span class="fw-semibold">{{ $job->lastItem() }}</span> of <span class="fw-semibold">{{ $job->total() }}</span> Results
                                    </div>
                                </div>
                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                    @if ($job->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">&laquo;</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a href="{{ $job->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a>
                                        </li>
                                    @endif
                                
                                    @foreach ($job->getUrlRange(1, $job->lastPage()) as $page => $url)
                                        <li class="page-item {{ ($page == $job->currentPage()) ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                
                                    @if ($job->hasMorePages())
                                        <li class="page-item">
                                            <a href="{{ $job->nextPageUrl() }}" class="page-link" rel="next">&raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">&raquo;</span>
                                        </li>
                                    @endif
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
                                <a href="{{ $job->previousPageUrl() }}" class="page-link" id="page-prev">Previous</a>
                            </div>
                            <span id="page-num" class="pagination"></span>
                            <div class="page-item">
                                <a href="{{ $job->nextPageUrl() }}" class="page-link" id="page-next">Next</a>
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
