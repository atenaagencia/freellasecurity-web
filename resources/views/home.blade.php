@extends('layouts.user')

@section('title-page')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 font-weight-bold text-dark py-2">Dashboard</h1>
</div>
@endsection  
                  
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">My Profile</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white">
                <p>Edit your personal information like summary, projects, experience, skills and others.</p>
                <a href="{{ route('my.profile') }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">View my Public Proflie</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white">
                <p>Edit your personal information like summary, projects, experience, skills and others.</p>
                <a href="{{ route('view.public.profile', Auth::user()->id) }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-lg-2 col-md-6 col-sm-12 ml-auto">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body bg-white text-center">
                <h6 class="my-3 font-weight-bold text-dark">Profile Views</h6>
                <i class="fa fa-3x fa-eye text-dark"></i>
                <p class="h2 font-weight-bold text-dark">20</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush