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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Create a New Page</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Page Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="Blog Page" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Post Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10">It looks like you've entered "Lorem 200," which appears to be a request for Lorem Ipsum text of 200 words. Lorem Ipsum is placeholder text commonly used in the design and typesetting industry. Here's an excerpt of Lorem Ipsum text:

                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                                            This text is used as filler in mock-ups and designs before the actual content is available. If you need Lorem Ipsum text for a specific purpose or have any other questions, feel free to ask!</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="job-title-Input" class="form-label">Company Vision <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10">It looks like you've entered "Lorem 200," which appears to be a request for Lorem Ipsum text of 200 words. Lorem Ipsum is placeholder text commonly used in the design and typesetting industry. Here's an excerpt of Lorem Ipsum text:

                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                                            This text is used as filler in mock-ups and designs before the actual content is available. If you need Lorem Ipsum text for a specific purpose or have any other questions, feel free to ask!</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <div>
                                        <label for="start-salary-Input" class="form-label">Post Image</label>
                                        <input type="file" class="form-control" name="responsibility" placeholder="Enter start salary" required />
                                    </div>
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
