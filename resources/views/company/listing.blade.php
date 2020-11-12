@extends('layouts.custom')
<style>
    @media (min-width: 600px) {
        .img-fluid {
            max-height: 240px !important;
        }
    }
</style>
@section('content')
<!-- Masthead-->
<header class="p-5"
    style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Companies List</h1>
    </div>
</header>

<!-- Feature Jobs-->
<section class="page-section bg-secondary-custom">
    <div class="container mb-5">
        <div class="row">
            @if($companies)
            @foreach($companies as $company)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100 portfolio-item border rounded shadow-sm">
                    <a class="card-header portfolio-link p-0 border-0" href="{{route('company.detail',$company->slug)}}">{{$company->printCompanyImage()}}</a>
                    <div class="card-body portfolio-caption">
                        <div class="portfolio-caption-heading py-1 text-left">
                            <a class="text-dark" href="{{route('company.detail',$company->slug)}}">{{$company->name}}</a>
                        </div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            {{$company->location}}
                        </div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge p-2 mt-3 badge-info">{{__('Current jobs')}} : {{$company->countNumJobs('company_id',$company->id)}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
          
        </div>
        <!--pagination-->
        <div class="row justify-content-between py-4">
            {{-- <div class="col-md-5">
                <div class="showreslt">
                    Showing Pages : 11 - 20 Total 43
                </div>
            </div> --}}
            <div class="col-md-12 pagiWrap">
           {{ $companies->links() }}
            </div>
        </div>
        <!--end of pagination-->
    </div>
    <!--row-->
</section>
@endsection