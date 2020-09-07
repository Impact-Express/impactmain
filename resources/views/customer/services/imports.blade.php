@extends('customer.services.layout.service')
@section('title', "Worldwide Parcel Import Service")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/worldwide-imports.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">WORLDWIDE PARCEL IMPORT SERVICE – IMPACT EXPRESS</h2>
    <p class="service-text">
        We monitor the whole process for you from arranging the collection, 
        tracking its journey and ensuring its safe delivery back to the UK usually by the end of the next working day.
    </p>
    <p class="service-text">
        Our worldwide import service provides a tailor-made solution to ensuring your import and third country shipment 
        delivery is completed with the minimal amount of fuss. The import services include:
    </p>
    <ul class="service-list">
        <li>Your labels will be sent via email as a pdf to be attached to the incoming parcel</li>
        <li>A driver will be booked to collect the parcel</li>
        <li>Import service is a fully tracked DHL service</li>
        <li>The import service is available from over 220 countries worldwide</li>
    </ul>
</div>
<div class="container">
    <h2 class="service-title">WHY SHOULD I USE IMPACT EXPRESS FOR MY IMPORTS?</h2>
    <ul class="service-list">
        <li>Competitive prices</li>
        <li>Reliable service with full DHL Tracking</li>
        <li>Unbeatable customer service</li>
        <li>Easy to navigate website</li>
        <li>Simple parcel tracking options via our website</li>
        <li>Authorised DHL partner</li>
        <li>Ship worldwide</li>
        <li>Multiple delivery points</li>
    </ul>
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
    <h2 class="service-title">WHAT INFORMATION DOES IMPACT EXPRESS NEED TO QUOTE ON IMPORTS?</h2>
    <ul class="service-list">
        <li>Parcel collection country and postcode</li>
        <li>The parcel weight in kg</li>
        <li>The parcels dimensions in cm (height x width x length)</li>
    </ul>
</div>
<div class="container">
    <h2 class="service-title">CAN I TRACK MY IMPORT?</h2>
    <p class="service-text">
        Full tracking updates of all parcels are available on our website.
    </p>
    <p class="service-text">
        If you have any questions about the service or need an import quotation call us direct on <b>01753 683700</b>.
    </p>
    <br>
    <p class="service-text">
        <a class="button-main" href="imports/import-request">Request An Import</a>
    </p>
</div>
@endsection