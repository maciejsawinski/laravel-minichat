@extends('layouts.app')

@section('title', 'Chat')

@section('navbar')
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
@endsection

@section('content')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Chat
                </h1>
            </div>
        </div>
    </section>
    <br>
    <div id="app">
        <chat-messages :messages="messages"></chat-messages>
        <footer class="footer has-background-light">
            <div class="content has-text-centered">
                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
            </div>
        </footer>
    </div>
@endsection