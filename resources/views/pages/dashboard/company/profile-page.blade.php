@extends('layout.company.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Companie Information</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="flex-grow-1">
                                @empty($info)
                                <a href="{{ url('/save-page') }}" class="btn btn-primary add-btn">Save Company Information</a>
                                @endempty
                            </div>
                            <div class="flex-shrink-0">
                                <div class="hstack text-nowrap gap-2">
                                    @isset($info)
                                    <a href="" class="btn btn-secondary"> Update Company Information</a>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @isset($info)
            <div class="col-xxl-8 offset-md-2">
                <div class="card" id="contact-view-detail">
                    <div class="card-body text-center">
                        <div class="position-relative d-inline-block">
                            <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            <span class="contact-active position-absolute rounded-circle bg-success"><span class="visually-hidden"></span>
                        </div>
                        <h5 class="mt-4 mb-1">Tonya Noble</h5>
                        <p class="text-muted">Nesta Technologies</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-success-subtle text-success fs-15 rounded">
                                    <i class="ri-phone-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                    <i class="ri-mail-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                    <i class="ri-question-answer-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                        <p class="text-muted mb-4">Hello, I'm Tonya Noble, The most effective objective is one that is tailored to the job you are applying for. It states what kind of career you are seeking, and what skills and experiences.</p>
                        <div class="table-responsive table-card">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium" scope="row">Designation</td>
                                        <td>Lead Designer / Developer</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Email ID</td>
                                        <td>tonyanoble@velzon.com</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Phone No</td>
                                        <td>414-453-5725</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Lead Score</td>
                                        <td>154</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Tags</td>
                                        <td>
                                            <span class="badge bg-secondary-subtle text-secondary">Lead</span>
                                            <span class="badge bg-secondary-subtle text-secondary">Partner</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium" scope="row">Last Contacted</td>
                                        <td>15 Dec, 2021 <small class="text-muted">08:58AM</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            @endisset
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div>

@endsection
