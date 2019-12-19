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
            <form class="create-account-form" method="POST" action="/quote">
                @csrf
                <div class="form-group">
                    <input class="form-text" type="text" name="Company Name" id="quote-company-name" placeholder="Company Name">
                    <input class="form-text" type="text" name="Contact Name" id="quote-contact-name" placeholder="Contact Name">
                    <input class="form-text" type="text" name="Contact Surname" id="quote-contact-surname" placeholder="Contact Surname">
                </div>
                <div class="form-group">
                    <input class="form-email" type="email" name="Email Address" id="quote-email-address" placeholder="Email Address">
                    <input class="form-number" type="tel" name="Telephone Number" id="quote-telephone-number" placeholder="Telephone Number">
                </div>
                <div class="form-group">
                    <input class="form-text" type="text" name="Delivery Destination(s)" id="quote-delivery-destinations" placeholder="Delivery Destination(s)">
                    <input class="form-number" type="number" name="Parcels/m" id="quote-parcels-sent-per-month" placeholder="Parcels Sent Per Month">
                </div>
                <div class="form-group">
                    <textarea class="form-textarea" name="Comments" id="quote-comments" placeholder="Comments"></textarea>
                </div>
                <input type="checkbox" class="form-checkbox" name="Accept T&Cs" id="quote-terms-conditions"> I have read and agree to the <a href="">Terms and Conditions </a>set out by Impact Express.
                <input type="submit" class="form-submit" value="Submit Form">
            </form>
        </div>
    </section>

@endsection