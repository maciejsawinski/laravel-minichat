@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <p class="title is-4">{{ __('Register') }}</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                        <label class="label">{{ __('Username') }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <input id="name" name="name" class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" value="{{ old('name') }} " required autofocus>
                            @if ($errors->has('name'))
                                <span class="icon is-small is-right">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            @endif
                        </div>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
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
                        <label class="label">{{ __('Confirm Password') }}</label>
                        <div class="control has-icons-left">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="password-confirm" name="password_confirmation" class="input" type="password" required>
                        </div>
                    </div>
                    <br>
                    <div class="control">
                        <button class="button is-primary">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
