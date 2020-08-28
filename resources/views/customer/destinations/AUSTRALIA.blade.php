@extends('customer.destinations.layout.destination')
@section('title', "Parcel Delivery and Shipping to Australia")
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
    <h1 class="service-title">SHIPPING TO AUSTRALIA</h1>
    <div class="service-text">
        <br>
        With courier links across the country, at Impact Express we offer fast and reliable shipping to Australia for a wide variety of parcels. 
        Whether you’re sending important documents or large packages, you can count on us.
        <br><br>
        With a large British expat community, Australia receives hundreds of parcels from the UK each day, destined for bustling cities such as Melbourne and Sydney, 
        as well as more remote locations. Despite being on the other side of the world from the UK and being one of the globe’s largest land masses, 
        shipping to Australia can be both fast and affordable.
        <br><br>
        Whether you’re posting to a travelling family member, or for business reasons, make Impact Express your first choice for shipping to Australia.
    </div>
    <h2 class="service-title">SHIPPING TO AUSTRALIA: HOW WE WORK</h2>
    <p class="service-text">
        We provide standard shipping services to most Australian towns and cities. If you are sending to a more remote location, <a style="color: #646464;" href="{{ route('contact') }}">get in touch</a> with our team directly.
        <br><br>
        We offer a variety of convenient dispatch options, including local drop off and courier pick up. The allocated courier for this service will depend on whether you are a ‘business’ or ‘personal’ customer, with each option made clear upon checkout.
        <br><br>
        Once your parcel has arrived to us, it will be collected by DHL, who act as our courier partner for all international shipping. DHL will handle the remainder of your parcel’s journey to Australia, ensuring fast and reliable delivery.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">HOW TO PACKAGE A PARCEL FOR INTERNATIONAL SHIPPING</h2>
        <div class="service-text">
            No matter the destination, all parcels should be securely packaged. Although our couriers will always handle your goods with the utmost care, 
            proper packaging will prevent any breakages in transit.
            <br><br>
            Always use a strong outer container/material and secure your parcel using proper parcel tape. In order to prevent damage, 
            ensure that loose items are properly padded with a protective material such as bubble wrap.
            <br><br>
            A printable address label will be provided when you finalise your shipping. This must be clearly affixed to the front of your parcel to ensure prompt delivery
        </div>
        <h2 class="service-title">AUSTRALIAN CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            When posting internationally, you must always check the destination country’s customs regulations. If your parcel contains regulated or prohibited items, 
            it risks not being delivered.
            <br><br>
            Australian customs states that the following items are prohibited:
            <ul>
                <li>Perfumes</li>
                <li>Alcohol over 24% ABV</li>
                <li>Goods bearing an image of the Australian state or territory flag.</li>
            </ul>
            Please note that the above items are just a sample of prohibited goods – for full list please refer to Australian Border Force.
        </div>
        <h2 class="service-title">SHIPPING TO AUSTRALIA FEES</h2>
        <div class="service-text">
            Despite the long journey, shipping to Australia is not as expensive as you may think. At Impact Express we pride ourselves on offering highly competitive international shipping rates.
            <br><br>
            The cost of sending a parcel to Australia will vary depending on the weight of your parcel, and the type of service you require. Please use our <a style="color: #646464;" href="{{ route('quote.index') }}">online quote tool</a> for an exact shipping cost.
            <br><br>
        </div>
    </div>
@endsection
@section('faq')
<div class="tab" style="height: 100px;">
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