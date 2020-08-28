@extends('customer.services.layout.service')
@section('title', "Dangerous Goods Service")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/Dangerous-goods.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">WHY SHOULD I SEND MY DANGEROUS GOODS WITH IMPACT EXPRESS?</h2>
    <ul class="service-list">
        <li>Fully trained dangerous goods staff</li>
        <li>Fully comply withIATA regulations</li>
        <li>Dry Ice and lithium batteries</li>
        <li>Competitive pricing for low and high volume shippers</li>
        <li>Book through our easy online booking system</li>
        <li>Unbeatable customer service</li>
    </ul>
    
    <h2 class="service-title">WHAT ARE OUR DANGEROUS GOODS SERVICES USED FOR?</h2>
    <p class="service-text">
        Many of our customers who wish to send mobile phones, tablets and laptops, trust our knowledge and experience. 
        Mobile phones, tablets and laptops all contain lithium ion batteries, which can become harmful if not packaged or advised 
        properly. As we are fully dangerous goods trained, we’ll advise you on how get your goods delivered.
    </p>
    <p class="service-text">
        Our service is also used to send shipments which are on dry ice, for more information, click here.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">HOW DO I GET A QUOTE?</h2>
    <p class="service-text">
        In the first instance it is best to call us on 01753 683700 and speak to our DG certified adviser. We can then discuss 
        what you need and advise you on packaging and the parcel process. We will need:
    </p>
    <ul class="service-list">
        <li>The weight of the parcel in kg</li>
        <li>The dimensions of the parcel in centimeters (length x width x height)</li>
    </ul>
    
    <h2 class="service-title">CAN I TRACK MY DANGEROUS GOODS?</h2>
    <p class="service-text">
        Yes, from the moment we have processed your shipment at our warehouse. Please note all Dangerous Goods must be sent to 
        our warehouse for inspection and quality control purposes. All shipment updates can be tracked via our online tracking portal.
    </p>
    <p class="service-text">
        *Please make yourself familiar with Impact Express’ prohibited items list, click here.
    </p>
    <br><br>
</div>
@endsection