@extends('layout.candidate.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Candidate Information</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Company Profile</a></li>
                            <li class="breadcrumb-item active">My Candidate Information</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/info-save") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Candidate Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="start-salary-Input" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter start salary" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="country-Input" class="form-label">Profile Photo <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="image" id="country-Input" placeholder="Enter country" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hstack justify-content-end gap-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>


@endsection
