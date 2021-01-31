@extends('layouts.company')

@section('title-page')
<h1 class="h3 py-4 font-weight-bold text-dark">{{__('Milestones List')}}</h1>
@endsection

<style type="text/css">
    .help-block {
        color: red;
    }
</style>

@section('content')
<div class="row mx-auto mb-5">
    <div class="col-md-12 py-2">
        <div class="card shadow">
            @include('flash::message')
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">{{__('Milestones List')}}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <div class="formpanel">
                    {!! Form::open(array('method' => 'post', 'route' => ['post.milestone.job', $job])) !!}
                    <!-- Job Information -->
                    <h5>{{$job->title}}</h5>
                    <div class="row">
                        <div class="col-md-12 py-2">
                            <div class="formrow{{ $errors->has('freelancer') ? ' has-error' : '' }}">
                                <select class="form-control" name="freelancer" id="freelancer">
                                    <option value="">Select User</option>
                                    @if(isset($job_applications) && count($job_applications))
                                    @foreach($job_applications as $job_application)
                                    @php
                                    $user = $job_application->getUser();
                                    @endphp
                                    @if(null !== $user)
                                    <option value="{{$user->id}}">{{$user->getName()}}</option>
                                    @endif
                                    @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('freelancer')) <span class="help-block"> <strong>{{ $errors->first('freelancer') }}</strong> </span> @endif
                            </div>
                        </div>
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <div class="col-md-12 py-2">
                            <div class="formrow{{ $errors->has('milestone_title') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="milestone_title" placeholder="Enter title of milestone">
                                @if ($errors->has('milestone_title')) <span class="help-block"> <strong>{{ $errors->first('milestone_title') }}</strong> </span> @endif
                            </div>
                        </div>
                        <div class="col-md-12 py-2">
                            <div class="formrow{{ $errors->has('task_details') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="task_details" placeholder="Enter Details of task"></textarea>
                                @if ($errors->has('task_details')) <span class="help-block"> <strong>{{ $errors->first('task_details') }}</strong> </span> @endif
                            </div>
                        </div>
                        <div class="col-md-12 py-2">
                            <div class="formrow{{ $errors->has('price') ? ' has-error' : '' }}">
                                <input type="number" class="form-control" name="price" placeholder="Price">
                                @if ($errors->has('price')) <span class="help-block"> <strong>{{ $errors->first('price') }}</strong> </span> @endif
                            </div>
                        </div>
                        <div class="col-md-6 py-2">
                            <div class="formrowformrow{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                <label for="">Start Date</label>
                                <div class='input-group date' id='startdate'>
                                    <input type='date' class="form-control" name="start_date" placeholder="Start date" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                @if ($errors->has('start_date')) <span class="help-block"> <strong>{{ $errors->first('start_date') }}</strong> </span> @endif
                            </div>
                        </div>

                        <div class="col-md-6 py-2">
                            <div class="formrow{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                <label for="">End Date</label>
                                <div class='input-group date' id='enddate'>
                                    <input type='date' class="form-control" name="end_date" placeholder="End date" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                @if ($errors->has('end_date')) <span class="help-block"> <strong>{{ $errors->first('end_date') }}</strong> </span> @endif
                            </div>
                        </div>

                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="{{__('Submit Milestone')}}">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection