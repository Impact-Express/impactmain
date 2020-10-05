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
    <h1 class="service-title">SHIPPING TO MEXICO</h1>
    <div class="service-text">
        <br>
        The country of Mexico, sitting at the most southerly point of North America, is the third-largest nation in Latin America. Mexico has the largest Spanish speaking population in the world and is renowned for its long stretches of sandy beaches, beautiful coastal resorts and vibrant cities.
        <br><br>
        Mexico has a thriving economy and a two-way trade agreement with the UK, resulting in millions of parcels being sent from the UK to Mexico every year. At Impact Express, we offer competitive shipping rates to anywhere from Mexico City to Hermosillo.
    </div>
    <h2 class="service-title">SHIPPING TO MEXICO: HOW WE WORK</h2>
    <p class="service-text">
        At Impact Express, we specialise in international delivery and always aim to get your parcel to its destination as quickly as possible. Our authorised service partner DHL has a whole host of reliable couriers who will take great care of your parcel, ensuring it arrives safely at its destination.
        <br><br>
        When you fill out your shipment form, the dispatch options will be outlined to you. These options will vary depending on whether you have a ‘business’ or ‘personal’ account with us.
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">HOW TO PREPARE YOUR PARCEL FOR SHIPMENT TO MEXICO</h2>
        <div class="service-text">
            To give your parcel the best chance of arriving safely, we recommend you follow our simple packaging guide when preparing your parcel for shipment. Parcels travelling from the UK to Mexico will cover some serious mileage and will be passed through many hands, so it’s best to be extra careful when packaging your parcel.
            <br><br>
            Make sure to attach your print-at-home label securely to the outside of the box in a visible position. Although the chances or your parcel being lost are very low, it’s always wise to tuck a return address inside the parcel just in case the main address label become dislodged during shipment.
        </div>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND MY PARCEL FROM THE UK TO MEXICO?</h2>
        <div class="service-text">
            The cost of sending a parcel to Mexico will vary depending on the size and weight of your package. Generally, the larger and heavier your package the more it will cost to send.
            <br><br>
            The timeframe in which you’d like your parcel to arrive will also affect the final cost. Next-day and express delivery will be more expensive than a standard or economy delivery option. To get a cost estimate, please use our free instant quote generator.
        </div>
        <h2 class="service-title">MEXICAN CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            Mexico has strict import restrictions in place, which are much more rigid than most other countries. All parcels will be inspected by customs at the border, so you’ll need to make sure you’ve filled out the necessary information to accompany your parcel.
        </div>
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
            <h2 class="toUpper">WHICH ITEMS CAN I SEND TO CANADA?</h2>
            <p>
                Like most countries, Canada has strict import restrictions in place to prevent counterfeit items from entering the country. Prohibited items include:
            </p>
            <ul>
                <li>Obscene or pornographic material;</li>
                <li>Anything crafted in prison;</li>
                <li>Firearms;</li>
                <li>Flammable materials.</li>
            </ul>
            <p>
                If you’re unsure whether your item is considered contraband, you can submit an inquiry or check Canada Post’s websites where you can find a full list of prohibited items.

                At Impact Express, we also have a list of prohibited items that we will not ship. Please also refer to our full list of prohibited items before preparing your parcel for shipment.
            </p>
            <h2 class="toUpper">ARE THERE ANY CUSTOMS RESTRICTIONS WHEN SHIPPING TO CANADA?</h2>         
            <p>
                All international parcels sent to Canada will be checked by customs to check if any duty or tax should be added to your shipment. 
                For this reason, we will need to know the approximate value of your parcel along with its contents so that the correct duties and taxes can be applied.
                <br><br>
                You will enter this information online when creating the shipping data, removing the need for a paper customs invoices and allowing customs to start the 
                clearance process as soon as possible.
                <br><br>
                It’s always best to check the latest customs advice on the web before you send your parcel, as they are ever subject to change and you can prepare yourself 
                with any extra charges you may face.
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