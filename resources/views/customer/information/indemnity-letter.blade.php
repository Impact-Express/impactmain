@extends('customer.services.layout.service')
@section('title', "General Sanctions Warranty and Indemnity Letter")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/sanctions-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('indemnity-panel')
<div class="container">
    <h2 class="service-title">GENERAL SANCTIONS WARRANTY AND INDEMNITY LETTER – IMPACT EXPRESS</h2>
    <p class="service-text">
        If you are sending to any of the destinations below. You need to print, complete and sign a copy of the Indemnity Letter below.
    </p>
    <h2 class="service-title">
        LETTERS REQUIRED FOR:
    </h2>
    <ul class="service-list">
        <li>Iran</li>
        <li>Syria</li>
        <li>North Korea</li>
        <li>Sudan</li>
        <li>Crimea</li>
        <li>Cuba</li>
    </ul>
    <p class="service-text">
        <a href="/resources/DHL_express_indemnity_letter.pdf">Click here</a> to download the Indemnity Letter.
    </p>
    <p class="service-text">
        For more information contact us on <b>01753 683700</b>.
    </p>

    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
