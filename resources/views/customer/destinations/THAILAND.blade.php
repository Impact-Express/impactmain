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
    <h1 class="service-title">SHIPPING TO THAILAND</h1>
    <div class="service-text">
        <br>
        Located in South-East-Asia, Thailand is full to the brim with elaborate temples, ancient ruins and beautiful beaches. Known as “The Land of Smiles”, 
        it’s no surprise that Thailand is awash with tourists from all over the globe and one of the top delivery destinations in the world. Whether you’re 
        dispatching to Bangkok, Phuket or Chiang Mai, you’ll want to feel secure in the knowledge that your package will arrive safely at your chosen destination. 
        Here at Impact Express, we provide trustworthy and reliable shipping to Thailand, giving you one less thing to worry about.
    </div>
    <h2 class="service-title">WHAT SERVICES CAN WE OFFER YOU?</h2>
    <p class="service-text">
        Shipping your package to Thailand is a simple affair when you choose Impact Express. We offer our clients a variety of convenient dispatch options, depending on if you have a ‘business’ or ‘personal’ account with us. These options will be made clear to you at the time of booking.
        <br><br>
        Once we have received your parcel, our authorised service partner DHL will handle your shipment, ensuring it safely arrives at your chosen destination.
        <br><br>
        We offer an affordable economy service as well as an express service to Thailand for time-sensitive shipments. Whatever your needs, we hope to be able to provide you with a solution that is quick, easy and affordable.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">SHIPPING TO THAILAND FROM THE UK: HOW MUCH WILL IT COST?</h2>
        <div class="service-text">
            We’ll endeavour to offer you the best shipping rates from the UK to anywhere in Thailand. By using our instant quote generator, you’ll be able to gain an accurate estimate of the cost of shipment.
            <br><br>
            All you’ll need to provide is the weight and size of your parcel, as well as the time frame in which you’d like the recipient to receive their parcel. 
        </div>
        <h2 class="service-title">THINGS TO REMEMBER…</h2>
        <div class="service-text">
            Always make sure to package your goods carefully and securely to ensure they arrive safely at your chosen destination. If you’re unsure how to package a parcel, check out our easy-to-follow packaging guide.
            <br><br>
            Finally, please provide a contact number for both the sender and the receiver. This way, if we need to contact you or the recipient regarding the shipment, we’ll be able to resolve the issue quickly and easily
        </div>
    </div>
@endsection
@section('faq')
<div class="tab" style="height: 100%;">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">HOW SHOULD I ADDRESS MY PARCEL FOR DELIVERY TO THAILAND?</h2>
            <p>
                There are a few differences between how you address your parcel to Thailand compared to how we format addresses in the UK. Thailand homes three administrative divisions: province, districts and sub-districts. When addressing your parcel to Thailand, make sure to write these clearly and in the correct format.
            </p>
            <img style="border-radius: 22px;" src="{{ url('/storage/destinations/Thailand---Address-Format.jpg') }}" alt="Thailand Address Formatting Guide">
            <br><br>
            <h2 class="toUpper">SHIPPING TO THAILAND: WHICH ITEMS CAN I SEND?</h2>         
            <p>
                The Thai Customs Department regulates the importation and exportation of goods coming into and exiting Thailand. There are a variety of items prohibited from entering the country, including:
            </p>
            <ul>
                <li>Obscene objects, literature or pictures;</li>
                <li>Pornographic materials;</li>
                <li>Goods with an improper Thai flag design;</li>
                <li>Narcotics;</li>
                <li>Fake currency, bonds or coins.</li>
            </ul>
            <p>
                If you want to double-check whether your item is safe to post, contact Thai customs or check online to clarify.
            </p>
            <br>
            <h2 class="toUpper">DO I NEED TO DEAL WITH CUSTOMS WHEN SENDING FROM THE UK TO THAILAND?</h2>         
            <p>
                You will need to complete customs forms when sending goods to outside of the EU. You will also have to pay duties and taxes on any parcels sent to Thailand from the UK.
            </p>
            <p>
                It’s always best to check the latest customs advice on the web, before sending goods to Thailand. Duty rates, taxes and Thai customs laws are constantly changing, so it’s best to be aware of the charges you will face before shipment
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