@extends('layout.candidate.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Academic Qualification</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Academic Information</a></li>
                            <li class="breadcrumb-item active">My Academic Information</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{ url("/update-degree",$education_item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Exam</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Exam Name / Degree <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="{{ $education_item->title }}"  required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Group <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="group" value="{{ $education_item->group }}"  required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Passing year<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="year" value="{{ $education_item->year }}" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">result <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="result" value="{{ $education_item->result }}"  required />
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
