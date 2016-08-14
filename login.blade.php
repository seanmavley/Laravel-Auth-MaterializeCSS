@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m10 l8 offset-m1 offset-l2">
            <div class="flow-text">Login</div>
            <div class="divider"></div>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
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

                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <p class="col s12">
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember">Remember Me</label>
                </p>

                <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light">Login</button>
                    <p>
                        <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
