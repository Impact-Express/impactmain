@extends('customer.services.layout.service')
@section('title', "Impact Express GDPR Policy")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/gdpr-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('gdpr-panel')
<div class="container">
    <h2 class="service-title">IMPACT EXPRESS GDPR POLICY</h2>
    <p class="service-text">
        Your privacy and data means a lot to us at Impact Express. We have updated our GDPR policy in accordance with 
        2018 guidelines and our internal data processes and systems to ensure they are in accordance with EU law.
    </p>
    <h2 class="service-title">REGULATIONS AND GUIDES:</h2>
    <ul class="service-list">
        <ul>
            <li>Security</li>
            <li>Protection of personal data and</li>
        </ul>
        <li>How we use personal data</li>
        <li>How we store personal data</li>
        <li>Who has access to personal data</li>
    </ul>
    <h2 class="service-title">WE HAVE EXPANDED RIGHTS UNDER:</h2>
    <ul class="service-list">
        <ul>
            <li>Right to be forgotten</li>
            <li>User passwords</li>
            <li>Extended tracking</li>
            <li>Right of access</li>
            <li>Opt-in verification</li>
        </ul>
        <li>Deleting Data</li>
    </ul>

    <p class="service-text">
        <a href="/resources/GDPR-POLICY-2018.pdf">Click here</a> for the full Impact Express GDPR.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection