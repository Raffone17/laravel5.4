@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit</div>
                <div class="panel-body">
                  {!! Form::model($user, ['route' => ['user.update', $user->id], 'method'=>'PUT']) !!}
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-4 control-label">Name</label>

                      <div class="col-md-6" >
                          <!--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--->
                          {!! Form::text('name') !!}
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                      <label for="role" class="col-md-4 control-label">Ruolo</label>

                      <div class="col-md-6" >
                  
                          {!! Form::text('role') !!}
                          @if ($errors->has('role'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('role') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                      <div class="col-md-6" >

                          {!! Form::email('email') !!}
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
                          {!! Form::password('password') !!}
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
                        {!! Form::password('password_confirmation') !!}
                      </div>
                  </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <!--<button type="submit" class="btn btn-primary">
                                  Register
                              </button>-->
                              {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    <!--</form>-->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
