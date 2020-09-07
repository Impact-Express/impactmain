@extends('customer.services.layout.service')
@section('title', "Prohibited Items List")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/prohibited-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('prohibited-panel')
<div class="container">
    <h2 class="service-title">PROHIBITED ITEMS</h2>
    <p class="service-text">
        Impact Express do not accept these items. International destinations have additional prohibited items that can be 
        found on their customs websites. It is at Impact Express’ sole discretion to refuse to carry other items not listed.
    </p>
    
    <h2 class="service-title">PROHIBITED ITEMS:</h2>
    <ul class="service-list">
        <li>Aerosol cans</li>
        <li>Antiques (works of art and fine art, excessing the value of £5000)</li>
        <li>Bullion</li>
        <li>Cash and travellers cheques</li>
        <li>Cash-like negotiable instruments in bearer form (with the exemption of event tickets)</li>
        <li>Cigarettes/Electronic cigarettes</li>
        <li>Complete firearms</li>
        <li>Liquids including perfume, aftershave, aerosol, flammable substances, dry ice and biological substances. Goods specified 
            under the UN classified dangerous <br>goods, International Air Transport Association regulations (IATA), the Agreement on 
            Dangerous Goods by Road (ADR) or International Maritime Dangerous <br>Goods (IMDG) regulations
        </li>
        <li>Designer items (clothing, accessories etc)</li>
        <li>Drugs</li>
        <li>Firearms</li>
        <li>Original and imitation firearm parts (including rifle butts, trigger mechanisms, screws / bolts etc. that are manufactured for creating a functional firearm)</li>
        <li>Ammunition</li>
        <li>Explosives / explosive devices</li>
        <li>Furs</li>
        <li>Hazardous goods, perfumes, aftershaves, aerosols, flammable substances, dry ice and biological substances</li>
        <li>Human remains or ashes</li>
        <li>Items declared illegal internationally, counterfeit goods, ivory and narcotics and importation of alcohol</li>
        <li>Jewellery, costume jewellery, watches and objects constructed of precious metal and/or stones with a value in excess of £4,000 per waybill</li>
        <li>Laptop computers, one laptop computer per package. Can only contain one lithium battery, must be contained in the laptop.</li>
        <li>Lithium batteries</li>
        <li>All Lithium metal batteries. Lithium metal batteries are non rechargeable on contain metal lithium</li>
        <li>Loose Lithium ion batteries, lithium ion batteries do not contain metallic lithium and are rechargeable</li>
        <li>Electronic items, including mobile phones, lithium ion batteries. Only two batteries to be contained in electronic device they are meant to power</li>
        <li>Live animals. Including and not limited to, mammals, reptiles, fish, invertebrates, amphibians, birds, insects, larvae and pupae</li>
        <li>Loose Precious and semi-precious stones (cut or un-cut, polished or un-polished)</li>
        <li>Medical samples</li>
        <li>Mobile phones with accessories</li>
        <li>Perishable items</li>
        <li>Pornography</li>
        <li>Potential weapons</li>
        <li>Shipments (in excess of £25k)</li>
        <li>Tax stickers</li>
        <li>Tobacco, loose-leaf tobacco, pre rolled cigarettes</li>
    </ul>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
