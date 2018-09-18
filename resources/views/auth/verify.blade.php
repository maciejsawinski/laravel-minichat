@extends('layouts.app')

@section('title', 'Verify Email Address')

@section('content')
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <p class="title is-4">{{ __('Verify Your Email Address') }}</p>
                @if (session('resent'))
                    <article class="message is-success">
                        <div class="message-body">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    </article>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
@endsection
