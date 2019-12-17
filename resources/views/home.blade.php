@extends('layouts.master')

@section('content')

<div class="account-pane-container">
    <div class="pane pane-left">
        <div class="personal-account">
            <h1 class="personal-title">personal</h1>
            <h3 class="personal-subtitle">Lorem Ipsum Dolor Sit Amet</h3>
            <a href="#" class="button-alt">Send Parcel</a>
        </div>
    </div>
    <div class="pane pane-right">
        <div class="business-account">

        </div>
    </div>    
</div>
<div class="service-box-container">
    <div class="service-box service-box-odd"></div>
    <div class="service-box service-box-even"></div>
    <div class="service-box service-box-odd"></div>
    <div class="service-box service-box-even"></div>
</div>
<div class="dhl-service-partner">
    <div>
        <img class="dhl-srv-logo" src="img/dhl-logo.png" alt="DHL Authorised Service Partner">
        <h3 class="dhl-srv-logo-text">DHL Authorised Service Partner</h3>
    </div>
</div>

@endsection
