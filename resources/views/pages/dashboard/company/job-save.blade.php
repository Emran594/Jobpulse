@extends('layout.company.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create New Job</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">New Job</a></li>
                            <li class="breadcrumb-item active">Create Job</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/save-job") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">POST A NEW JOB</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Job Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Select Position <span class="text-danger">*</span></label>
                                        <select class="form-control"  name="position" required>
                                            <option value="">Select Position</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Sr,Manager">Sr,Manager</option>
                                            <option value="Jr, Developer">Jr, Developer</option>
                                            <option value="Executive">Executive</option>
                                            <option value="Sr,Executive">Sr,Executive</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Select Job Category <span class="text-danger">*</span></label>
                                        <select class="form-control"  name="category_id" required>
                                            <option value="">Select Position</option>
                                            @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Employee Type <span class="text-danger">*</span></label>
                                        <select class="form-control"  name="type" required>
                                            <option value="">Select Position</option>
                                            <option value="full-time">Full Time</option>
                                            <option value="part-time">Part Time</option>
                                            <option value="contract">Contract</option>
                                            <option value="freelance">Frelance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="vancancy-Input" class="form-label">No Of Vacancy <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="vacancy" id="vancancy-Input" placeholder="No. of Employee" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="last-apply-date-Input" class="form-label">Experience Required <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="experience" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">We Will Provide <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="benefits" rows="3" placeholder="Enter description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">What We Need <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="requirements" rows="3" placeholder="Enter description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="last-salary-Input" class="form-label">Salary</label>
                                        <input type="text" class="form-control" name="salary" placeholder="Enter end salary" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="country-Input" class="form-label">Tags <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="tags" id="country-Input" placeholder="programming,data-structure" required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div>
                                        <label for="close-date-Input" class="form-label">Due Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="due_date" data-provider="flatpickr" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="job-category-Input" class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control"  name="is_active" required>
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
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
