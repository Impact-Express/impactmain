@extends('customer.services.layout.service')
@section('title', "Economy Parcel Delivery")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/economy-delivery.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">ECONOMY PARCEL DELIVERY SERVICE</h2>
    <p class="service-text">
        At Impact Express we built our name by providing super fast next day deliveries to the USA and other countries but not 
        every parcel needs to be there the next day, which is why we have our economy service. If you are sending parcels that 
        are not time sensitive, heavier and therefore more costly parcels or pallets then you may wish to use our economy service. 
        The Impact Express economy service covers most of Europe along with selected destinations around the rest of the world which 
        can dramatically reduce the cost of your shipment.
    </p>
    <ul class="service-list">
        <li>European road economy fully tracked service with transit times of between 2-6 days</li>
        <li>USA, Canada and rest of world premium economy fully tracked service via our major carriers</li>
        <li>Economy freight service available to many destinations for packages and pallets weighing over 68kg</li>
    </ul>
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
            <h2 class="toUpper">What Service is best for you?</h2>
            <p>Choosing from one of DHL's Service Points is the most popular service we provide.</p>
            <p>You can locate your nearest point, by clicking <a href="https://parcel.dhl.co.uk/dhl-service-point/find-your-nearest/">here.</a></p>
            <br>
            <p>
                If you would like to arrange a DHL courier to pick up your parcel, we can help arrange it online and over the phone.
                Whether it's your home address or work address, we'll pick it up.
            </p>
            <p>
                Dropping your parcel off to Impact HQ isn't unheard of. If you find yourself near us, you can hand it over to us,
                we'll then dispatch it to DHL
            </p>
            <br>
            <h2 class="toUpper">What do i Need?</h2>
            <p>
                You will need to have access to a printer, as you will have to print your unique shipping label.
                The next step would be to ensure your parcel/documents are safely packaged. <br>
                Lastly you will need to attach the label to the outer most packaging. If you require any guidance on this,
                click here as we have put together a step by step guide.
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
@section('maintext-right')
<div class="container">
    <h2 class="service-title">WHY SHOULD I SEND MY ECONOMY PARCEL WITH IMPACT EXPRESS?</h2>
    <p class="service-text">
        At Impact Express we built our name by providing super fast next day deliveries to the USA and other countries but not 
        every parcel needs to be there the next day, which is why we have our economy service. If you are sending parcels that 
        are not time sensitive, heavier and therefore more costly parcels or pallets then you may wish to use our economy service. 
        The Impact Express economy service covers most of Europe along with selected destinations around the rest of the world which 
        can dramatically reduce the cost of your shipment.
    </p>
    <ul class="service-list">
        <li>Competitive pricing for both low and high volume shippers</li>
        <li>Using our online booking system you can book, pay for and track all your shipments</li>
        <li>Unbeatable customer service team, who are on hand 5 days a week</li>
    </ul>
    <p class="service-text"><b>*Please note – check emails for airway bill labels and airway tracking numbers. We will always email them to you when shipment booking is complete.</b></p>
    <p class="service-text">
        If you have any questions, drop us an email at <a href="mailto:office@impactexpress.co.uk?subject=Contact%20Us">office@impactexpress.co.uk</a> or visit our <a href="{{ route('contact') }}">Contact Us Page</a>.
    </p>
    <br>
</div>
@endsection