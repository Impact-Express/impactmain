@extends('customer.services.layout.service')
@section('title', "Express Parcel Delivery")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('express-image')
@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">{{ $page->title }}</h2>
    <div class="service-description">
        {!! $page->body_html !!}
    </div>
    <p class="service-text">
        Fully tracked Integrator based Global delivery solution.
    </p>
    <ul class="service-list">
        <li>Full tracked Delivery to over 220 countries</li>
        <li>Parcel Tracking personalised tracking portal to reduce customer queries</li>
        <li>Send direct notifications to customers</li>
    </ul>

    <p class="service-text">
        Site integration – Seamless integration process, we can plug our system into your website and set you up without any fuss.
        Our smart shipping APIs allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
    </p>
    <ul class="service-list">
        <li>USA – Next day delivery service</li>
        <li>Australia (2 working days)</li>
        <li>Asia (2 working days)</li>
        <li>Europe (Next day, AM,  for central Europe)</li>
    </ul>
    <p class="service-text">*All transit times are subject to customs clearance</p>
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
@section('infographic')
<h2 class="service-infogfx-text" style="margin-top: 193px;">How It Works</h2>
    <div class="express-infogfx">
        <img src="{{ $page->image_url }}" alt="">
    </div>
@endsection
@section('destinations-boxes')
    <div class="box">
        <div class="destination destination1">
        </div>
    </div>
    <div class="box">
        <div class="destination destination2">
        </div>
    </div>
    <div class="box">
        <div class="destination destination3">
        </div>
    </div>
    <div class="box">
        <div class="destination destination4">
        </div>
    </div>
@endsection