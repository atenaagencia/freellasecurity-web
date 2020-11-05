@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('Add candidate card details')]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container"> @include('flash::message')
        <div class="row">
             @include('includes.company_dashboard_menu')
            <div class="col-md-8">
                <div class="userccount">
                    <div class="formpanel"> {!! Form::open(array('method' => 'post', 'route' => ['post.candidate.card'])) !!} 
                        <!-- Job Information -->
                        <h5>Card Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="formrow{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                
                                <input type="text" class="form-control" name="first_name" placeholder="Enter first name as on card">
                                     @if ($errors->has('first_name')) <span class="help-block"> <strong>{{ $errors->first('first_name') }}</strong> </span> @endif
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last name as on card">
                                     @if ($errors->has('last_name')) <span class="help-block"> <strong>{{ $errors->first('last_name') }}</strong> </span> @endif
                            </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="formrow{{ $errors->has('card_number') ? ' has-error' : '' }}">
                                    <input type="number" class="form-control" name="card_number" placeholder="Enter card number">
                                     @if ($errors->has('card_number')) <span class="help-block"> <strong>{{ $errors->first('card_number') }}</strong> </span> @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow{{ $errors->has('card_type') ? ' has-error' : '' }}">
                                   <select class="form-control" name="card_type">
                                       <option value="visa">visa</option>
                                       <option value="platinum">platinum</option>
                                   </select>
                                     @if ($errors->has('card_type')) <span class="help-block"> <strong>{{ $errors->first('card_type') }}</strong> </span> @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow{{ $errors->has('expire_year') ? ' has-error' : '' }}"> 
                                    <select class="form-control" name="expire_year">
                                       <option value="">Expire Year</option>
                                       <?php $now = date('Y');
                                              $last = date('Y') + 10;
                                        ?>
                                        @for ($i = $now; $i <= $last; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                   </select>
                                    @if ($errors->has('expire_year')) <span class="help-block"> <strong>{{ $errors->first('expire_year') }}</strong> </span> @endif
                                </div>
                            </div>
                            <input type="hidden" name="milestone_id" value="{{ $milestoneId }}">
                            <div class="col-md-6">
                                <div class="formrow{{ $errors->has('expire_month') ? ' has-error' : '' }}"> 
                                    <select class="form-control" name="expire_month">
                                       <option value="">Expire Month</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                   </select>
                                    @if ($errors->has('expire_month')) <span class="help-block"> <strong>{{ $errors->first('expire_month') }}</strong> </span> @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow{{ $errors->has('cvv') ? ' has-error' : '' }}">
                                <input type="number" class="form-control" name="cvv" placeholder="Enter cvv number">
                                @if ($errors->has('cvv')) <span class="help-block"> <strong>{{ $errors->first('cvv') }}</strong> </span> @endif
                            </div>
                            </div>
                        
                        </div>
                        <br>
                        <input type="submit" class="btn" value="{{__('Submit card details')}}">
                        {!! Form::close() !!} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
