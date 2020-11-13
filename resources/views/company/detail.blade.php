@extends('layouts.custom')

@section('content')
<!-- Masthead-->
<header class="p-5"
    style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Company Detail</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <div class="card border-0 bg-white mb-3">
                    <div class="card-header text-dark bg-transparent border-0">

                        <!-- company's name -->

                        <div class="card-title font-weight-bold h3 py-3">{{$company->name}} - <small>{{$company->getIndustry('industry')}}</small></div>

                        <!-- end company's name -->

                        <div class="container rounded bg-secondary-custom p-2">
                            <div class="row justify-content-between">
                                <a class="nav-link">{{__('Member Since')}}, {{$company->created_at->format('M d, Y')}}</a>
                                <a class="nav-link"><i class="fas fa-map-marker text-primary mr-3"></i>{{$company->location}}</a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row justify-content-between py-2">
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-dark"><i class="fa fa-star text-warning mr-2"></i>Add to Favourite</a>
                                </div>
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-danger"><i class="fas fa-exclamation-circle text-light mr-2"></i>Report Abuse</a>
                                </div>
                                <div class="col p-1">
                                    <a href="" class="btn btn-block btn-outline-dark font-weight-bold"><i class="fa fa-envelope mr-2"></i>Send a message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="py-2">About Company</h4>
                        <p class="text-justify">
                           {!! $company->description !!}
                        </p>
                        <hr>
                        <h4 class="py-3">Work history and feedback</h4>
                        <div class="lead">
                           @foreach($projectFeedback as $o)
                            @if($o->jobApply['isCandidateContractStatus'] == "close" && $o->jobApply['isEmployeerContractStatus'] == "close")
                            <div class="project-review">
                                <h4>{{ $o->jobDetails->title }}</h4>
                                <div class="rating">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="rateyo" data-rateyo-rating="{{ $o->rating }}" data-rateyo-num-stars="5"
                                                data-rateyo-score="3">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span style="padding: 0;margin-top: -5px; margin-right: 3px; font-weight: bold;">
                                                @if(strpos($o->rating, "."))
                                                {{$o->rating}}0
                                                @else
                                                {{$o->rating}}.00
                                                @endif
                                            </span>
                                            <span>{{\Carbon\Carbon::parse($o->created_at)->format('M Y')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <p style="padding: 5px 0;">
                                    {{ $o->feedback }}
                                </p>
                            </div>
                            <hr>
                            @elseif($o->jobApply['isCandidateContractStatus'] == "close"
                            && $o->jobApply['isEmployeerContractStatus'] == "open" ||
                            $o->jobApply['isCandidateContractStatus'] == "open"
                            && $o->jobApply['isEmployeerContractStatus'] == "close")
                            {{--                                    @php--}}
                            {{--                                        $date = \Carbon\Carbon::parse($o->jobApply['CandidateCloseContract']);--}}
                            {{--                                        $now = \Carbon\Carbon::now();--}}
                            {{--                                        echo $diff = $date->diffInDays($now);--}}
                            {{--                                    @endphp--}}
                            @if($o->jobApply['CandidateCloseContract'] <= Carbon\Carbon::now()->subDays(90))
                                <div class="project-review">
                                    <h4>{{ $o->jobDetails->title }}</h4>
                                    <div class="rating">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <span>{{\Carbon\Carbon::parse($o->CandidateCloseContract)->format('M Y')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p style="padding: 5px 0;">
                                        No feedback given
                                    </p>
                                </div>
                                <hr>
                                @endif
                                @endif
                                {{--<div class="project-review">
                                                                <h4>{{ $o->jobDetails->title }}</h4>
                                <div class="rateyo" data-rateyo-rating="{{ $o->rating }}" data-rateyo-num-stars="5" data-rateyo-score="3">
                                </div>
                                <p class="">
                                    {{ $o->feedback }}
                                </p>
                                </div>--}}
                                @endforeach
                        </div>
                        <hr>
                    </div>
                </div>
                <!--end of card-->

                <div class="card-title font-weight-bold h3 py-4">Jobs Openings</div>
                @if(isset($company->jobs) && count($company->jobs))
                    @foreach($company->jobs as $companyJob)
                <!--unique card: every job have one card-->
                <div class="card border-0 bg-white mb-5">
                    <div class="card-header text-dark pb-0 border-bottom-0">
                        <div class="card-title font-weight-bold h4 pb-0"><a class="text-dark pb-0" href="{{route('job.detail', [$companyJob->slug])}}" title="{{$companyJob->title}}">{{$companyJob->title}}</a></div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">{{str_limit(strip_tags($companyJob->description), 150, '...')}}</p>
                        <!-- <div class="portfolio-caption-subheading text-left text-muted">
                            <a class="text-dark" href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a>
                        </div> -->
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge pt-2 pb-0 badge-secondary"><label class="fulltime" title="{{$companyJob->getJobType('job_type')}}">{{$companyJob->getJobType('job_type')}}</label></div>
                        </div>
                    </div>
                    <div class="card-footer pb-1 bg-transparent">
                        <div class="row justify-content-between">
                            <div class="col">
                                <p class="text-dark font-weight-bold pt-1">
                                    {{$companyJob->created_at->format('M-d-Y')}}
                                </p>
                            </div>
                            <div class="col">
                                <a href="{{route('job.detail', [$companyJob->slug])}}" class="btn btn-success py-2 float-right">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of unique card-->

                @endforeach
                @endif
            </div>
            <!--end of col-->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <!--card unique-->
                <div class="card border-0 bg-white p-1 mb-3">
                    <div class="container p-3">
                        <h4 class="pb-0 pt-1 text-dark">Company Detail</h4>
                        <hr>
                        <ul class="p-0 pt-2">
                            <li class="row justify-content-between">
                                <div class="col"><span>Is Email Verified</span></div>
                                <div class="col">
                                    {{((bool)$company->verified)? 'Yes':'No'}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Total Employees</span></div>
                                <div class="col">
                                    {{$company->no_of_employees}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Established In</span></div>
                                <div class="col"><span>{{$company->established_in}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col"><span>Current jobs</span></div>
                                <div class="col"><span>{{$company->countNumJobs('company_id',$company->id)}}</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--card's end-->

                <div class="container p-0">
                    <!-- Google Map start -->
                    {{--{!!$company->map!!}--}}
                </div>

            </div>
            <!--col end-->

        </div>
    </div>

</section>
@endsection