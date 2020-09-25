@extends('customer.layouts.master')

@section('title', 'Services')
@section('css')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid services-container">
    <section class="express-delivery seperator">
        <a class="express-delivery-img" href="services/express">
            <img style="width:100%;" src="{{ asset('img/express-delivery-new.png') }}" alt="">
        </a>
        <h2 class="express-delivery-title">
            <a href="">
                EXPRESS - WORLDWIDE TRACKED DELIVERY
            </a>
        </h2>
        <div class="express-delivery-desc">
            <p>
                Fully tracked Integrator based Global delivery solution.
            </p>
            <ul>
                <li>Full tracked Delivery to over 120 Countries.</li>
                <li>Parcel Tracking personalised tracking portal to reduce customer queries.</li>
                <li>Send direct notifications to customers.</li>
                <li>Site Integration - Seamless integration process, we can plug our system into your website and set you up without any fuss. 
                    Our smart shipping API's allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.</li>
            </ul>
            <ul>
                <li>USA - Next Day Delivery Service.</li>
                <li>Australia - 2 Working Days.</li>
                <li>Asia - 2 Working Days.</li>
                <li>Europe - Next Day, AM, for central Europe.</li>
                *All transit times are subject to customs clearance.
            </ul>
        </div>
    </section>
    <section class="economy-delivery seperator">
        <a class="economy-delivery-img" href="services/economy">
            <img style="width:100%;" src="{{ asset('img/economy-delivery.png') }}" alt="">
        </a>
        <h2 class="economy-delivery-title">
            <a href="">
                ECONOMY - EURO ROAD AND WORLDWIDE
            </a>
        </h2>
        <div class="economy-delivery-desc">
            <p>
                At Impact Express we built our name by providing super fast next day deliveries to the USA and other countries but not every parcel needs to be there the next day, 
                which is why we have our economy service.<br><br> If you are sending parcels that are not time sensitive, heavier and therefore more costly parcels or pallets then you may
                wish to use our economy service.<br><br>
                The Impact Express economy service covers most of Europe along with selected destinations around the rest of the world which can dramatically reduce the cost of 
                your shipment.
            </p>
            <p>
                European Road economy fully tracked service with transit times of 2-6 days.<br> 
                USA, Canada and rest of world premium economy fully tracked service via our major carriers.<br>
                Economy freight service available to many destinations for packages and pallets weighing over 68kg.
            </p>
        </div>
    </section>
    <section class="domestic-delivery seperator">
        <a class="domestic-delivery-img" href="services/uk-overnight">
            <img style="width:100%;" src="{{ asset('img/UK-overnight.png') }}" alt="">
        </a>
        <h2 class="domestic-delivery-title">
            <a href="">
                UK DOMESTIC - EXPRESS & ECONOMY
            </a>
        </h2>
        <div class="domestic-delivery-desc">
            <p>
                Impact Express UK Overnight services guarantees delivery by the end of the next working day throughout the United Kingdom and Northern Ireland.<br><br>
                We offer a high quality and dependable service that you can rely on, including:
            </p>
            <p>
                Time Sensitive Shipping.<br>
                Third Party Collection Available.<br>
                Real-Time Tracking Available.<br>
                Special Pre-9AM and Pre-12AM Delivery Service Available.<br>
                Packages can be dropped to our Heathrow Depot as late as 7:30PM for next day delivery.
            </p>
        </div>
    </section>
    <section class="imports-delivery">
        <a class="imports-delivery-img" href="services/worldwide-imports">
            <img style="width:100%;" src="{{ asset('img/worldwide-imports.png') }}" alt="">
        </a>
        <h2 class="imports-delivery-title">
            <a href="">
                IMPORTS - WORLDWIDE IMPORT SERVICE
            </a>
        </h2>
        <div class="imports-delivery-desc">
           <p> We monitor the whole process for you from arranging the collection, 
               tracking its journey and ensuring its sole delivery back to the UK 
               usually by the end of the next working day.
            </p>
            <p>
                Our Worldwide Import Service provides a tailor-made solution to ensuring 
                your import and third country shipment delivery is completed with a minimal 
                amount of fuss, the Import services include:
            </p>
            <ul>
                <p>
                    Your Labels will be sent via email as a PDF to be attached to the incoming parcel. <br>
                    A Driver will be booked to collect the parcel. <br>
                    Import service is a fully tracked DHL Service. <br>
                    The Import service is available from over 220 countries worldwide.
                </p>
            </ul>
        </div>
    </section>
    {{-- <section class="ietrax-delivery">
        <a class="ietrax-delivery-img" href="services/ietrax">
            <img src="{{ asset('img/worldwide-destinations.png') }}" alt="">
        </a>
        <h2 class="ietrax-delivery-title">
            <a href="">
                EXPRESS - WORLDWIDE TRACKED DELIVERY
            </a>
        </h2>
        <div class="ietrax-delivery-desc">
            <p>
                Fully tracked Integrator based Global delivery solution.
            </p>
            <ul>
                <li>Full tracked Delivery to over 120 Countries.</li>
                <li>Parcel Tracking personalised tracking portal to reduce customer queries.</li>
                <li>Send direct notifications to customers.</li>
                <li>Site Integration - Seamless integration process, we can plug our system into your website and set you up without any fuss. 
                    Our smart shipping API's allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.</li>
            </ul>
            <ul>
                USA - Next Day Delivery Service.
                Australia - 2 Working Days.
                Asia - 2 Working Days.
                Europe - Next Day, AM, for central Europe.
                *All transit times are subject to customs clearance.
            </ul>
        </div>
    </section> --}}
</div>
    @include('customer.services.partials.consultation-pane')
@endsection