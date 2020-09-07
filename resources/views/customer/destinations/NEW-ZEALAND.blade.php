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
        Famous for its friendly population, high quality of life and varied climate, Canada is a high-demand delivery destination that is visited by millions of tourists every year. However, being the second-largest country by area in the world, shipping to Canada’s rural locations can be tricky.
        <br><br>
        At Impact Express, our reliable couriers have years of experience in serving remote areas and can get your parcel to its destination safely and in good time.
    </div>
    <h2 class="service-title">SHIPPING TO CANADA: OUR SERVICES</h2>
    <p class="service-text">
        We have a variety of convenient dispatch options for our customers. The type of service we can offer you will be outlined at the time of payment and will depend on whether you have a ‘business’ or ‘personal’ account with us.
        <br><br>
        Our authorised service partner DHL specialises in express international delivery. If you are pressed for time, DHL will be able to get your shipment to its destination within 2-4 days.
        <br><br>
        DHL will also provide you with a tracking number so that you can be sure exactly where your parcel is at all times. You can stay up to date with your parcel’s movements by text, phone or online, depending on which is the most convenient for you.
        <br><br>
        We offer competitive international shipping rates so that you can sure be that you’ll receive the best price possible for a reliable and efficient service.
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