@extends('layouts.master')

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
            <form class="create-account-form" method="POST" action="{{url('quote/send')}}">
                @csrf
                <div class="form-group">
                    <input class="form-text" type="text" name="companyName" id="quote-company-name" placeholder="Company Name" required>
                    <input class="form-text" type="text" name="contactName" id="quote-contact-name" placeholder="Contact Name" required>
                    <input class="form-text" type="text" name="contactSurname" id="quote-contact-surname" placeholder="Contact Surname" required>
                </div>
                <div class="form-group">
                    <input class="form-email" type="email" name="emailAddress" id="quote-email-address" placeholder="Email Address" required>
                    <input class="form-number" type="tel" name="telephoneNumber" id="quote-telephone-number" placeholder="Telephone Number" required>
                </div>
                <div class="form-group">
                    <input class="form-text" type="text" name="deliveryDestinations" id="quote-delivery-destinations" placeholder="Delivery Destination(s)" required>
                    <input class="form-number" type="number" name="parcelsPerMonth" id="quote-parcels-sent-per-month" placeholder="Parcels Sent Per Month" required>
                </div>
                <div class="form-group">
                    <textarea class="form-textarea" name="comments" id="quote-comments" placeholder="Comments"></textarea>
                </div>
                <label class="form-checkbox">
                    <input type="checkbox" class="form-checkbox" name="acceptTcs" id="quote-terms-conditions" required>
                    <span class="create-account-tcs-text">I have read and agree to the <a class="create-account-tcs-link" href="#">Terms and Conditions </a>set out by Impact Express.</span>
                </label>
                <input type="submit" class="form-submit" value="Submit Form">
            </form>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <span class="closebtn">&times;</span>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </section>

@endsection
