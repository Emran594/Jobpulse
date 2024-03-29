@extends('layout.admin.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create a new post</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">POST</a></li>
                            <li class="breadcrumb-item active">Post List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/save-experience") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Create a New Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">job Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">From Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="from_date" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">To Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="to_date" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Description <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="description" placeholder="Enter job title" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="start-salary-Input" class="form-label">responsibility</label>
                                        <input type="text" class="form-control" name="responsibility" placeholder="Enter start salary" required />
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