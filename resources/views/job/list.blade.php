@extends('layouts.custom')

@section('content')
<!-- Masthead-->
<header class="p-5"
    style="background: url('https://images.pexels.com/photos/5473298/pexels-photo-5473298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Job Listing</h1>
    </div>
</header>

<!-- Services-->
<section class="page-section bg-white">
    <div class="container">
        <div class="masthead-heading display-5 text-left py-4">Browse jobs acording to your necessities</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card border-0 bg-transparent p-lg-0 p-md-0 p-sm-2">
                    @include('flash::message')
                    <form action="{{route('job.list')}}" method="get">
                        <div class="form-row">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <label for="inputCity">Search for</label>
                                <input type="text" class="form-control" id="inputCity"
                                    placeholder="Skills or Job Title" value="{{Request::get('search', '')}}">
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <label for="inputState">Functional Area</label>
                                {!! Form::select('functional_area_id[]', ['' => __('Select Functional Area')]+$functionalAreas,
                                Request::get('functional_area_id', null), array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
                                {{-- <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select> --}}
                            </div>
                            @if((bool)$siteSetting->country_specific_site)
                            {!! Form::hidden('country_id[]', Request::get('country_id[]', $siteSetting->default_country_id),
                            array('id'=>'country_id')) !!}
                            @else
                            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                                <label for="inputState">Country</label>
                             {!! Form::select('country_id[]', ['' => __('Select Country')]+$countries, Request::get('country_id',
                            $siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
                            </div>
                            @endif
                            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                                <label for="inputState">State</label>
                                {!! Form::select('state_id[]', ['' => __('Select State')], Request::get('state_id', null),
                                array('class'=>'form-control', 'id'=>'state_id')) !!}
                            
                            </div>
                            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                                <label for="inputState">City</label>
                            {!! Form::select('city_id[]', ['' => __('Select City')], Request::get('city_id', null), array('class'=>'form-control',
                                'id'=>'city_id')) !!}
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-block btn-dark" style="margin-top: 2rem !important;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services-->
<section class="page-section bg-secondary-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-2">
                <form action="{{route('job.list')}}" method="get">
                <div class="card border-0 bg-white p-1 mb-3">

                    <!--jobs_title_block-->

                    <h4 class="p-3">Jobs By Title</h4>

                    <ul class="list-group optionlist view_more_ul hide_vm_ul">
                        @if(isset($jobTitlesArray) && count($jobTitlesArray))
                        @foreach($jobTitlesArray as $key=>$jobTitle)
                        <li class="list-group-item d-flex justify-content-left align-items-center">
                            @php
                            $checked = (in_array($jobTitle, Request::get('job_title', array())))? 'checked="checked"':'';
                            @endphp
                            <input type="checkbox" name="job_title[]" id="job_title_{{$key}}" value="{{$jobTitle}}" {{$checked}}>
                            <label for="job_title_{{$key}}" class="pr-2"></label>
                            {{$jobTitle}} <span class="badge badge-primary badge-pill float-right ml-auto">{{App\Job::countNumJobs('title', $jobTitle)}}</span> </li>
                        
                        @endforeach
                        @endif
                        {{-- <li class="list-group-item d-flex justify-content-left align-items-center">
                            <input type="checkbox" name="job_title[]" id="job_title_2" value="DREAM MOTOR">
                            <label for="job_title_2" class="pr-2"></label>Electrical Engineer
                            <span class="badge badge-primary badge-pill float-right ml-auto">1</span>
                        </li> --}}
                     
                    </ul>

                    <span class="text-primary view_more py-4 pl-4 border-top">
                        <div class="btn btn-dark">View More</div>
                    </span>

                    <!--jobs_country_block-->

                    <h4 class="p-3">Jobs By Country</h4>

                    <ul class="list-group optionlist view_more_ul hide_vm_ul">
                        @if(isset($countryIdsArray) && count($countryIdsArray))
                        @foreach($countryIdsArray as $key=>$country_id)
                        @php
                        $country = App\Country::where('country_id','=',$country_id)->lang()->active()->first();
                        @endphp
                        @if(null !== $country)
                        @php
                        $checked = (in_array($country->country_id, Request::get('country_id', array())))? 'checked="checked"':'';
                        @endphp
                        <li class="list-group-item d-flex justify-content-left align-items-center">
                            <input type="checkbox" name="country_id[]" id="country_{{$country->country_id}}" value="{{$country->country_id}}"
                                {{$checked}}>
                            <label for="country_{{$country->country_id}}" class="pr-2"></label>
                            {{$country->country}} <span class="badge badge-primary badge-pill float-right ml-auto">{{App\Job::countNumJobs('country_id', $country->country_id)}}</span> </li>
                        @endif
                        @endforeach
                        @endif
                        {{-- <li class="list-group-item d-flex justify-content-left align-items-center">
                            <input type="checkbox" name="job_title[]" id="job_title_2" value="DREAM MOTOR">
                            <label for="job_title_2" class="pr-2"></label>Electrical Engineer
                            <span class="badge badge-primary badge-pill float-right ml-auto">1</span>
                        </li> --}}
                       
                    </ul>
                    <span class="text-primary view_more py-4 pl-4 border-top">
                        <div class="btn btn-dark">View More</div>
                    </span>
                </div>
                <!--card's end-->
                <div class="card border-0 bg-white p-1 mt-4 mb-3">
                    <h4 class="p-3">Salary Range</h4>
                    <div class="form-group col-12">
                      {!! Form::number('salary_from', Request::get('salary_from', null), array('class'=>'form-control', 'id'=>'salary_from',
                        'placeholder'=>__('Salary From'))) !!}
                    </div>
                    <div class="form-group col-12">
                      {!! Form::number('salary_to', Request::get('salary_to', null), array('class'=>'form-control', 'id'=>'salary_to',
                        'placeholder'=>__('Salary To'))) !!}
                    </div>
                    <div class="form-group col-12">
                      {!! Form::select('salary_currency', ['' =>__('Select Salary Currency')]+$currencies, Request::get('salary_currency',
                        $siteSetting->default_currency_code), array('class'=>'form-control', 'id'=>'salary_currency')) !!}
                    </div>
                    <div class="form-group col-12 border-top">
                        <button type="submit" class="btn btn-block btn-dark py-2 mt-3 mb-3"><i class="fa fa-search"
                                aria-hidden="true"></i> Search Jobs</button>
                    </div>
                </div>
            </div>
        </form>
            <!--col end-->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 py-2">
                <!--unique card: every job have one card-->
                @if(isset($jobs) && count($jobs))
                    @foreach($jobs as $job)
                    @php $company = $job->getCompany(); @endphp
                    @if(null !== $company)
                <div class="card border-0 bg-white mb-5">
                    <div class="card-header border-bottom-0 text-dark pb-0">
                        <div class="card-title h5">{{$job->title}}</div>
                    </div>
                    <div class="card-body">
                       <p class="text-justify text-mutted">{{str_limit(strip_tags($job->description), 150, '...')}}</p>
                        <div class="portfolio-caption-subheading text-left text-muted "><a href="{{route('company.detail', $company->slug)}}" class="text-left text-muted" title="{{$company->name}}">{{$company->name}}</a></div>
                        <div class="portfolio-caption-subheading text-left text-muted">
                            <div class="badge pt-2 pb-0 mt-3 badge-secondary font-weight-normal"><label class="fulltime" title="{{$job->getJobType('job_type')}}">{{$job->getJobType('job_type')}}</label>
                            - <span>{{$job->getCity('city')}}</span></div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-secondary-custom pb-0 pt-2">
                        <div class="row justify-content-between p-0">
                            <div class="col">
                                <p class="text-secondary font-weight-bold pt-1">{{date('d-m-Y', strtotime($job->created_at))}}</p>
                            </div>
                            <div class="col">
                                <a href="{{route('job.detail', [$job->slug])}}" class="btn btn-success float-right">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <!--end of unique card-->
                <!--unique card: every job have one card-->
            
                <!--end of unique card-->

                <!--pagination-->
                <div class="row justify-content-between py-3 border-top">
                    <div class="col-md-5">
                       <div class="showreslt">
                            {{__('Showing Pages')}} : {{ $jobs->firstItem() }} - {{ $jobs->lastItem() }} {{__('Total')}} {{ $jobs->total() }}
                        </div>
                    </div>
                    <div class="col-md-7">
                   
                            @if(isset($jobs) && count($jobs))
                            {{ $jobs->appends(request()->query())->links() }}
                            @endif
                        
                    </div>
                    </div>
                </div>
                <!--end of pagination-->

            </div>
            <!--end of col-->
        </div>
    </div>
</section>
@endsection