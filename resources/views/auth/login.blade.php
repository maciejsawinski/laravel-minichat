@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <p class="title is-4">{{ __('Login') }}</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <label class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input id="email" name="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="icon is-small is-right">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            @endif
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label class="label">{{ __('Password') }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="password" name="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" required>
                            @if ($errors->has('password'))
                                <span class="icon is-small is-right">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            @endif
                        </div>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary">{{ __('Login') }}</button>
                        </div>
                        <div class="control">
                            <a class="button is-text" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        <div class="control">
                            <a class="button is-text" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
