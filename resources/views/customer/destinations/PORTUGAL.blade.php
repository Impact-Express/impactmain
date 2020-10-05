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
    <h1 class="service-title">SHIPPING TO PORTUGAL</h1>
    <div class="service-text">
        <br>
        Offering competitively cheap rates and impressively quick delivery speeds, Impact Express is the ideal courier for shipping to Portugal, Europe and beyond.
        <br><br>
        As a country with an inspiringly rich culture and history, alongside a more than agreeable climate, Portugal has become home to a considerable number of expats looking for a taste of the Mediterranean lifestyle.
        <br><br>
        As a result of the influx of British nationals residing in sunny Portugal, the country receives a significant number of parcels from the UK. Working with DHL, Impact Express guarantee speedy delivery, alongside premium security.
        <br><br>
        Whether you’re sending packages to the Algarve or Lisbon, posting parcels to Portugal has never been easier.
    </div>
    <h2 class="service-title">SHIPPING TO PORTUGAL: OUR SERVICES</h2>
    <p class="service-text">
        At Impact Express, we have a variety of drop off and collection options available to you, to ensure your package gets to its destination in Portugal both quickly and safely.
        <br><br>
        Our dispatch options will vary depending on whether you have a ‘business’ or ‘personal’ account with us, with all options presented at the time of booking.
        <br><br>
        Whichever your preferred dispatch method, once we have received your parcel the rest of its onwards journey to Portugal will be handled by DHL, who act as our authorised courier partners.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PREPARING YOUR PARCEL FOR SHIPMENT</h2>
        <div class="service-text">
            Make sure to pack your goods properly before shipment to ensure they have a safe arrival. 
            If you’re unsure how to package a parcel appropriately, you can follow our simple packaging guide.
            <br><br>
            It’s also important to check that your parcel is correctly addressed before you send it off. 
            Make sure to pay close attention when filling out the address, so that we can provide you with an accurate print-at-home label. 
            Please stick your label firmly to the outside of the box in a visible location.
        </div>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND MY PARCEL TO CANADA?</h2>
        <div class="service-text">
            The cost of shipping a parcel from the UK to Canada will depend on the size and weight of your parcel. 
            To get an estimate of how much your parcel will cost to ship, input the dimensions of your parcel into our instant quote generator.
            <br><br>
            The timeframe in which you’d like your parcel to arrive will also affect the final cost. If you require express delivery, 
            it will be more expensive than standard delivery.
        </div>
        <h2 class="service-title">THINGS TO REMEMBER…</h2>
        <div class="service-text">
            Please include the full contact details (phone number, email and full address) of the recipient within your parcel. 
            It’s safest to tuck this inside the parcel itself so that it can’t get lost. It’s also wise to provide a return address, 
            just in case we are unable to deliver your parcel.
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