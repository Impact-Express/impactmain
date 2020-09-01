@extends('customer.services.layout.service')
@section('title', "Careers At Impact Express - View our latests roles & apply today!")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/work-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">WORK WITH US</h2>
    <p class="service-text">
        Due to our continued business success, we are looking to strengthen our team.
    </p>
    <p class="service-text">
        At Impact Express we have built our name by providing super fast Next Day deliveries to the USA and other destinations worldwide, 
        to provide this continued growth we are seeking hardworking, honest individuals to join our team. Our company ethos is built around 
        providing the best customer service and ensuring each delivery is completed as if it was your own. If you have what it takes to go 
        beyond the curve and work smarter, not harder than everyone please contact at anytime with your details. We are a small team with big 
        plans, so if you have the entrepreneurial spirit and want to achieve, get in contact or drop in for a coffee.
    </p>

    <h2 class="service-title">PLEASE NOTE: WE DO NOT ACCEPT ANY APPLICATIONS FROM EMPLOYMENT AGENCIES.</h2>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">Current positions vacant:</h2>
    <hr>
    <h2 class="service-title">OPERATIONS</h2>
    <p class="service-text">
        Part Time - <br>
        Monday - Friday<br>
         17:00 - 20:00
    </p>
    <p class="service-text"><b>Job Description:</b></p>
    <p class="service-text">
        We are looking to recruit a Part time Operations Assistant to work in our busy warehouse in the evenings. This customer facing position will 
        require you to receive parcels, process using our in-house computer system to send via our preferred agents.
    </p>
    <p class="service-text">
        <b>The successful candidates will have:</b>
    </p>
    <ul class="service-list">
        <li>Courier operations experience – preferred but not essential.</li>
        <li>Approachable, enthusiastic and positive personality.</li>
        <li>Enthusiastic team player with the ability to work independently.</li>
        <li>Strong computer skills</li>
    </ul>
    <hr>
    <p class="service-text">For more information and to apply email <a href="mailto:neil@impactexpress.co.uk">neil@impactexpress.co.uk</a></p>
    <br><br>
</div>
@endsection