@extends('layouts.user')

@section('title-page')
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">Payment Management</h1>
</div>
@endsection  
                  
@section('content')

<div class="py-4">
    <div class="col-md-10">
        <div class="card h-100 shadow rounded-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Paypal Configuration Details')}}</h6>
            </div>
            <div class="card-body bg-white">
                <p class="lead text-dark font-weight-bold">Please add your Email and mobile number which is connected to your paypal.</p>
                <hr>
                <p class="text-dark font-weight-bold">Email Id : Not added</p>
                <p class="text-dark font-weight-bold">Mobile Numner : Not added</p>
                <hr>
                <button class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush