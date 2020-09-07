@extends('customer.services.layout.service')
@section('title', "Montly Fuel Surcharge")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/monthly-fuel-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">MONTHLY FUEL SURCHARGE</h2>
    <p class="service-text">
        The fuel surcharge is calculated from changes in fuel prices result in fluctuating costs for the transport industry. 
        We monitor our supplier’s costs to keep you up to date with the latest fuel surcharges.
    </p>
    <table class="service-text">
        <tbody>
            <tr>
                <td><b>August 2020</b></td>
            </tr>
            <tr>
                <td>International   11.25%</td>
            </tr>
            <tr>
                <td>UK Overnight   7.75%</td>
            </tr>
        </tbody>
    </table>
    <h2 class="service-title">INTERNATIONAL</h2>
    <table class="service-text">
        <tbody>
            <tr>
                <td><b>Month</b></td>
                <td><b>Surcharge</b></td>
            </tr>
            <tr>
                <td>July 2020</td>
                <td>8.75%</td>
            </tr>
            <tr>
                <td>June 2020</td>
                <td>8.0%</td>
            </tr>
            <tr>
                <td>May 2020</td>
                <td>11.0%</td>
            </tr>
            <tr>
                <td>April 2020</td>
                <td>15.50%</td>
            </tr>
            <tr>
                <td>March 2020</td>
                <td>17.75%</td>
            </tr>
            <tr>
                <td>February 2020</td>
                <td>8.0%</td>
            </tr>
            <tr>
                <td>January 2020</td>
                <td>18.25%</td>
            </tr>
            <tr>
                <td>December 2019</td>
                <td>17.50%</td>
            </tr>
            <tr>
                <td>November 2019</td>
                <td>17.75%</td>
            </tr>
            <tr>
                <td>October 2019</td>
                <td>17.00%</td>
            </tr>
            <tr>
                <td>September 2019</td>
                <td>18.00%</td>
            </tr>
            <tr>
                <td>August 2019</td>
                <td>17.25%</td>
            </tr>
            <tr>
                <td>July 2019</td>
                <td>18.50%</td>
            </tr>
            <tr>
                <td>June 2019</td>
                <td>18.50%</td>
            </tr>
            <tr>
                <td>May 2019</td>
                <td>18.00%</td>
            </tr>
            <tr>
                <td>April 2019</td>
                <td>18.00%</td>
            </tr>
            <tr>
                <td>March 2019</td>
                <td>16.00%</td>
            </tr>
            <tr>
                <td>February 2019</td>
                <td>15.25%</td>
            </tr>
            <tr>
                <td>January 2019</td>
                <td>17.25%</td>
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
    <h2 class="service-title">FUEL SURCHARGE SERVICES BELOW:</h2>
    <ul class="service-list">
        <li>Remote Area + £19.00*</li>
        <li>Saturday Delivery + £45.00*</li>
        <li>Saturday Pickup +£45.00*</li>
        <li>Non-Stackable Pallet +£130.00*</li>
        <li>Over Weight Piece (per piece) + £70.00*</li>
        <li>Over Sized Piece (per piece) + £70.00*</li>
        <li>Elevated Risk +£17.50*</li>
        <li>Restricted Destination +£22.00*</li>
        <li>Exporter Validation +£22.00*</li>
        <li>DDP (Delivery Duty Paid) Set up Fee +£20.00</li>
    </ul>
    <h2 class="service-title">UK OVERNIGHT</h2>
    <table class="service-text">
        <tbody>
            <tr>
                <td><b>Month</b></td>
                <td><b>Surcharge</b></td>
            </tr>
            <tr>
                <td>July 2020</td>
                <td>7.25%</td>
            </tr>
            <tr>
                <td>June 2020</td>
                <td>7.25%</td>
            </tr>
            <tr>
                <td>May 2020</td>
                <td>8.0%</td>
            </tr>
            <tr>
                <td>April 2020</td>
                <td>9.75%</td>
            </tr>
            <tr>
                <td>March 2020</td>
                <td>10.25%</td>
            </tr>
            <tr>
                <td>February 2020</td>
                <td>10.25%</td>
            </tr>
            <tr>
                <td>January 2020</td>
                <td>10.00%</td>
            </tr>
            <tr>
                <td>December 2019</td>
                <td>10.00%</td>
            </tr>
            <tr>
                <td>November 2019</td>
                <td>10.25%</td>
            </tr>
            <tr>
                <td>October 2019</td>
                <td>9.75%</td>
            </tr>
            <tr>
                <td>September 2019</td>
                <td>10.00%</td>
            </tr>
            <tr>
                <td>August 2019</td>
                <td>9.75%</td>
            </tr>
            <tr>
                <td>July 2019</td>
                <td>10.50%</td>
            </tr>
            <tr>
                <td>June 2019</td>
                <td>10.50%</td>
            </tr>
            <tr>
                <td>May 2019</td>
                <td>10.25%</td>
            </tr>
            <tr>
                <td>April 2019</td>
                <td>10.00%</td>
            </tr>
            <tr>
                <td>March 2019</td>
                <td>9.75%</td>
            </tr>
            <tr>
                <td>February 2019</td>
                <td>10.00%</td>
            </tr>
            <tr>
                <td>January 2019</td>
                <td>10.75%</td>
            </tr>
        </tbody>
    </table>
    <br><br>
</div>
@endsection