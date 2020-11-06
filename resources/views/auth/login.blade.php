@extends('layouts.custom')

<style>
.nav-pills .nav-link, .nav-pills .nav-link {
    background: #eee;
    color: black !important;
}
.nav-pills .nav-link.active, .nav-pills .nav-link {
    padding: 1rem !important;
    color: white;
}
.tab-pane {
    border: 0 !important;
}
</style>
@section('content')

<!-- Masthead-->
<header class="p-2" style="background: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-repeat: no-repeat;background-attachment: scroll;background-position: center center;background-size: cover; padding-top: 15rem !important;">
    <div class="container mx-auto">
        <h1 class="text-light pb-5">Login Page</h1>
    </div>
</header>

<section class="py-5 bg-secondary-custom text-cemter">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="container bg-light">
                @include('flash::message')
                <ul class="nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">
                    <?php $c_or_e = old('candidate_or_employer', 'candidate'); ?>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link {{($c_or_e == 'candidate')? 'active':''}} text-center h4" id="candidate-tab" data-toggle="pill" href="#candidate" role="tab" aria-controls="candidate" aria-selected="true">Candidate</a>
                    </li>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link {{($c_or_e == 'employer')? 'active':''}} text-center h4" id="employer-tab" data-toggle="pill" href="#employer" role="tab" aria-controls="employer" aria-selected="false">Employer</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div id="candidate" class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                        <!-- login form --> 
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="candidate_or_employer" value="candidate" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Candidate Area</h3>
                                <hr class="col-6">
                                <div class="container text-center">
                                    <h5>{{__('Login with Social')}}</h5>
                                    <a href="{{ url('login/jobseeker/facebook')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{ url('login/jobseeker/twitter')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a>
                                </div>

                                <div class="mt-2 py-3 formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('Email Address')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="{{__('Password')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="{{__('Login')}}"><h4>Login</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="">{{__('New User')}}? <a class="font-weight-bold text-primary" href="{{route('register')}}">{{__('Register Here')}}</a></div>
                            <div class="">{{__('Forgot Your Password')}}? <a class="font-weight-bold text-primary" href="{{ route('password.request') }}">{{__('Click here')}}</a></div>
                        </div>
                    </div><!--end of candidate's tab-->
                    <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                        <!-- login employer form --> 
                        <form class="form-horizontal" method="POST" action="{{ route('company.login') }}">
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="candidate_or_employer" value="employer" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Employer Area</h3>
                                <hr class="col-6">
                                <div class="container text-center">
                                    <h5>{{__('Login with Social')}}</h5>
                                    <a href="{{ url('login/employer/facebook')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{ url('login/employer/twitter')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a>
                                </div>

                                <div class="mt-2 py-3 formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('Email Address')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="{{__('Password')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="{{__('Login')}}"><h4>Login</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login employer form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="">{{__('New User')}}? <a class="font-weight-bold text-primary" href="{{route('register')}}">{{__('Register Here')}}</a></div>
                            <div class="">{{__('Forgot Your Password')}}? <a class="font-weight-bold text-primary" href="{{ route('company.password.request') }}">{{__('Click here')}}</a></div>
                        </div>
                    </div>
                </div>

            </div><!--main container-->
        </div>
    </div>
</section>

@endsection
