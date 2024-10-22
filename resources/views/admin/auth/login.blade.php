@extends('customer.layouts.master')
@section('title', 'Login')
@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/auth.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="login-container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
            <div class="card-body">
                {{ Form::open(['method' => 'post', 'url' => route('login')]) }}
                    {{ Form::token() }}
                    <div class="row"> 
                        {{-- $errors->has('email') ? ' has-error' : '' --}}
                        {{-- $errors->has('password') ? ' has-error' : '' --}}
                        {{ Form::email('email','',['class' => "form-email", 'id' => 'email','placeholder' => 'Email Address', 'autofocus']) }}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        {{ Form::password('password', ['class' => 'form-text', 'id' => 'password','placeholder' => 'Password']) }}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <label class="form-checkbox">
                            {{ Form::checkbox('rememberMe', '', false, ['class' => 'form-checkbox','id' => 'remember-me']) }}
                            <span class="auth-remember-text">Remember Me</span>
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
