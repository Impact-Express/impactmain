@extends('customer.services.layout.service')
@section('title', "UK Overnight Parcel Delivery")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/UK-overnight.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">UK OVERNIGHT DELIVERY SERVICE</h2>
    <p class="service-text">
        Impact Express UK overnight services guarantees delivery by the end of the next working day throughout the United Kingdom and Northern Ireland. 
        We offer a high quality and dependable service that you can rely on, including:
    </p>
    <ul class="service-list">
        <li>Time sensitive shipping</li>
        <li>Third party collection available</li>
        <li>Real-time tracking available</li>
        <li>Special pre 9am and pre 12am delivery service available</li>
        <li>Packages can be dropped to our Heathrow depot as late as 7:30 pm for next day delivery</li>
    </ul>
</div>
<div class="container">
    <h2 class="service-title">HOW DO I GET A PRICE FROM IMPACT EXPRESS?</h2>
    <p class="service-text">
        You have the option to call us direct or set up an account and log in to our quote engine, for both options you will need the following information:
    </p>
    <ul class="service-list">
        <li>The contents of the parcel</li>
        <li>The weight of the parcel in kg</li>
        <li>The dimension of the parcel in cm (height x width x length)</li>
    </ul>
    <p class="service-text">
        Both these options will then give you instant quotes and the option to put the shipment on your credit account or pay in full using our Sage pay system to pay by credit card or debit card.
    </p>
    <br>
</div>
@endsection
@section('faq')
<div class="tab">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
        <button class="tablink hover-light-grey bottombar" id="guides" href="javascript:void(0)">Guides</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">What Service is best for you?</h2>
            <p>Choosing from one of DHL's Service Points is the most popular service we provide.</p>
            <p>You can locate your nearest point, by clicking <a href="https://parcel.dhl.co.uk/dhl-service-point/find-your-nearest/">here.</a></p>
            <br>
            <p>
                If you would like to arrange a DHL courier to pick up your parcel, we can help arrange it online and over the phone.
                Whether it's your home address or work address, we'll pick it up.
            </p>
            <p>
                Dropping your parcel off to Impact HQ isn't unheard of. If you find yourself near us, you can hand it over to us,
                we'll then dispatch it to DHL
            </p>
            <br>
            <h2 class="toUpper">What do i Need?</h2>
            <p>
                You will need to have access to a printer, as you will have to print your unique shipping label.
                The next step would be to ensure your parcel/documents are safely packaged. <br>
                Lastly you will need to attach the label to the outer most packaging. If you require any guidance on this,
                click here as we have put together a step by step guide.
            </p>
        </div>
        <div id="Guides" class="tabcontent" style="display:none;">
            <h2 class="toUpper">Guide 1</h2>
            <p>Lorem Ipsum</p>
            <p>YLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.</p>
            <br>
            <p>
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum
            </p>
            <p>
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
            </p>
            <br>
            <h2 class="toUpper">Guide 2</h2>
            <p>
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
            </p>
        </div>
    </div>
</div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">WHY SHOULD I USE IMPACT EXPRESS?</h2>
    <ul class="service-list">
        <li>Competitive pricing for both low and high volume shippers</li>
        <li>Using our online booking system you can book, pay for and track all your shipments</li>
        <li>Unbeatable customer service as we deal with all issues on your behalf, therefore, saving you hours on the phone with the carriers customer service team</li>
        <li>All parcels are fully trackable via our online tracking page</li>
    </ul>
    <br>
</div>
<div class="container">
    <h2 class="service-title">CAN I TRACK MY PARCELS?</h2>
    <p class="service-text">
        Once the driver has collected your parcel you will be able to track it on its journey from your home or office right up to the point of delivery.
    </p>
</div>
@endsection