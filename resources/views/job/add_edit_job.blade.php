@extends('layouts.company')

@section('content') 
    <!-- @include('includes.inner_page_title', ['page_title'=>__('Job Details')]) -->
    @include('job.inc.job')
@endsection

@push('styles')
<style type="text/css">
    .userccount p{ text-align:left !important;}
</style>
@endpush