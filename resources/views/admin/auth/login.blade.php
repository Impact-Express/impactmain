@extends('customer.layouts.master')
@section('title', 'Login')
@section('content')
<div class="login-container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
            <div class="card-body">
                {{ Form::open(['method' => 'post', 'url' => route('login')]) }}
                    {{ Form::token() }}
                    <div class="row">
                        {{ Form::email('email','',['class' => 'form-email', 'id' => 'email','placeholder' => 'Email Address', 'autofocus']) }}
                    </div>
                    <div class="row">
                        {{ Form::password('password', ['class' => 'form-text', 'id' => 'password','placeholder' => 'Password']) }}
                    </div>
                    <div class="row">
                        <label class="form-checkbox">
                            {{ Form::checkbox('rememberMe', '', false, ['class' => 'form-checkbox','id' => 'remember-me']) }}
                            <span class="create-account-tcs-text">Remember Me</span>
                        </label>
                    </div>
                    <div class="row">
                        {{ Form::submit('Login', ['id' => 'login-button','class' => 'button-main']) }}
                    </div>
                    @if (Route::has('password.request'))
                    <a class="button-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
