@extends('layout')

@section('content')
<div class="row">
    <div class="col s12 m10 l8 offset-m1 offset-l2">
        <span class="flow-text">Register</span>
        <div class="divider"></div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                  <label for="name">Name</label>
                    @if ($errors->has('name'))
                        <span class="red-text">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email">E-mail Address</label>
                    @if ($errors->has('email'))
                        <div class="col s12">
                            <span class="red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                    <label>Confirm Password</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light">Register</button>
                        <p>
                            <a class="" href="{{ url('/login') }}">Have an account?</a>
                        </p>
                    </div>
                </form>
            </div>
    </div>
@endsection
