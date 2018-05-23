@extends('layouts.app')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br>
            <div class="panel panel-default">
                <h3 class="panel-heading">Register</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <br><br><br>
            <div class="panel panel-default">
                <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title" align="center">Register</h3>
                  <br>
                    <div class="panel-body">
                    

                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                              <div class="form-group">                                
                                <label for="password-confirm" class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-12">
                                    <select class="custom-select" name="kelamin" required="">
                                      <option selected=""></option>
                                      <option value="Pria">Pria</option>
                                      <option value="Wanita">Wanita</option>
                                    </select>                                    
                                </div>
                              </div>

                            <div class="form-group form-inline" style="margin: 2rem auto 2rem 1rem">
                                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="M" checked="">
                                    <label class="custom-control-label" for="customRadio1">Majikan</label>
                                </div>
                                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="P">
                                    <label class="custom-control-label" for="customRadio2">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="A">
                                    <label class="custom-control-label" for="customRadio3">Agency</label>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
