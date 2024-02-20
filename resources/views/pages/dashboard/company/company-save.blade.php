@extends('layout.company.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Company Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Company Profile</a></li>
                            <li class="breadcrumb-item active">Create Company Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/save-info") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Create Company Profile</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Company Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Industry Type <span class="text-danger">*</span></label>
                                        <select class="form-control" data-choices name="industry_type" required>
                                            <option value="">Select Category</option>
                                            <option value="1">Accounting & Finance</option>
                                            <option value="2">Purchasing Manager</option>
                                            <option value="3">Education & training</option>
                                            <option value="4">Marketing & Advertising</option>
                                            <option value="5">It / Software</option>
                                            <option value="6">Digital Marketing</option>
                                            <option value="7">Administrative Officer</option>
                                            <option value="8">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="vancancy-Input" class="form-label">Employee <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="vancancy-Input" placeholder="No. of Employee" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="last-apply-date-Input" class="form-label">Location <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="location" data-provider="flatpickr"  required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div>
                                        <label for="close-date-Input" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="Email" data-provider="flatpickr" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="start-salary-Input" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" name="phone" placeholder="Enter start salary" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="last-salary-Input" class="form-label">Website</label>
                                        <input type="text" class="form-control" name="website" placeholder="Enter end salary" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="country-Input" class="form-label">Logo <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="country-Input" placeholder="Enter country" required />
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
