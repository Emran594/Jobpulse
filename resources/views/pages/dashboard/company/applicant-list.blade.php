@extends('layout.company.sidenav-layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Applicant List of</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Companies</a></li>
                            <li class="breadcrumb-item active">Applicant List</li>
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
                                        <input type="text" class="form-control search bg-light border-light" name="search" id="searchapplicant" placeholder="Search for applicant, industry type..." value="{{ $search }}">
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

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Candidate Image</th>
                                        <th>Candidate Name</th>
                                        <th>Phone</th>
                                        <th>Reject</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicants as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-secondary-subtle rounded">
                                                        <img src="{{ asset($item->candidate->image) }}" alt="" height="50">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $item->candidate->first_name}}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $item->candidate->phone}}</h6>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="{{ url('/reject-application', $item->id) }}" class="btn btn-link btn-sm">Reject Application <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{ url('/applicant-cv', $item->candidate->id) }}" class="btn btn-link btn-sm">View details <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                            <div class="flex-shrink-0 mb-2 mb-md-0">
                                <div class="text-muted">
                                    Showing <span class="fw-semibold">{{ $applicants->firstItem() }}</span> to <span class="fw-semibold">{{ $applicants->lastItem() }}</span> of <span class="fw-semibold">{{ $applicants->total() }}</span> Results
                                </div>
                            </div>
                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                {{ $applicants->links() }}
                            </ul>
                        </div>
                    </div>
                </div> <!-- .card-->
            </div>
        </div><!-- end row -->
    </div><!-- container-fluid -->
</div>
@endsection

