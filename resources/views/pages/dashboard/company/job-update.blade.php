@extends('layout.company.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Updade Job</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">New Job</a></li>
                            <li class="breadcrumb-item active">Update Job</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/job-update",$job->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update This Job</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Job Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="{{ $job->title }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Select Position <span class="text-danger">*</span></label>
                                        <select class="form-control" name="position" required>
                                            <option value="">Select Position</option>
                                            <option value="Manager" {{ $job->position == 'Manager' ? 'selected' : '' }}>Manager</option>
                                            <option value="Sr,Manager" {{ $job->position == 'Sr,Manager' ? 'selected' : '' }}>Sr,Manager</option>
                                            <option value="Jr, Developer" {{ $job->position == 'Jr, Developer' ? 'selected' : '' }}>Jr, Developer</option>
                                            <option value="Executive" {{ $job->position == 'Executive' ? 'selected' : '' }}>Executive</option>
                                            <option value="Sr,Executive" {{ $job->position == 'Sr,Executive' ? 'selected' : '' }}>Sr,Executive</option>
                                            <option value="Others" {{ $job->position == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Select Job Category <span class="text-danger">*</span></label>
                                        <select class="form-control"  name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $job->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-category-Input" class="form-label">Employee Type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="type" required>
                                            <option value="">Select Type</option>
                                            <option value="full-time" {{ $job->type == 'full-time' ? 'selected' : '' }}>Full Time</option>
                                            <option value="part-time" {{ $job->type == 'part-time' ? 'selected' : '' }}>Part Time</option>
                                            <option value="contract" {{ $job->type == 'contract' ? 'selected' : '' }}>Contract</option>
                                            <option value="freelance" {{ $job->type == 'freelance' ? 'selected' : '' }}>Freelance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="vancancy-Input" class="form-label">No Of Vacancy <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="vacancy" id="vancancy-Input" value="{{ $job->vacancy }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="last-apply-date-Input" class="form-label">Experience Required <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="experience" value="{{ $job->experience }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">JOB DESCRIPTION<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="benefits" rows="3" placeholder="Enter description" required>{{ $job->benefits }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <label for="description-field" class="form-label">JOB RESPONSIBILITIES <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="requirements" rows="3" placeholder="Enter description" required>{{ $job->requirements }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="last-salary-Input" class="form-label">Salary</label>
                                        <input type="text" class="form-control" name="salary" value="{{ $job->salary }}" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="country-Input" class="form-label">Tags <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="tags" id="country-Input" value="{{ $job->tags }}" required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div>
                                        <label for="close-date-Input" class="form-label">Due Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="due_date" data-provider="flatpickr" value="{{ $job->due_date }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="job-category-Input" class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control" name="is_active" required>
                                    <option value="1" {{ $job->is_active == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $job->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hstack justify-content-end gap-2">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
