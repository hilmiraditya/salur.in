@extends('public.layouts.master')
@section('masuk','active')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <br><br><br>
            <div class="panel panel-default"><div class="card h-100">
                <a href="/agency/login"><img class="card-img-top" src="{{ url('images/foto5.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">Login Majikan</h4>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/majikan/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/majikan/password/reset') }}">
                                    Lupa Password
                                </a>
                                <a class="btn btn-link" href="{{ url('majikan/register') }}">
                                    Registrasi
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>

@endsection
