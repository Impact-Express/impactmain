@extends('customer.services.layout.service')
@section('title', "Denied Parties")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/denied-parties-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">DENIED PARTIES</h2>
    
    <h2 class="service-title">WHAT ARE DENIED PARTIES?</h2>
    <p class="service-text">
        Denied Parties are individuals or organisations that are subject to sanctions imposed by:
    </p>
    <ul class="service-list">
        <li>United Nations</li>
        <li>European Union</li>
        <li>United States</li>
    </ul>
    <p class="service-text">
        and other relevant authorities. It is prohibited for Impact Express or our carriers to transport goods including 
        documents on behalf of, or directly to these individuals or organisations.
    </p>
    <h2 class="service-title">WHAT IS A SANCTION LIST?</h2>
    <p class="service-text">
        Governments or international organisations (EU or UN) have comprised a sanctions list of known denied parties. 
        Denied parties are people or organisations, who cannot send or receive any goods or documents.
    </p>

    <h2 class="service-title">WHO IDENTIFIES DENIED PARTIES?</h2>
    <p class="service-text">
        DHL or our carriers will flag up a shipment with incomplete consignee details. It could be raised as denied party 
        and the shipment could be held for full address and contact details. DHL or our carriers will contact us at 
        Impact Express, and pass on the information.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">WHAT HAPPENS IF THERE IS A DENIED PARTIES MATCH?</h2>
    <p class="service-text">
        A match found between
    </p>
    <ul class="service-list">
        <li>A denied party</li>
        <li>The shipper</li>
        <li>Recipient on paperwork provided</li>
    </ul>
    <p class="service-text">
        We contact the shipper and ask information to release goods. This may be cleared by obtaining the consignee’s passport details.
    </p>

    <h2 class="service-title">HOW TO AVOID DENIED PARTIES?</h2>
    <p class="service-text">
        If you ensure that any parcels you send have the consignees:
    </p>
    <ul class="service-list">
        <li>Full name</li>
        <li>Address</li>
        <li>Contact details</li>
    </ul>
    <p class="service-text">
        For more information call us on <b>01753 683700</b> or email us at <b>office@impactexpress.co.uk</b>
    </p>
    <br><br>
</div>
@endsection