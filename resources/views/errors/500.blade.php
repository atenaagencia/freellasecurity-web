@extends('layouts.custom')
<!-- @include('includes.inner_page_title', ['page_title'=>__('Page Not Found')]) -->

<style>
body{
    background: #f4f3f3 !important;
}
</style>
@section('content')

<!-- Masthead-->
<header class="bg-dark 100vh p-5 text-light">
    <div class="container text-center py-5" style="margin-top: 150px; align-itens: center; justify-content: center;">
        <i class="fa fa-2x fa-exclamation-circle text-light mb-4"></i>
        <h2>{{__('Error')}}</h2>
        <p>{{__('Whoops, looks like something went wrong.')}}</p>
    </div>
</header>

@endsection