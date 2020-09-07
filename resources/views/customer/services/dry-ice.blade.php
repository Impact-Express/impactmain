@extends('customer.services.layout.service')
@section('title', "Dry Ice Shipping and Delivery Service")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/Dry-ice.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">DRY ICE SHIPMENTS WITH IMPACT EXPRESS</h2>
    <p class="service-text">
        Dry ice is used as a refrigerant for specific items e.g perishable goods. As long as the dry ice is not chilling dangerous goods. 
        We advise you give us a call on 01753 683700 and we will help you get your shipment ready and offer a quote.
    </p>

    <h2 class="service-title">HOW TO PREPARE DRY ICE SHIPMENTS</h2>
    <p class="service-text">
        1) The package
    </p>
    <ul class="service-list">
        <li>Dry ice releases carbon dioxide gas which can build up enough pressure to rupture packaging. 
            You must ensure the packaging you use allows the release of this pressure. Do not use steel drums 
            or jerricans as outer packaging, and do not place dry ice within sealed plastic bags.
        </li>
        <li>Use good quality fiberboard (corrogated cardboard), plastic or wooden boxes.</li>
        <li>The maximum amount of dry ice per package is 200 kg. Exceptions: Overpacks containing 
            dry ice and shipments which meet Special Provision A151.</li>
    </ul>
    <p class="service-text">
        2) The labels and markings
    </p>
    <ul class="service-list">
        <li>Package markings required: dry ice note, full shipping name, dry ice label, hazard label or Class 9 label.</li>
        <li>UN 1845 c. The net quantity of dry ice in the package or overpack, in kilograms (1 kg = 2 lb).</li>
        <li>Shipper name, address and recipient to be durably marked with a marker pen</li>
        <li>Please note the Impact Express electronic shipping label has this information pre-printed on it</li>
        <li><b>Do not write in the diamond border of the label</b></li>
        <li>Labels can be attached using strong tags</li>
    </ul>
    
    <h2 class="service-title">HOW MUCH WILL MY DRY ICE SHIPMENT COST?</h2>
    <h4 class="service-text">DRY ICE SHIPMENTS PRICES BASED ON:</h4>
    <ul class="service-list">
        <li>The parcel weight in kg</li>
        <li>The parcels dimensions in cm (length x width x height)</li>
        <li>Delivery postcode</li>
    </ul>

    <h2 class="service-title">HOW MUCH WILL MY DRY ICE SHIPMENT COST?</h2>
    <p class="service-text">
        Tracking is available via our online portal, call Impact HQ for shipment queries.
    </p>
    <p class="service-text"><b>*If you would like a quote directly please contact us and quote ​the above information.</b></p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">HOW DO I GET A QUOTE?</h2>
    <p class="service-text">
        In the first instance it is best to call us on 01753 683700 and speak to our DG certified adviser. We can then discuss 
        what you need and advise you on packaging and the parcel process. We will need:
    </p>
    <ul class="service-list">
        <li>The weight of the parcel in kg</li>
        <li>The dimensions of the parcel in centimeters (length x width x height)</li>
    </ul>
    
    <h2 class="service-title">CAN I TRACK MY DANGEROUS GOODS?</h2>
    <p class="service-text">
        Yes, from the moment we have processed your shipment at our warehouse. Please note all Dangerous Goods must be sent to 
        our warehouse for inspection and quality control purposes. All shipment updates can be tracked via our online tracking portal.
    </p>
    <p class="service-text">
        *Please make yourself familiar with Impact Express’ prohibited items list, click here.
    </p>
    <br><br>
</div>
@endsection