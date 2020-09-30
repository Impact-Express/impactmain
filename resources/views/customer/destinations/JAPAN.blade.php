@extends('customer.destinations.layout.destination')
@section('title', "Parcel Delivery and Shipping to Canada")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('quotebox')
<style>
    .quote-box {
        background-image: url(<?php echo $bannerImage; ?>);
    }
</style>
@include('customer.destinations.partials.quick-quote')
@endsection

@section('maintext')
<div class="container">
    <h1 class="service-title">SHIPPING TO JAPAN</h1>
    <div class="service-text">
        Famous for pagodas, snowy mountains and cherry blossom, the ancient nation of Japan is one of the most economically and technologically advanced countries of the modern world. 
        Cities such as Tokyo, Yokohama and Osaka have evolved into dynamic economic hubs, producing globally renowned brands and products across heavy industry and high-tech specialisms.
        <br><br>
        UK exports of trade goods to Japan were recently estimated to be worth around $8.3 billion per annum. Here at Impact Express, we are helping to facilitate this important source 
        of international trade by offering fully tracked shipping to Japan. Our express service promises to deliver within two working days to specific destinations.
    </div>
    <h2 class="service-title">SHIPPING TO JAPAN: OUR SERVICES</h2>
    <p class="service-text">
        Our shipping service is convenient, flexible, and easy to use with a range of services designed to suit your requirements. Depending on whether you qualify for a ‘business’ 
        or ‘personal’ account, we can either arrange collection of your parcel from you, or you can drop it off at a designated spot.
        <br><br>
        We also provide full parcel tracking online. Your own, easy-to-use dashboard will allow you to follow the progress of your packages at your convenience
        <br><br>
        Whether you need to express ship winter sports equipment to the northern island of Hokkaido, or can afford the time to send beach umbrellas to Okinawa via our cheaper economy 
        service, we have the means to provide a delivery service that meets your needs.
        <br><br>
    </p>
    <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO JAPAN</h2>
    <p class="service-text">
        It is important that your parcel arrives promptly and undamaged. We will do everything we can to ensure that it does. 
        However, do take care to package your item securely so that risk of damage or loss is minimised.
        <br><br>
        Protect your parcel with bubble wrap or other suitable packing materials. Ensure the outer packaging is robust and securely fastened with suitable tape.
        We will supply an address label, which you should complete and attach to the outside. We also always recommend attaching a return address.
    </p>
    <br><br>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">HOW MUCH DOES IT COST TO SHIP TO JAPAN?</h2>
        <p class="service-text">
            Please use our online quote tool or contact us direct so that we can provide an accurate quote. Our shipping and delivery costs to Japan are competitive, 
            but will depend on the size, weight, and nature of your shipment, as well as the delivery service you select.
        </p>
        <h2 class="service-title">JAPANESE IMPORT RESTRICTIONS</h2>
        <p class="service-text">
            It is important to check Japanese customs and import regulations before shipping. Failure to do so could result in your 
            parcel being detained, delayed, or even destroyed by officials.
           
            The above is not an exhaustive list. For full details of banned goods and products, please see our restricted items page.
        </p>
        <p class="service-text">
            There are specific restrictions on what you can ship to Japan. The following are some of the prohibited items:
        </p>
        <ul class="service-list">
            <li>illegal drugs and narcotics</li>
            <li>firearms and ammunition</li>
            <li>books, drawings, carvings, or other articles which may harm public safety or morals</li>
            <li>articles which infringe upon intellectual property rights</li>
        </ul>
        <p class="service-text">There are also several items which are restricted:</p>
        <ul class="service-list">
            
            <li>certain agricultural and meat products</li>
            <li>endangered species and some animal products such as ivory, animal parts and fur</li>
            <li>specific plants and animals</li>
            <li>a selection of medicines and cosmetics</li>
            <li>hunting guns, air guns and swords</li>
        </ul>
        <br>
    </div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
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