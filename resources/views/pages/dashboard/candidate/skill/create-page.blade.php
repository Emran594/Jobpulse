@extends('layout.candidate.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Skill Information</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Company Profile</a></li>
                            <li class="breadcrumb-item active">Skill Information</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/save-skill") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Skill Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Add Skill Type <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Language" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Add Skills Item <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="value" placeholder="Bengali,English" required />
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
