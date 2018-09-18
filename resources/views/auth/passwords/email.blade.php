@extends('layouts.app')

@section('title', 'Reset password')

@section('content')
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <p class="title is-4">{{ __('Reset Password') }}</p>
                @if (session('status'))
                    <article class="message is-success">
                        <div class="message-body">
                            {{ session('status') }}
                        </div>
                    </article>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
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
                    <br>
                    <div class="control">
                        <button class="button is-primary">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
