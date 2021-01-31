@extends('layouts.company')

@section('title-page')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 font-weight-bold text-dark">My Dashboard</h1>
    <div class="row">
        <a href="" class="nav-link p-3" title="Profile Views">
            <h5 class="h5 font-weight-bold text-dark">20</h5>
            Open Jobs
        </a>
        <a href="" class="nav-link p-3" title="Profile Views">
            <h5 class="h5 font-weight-bold text-dark">20</h5>
            Followers
        </a>
    </div>
</div>
@endsection  
                  
@section('content')
<div class="row mx-auto">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">My Profile</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <p>Edit your personal information like summary, projects, experience, skills and others.</p>
                <a href="{{ route('company.profile') }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">View my Public Proflie</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <p>Edit your personal information like summary, projects, experience, skills and others.</p>
                <a href="{{ route('company.detail', Auth::guard('company')->user()->slug) }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
</div>
@endsection