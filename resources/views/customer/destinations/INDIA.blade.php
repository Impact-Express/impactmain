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
    <h1 class="service-title">SHIPPING TO INDIA</h1>
    <div class="service-text">
        <br>
        One of the largest and most densely populated countries in the world, India stretches from the Himalayas to the golden beaches of Goa, the tropical landscapes of Kerala and the bustling Bay of Bengal.
        <br><br>
        Famous for its passionate love of cricket, rich history and spirituality, and fascinating architecture, India is a country of vibrancy and colour. In recent years, the subcontinent has become synonymous with technological innovation and commerce, with a booming import industry and rising demand for industrial and consumer goods.
        <br><br>
        Impact Express is helping to play a part in this economic renaissance by offering reliable shipping services to India.
    </div>
    <h2 class="service-title">SHIPPING TO INDIA: OUR SERVICES</h2>
    <p class="service-text">
        Our courier services to India are all fully tracked. We provide the choice of two-day express delivery or an economy service for larger or less urgent shipping.
        <br><br>
        We’ve made our shipping service convenient and easy to use. Depending on whether you have a ‘business’ or ‘personal’ account, we can either collect your parcel from you, or arrange for you to drop it at a designated spot.
        <br><br>
        You’ll also enjoy use of your own personalised tracking portal. This will provide notifications of your parcel’s progress, whether you’re shipping to the famous pink city of Jaipur or one of India’s many beautiful palaces and temples.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO INDIA</h2>
        <div class="service-text">
            We pride ourselves on taking great care of your parcel or package, but it is important that you ensure your item is securely packaged to prevent damage or loss.
            <br><br>
            Consider using bubble wrap or other materials to protect the item. Then ensure that it is securely contained in outer packaging, sealed with strong tape.
            <br><br>
            We will provide an address label, which you should complete clearly and attach to the outside. We always recommend including a return address.
        </div>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND MY PARCEL TO INDIA?</h2>
        <div class="service-text">
            Our shipping and delivery services are very competitive. However, the exact cost of shipping to India will depend on the size, weight and nature of the parcel, as well as the delivery service you choose. For an accurate quote, please use our instant quote tool or contact us direct.
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
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2 class="toUpper">INDIAN IMPORTATION RESTRICTIONS</h2>
            <p>
                There are certain items which you cannot ship to India, such as:
            </p>
            <ul>
                <li>pornographic and obscene materials;</li>
                <li>ivory;</li>
                <li>narcotics;</li>
                <li>counterfeit items;</li>
                <li>antiquities</li>
                <li>certain wildlife products</li>
                <li>certain aero models</li>
            </ul>
            <p>
                There are also some restrictions and specific requirements for select items. These include:
            </p>
            <ul>
                <li>firearms</li>
                <li>certain wildlife and plants</li>
                <li>family planning items</li>
                <li>radio transmitters</li>
                <li>certain electronics, including phones</li>
            </ul>
            <p>
                It is important to check the exact nature of your parcel against Indian import regulations. Failing to do so could result in your parcel being detained, delayed, or even destroyed by officials.
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