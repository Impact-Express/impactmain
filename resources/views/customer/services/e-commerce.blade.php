@extends('customer.services.layout.service')
@section('title', "E-Commerce Shipping Service")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/ecommerce.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">E-COMMERCE</h2><br>
    <h4 class="service-text">Ecommerce Booking options</h4>
    <ul class="service-list">
        <li>Create Labels online at impactexpress.co.uk</li>
        <li>Book online at our courier portal and print carrier labels</li>
        <li>Drop your shipments to your local DHL or FedEx depots</li>
        <li>Alternatively arrange a daily or ad-hoc collection service</li>
        <li>Integration options available for high volume retailers</li>
    </ul>
    
    <h4 class="service-title">Connecting Global Markets</h4>
    <p class="service-text">
        Connecting UK retailers to over 220 destinations across the globe. Our comprehensive Express delivery service 
        offers retailers an affordable fully tracked delivery option which provides higher services levels closing the 
        gap between customer expectation and retailer demands.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <br><br><br>
    <h4 class="service-text">How We can Help</h4>
    <ul class="service-list">
        <li>Impact Express has unrivalled expertise in the global delivery industry, ensuring e-commerce delivery 
            expectations are met every time.
        </li>
        <li>We connect your business to new, international markets across the world.</li>
        <li>Impact Express make global parcel delivery as accessible and easy to understand as domestic delivery services.</li>
        <li>With no caps or restrictions on shipping destinations, no minimum number of shipments to keep a rate with us.
            We always strive to give the most competitive and affordable rates
        </li>
    </ul>
    <p class="service-text">
        If you need a quote on a specific destination, email  sales@impactexpress.co.uk, visit our contact page or give us a call on <b>01753 683700</b>.
    </p>
    <br><br>
</div>
@endsection