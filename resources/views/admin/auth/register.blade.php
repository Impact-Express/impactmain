@extends('customer.layouts.master')

@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/auth.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="create-user">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Create a user') }}</div>
            <div class="card-body">
                {{ Form::open(['method' => 'post', 'url' => route('register')]) }}
                    {{ Form::token() }}
                    <div class="row">
                        {{ Form::text('name','',['class' => 'form-text', 'id' => 'username','placeholder' => 'Username', 'autofocus']) }}
                    </div>
                    <div class="row">
                        {{ Form::email('email','',['class' => 'form-email', 'id' => 'email','placeholder' => 'Email Address']) }}
                    </div>
                    <div class="row">
                        {{ Form::password('password', ['class' => 'form-text', 'id' => 'password','placeholder' => 'Password']) }}
                    </div>
                    <div class="row">
                        {{ Form::password('password_confirmation', ['required', 'class' => 'form-text', 'id' => 'password-confirm','placeholder' => 'Confirm Password']) }}
                    </div>
                    <div class="row">
                        {{ Form::submit('Create user', ['id' => 'login-button','class' => 'button-main']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
