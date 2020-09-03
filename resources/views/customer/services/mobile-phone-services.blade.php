@extends('customer.services.layout.service')
@section('title', "Mobile Phone International Shipping Services")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/mobile-phone-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">MOBILE PHONE INTERNATIONAL SHIPPING</h2>
    <p class="service-text">
        At Impact Express we are one of few couriers that have the ability to send mobile phones. We are authorised to 
        send dangerous goods such as lithium ion batteries found in all modern mobile phones. We can ship mobile phones 
        to over 220 countries worldwide destinations such as <b>America, Canada, Australia, and Europe</b>. You can find 
        specific information on select countries, India, Philippines, China, and Thailand.
    </p>
    <p class="service-text">
        Currently there is no services available for sending mobile phones to Pakistan due to local customs restrictions. 
        (effective May 2020)
    </p>
    <p class="service-text">
        <b>*Please note – check emails for DHL airway bill labels and airway tracking numbers, we will 
        always email them to you when shipment booking is complete. You will need a access to a printer, this will enable 
        you to print your airway bill label.</b>
    </p>
    <br>
    <h2 class="service-text">HOW SHOULD I PACKAGE MY PHONE?</h2>
    <ul class="service-list">
        <li>Wrap each item within the package individually</li>
        <li>Use bubble wrap or foam to ensure the phone doesn’t move around in the box</li>
        <li>Ideally, use a brand new corrugated cardboard box</li>
        <li>Fasten with strong tape around the joins and flaps</li>
        <li>Ensure the address is clearly visible and that any relevant customs documentation is attached</li>
    </ul>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-text"></h2>
    <ul class="service-list">
        <li>Wrap each item within the package individually</li>
        <li>Use bubble wrap or foam to ensure the phone doesn’t move around in the box</li>
        <li>Ideally, use a brand new corrugated cardboard box</li>
        <li>Fasten with strong tape around the joins and flaps</li>
        <li>Ensure the address is clearly visible and that any relevant customs documentation is attached</li>
    </ul>
    <br><br>
</div>
@endsection