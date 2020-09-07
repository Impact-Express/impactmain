@extends('customer.destinations.layout.destination')
@section('title', "Parcel Delivery and Shipping to Brazil")
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
    <h1 class="service-title">SHIPPING TO BRAZIL</h1>
    <div class="service-text">
        <br>
        Being the largest country of South America with a population of 211 million people, Brazil has a powerful economy and a rich culture. 
        With stunning landscapes and an array of exotic wildlife, it’s no surprise that Brazil is very popular with both British tourists and homemakers.
        <br><br>
        Brazil receives thousands of parcels from the UK every month, making it a high-demand delivery destination. For affordable parcel delivery to Brazil, 
        choose Impact Express. We offer competitive rates alongside a high-quality service, to ensure your parcel arrives safely at its destination without 
        leaving you out of pocket.
    </div>
    <h2 class="service-title">SHIPPING TO BRAZIL: OUR SERVICES</h2>
    <p class="service-text">
        At <b>Impact Express</b>, we offer a variety of reliable and efficient courier services. Our authorised service partner DHL handles all our shipments; 
        with a wide selection of trusted international carriers, you can relax knowing your parcel is in safe hands.
        <br><br>
        How we handle your shipment will be outlined to you at the time of payment and will depend on whether you have a business or personal account.
        We offer both express and economy delivery options in order to provide all our customers with a range of quick, easy and affordable postal solutions.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">HOW TO PREPARE YOUR PARCEL FOR SHIPPING TO BRAZIL</h2>
        <div class="service-text">
            To give your parcel the best chance at arriving safely, make sure to package your parcel carefully and securely. 
            International parcels travel huge distances during transit, so you’ll need to take great care when preparing your 
            parcel for shipment (particularly if your items are fragile). If you’re unsure how to safely wrap your parcel, make 
            sure to follow our simple packaging guide.
            <br><br>
            Once you have filled out all the relevant information, we will provide you with a print-at-home label. Please make sure 
            this is firmly stuck to the outside of you box in a visible position. It’s always wise to include another copy of the address 
            inside your parcel and a return address, just in case the shipping label becomes dislodged in transit
        </div>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND A PACKAGE TO BRAZIL FROM THE UK?</h2>
        <div class="service-text">
            The cost of shipping from the UK to Brazil will vary depending on the size and weight of your parcel. To get a free quote today, 
            please input the dimensions of your parcel(s) into our <a href="{{ route('quote.index') }}">instant quote generator.</a>
            <br><br>
            The speed of delivery that you require will also affect the final cost. Our courier service can get your parcel to its destination 
            in as little as 24 hours, although these services are more costly. If your shipment is not time-sensitive, you can opt for our 
            cheaper economy shipping service.
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
            <br>
            <h2 class="toUpper">ARE THERE ANY CUSTOMS RESTRICTIONS WHEN SENDING TO BRAZIL?</h2>
            <p>
                All goods sent internationally are subject to customs taxes and duties. Such shipments will require accompanying documentation, specifying the contents of the parcel and its estimated value.
            </p>
            <p>
                Fortunately, this information will be filled out online when creating the shipping data, removing the need for paper customs invoices and speeding up the clearance process.
            </p>
            <h2 class="toUpper">ARE THERE ANY PROHIBITED ITEMS?</h2>         
            <p>
                There are multiple items which are not allowed to be imported into Brazil. These include but are not limited to:
            </p>
            <ul>
                <li>Explosives;</li>
                <li>Toxic and infectious substances;</li>
                <li>Corrosive substances;</li>
                <li>Obscene and indecent articles;</li>
                <li>Living creatures and dead animals.</li>
            </ul>
            <p>
                For a more detailed list of Brazil’s prohibited items, please refer to the Brazil Post website or contact Brazilian customs directly. 
                As couriers, we also have a prohibited items list of our own. Please refer to this list before you prepare your parcel for shipping.
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