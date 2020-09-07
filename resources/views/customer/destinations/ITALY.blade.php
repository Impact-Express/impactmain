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
    <h1 class="service-title">SHIPPING TO ITALY</h1>
    <div class="service-text">
        <br>
        We offer fast, competitive, and secure courier services to Italy. Our offering includes delivery to all major cities and regions, 
        as well as a choice of different delivery speeds to suit your requirements.
        <br><br>
        One of our close European neighbours, Italy has a rich culture and heritage. It includes the iconic Colosseum of bustling Rome, 
        the colourful Mediterranean coastlines, the art and serenity of Florence 
        and the world famous shopping and fashion of Milan.
    </div>
    <h2 class="service-title">SHIPPING TO ITALY: OUR SERVICES</h2>
    <p class="service-text">
        Our Italian shipping options include Express Delivery (next day) for main destinations, and Economy Delivery for non-time sensitive 
        or heavier packages (two to six working days).
        <br><br>
        Depending on whether you have a ‘business’ or ‘personal’ account, we can either arrange collection of your parcel from you, or you 
        can drop it off at a designated place. Just choose the delivery service that best meets your requirements and we’ll do the rest.
        <br><br>
        Wherever you’re shipping your parcel to Lake Como in the north, the Alpine ski resorts, or the stunning region of Puglia in the 
        south east, all parcels can be tracked on their journey with our online tracking tool.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO ITALY</h2>
        <div class="service-text">
            We always recommend you package your parcel carefully when sending overseas. We will do our utmost to ensure your parcel is treated 
            with care, but you should pay attention to both the internal and external packaging. Wrap and secure items with suitable padding, 
            bubble wrap and tape internally, and then choose a strong outer packaging.
            <br><br>
            Amongst other things, Italian customs place restrictions on the some of the following goods:
            <ul class="service-list">
                <li>Certain liquids and foodstuffs</li>
                <li>Certain toiletries</li>
                <li>Tobacco</li>
                <li>Antiques (works of art and fine art whose value exceeds 5,000 GBP)</li>
            </ul>
            See our <a href="/information/prohibited-items">full list of prohibited items</a>, or contact Italian Customs.
            <br><br>
            As a result of Brexit, the UK’s status has changed. In order to avoid any delays or complications at customs, simply add all relevant 
            customs information when setting up your online profile with us and we will handle the rest.
            <br><br>
        </div>
        <h2 class="service-title">ITALIAN CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            As always, when shipping overseas, you should check custom requirements and restrictions carefully before sending. Customs clearance 
            is currently not needed for shipments from the UK to Italy, though there will still be security checks.
            <br><br>
            The timeframe in which you’d like your parcel to arrive will also affect the final cost. If you require express delivery, 
            it will be more expensive than standard delivery.
        </div>
        <br><br>
    </div>
@endsection
@section('faq')
<div class="tab">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">HOW MUCH DOES IT COST TO SHIP TO ITALY?</h2>         
            <p>
                The exact cost will depend on the size, weight and nature of the parcel you are shipping, and the delivery service that 
                you choose. Please use our <a href="{{ route('quote.index') }}">Online Quote Tool</a> or contact us direct so that we can 
                provide you with an accurate quote. We’re confident that you’ll find our rates to all Italian destinations offer good value.
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