@extends('customer.layouts.master')

@section('title', 'Business Quote')
@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/businessquote.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="quote-login">
        <div class="caret-quote"></div>
            <div class="login-box">
                <h3 class="login-box-title">
                        <b class="login-box-title-bold">business</b>
                        quote
                </h3>
                <p class="login-box-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam.
                </p>
                <p class="login-text">ALREADY HAVE A BUSINESS ACCOUNT?</p>
                <a href="#" class="login-button button-alt">Login</a>
            </div>
    </section>
    <section class="create-account">
        <div class="create-account-box">
            <h3 class="create-account-box-title">Create a Business Account or Request a Business Quote</h3>
            <p class="create-account-box-text">Please fill out the form and a member of our expert team will be in touch:</p>
            {{ Form::open(['class' => 'create-account-form', 'url' => '/quote']) }}
                {{ Form::token() }}
                <div class="form-group">
                    {{ Form::text('companyName', null , ['required', 'class' => 'form-text','id' => 'quote-company-name','placeholder' => 'Company Name','tabindex' => '1']) }}
                    {{ Form::text('contactName', null , ['required', 'class' => 'form-text','id' => 'quote-contact-name','placeholder' => 'Contact Name','tabindex' => '2']) }}
                    {{ Form::text('contactSurname', null , ['required', 'class' => 'form-text','id' => 'quote-contact-surname','placeholder' => 'Contact Surname','tabindex' => '3']) }}
                </div>
                <div class="form-group">
                    {{ Form::email('emailAddress', null , ['required', 'class' => 'form-email','id' => 'quote-email-address','placeholder' => 'Email Address','tabindex' => '4']) }}
                    {{ Form::tel('telephoneNumber', null , ['required', 'class' => 'form-email','id' => 'quote-telephone-number','placeholder' => 'Telephone Number','tabindex' => '5']) }}
                </div>
                <div class="form-group">
                    {{ Form::text('deliveryDestinations', null , ['required', 'class' => 'form-text','id' => 'quote-delivery-destinations','placeholder' => 'Delivery Destination(s)','tabindex' => '6']) }}
                    {{ Form::number('parcelsPerMonth', null , ['required', 'class' => 'form-text','id' => 'quote-parcels-sent-per-month','placeholder' => 'Parcels Sent Per Month','tabindex' => '7']) }}
                </div>
                <div class="form-group">
                    {{ Form::textarea('comments', null , ['required', 'class' => 'form-textarea','id' => 'quote-comments','placeholder' => 'Comments','tabindex' => '8']) }}
                </div>
                <label class="form-checkbox">
                    {{ Form::checkbox('acceptTcs', '', false, ['required', 'class' => 'form-checkbox','id' => 'quote-terms-conditions','placeholder' => 'Comments','tabindex' => '9']) }}
                    <span class="create-account-tcs-text">I have read and agree to the <a class="create-account-tcs-link" href="#">Terms and Conditions </a>set out by Impact Express.</span>
                </label>
                {{ Form::submit('Submit Form',['class' => 'form-submit', 'tabindex' => '10']) }}
            {{ Form::close() }}

        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <span class="closebtn">&times;</span>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    </section>

@endsection
