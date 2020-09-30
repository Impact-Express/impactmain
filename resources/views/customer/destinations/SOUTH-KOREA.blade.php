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
    <h1 class="service-title">SHIPPING TO SOUTH KOREA</h1>
    <div class="service-text">
        <br>
        With its fascinating combination of ancient traditions, stunning landscapes, recent industrialisation and modern K-pop music, South Korea’s cultural and economic influence is thriving. 
        It’s no surprise then that South Korea also has a booming import and export industry. As a result, it is also a common destination for parcel deliveries from the UK.
        <br><br>
        Whether you’re mailing a package to the capital city of Seoul in the north, the port city of Busan in the east, or the bustling southern city of Kwangju, 
        Impact Express can guarantee fast and competitive delivery.
    </div>
    <h2 class="service-title">OUR COURIER SERVICES TO SOUTH KOREA</h2>
    <p class="service-text">
        We offer attractive shipping rates for all our dispatch options. These include two-day delivery to larger destinations, and standard delivery options for less urgent or heavier packages.
        <br><br>
        Shipping to more remote corners of South Korea is also possible. If you need a parcel to reach that backpacker or research student in the mountains, it’s no problem for us.
        <br><br>
        Depending on whether you’re sending your parcel as a business or an individual, your item will either be collected from you, or picked up from a drop -off point at a location convenient to you.
        <br><br>
        For complete peace of mind, you will be able to track your parcel on its journey across the world to its destination in South Korea.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO SOUTH KOREA</h2>
        <div class="service-text">
            Making sure your parcel is properly packaged is an essential part of ensuring it arrives undamaged and on time. You should always consider using both internal wrapping, such as bubble wrap, and strong external wrapping such as a secure container.
            <br><br>
            Label your package clearly. Include the sender’s address as well as the destination address, and specify the contents of the parcel. Consider including a second copy of these details inside your parcel: this will serve as a backup, should the external label be damaged in transit.
        </div>
        <h2 class="service-title">HOW MUCH DOES POSTING TO SOUTH KOREA COST?</h2>
        <div class="service-text">
            The cost of shipping your parcel will depend on several factors. These include:
            <ul>
                <li>the size of your parcel</li>
                <li>the service you require</li>
                <li>the intended destination</li>
                <li>any international fuel surcharges</li>
            </ul>
            It is quick and easy to get a competitive quote: call us direct, or use the quote tool above.
            <br><br>
            If you are posting items of value, we also offer insurance options for an additional fee.
        </div>
        <h2 class="service-title">THINGS TO REMEMBER…</h2>
        <div class="service-text">
            Please include the full contact details (phone number, email and full address) of the recipient within your parcel. 
            It’s safest to tuck this inside the parcel itself so that it can’t get lost. It’s also wise to provide a return address, 
            just in case we are unable to deliver your parcel.
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
            <h2 class="toUpper">WHICH ITEMS CAN I SEND TO SOUTH KOREA?</h2>
            <p>
                As with most overseas destinations, South Korea has strict rules about what you can send into the country. You should always check first to ensure the contents of your parcel are neither prohibited nor restricted.
            </p>
            <p>
                South Korea has restrictions on the import of the following items: 
            </p>
            <ul>
                <li>weaponry and firearms;</li>
                <li>chemicals;</li>
                <li>eavesdropping equipment;</li>
                <li>several different drugs.</li>
                <li>counterfeit items</li>
                <li>endangered species of wild flora and fauna</li>
            </ul>
            <p>
                This is not an exclusive list. Some items will also be liable to inspection by customs officials.

                For full details of banned goods and products, please see our restricted items section
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