@extends('layouts.user')

@section('title-page')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 font-weight-bold text-dark">Candidate Dashboard</h1>
    <div class="row">
        <a class="nav-link p-3" title='My Account Balance'>
            <i class="fas fa-2x fa-wallet mr-1"></i>(usd)<h4 class="text-dark">$ 0,00</h4> 
        </a>
        <a class="nav-link p-3" title="Profile Views">
            <i class="fa fa-2x fa-eye mr-1"></i><h4 class="text-dark">20</h4>  
        </a>
        <a class="nav-link p-3" title='Job Applied'>
            <i class="fas fa-2x fa-hands-helping mr-1"></i><h4 class="text-dark">20</h4> 
        </a>
    </div>
</div>
@endsection  
                  
@section('content')
<div class="row mx-auto py-3">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
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
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
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
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush