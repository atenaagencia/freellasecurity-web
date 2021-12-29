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

<section class="py-5 text-cemter" style="background: url('https://images.pexels.com/photos/4064835/pexels-photo-4064835.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')no-repeat fixed center center; background-size: cover">
    <div class="container py-5">
        {{-- <h1 class="text-dark text-center pt-3">Login Page</h1> --}}
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="container bg-light">
                @include('flash::message')
                <ul class="nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">
                    <?php
                        $c_or_e = old('candidate_or_employer', 'candidate');
                        ?>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link {{($c_or_e == 'candidate')? 'active':''}} text-center h4" id="candidate-tab" data-toggle="pill" href="#candidate" role="tab" aria-controls="candidate" aria-selected="true">Candidato</a>
                    </li>
                    <li class="nav-item col-6 d-block">
                        <a class="nav-link {{($c_or_e == 'employer')? 'active':''}} text-center h4" id="employer-tab" data-toggle="pill" href="#employer" role="tab" aria-controls="employer" aria-selected="false">Empresa</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div id="candidate" class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                        <!-- login form --> 
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="candidate_or_employer" value="candidate" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Área do candidato</h3>
                                <hr class="col-6">
                                {{-- <div class="container text-center">
                                    <h5>{{__('Login with Social')}}</h5>
                                    <a href="{{ url('login/jobseeker/facebook')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{ url('login/jobseeker/twitter')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a>
                                </div> --}}

                                <div class="mt-2 py-3 formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('Informe e-mail')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="{{__('Senha')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="{{__('Login')}}"><h4>Acessar</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="">{{__('Novo por aqui')}}? <a class="font-weight-bold text-primary" href="{{route('register')}}">{{__('Registre-se')}}</a></div>
                            <div class="">{{__('Esqueceu sua senha?')}}? <a class="font-weight-bold text-primary" href="{{ route('password.request') }}">{{__('Clique aqui')}}</a></div>
                        </div>
                    </div><!--end of candidate's tab-->
                    <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                        <!-- login employer form --> 
                        <form class="form-horizontal" method="POST" action="{{ route('company.login') }}">
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="candidate_or_employer" value="employer" />
                            
                            <div class="container bg-transparent border-0 pb-0">
                                <h3 class="text-center">Área da empresa</h3>
                                <hr class="col-6">
                                {{-- <div class="container text-center">
                                    <h5>{{__('Login with Social')}}</h5>
                                    <a href="{{ url('login/employer/facebook')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a>
                                    <a href="{{ url('login/employer/twitter')}}" class="p-2 m-2 btn btn-outline-dark rounded"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a>
                                </div> --}}

                                <div class="mt-2 py-3 formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control col-10 mx-auto" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('E-mail')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control col-10 mx-auto" name="password" value="" required placeholder="{{__('Senha')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>            
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-block py-3 col-10 mx-auto btn-dark" value="{{__('Login')}}"><h4>Acessar</h4></button>
                                </div>
                            </div>
                        </form>
                        <!-- login employer form  end-->
                        <div class="container text-center pt-1 pb-4">
                            <div class="">{{__('Novo por aqui')}}? <a class="font-weight-bold text-primary" href="{{route('register')}}">{{__('Registre-se')}}</a></div>
                            <div class="">{{__('Esqueceu sua senha')}}? <a class="font-weight-bold text-primary" href="{{ route('company.password.request') }}">{{__('Clique Aqui')}}</a></div>
                        </div>
                    </div>
                </div>

            </div><!--main container-->
        </div>
    </div><br>
</section>

@endsection
