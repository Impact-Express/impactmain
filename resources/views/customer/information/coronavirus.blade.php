@extends('customer.services.layout.service')
@section('title', "Coronavirus Update")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/covid.png') no-repeat;
        background-position: 50% 65%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <p class="service-text">
        Due to the continued difficulties with the COVID-19 situation and the difficulties with airline space, DHL 
        and FedEx have announced an adjustment to the ESS surcharge on their Express Services.
    </p>
    <h2 class="service-title">EMERGENCY SITUATION SURCHARGE ADJUSTMENT – 24TH MAY 2020</h2>
    <p class="service-text">
        As market conditions are continuously evolving with the ongoing COVID-19 situation, the Emergency Situation Surcharge 
        (ESS) will be adjusted effective May 24 2020.
    </p>
    <p class="service-text">
        The ESS adjustment reflects the changing dynamics in the market and the ongoing challenges to secure available air 
        capacity. The adjusted ESS charge will reflect the peak cost levels on different trade lanes as opposed to having
        one standard global charge.
    </p>
    <p class="service-text">
        Furthermore, the charging mechanism will change from a charge per shipment to a charge per kilogram (kg) in order 
        to maintain a more gradual pricing model.
    </p>
    <p class="service-text">
        Please note that the ESS is a temporary charge, which allows us to cover part of the operating cost increases and 
        the necessary air network adjustments. We will continue to evaluate and adjust the ESS as market conditions evolve 
        for the duration of this emergency situation*.
    </p>
    <p class="service-text">
        <b>Below, you will find the details for the adjusted surcharge per origin and destination combination (charge in £ per kg):</b>
    </p>
    <table style="width:fit-content;margin:auto;">
        <tbody>
            <tr>
                <td></td>
                <td class="has-text-align-center" data-align="center"></td>
                <td class="has-text-align-center" data-align="center"><strong>Service – Express by DHL</strong></td>
                <td class="has-text-align-center" data-align="center"></td><td class="has-text-align-center" data-align="center"></td>
            </tr>
            <tr>
                <td></td>
                <td class="has-text-align-center" data-align="center"></td>
                <td class="has-text-align-center" data-align="center"><strong>Destinations</strong></td>
                <td class="has-text-align-center" data-align="center"></td><td class="has-text-align-center" data-align="center"></td>
            </tr>
            <tr>
                <td><strong>Origin</strong></td>
                <td class="has-text-align-center" data-align="center">HKG and China</td>
                <td class="has-text-align-center" data-align="center">Australia &amp; New Zealand</td>
                <td class="has-text-align-center" data-align="center">Rest of Asia</td>
                <td class="has-text-align-center" data-align="center">Rest of World</td>
            </tr>
            <tr>
                <td>China</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£1.60</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£1.60</td>
            </tr>
            <tr>
                <td>Hong Kong</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£1.60</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
            </tr>
            <tr>
                <td>Rest of Asia</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£1.50</td>
                <td class="has-text-align-center" data-align="center">£0.80</td>
                <td class="has-text-align-center" data-align="center">£0.18</td>
            </tr>
            <tr>
                <td>UK &amp; Rest of World</td><td class="has-text-align-center" data-align="center">£0.18</td>
                <td class="has-text-align-center" data-align="center">£0.18</td>
                <td class="has-text-align-center" data-align="center">£0.18</td>
                <td class="has-text-align-center" data-align="center">£0.18</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table style="width:fit-content;margin:auto;">
        <tbody>
            <tr>
                <td class="has-text-align-center" data-align="center"><strong>Service – Express by FedEx</strong></td>
                <td></td>
            </tr>
            <tr>
                <td class="has-text-align-center" data-align="center">Sent from UK – £0.18 per kg (minimum £0.80p charge)</td>
                <td></td>
            </tr>
            <tr>
                <td class="has-text-align-center" data-align="center">Effective date 29th April 2020</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">IN WHAT CIRCUMSTANCES WILL THE SURCHARGE APPLY?</h2>
    <p class="service-text">
        The Emergency Situation Surcharge will continue to be applicable to all Express International shipments sent via DHL and FedEx respectively.
    </p>
    <p class="service-text">
        The ESS will <b>not</b> be applicable to UK Overnight and European Road services.
    </p>
    <p class="service-text">
        We kindly ask you to ensure that your invoice approval cycles and processes have been updated accordingly to avoid any delays.
    </p>
    <p class="service-text">
        You will all have seen in the news or experienced firsthand the dramatic impact the current COVID-19 crisis is having on the global aviation 
        industry, resulting in significant reductions or complete cancellation of passenger flights in most countries.
    </p>
    <p class="service-text">
        This Emergency Situation Surcharge will allow them to cover part of the operating cost increases and the necessary air network adjustments 
        during the time of this emergency situation.
    </p>

    <h2 class="service-title">LATEST NETWORK UPDATES</h2>
    <p class="service-text">
        To help you keep up to date with operations in impacted countries, you will find the latest update on the DHL network status via the link below:
    </p>
    <p class="service-text">
        <a href="http://www.simplydhl.com/covid-19updates"><b>www.simplydhl.com/covid-19updates</b></a>
    </p>
    <p class="service-text">
        This website will be updated twice per week.
    </p>
    <p class="service-text">
        Thank you for your continued support and the trust placed in us at this very difficult time. We wish you and your family the best and we all look 
        forward to returning to usual once this challenging time has passed.
    </p>
    <p class="service-text">
        If you have any questions on how this may effect your shipment charging, please do to hesitate to contact us on 01753 68700 or email office@impactexpress.co.uk.
    </p>
    <br><br>
</div>
@endsection