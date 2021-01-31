@extends('layouts.company')

@section('content')
<!-- @include('includes.inner_page_title', ['page_title'=>__('Company Posted Jobs')]) -->
@section('title-page')
<h1 class="h3 py-4 font-weight-bold text-dark">{{__('Company Posted Jobs')}}</h1>
@endsection

<div class="row mx-auto mb-5">
    <div class="col-md-12">
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Company Posted Jobs')}}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <ul class="searchList p-0">
                    @if(isset($job_applications) && count($job_applications))
                    @foreach($job_applications as $job)
                    <li class="nav-link">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="h4 font-weight-bold text-primary nav-link p-0" title="Milestone number">{{$job->title}}</a>
                                <div class="text-justify">
                                    {!! str_limit(strip_tags($job->description), 100, '...') !!}
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto float-right">
                                <div class="col-md-12 p-0">
                                    <h4 class="font-weight-bold text-dark">Actions</h4>
                                </div>
                                <div class="row">
                                    <a href="{{route('milestones.list', [$job->id])}}" class="btn btn-outline-dark m-1">
                                        {{__('View Details')}}
                                    </a>
                                    <button type="button" class="btn btn-info m-1">
                                        {{ $job->developmentstatus }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <!-- job end -->
                    @endforeach
                    @endif
                </ul>

                <a class="nav-link text-dark">{{ $job_applications->links() }}</a>

            </div>
        </div>
    </div>
</div>
@endsection