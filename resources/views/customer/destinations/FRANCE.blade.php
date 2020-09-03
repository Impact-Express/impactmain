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
    <h1 class="service-title">SHIPPING TO FRANCE</h1>
    <div class="service-text">
        <br>
        We offer cheap, fast and reliable parcel shipping to France using reputable courier companies, with services designed with your convenience in mind.
        <br><br>
        As a hub of art, music, politics and finance, it is unsurprising that hundreds of parcels and packages are shipped to France every day. With holidaymakers 
        lured to the sunny southern coast, and culture vultures drawn to the historic capital of Paris, France has it all.
        <br><br>
        At Impact Express we offer competitive shipping rates to anywhere in the country, with next-day delivery options available. 
        Whether you’re posting to Paris, Lyon, Marseille or Nice, we are here to help.
    </div>
    <h2 class="service-title">SHIPPING TO FRANCE: OUR SERVICES</h2>
    <p class="service-text">
        We offer multiple services for shipping to France, including Express and Standard Delivery, depending on our desired delivery window.
        <br><br>
        Using Impact Express for shipping is simple. Depending on the type of account you have with us (business or personal) you can either drop your parcel off at a 
        designated point, or arrange for it to be picked up.
        <br><br>
        From here, our partnered courier company will escort your parcel safely on its journey to France – whether its headed to the bustling capital of 
        Paris or the Mediterranean French Riviera!
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO FRANCE</h2>
        <div class="service-text">
            Wherever your parcel is being sent, proper packaging is essential. Although our couriers will take the utmost care, 
            we’d always recommend paying extra attention to prevent damage or breakage in transit.
            <br><br>
            Ensure that your parcel is safely and securely wrapped, using a strong outer container, secure parcel tape and padding for inner contents.
            <br><br>
            Potential delivery delays can also be avoided by ensuring that the print-at-home label we provide is securely and clearly affixed to the 
            largest side of the parcel, to help your courier get it to where it needs to be.
            <br><br>
            We’d also always recommend including a return address – just in case.
        </div>
        <h2 class="service-title">FRENCH CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            As with the rest of Europe and beyond, France is subject to strict customs regulations, restricting what you can bring in and out of the country – including via post.
            <br><br>
            French authorities place restriction and limitations on many goods, including:
            <ul class="service-list">
                <li>Alcoholic beverages</li>
                <li>Fresh and dried foods</li>
                <li>Currency</li>
                <li>Tobacco</li>
            </ul>
            <br><br>
            For a full list of goods and products banned for shipping with Impact Express, please see our <a href="/information/prohibited-items">restricted items section</a>.
            <br><br>
            Following Brexit, posting to Europe from the UK has changed slightly. However, to avoid any customs concerns or delays upon arrival, you can add all necessary customs 
            information when creating your shipping profile online.
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
            





            <h2 class="toUpper">HOW MUCH DOES POSTING TO FRANCE COST?</h2>
            <p>
                Despite being just over the channel, you will find that shipping to France and the rest of mainland Europe incurs higher fees than domestic shipping. Luckily, at Impact Express we are proud to offer the cheapest postage rates available.
            </p>
            <p>
                The cost of your shipping will vary depending on the weight and size of your parcel, as well as your chosen delivery service. Please use our <a href="{{ route('quote.index') }}">online quote tool</a> for an accurate shipping cost.
            </p>
            <p>
                If you are posting items of value, we also offer insurance options for an extra fee.
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