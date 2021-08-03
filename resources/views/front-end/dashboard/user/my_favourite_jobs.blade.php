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
               <div class="myads">
                        <h3>{{__('Favourite Jobs')}}</h3>
                        <ul class="searchList">
                            <!-- job start -->
                            @if(isset($project) && count($project))
                            @foreach($project as $projects)
                            @php $job = $projects->getJob(); $company = $job->getCompany(); @endphp
                            @if(null !== $job)
                            <li>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="jobimg">{{$company->printCompanyImage()}}</div>
                                        <div class="jobinfo">
                                            <h3><a href="{{route('job.detail', [$job->slug])}}" title="{{$job->title}}">{{$job->title}}</a>
                                            </h3>
                                            <div class="companyName"><a href="{{route('company.detail', $company->slug)}}"
                                                    title="{{$company->name}}">{{$company->name}}</a></div>
                                            <div class="location">
                                                <label class="fulltime"
                                                    title="{{$job->getJobShift('job_shift')}}">{{$job->getJobShift('job_shift')}}</label>
                                                - <span>{{$job->getCity('city')}}</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="listbtn"><a href="{{route('job.detail', [$job->slug])}}">{{__('View Details')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <p>{!! str_limit(strip_tags($job->description), 150, '...') !!}</p>
                            </li>
                            <!-- job end -->
                            @endif
                            @endforeach
                            @endif
                        </ul>
                    
                        {{ $project->links() }}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush