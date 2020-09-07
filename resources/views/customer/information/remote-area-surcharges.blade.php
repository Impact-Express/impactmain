@extends('customer.services.layout.service')
@section('title', "Remote Area Surcharges")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/remote-area-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('ras-surcharges-panel')
<div class="container">
    <h2 class="service-title">REMOTE AREA SURCHARGES</h2>
    <p class="service-text">
        A remote area surcharge is applied per shipment when the delivery destination location is remote. Remote is defined as 
        islands and highlands; or a postcode/zipcode that is difficult to serve; or a suburb/town that is distant, inaccessible 
        or infrequently served.
    </p>
    <p class="service-text">
        Please note that we try to keep this list as up to date as possible and the quote screen should include the RAS surcharge, 
        however from time to time the RAS charge is not included in the original quote and an additional fee will be chargeable after 
        the shipments despatch.
    </p>
    <p class="service-text">
        <a href="/resources/remote-area-surcharge-list.pdf">Click here</a> for full RAS list.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
