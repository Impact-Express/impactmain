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
    <h1 class="service-title">SHIPPING TO SWEDEN</h1>
    <div class="service-text">
        <br>
        As one of the largest, richest countries in Europe, Sweden is a big trading partner with the UK. Sweden’s import and export trade with the UK amounts to around £8 billion, a large portion of which is eCommerce.
        <br><br>
        With such a high volume of parcels being delivered to Sweden every year, you’ll want to choose a courier that ensures yours arrives safely. For cheap parcel delivery to Sweden, choose <b>Impact Express</b>. 
        Arranging postage to Sweden is easy with our range of express and economy parcel delivery services.
    </div>
    <h2 class="service-title">SHIPPING TO SWEDEN: OUR SERVICES</h2>
    <p class="service-text">
        At Impact Express, we offer our customers an unrivalled delivery service. With a number of convenient dispatch options, we can guarantee our customers will receive a quick and efficient parcel delivery service.
        <br><br>
        The dispatch options will be outlined to you when you fill out your shipment form and will depend on whether you have a ‘business’ or ‘personal’ account with us. Once we have received your parcel, our authorised 
        service partner DHL will handle the security of your parcel, ensuring it has a safe arrival at its destination.
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PREPARING YOUR PARCEL FOR SHIPMENT</h2>
        <div class="service-text">
            To ensure the contents of your parcel arrives in one piece, please make sure to package your items properly. Always use a sturdy cardboard box or a reinforced envelope for smaller items, with protective materials (such as bubble wrap or polystyrene chips) 
            to stop your items being knocked about while in-transit. For full, detailed instructions, please refer to our packaging guide.
        </div>
        <h2 class="service-title">HOW MUCH DOES IT COST TO SHIP TO SWEDEN?</h2>
        <div class="service-text">
            The cost of shipping a parcel from the UK to Sweden will depend on several factors. The most influential being the size and weight of your parcel. Most courier sites will ask you to provide the measurements of your parcel, in order to provide you with an accurate quote. To get a free quote today, please use our instant quote generator.
            <br><br>
            The speed of arrival you require will also affect the final cost of shipment. If you require express delivery, you will have to pay slightly more than economy delivery services. Always remember to compare prices across a range of sites in order to get the best price possible.
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
            <h2 class="toUpper">WILL I HAVE TO FILL OUT A CUSTOMS INVOICE?</h2>
            <p>
                As the UK is no longer a member of the European Union, you will have to fill out a customs invoice when creating your shipment data. With Impact Express, we make every effort to ensure the shipping process is as simple as possible. We allow our customers to fill out such information online, removing the need for any physical paperwork and eliminating the chances of delays and extra charges.
            </p>
            <h2 class="toUpper">ARE THERE ANY ITEMS THAT I CAN’T SEND TO SWEDEN?</h2>         
            <p>
                As with most EU countries, there are strict import regulations regarding what is allowed in and out of the country. For Sweden, prohibited items include but are not limited to:
                <ul>
                    <li>Meat, milk and any items thereof from non-EU countries</li>
                    <li>Products of species protected under the Washington Convention (CITES), including tortoise shell, reptile skin and coral</li>
                </ul>
                <p>
                    Always remember to check the countries full prohibited items list or if you’re still unsure, contact HM Revenue and Customs. It’s always best to check your courier’s prohibited items list too, as some couriers refuse to carry items which are considered ‘dangerous’.
                </p>
                <p>
                    For a full list of goods and products banned for shipping with Impact Express, please see our <a href="/information/prohibited-items">restricted items section.</a>
                </p>
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