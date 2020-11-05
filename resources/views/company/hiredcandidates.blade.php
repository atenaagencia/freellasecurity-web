@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Timesheets')])
<!-- Inner Page Title end -->

<div class="listpgWraper">
    <div class="container">  @include('flash::message')
        <div class="row">
            @include('includes.company_dashboard_menu')

            <div class="col-md-9 col-sm-8"> 
                <div class="myads">
                    <div class="row">
                        <div class="col-md-12">
                                <h3>Click on view Details for a candidate</h3>
                        </div>
                    </div>
                    <ul class="searchList">
                        @if($candidates)
                        @foreach($candidates as $candidate)
                        <li>
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="jobinfo">
                                        <h3><a href="javascript:void(0)" class="candidateName" title="Milestone number">{{ $candidate->name }}</a></h3>
                                    </div>
                                    <div class="clearfix joblisting">Jobs listing</div>
                                    @if($candidate->jobDetails)
                                    @foreach($candidate->jobDetails as $job)
                                        <p><a href="#">{{$job['title']}}</a></p>
                                    @endforeach
                                    @else
                                        <p>No Jobs found</p>
                                    @endif
                                    

                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                
                                <div class="listbtn"><a href="{{route('milestones.list', 57)}}">View Details</a></div>

                                <div class="clearfix"></div>
                                </div>
                            </div>
                           
                        </li>
                        @endforeach
                        @endif
                        <!-- job end --> 
                       
                    </ul>
                    {{ $candidates->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
