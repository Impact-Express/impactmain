@extends('customer.layouts.master')
@section('title', 'Reset Password')
@section('content')
<div class="login-container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Reset password') }}</div>
            <div class="card-body">
                {{ Form::open(['method' => 'post', 'url' => route('password.update')]) }}
                    {{ Form::token() }}
                    {{ Form::hidden('token',"$token")}}
                    <div class="row">
                        {{ Form::email('email',"$email",['class' => 'form-email', 'id' => 'email','placeholder' => 'Email Address', 'autofocus']) }}
                    </div>
                    <div class="row">
                        {{ Form::password('password', ['class' => 'form-text', 'id' => 'password','placeholder' => 'Password']) }}
                    </div>
                    <div class="row">
                        {{ Form::password('password_confirmation', ['required', 'autocomplete' => 'new-password','class' => 'form-text', 'id' => 'password-confirm','placeholder' => 'Confirm Password']) }}
                    </div>
                    <div class="row">
                        {{ Form::submit('Reset Password', ['id' => 'login-button','class' => 'button-main']) }}
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
