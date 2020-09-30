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
    <h1 class="service-title">SHIPPING TO NEW ZEALAND</h1>
    <div class="service-text">
        <br>
        With stunning landscapes and a temperate climate, New Zealand is extremely popular among British tourists and homemakers. It’s no surprise that thousands of parcels are sent from the UK to New Zealand every year.
        <br><br>
        Sending a package to the other side of the world can be a daunting prospect. Luckily, with our affordable and efficient shipping service, you can send parcels from the UK to New Zealand without a worry.
    </div>
    <h2 class="service-title">WHICH SERVICES CAN WE OFFER YOU?</h2>
    <p class="service-text">
        Here at Impact Express, customer satisfaction is at the heart of what we do. We operate an economical and reliable shipping service, working closely with DHL to provide you with a premium shipping experience.
        <br><br>
        We offer a variety of drop-off and collection options, to make the shipping process as simple and pain-free as possible. The dispatch options will be outlined to you at the time of booking and will depend on whether you have a ‘business’ or ‘personal’ account.
        <br><br>
        Once your parcel is in our possession, DHL will ensure that your shipment is safely handled and arrives promptly at your chosen destination.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PACKAGING A PARCEL FOR DELIVERY TO NEW ZEALAND?</h2>
        <p class="service-text">
            To ensure that your parcel arrives safely in New Zealand, always make sure you package your parcel safely and securely. If you’re unsure about the best way to do this,
             take a look at our <a href="/information/packaging-guide">packaging guide</a>.
            <br><br>
            When addressing your parcel, be aware that New Zealand uses a unique addressing system which requires you to differentiate between street, rural locality and PO Box. 
            Check you’re doing this correctly to ensure your mail reaches its destination. New Zealand Post provides a handy addressing guide if you need assistance.
            <br><br>
            Once you have filled out the address, we will send you a print-at-home label. Make sure your address label is firmly stuck onto the outside of the box and always tuck
             a secondary address label inside the box, just in case your label becomes loose during the shipping process.
        </p>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND A PARCEL FROM THE UK TO NEW ZEALAND?</h2>
        <p class="service-text">
            Our international courier service is renowned for offering competitive shipping rates. 
            We aim to offer all our customers the best possible prices when shipping from the UK to New Zealand.
            <br><br>
            The cost of shipment depends on the size and weight of your parcel. For an instant quote, you’ll need 
            to provide the measurements of your package and the timeframe within which you’d like the recipient to receive it.
        </p>
        <h2 class="service-title">THINGS TO REMEMBER…</h2>
        <p class="service-text">
            Please provide both your contact number as well as the recipient’s, to ensure you can both be contacted throughout the shipment process.
            <br><br>
            For more information or to discover more about our services, please do not hesitate to <a href="{{ route('contact') }}">contact us</a>.
            <br><br>
        </p>
    </div>
@endsection
@section('faq')
<div class="tab">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">SHIPPING TO NEW ZEALAND: WHAT ITEMS CAN I SEND?</h2>
            <p>
                It is your responsibility as a sender to check whether an item is prohibited or restricted. Before you send your parcel, 
                it’s always best to refer to the prohibited and restricted items list. Some of the high-profile items include:
            </p>
            <ul>
                <li>Flammable liquids and solids;</li>
                <li>Valuables, including bank cards, passports and collectables;</li>
                <li>Furs and skins (untreated);</li>
                <li>Indecent goods.</li>
            </ul>
            <p>
                If you’re unsure whether your item is contraband, you can submit a query to New Zealand Post’s National Contact Centre
            </p>
            <h2 class="toUpper">NEW ZEALAND’S CUSTOMS RESTRICTIONS?</h2>         
            <p>
                You will need to complete a customs form when sending goods internationally. You will also be required to pay duties and taxes on any parcels sent to New Zealand.
                <br><br>
                It’s always best to check the latest customs advice on the web before sending goods to New Zealand. Duty rates, taxes and customs laws are constantly changing,
                 so it’s best to be aware of the regulations and charges you may face before you ship.
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