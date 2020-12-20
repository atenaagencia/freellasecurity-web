@extends('layouts.user')

@section('title-page')
<!-- Page Heading -->
<div class="container row justify-content-left py-3">
    <h1 class="h3 font-weight-bold text-dark">My Favourite Jobs</h1>
</div>
@endsection  
                  
@section('content')

<div class="py-4">
    <div class="col-md-10">
        <div class="card h-100 shadow rounded-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Lorem Ipsum')}}</h6>
            </div>
            <div class="card-body bg-white">
                <p class="text-muted">
                    Esta seção deverá receber cada job que o usuário favoritar.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush