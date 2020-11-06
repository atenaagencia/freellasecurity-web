@extends('layouts.custom')

@section('content')
<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/5483071/pexels-photo-5483071.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover;">
    <div class="container mx-auto pt-5">
        <h1 class="text-light pt-5">Terms of Use</h1>
    </div>
</header>

<!-- Page Title End -->
<section class="bg-secondary-custom p-5">
    <!-- About -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3">{{$cmsContent->page_title}}</h2>
                <p class="lead">{!! $cmsContent->page_content !!}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto lead">
                {!! $siteSetting->cms_page_ad !!}
            </div>
        </div>
    </div>
</section>
@endsection