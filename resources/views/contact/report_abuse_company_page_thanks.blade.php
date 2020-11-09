@extends('layouts.custom')

@section('content')
<!-- Masthead-->
<header class="p-2" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Report Abuse Company</h1>
    </div>
</header>

<!-- Page Title End -->
<section class="bg-white pt-5 pb-5">
    <div class="col-md-7 col-sm-10 mx-auto">
        @include('flash::message')
        <h2 class="font-weight-bold py-4">{{__('Thanks')}}!</h2>

        <p class="lead py-3">{{__('We will check this company')}}, {{ $siteSetting->site_name }}</p>
        
        <span>{{__('Talk to you soon')}},</span><br>
        <span class="font-weight-bold">{{ $siteSetting->site_name }}</span>
        
    </div>
</section>
@endsection