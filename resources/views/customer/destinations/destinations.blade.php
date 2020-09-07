@extends('customer.layouts.master')

@section('title', "Worldwide Shipping & Parcel Delivery Destinations")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
<link href="{{ asset('css/destinations.css') }}" rel="stylesheet">

@endsection

@section('content')

<div id="destinations-content">
    <div class="international-top-banner">
        <div class="container-fluid international-top-banner-image">
            <img class="top-banner-image" src="/img/worldwide-shipping-destinations-w800.png">
            <div class="top-country-text">
                <h2>Delivery Destinations</h2>
                <p>
                    At Impact Express we offer delivery to over 200 worldwide destinations on all continents. Europe, Asia, Australia, Africa and USA are all prime shipping destinations. 
                    Browse through our popular destinations and get the affordable shipping rates. We offer delivery services to remote areas. We also have a list of remote areas, be 
                    sure to check this out. Prices are subject to international fuel surcharge – for the latest fuel surcharge Click Here. Non Document charges for shipments up to 2Kg outside 
                    the EU. VAT Applicable for all shipments due to the UK and the European Union.
                </p>
            </div>
        </div>
    </div>
    @include('customer.destinations.partials.country-grid')
</div>
    @include('customer.destinations.partials.consultation-pane')
@endsection