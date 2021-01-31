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
                    <!-- job start -->
                    @if(isset($jobs) && count($jobs))
                    @foreach($jobs as $job)
                    @php $company = $job->getCompany(); @endphp
                    @if(null !== $company)
                    <li id="job_li_{{$job->id}}" class="nav-link pb-3">
                        <div class="row">
                            <div class="col">
                                <!-- {{$company->printCompanyImage()}} -->
                                <div class="container p-0">
                                    <img src="http://localhost:8000/admin_assets/no-image.png" style="width: 200px" alt="employer" title="employer">
                                </div>
                                <div class="jobinfo">
                                    <div class="companyName">
                                        <a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}" class="badge badge-primary">{{$company->name}}</a>
                                    </div>
                                    <div class="location">
                                        <label class="fulltime" title="{{$job->getJobShift('job_shift')}}">{{$job->getJobShift('job_shift')}}</label> - <span>{{$job->getCity('city')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="pb-3 font-weight-bold text-dark">Details</h4>
                                <p>{!! str_limit(strip_tags($job->description), 250, '...') !!}</p>
                                <a href="{{route('job.detail', [$job->slug])}}" class="btn btn-primary">See more</a>
                            </div>
                            <div class="col-md-12">
                                <h4 class="font-weight-bold text-dark">Actions</h4>
                            </div>
                            <div class="col-md-12 row pt-0">
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="{{route('list.favourite.applied.users', [$job->id])}}">{{__('Hired Freelancer')}}</a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="{{route('list.applied.users', [$job->id])}}">{{__('List Candidates')}}</a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="{{route('milestones.list', [$job->id])}}">{{__('Milestones')}}</a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="{{route('timesheet.details', [$job->id])}}">{{__('Timesheets')}}</a>
                                <a class="nav-link btn btn-light m-1 font-weight-bold" href="{{route('edit.front.job', [$job->id])}}">{{__('Edit')}}</a>
                                <a class="nav-link btn btn-outline-danger m-1 font-weight-bold" href="javascript:;" onclick="deleteJob({{$job->id}})">{{__('Delete')}}</a>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <!-- job end -->
                    @endif
                    @endforeach
                    @endif
                </ul>
                {{ $jobs->links() }}

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    function deleteJob(id) {
        var msg = 'Are you sure?';
        if (confirm(msg)) {
            $.post("{{ route('delete.front.job') }}", {
                id: id,
                _method: 'DELETE',
                _token: '{{ csrf_token() }}'
            })
            .done(function(response) {
                if (response == 'ok') {
                    $('#job_li_' + id).remove();
                } else {
                    alert('Request Failed!');
                }
            });
        }
    }
</script>
@endpush

