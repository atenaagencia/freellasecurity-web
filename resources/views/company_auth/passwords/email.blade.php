@extends('layouts.custom')
@section('content')

<section class="py-5 text-cemter bg-dark">
    <div class="container py-5">
        <h1 class="text-light text-center pt-3">Resetar Senha Empresa</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-11 mx-auto pb-3">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('company.password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{__('Informe e-mail cadastrado')}}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark">
                                    {{__('Receber link de redefinição de senha')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--col-->
    </div>
</section>

@endsection
