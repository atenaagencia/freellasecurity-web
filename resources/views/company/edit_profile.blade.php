{{-- @extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('View Profile')]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.company_dashboard_menu')

            <div class="col-md-9 col-sm-8"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="userccount">
                            <div class="formpanel"> @include('flash::message') 
                                <!-- Personal Information -->
                                @include('company.inc.profile')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .userccount p{ text-align:left !important;}
</style>
@endpush --}}

@extends('layouts.company')
@section('content')
<!-- @include('includes.inner_page_title', ['page_title'=>__('Editar Perfil')]) -->
@section('title-page')
@include('flash::message')
<h1 class="h3 py-4 font-weight-bold text-dark">{{__('Editar Perfil')}}</h1>
@endsection

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Editar Perfil')}}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
@include('company.inc.profile')

</div>
</div>
</div>
</div>

@endsection