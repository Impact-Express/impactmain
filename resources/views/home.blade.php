@extends('layouts.master')

@section('content')
<section id="account-pane">
    <div class="account-pane-container">
    <span class="pane personal">
        <div class="pane-left">
                <div class="personal-account">
                    <h1 class="personal-title">personal</h1>
                    <h3 class="personal-subtitle">Lorem ipsum dolor sit amet, consectetu</h3>
                    <a href="#" class="personal-button button-alt">Send Parcel</a>
                </div>
            </div>
        </span>
        <span class="pane business">
            <div class="pane-right">
                <div class="business-account">
                    <h1 class="business-title">business</h1>
                    <h3 class="business-subtitle">Lorem ipsum dolor sit amet, consectetu</h3>
                    <a href="#" class="business-button button-white">Create Account</a>
                </div>
            </div>
        </span>    
    </div>
</section>

<section id="service-section">
    <div class="service-box-container">
        <div class="service-box service-box-odd">
            <div class="service-box-img">
                <img class="service-img" src="img/services-web.png" alt="">
            </div>
            <h3 class="service-box-title">
                Lorem ipsum dolor sit amet, consectetu
            </h3>
            <p class="service-box-excerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
        </div>
        <div class="service-box service-box-even">
            <div class="service-box-img">
            <img class="service-img" src="img/services-web.png" alt="">
            </div>
            <h3 class="service-box-title">
                Lorem ipsum dolor sit amet, consectetu
            </h3>
            <p class="service-box-excerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
        </div>
        <div class="service-box service-box-odd">
            <div class="service-box-img">
                <img class="service-img" src="img/services-web.png" alt="">
            </div>
            <h3 class="service-box-title">
                Lorem ipsum dolor sit amet, consectetu
            </h3>
            <p class="service-box-excerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
        </div>
        <div class="service-box service-box-even">
            <div class="service-box-img">
                <img class="service-img" src="img/services-web.png" alt="">
            </div>
            <h3 class="service-box-title">
                Lorem ipsum dolor sit amet, consectetu
            </h3>
            <p class="service-box-excerpt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
        </div>
    </div>
    <div class="dhl-service-partner">
        <div style="width: 54%;">
            <img class="dhl-srv-logo" src="img/dhl-logo.png" alt="DHL Authorised Service Partner">
                <h3 class="dhl-srv-logo-text">
                    <b class="dhl-srv-logo-text-bold">DHL </b>
                    Authorised Service Partner
                </h3>
        </div>
        <div>
        <h3 class="partnership-title">Our Partnership</h3>
        <p class="partnership-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
        <p class="partnership-text">
            Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
        </p>
    </div>
</div>
</section>


<section class="about-us" id="about-us">
    <h1 class="about-us-title">About Us</h1>
    <div class="about-arrow caret"></div>
</section>
@endsection
