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
    <h1 class="service-title">SHIPPING TO GERMANY</h1>
    <div class="service-text">
        <br>
        Being the most heavily populated country within the EU, Germany is a hotspot for parcel deliveries from the UK and beyond. Working with DHL, 
        Impact Express provide speedy and affordable shipping to locations across Germany, including Berlin, Munich and Hamburg.
        <br><br>
        As a centre for global business, as well as boasting a rich cultural history, Germany attracts a huge number of British visitors. Offering both 
        business shipments and personal posting options, we ship a wide variety of parcels, with both express and standard delivery available.
    </div>
    <h2 class="service-title">SHIPPING TO GERMANY: OUR SERVICES</h2>
    <p class="service-text">
        We are committed to offering convenient shipping to destinations in Europe and beyond. When posting to Germany, you will have several dispatch 
        options depending on whether you are a ‘business’ or ‘personal’ customer.
        <br><br>
        These options include parcel pick up from a location of your choosing or drop off at a designated service point. All parcel dispatch choices 
        will be made clear when creating your shipment.
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">HOW TO PACKAGE A PARCEL TO SEND TO GERMANY</h2>
        <div class="service-text">
            When shipping to Germany, you must ensure that your parcel is properly packaged to prevent damage in transit. Use a sturdy outer material, 
            such as a cardboard box or reinforced envelope and make sure any lose items are wrapped in protective material.
            <br><br>
            In order to ensure your parcel arrives at its destination promptly, affix the address label clearly on the largest side. Whilst a package 
            going missing is very rare, we’d always recommend including a return address.
        </div>
        <h2 class="service-title">GERMAN CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            Customers are often concerned about sending parcels within the EU in the current post-Brexit climate. Luckily, at Impact Express we ensure 
            that the hard work is done for you: customs information is created during checkout, preventing any delays or extra charges upon delivery.
            <br><br>
            As with all international shipping, you must make yourself aware of goods restrictions before you ship a package to Germany. Items that 
            are prohibited from entering German territory include, but are not limited to:
            <ul class="service-text">
                <li>Jewellery and precious metals/stones with a value of over £4,000</li>
                <li>Coins / medals</li>
                <li>Video games</li>
                <li>Lithium batteries</li>
            </ul>
            <br><br>
            For a full list of prohibited and restricted items, you should refer to the German customs regulations, as well as Impact Express’s 
            <a href="/information/prohibited-items">prohibited item list</a>. Please note that if you are shipping edible goods to Germany, they should be 
            sent in their original packaging.
            <br><br>
        </div>
    </div>
@endsection
@section('faq')
<div class="tab">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">HOW MUCH DOES IT COST TO SEND A PARCEL TO GERMANY?</h2>
            <p>
                The cost of shipping to Germany will vary, depending on the weight and size of your package, as well as the service you choose, with express 
                delivery incurring a higher fee. To get an exact price, please use our <a href="{{ route('quote.index') }}">online quote tool</a>.
            </p>
        </div>
    </div>
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