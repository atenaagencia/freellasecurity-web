@extends('admin.layouts.login_layout')
@section('content')
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <h3 class="font-green">Resetar Senha</h3>
        @if ($errors->has('email'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{ $errors->first('email') }}</span>
        </div>
        @endif
        @if ($errors->has('password'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{ $errors->first('password') }}</span>
        </div>
        @endif
        @if ($errors->has('password_confirmation'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{ $errors->first('password_confirmation') }}</span>
        </div>
        @endif        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">E-Mail</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Cadastrado" name="email" value="{{ old('email', $email) }}" />                   
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Senha</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Senha" name="password" />  
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Confirme Senha</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirme Senha" name="password_confirmation" />  
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase pull-right">Resetar Senha</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>
@endsection