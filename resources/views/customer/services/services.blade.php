@extends('customer.layouts.master')

@section('title', 'Services')
@section('css')
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid services-container">
    <section class="express-delivery seperator">
        <a class="express-delivery-img" href="services/express">
            <img src="{{ asset('img/express-delivery-new.png') }}" alt="">
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
            <p>
                Full tracked Delivery to over 120 Countries.<br>
                Parcel Tracking personalised tracking portal to reduce customer queries.<br>
                Send direct notifications to customers.<br>
                Site Integration - Seamless integration process, we can plug our system into your website and set you up without any fuss. Our smart shipping API's allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
            </p>
            <p>
                USA - Next Day Delivery Service.<br>
                Australia - 2 Working Days.<br>
                Asia - 2 Working Days.<br>
                Europe - Next Day, AM, for central Europe.<br>
                *All transit times are subject to customs clearance.
            </p>
        </div>
    </section>
    <section class="economy-delivery seperator">
        <a class="economy-delivery-img" href="services/economy">
            <img src="{{ asset('img/economy-delivery.png') }}" alt="">
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
        <a class="domestic-delivery-img" href="services/express">
            <img src="{{ asset('img/express-delivery-new.png') }}" alt="">
        </a>
        <h2 class="domestic-delivery-title">
            <a href="">
                EXPRESS - WORLDWIDE TRACKED DELIVERY
            </a>
        </h2>
        <div class="domestic-delivery-desc">
            <p>
                Fully tracked Integrator based Global delivery solution.
            </p>
            <p>
                Full tracked Delivery to over 120 Countries.<br>
                Parcel Tracking personalised tracking portal to reduce customer queries.<br>
                Send direct notifications to customers.<br>
                Site Integration - Seamless integration process, we can plug our system into your website and set you up without any fuss. Our smart shipping API's allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
            </p>
            <p>
                USA - Next Day Delivery Service.<br>
                Australia - 2 Working Days.<br>
                Asia - 2 Working Days.<br>
                Europe - Next Day, AM, for central Europe.<br>
                *All transit times are subject to customs clearance.
            </p>
        </div>
    </section>
    <section class="imports-delivery seperator">
        <a class="imports-delivery-img" href="services/economy">
            <img src="{{ asset('img/economy-delivery.png') }}" alt="">
        </a>
        <h2 class="imports-delivery-title">
            <a href="">
                Test
            </a>
        </h2>
        <div class="imports-delivery-desc">
            Test
        </div>
    </section>
    <section class="ietrax-delivery">
        <a class="ietrax-delivery-img" href="services/express">
            <img src="{{ asset('img/express-delivery-new.png') }}" alt="">
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
            <p>
                Full tracked Delivery to over 120 Countries.<br>
                Parcel Tracking personalised tracking portal to reduce customer queries.<br>
                Send direct notifications to customers.<br>
                Site Integration - Seamless integration process, we can plug our system into your website and set you up without any fuss. Our smart shipping API's allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
            </p>
            <p>
                USA - Next Day Delivery Service.<br>
                Australia - 2 Working Days.<br>
                Asia - 2 Working Days.<br>
                Europe - Next Day, AM, for central Europe.<br>
                *All transit times are subject to customs clearance.
            </p>
        </div>
    </section>
</div>
    @include('customer.services.partials.consultation-pane')
@endsection