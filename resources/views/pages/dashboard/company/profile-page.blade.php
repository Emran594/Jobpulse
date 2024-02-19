@extends('layout.company.sidenav-layout')
@section('content')
<div class="page-content">
    
<div class="container-fluid">
    <form action="{{ url('/updateCompany') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="position-relative d-inline-block">
                        <div class="position-absolute bottom-0 end-0">
                            <label for="company-logo-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                <div class="avatar-xs cursor-pointer">
                                    <div class="avatar-title bg-light border rounded-circle text-muted">
                                        <i class="ri-image-fill"></i>
                                    </div>
                                </div>
                            </label>
                            <input class="form-control d-none" value="" id="company-logo-input" name="logo" type="file" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="avatar-lg p-1">
                            <div class="avatar-title bg-light rounded-circle">
                                <img src="assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-fit-cover" />
                            </div>
                        </div>
                    </div>
                    <h5 class="fs-13 mt-3">Company Logo</h5>
                </div>
                <div>
                    <label for="companyname-field" class="form-label">Name</label>
                    <input type="text" id="companyname-field" name="name" class="form-control" @isset($info->name) value="{{ $info->name }}" @endisset required />
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label for="owner-field" class="form-label">About</label>
                    <input type="text" id="owner-field" name="description" class="form-control" @isset($info->name) value="{{ $info->description }}" @endisset required />
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label for="industry_type-field" class="form-label">Industry Type</label>
                    <select class="form-select" id="industry_type-field" name="industry_type">
                        <option value="">Select industry type</option>
                        @isset($industry_type)
                            @if($industry_type == '1')
                                <option value="1" selected>Computer Industry</option>
                            @else
                                <option value="1">Computer Industry</option>
                            @endif
                
                            @if($industry_type == '2')
                                <option value="2" selected>Chemical Industries</option>
                            @else
                                <option value="2">Chemical Industries</option>
                            @endif
                
                            @if($industry_type == '3')
                                <option value="3" selected>Health Services</option>
                            @else
                                <option value="3">Health Services</option>
                            @endif
                
                            @if($industry_type == '4')
                                <option value="4" selected>Telecommunications Services</option>
                            @else
                                <option value="4">Telecommunications Services</option>
                            @endif
                
                            @if($industry_type == '5')
                                <option value="5" selected>Textiles: Clothing, Footwear</option>
                            @else
                                <option value="5">Textiles: Clothing, Footwear</option>
                            @endif
                
                            @if($industry_type == '6')
                                <option value="6" selected>Others</option>
                            @else
                                <option value="6">Others</option>
                            @endif
                        @else
                            <option value="1">Computer Industry</option>
                            <option value="2">Chemical Industries</option>
                            <option value="3">Health Services</option>
                            <option value="4">Telecommunications Services</option>
                            <option value="5">Textiles: Clothing, Footwear</option>
                            <option value="6">Others</option>
                        @endisset
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <label for="location-field" class="form-label">Location</label>
                    <input type="text" id="location-field" name="location" class="form-control" @isset($info->name) value="{{ $info->location }}" @endisset required />
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <label for="employee-field" class="form-label">Employee</label>
                    <input type="text" id="employee-field" name="employee" class="form-control" @isset($info->name) value="{{ $info->employee }}" @endisset required />
                </div>
            </div>
            
            <div class="col-lg-6">
                <div>
                    <label for="contact_email-field" class="form-label">Contact Email</label>
                    <input type="text" id="contact_email-field" name="email" class="form-control" @isset($info->name) value="{{ $info->email }}" @endisset required />
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label for="website-field" class="form-label">Website</label>
                    <input type="text" id="website-field" name="website" class="form-control" @isset($info->name) value="{{ $info->website }}" @endisset required />
                </div>
            </div>
            <div class="col-lg-12">
                <div>
                    <label for="since-field" class="form-label">phone</label>
                    <input type="text" id="since-field" name="phone" class="form-control" @isset($info->name) value="{{ $info->phone }}" @endisset required />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="hstack gap-2 justify-content-end">
                <button type="submit" class="btn btn-success" id="add-btn">Update Profile</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
