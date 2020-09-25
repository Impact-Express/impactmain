@extends('customer.services.layout.service')
@section('title', "Express Parcel Delivery")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/express-delivery-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">EXPRESS PARCEL DELIVERY</h2>
    <p class="service-text">
        Fully tracked Integrator based Global delivery solution.
    </p>
    <ul class="service-list">
        <li>Full tracked Delivery to over 220 countries</li>
        <li>Parcel Tracking personalised tracking portal to reduce customer queries</li>
        <li>Send direct notifications to customers</li>
    </ul>

    <p class="service-text">
        Site integration – Seamless integration process, we can plug our system into your website and set you up without any fuss.
        Our smart shipping APIs allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
    </p>
    <ul class="service-list">
        <li>USA – Next day delivery service</li>
        <li>Australia (2 working days)</li>
        <li>Asia (2 working days)</li>
        <li>Europe (Next day, AM,  for central Europe)</li>
    </ul>
    <p class="service-text">*All transit times are subject to customs clearance</p>

    <h2 class="service-title" style="margin-top: 100px;">How It Works - Personal Customers</h2>
    <div class="express-infogfx" style="margin-top: -100px;">
        <ul class="service-list">
            <li>Get a Quote and Select Send a Parcel and Register or Login.</li>
            <li>Creates Booking Request, pay and print delivery labels on booking portal</li>
            <li>Shipment/s collected by carrier or dropped to local DHL office.</li>
            <li>Shipment checked/weighed and volumetric weight checked, any discrepancies will be advised by email.</li>
            <li>Tracking advise message sent to consignee to arrange customs clearance/delivery</li>
            <li>Full tracking available at Impact Express</li>
            <li>Shipment delivered</li>
        </ul>
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
    </div>
</div>
@endsection
@section('maintext-right')
<h2 class="service-infogfx-text" style="margin-top: 290px;">How It Works - <br>Wholesale</h2>
    <div class="express-infogfx" style="margin-top: -290px;">
        <h4 class="service-title">
            Courier – System integration option / Lowest Cost Routing Options.
        </h4>
        <ul class="service-list">
            <li>Coda Commerce – Link IE as an agent on your Navigator and EDI shipment data to IE.</li>
            <li>Metafour / AIMS – Send us a dailiy .csv manifest with shipment data, we will import the data into our system on receipt.</li>
            <li>Courier Account integration option – create carrier labels directly on your system using our Carrier account numbers. 
                This is an ideal solution for high volume clients.
            </li>
        </ul>
        <h4 class="service-title">On arrival at Impact Express</h4>
        <ul class="service-list">
            <li>IE verify your shipment on arrival at our warehouse providing tracking numbers and full tracking data to POD.</li>
            <li>IE will email your CS dept proactively with all customs and delivery delays.</li>
            <li>IE has direct links to premium integrator customer services to speed up any issues and delays.</li>
        </ul>
        <h4 class="service-title">Courier – Create Labels online at impactexpress.co.uk</h4>
        <ul class="service-list">
            <li>Book online at our courier portal and print carrier labels</li>
            <li>Drop these shipments to your local DHL or FedEx depots</li>
            <li>Alternatively arrange a daily or ad-hoc collection service.</li>
        </ul>
        <h4 class="service-title">Courier Account integration option</h4>
        <ul class="service-list">
            <li>Create carrier labels directly on your system using our Carrier account numbers.</li>
            <li>This is an ideal solution for high volume clients.</li>
            <li>Drop directly to your local DHL depot or request a daily collection.</li>
        </ul>
        <p class="service-infogfx-text">
            If you have any questions, drop us an email at <a href="mailto:office@impactexpress.co.uk?subject=Contact%20Us">office@impactexpress.co.uk</a> or visit our <a href="{{ route('contact') }}">Contact Us Page</a>.
        </p>
    </div>
@endsection