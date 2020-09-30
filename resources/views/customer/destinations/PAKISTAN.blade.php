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
    <h1 class="service-title">SHIPPING TO PAKISTAN</h1>
    <div class="service-text">
        <br>
        Pakistan has it all: a rich history, stunning landscapes and impressive architecture. The capital, Islamabad, sits at the foot of the beautiful Himalayan mountain range. Karachi, the nation’s largest city and economic centre, looks out over the Arabian Sea to the south.
        <br><br>
        International trade is a core feature of the Pakistani economy; it is a country with which the UK has many financial and political ties. As a result, Pakistan is a popular destination for exports of all types.
        <br><br>
        Whether you are sending your package to Lahore in the Punjab, or Quetta – the ‘Fruit Basket of Pakistan’ – Impact Express can offer fast and affordable shipping
    </div>
    <h2 class="service-title">OUR COURIER SERVICES</h2>
    <p class="service-text">
        Impact Express is an experienced provider of shipping services to Pakistan. These include two-day express delivery to major Pakistani destinations. A standard option is also provided for less urgent deliveries, or packages of a heavier weight.
        <br><br>
        Depending on the type of account you have with us (business or personal) we either provide a drop-off service for your parcel at a designated point, or arrange for it to be collected from you.
        <br><br>
        All our services come with tracking information provided. For items of value, we offer additional insurance. Whatever it is you need to mail, and wherever it is destined, we will ensure your package arrives safe and sound.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO PAKISTAN</h2>
        <div class="service-text">
            While we do everything in our power to ensure your parcel arrives undamaged, international parcels always require careful packaging.
            <br><br>
            Always ensure your parcel is securely fastened with robust packaging and is clearly labelled. If the contents are fragile or present a leakage risk, 
            you should consider secure containers and extra padding. We recommend including a returns label, just in case.
        </div>
        <h2 class="service-title">HOW MUCH DOES POSTING TO PAKISTAN COST?</h2>
        <div class="service-text">
            The price of shipping your parcel will vary depending on several factors, including the size of your parcel and the service you choose.
            <br><br>
            Getting a competitive quote is quick and easy. Call us now or use the Instant Quote tool on our website.
        </div>
        <h2 class="service-title">PAKISTAN CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            Pakistan has strict rules about what you can and cannot import into the country. You should always check these rules carefully before sending a parcel.
            <br><br>
            Pakistani authorities have placed regulations and limitations on many goods, including:
            <ul>
                <li>Translations of the holy Qur’an that do not include any Arabic text</li>
                <li>Obscene or pornographic material</li>
                <li>Fireworks and other explosives</li>
                <li>Alcohol and some brewing equipment</li>
                <li>Firearms and ammunition</li>
                <li>Some electrical items</li>
            </ul>
            This is not an exhaustive list. For full details of banned goods and products, please see our restricted items section.
            <br><br>
        </div>
    </div>
@endsection
@section('faq')
<div class="tab" style="height: 100px">
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