@extends('layouts.custom')

@section('content')

<!-- Masthead-->
<header class="p-5" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light py-2">Report Abuse</h1>
    </div>
</header>

<!-- Page Title End -->
<section class="bg-secondary-custom p-5">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-md-8 bg-white p-3 py-4 mx-auto">
                <div class="userccount"> {!! Form::open(array('method' => 'post', 'route' => ['report.abuse.company', $slug])) !!}
                    <div class="formpanel"> 
                        <!-- Ad Information -->
                        <h3 class="font-weight-bold py-4">{{__('Report Abuse')}}</h3>            
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="formrow{{ $errors->has('listing_url') ? ' has-error' : '' }}">
                                    {!! Form::text('company_url', route('company.detail', $slug), array('class'=>'form-control', 'id'=>'company_url', 'placeholder'=>__('URL'), 'required'=>'required', 'readonly'=>'readonly')) !!}                
                                    @if ($errors->has('company_url')) <span class="help-block"> <strong>{{ $errors->first('company_url') }}</strong> </span> @endif </div>
                            </div>                            
                            <div class="col-md-12 py-3">
                                <div class="formrow{{ $errors->has('your_name') ? ' has-error' : '' }}">
                                    <?php
                                    $your_name = (Auth::check()) ? Auth::user()->name : '';
                                    ?>
                                    {!! Form::text('your_name', $your_name, array('class'=>'form-control', 'id'=>'your_name', 'placeholder'=>__('Your Name'), 'required'=>'required')) !!}                
                                    @if ($errors->has('your_name')) <span class="help-block"> <strong>{{ $errors->first('your_name') }}</strong> </span> @endif </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow{{ $errors->has('your_email') ? ' has-error' : '' }}">
                                    <?php
                                    $your_email = (Auth::check()) ? Auth::user()->email : '';
                                    ?>
                                    {!! Form::text('your_email', $your_email, array('class'=>'form-control', 'id'=>'your_email', 'placeholder'=>__('Your Email'), 'required'=>'required')) !!}                
                                    @if ($errors->has('your_email')) <span class="help-block"> <strong>{{ $errors->first('your_email') }}</strong> </span> @endif </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="formrow{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    {!! app('captcha')->display() !!}
                                    @if ($errors->has('g-recaptcha-response')) <span class="help-block"> <strong>{{ $errors->first('g-recaptcha-response') }}</strong> </span> @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" id="post_ad_btn" class="btn btn-lg btn-danger" value="{{__('Report')}}">Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection