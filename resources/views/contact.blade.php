@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    <div class="contact-map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1903" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Impact%20Express%20Wholesale%20Ltd.&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.embedgooglemap.net/blog/purevpn-coupon/"></a>
            </div>
            <style>
                .mapouter{position:relative;text-align:right;height:400px;width:100%;}
                .gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}
            </style>
        </div>
    </div>
    <div class="contact-form">
        <div class="container" style="width: fit-content;">
            <div class="pull-left">
                <h4 class="toUpper" style="margin:0;">Impact Express Ltd</h4>
                <p>Unit 13 Blackthorne Crescent<br> Poyle, Berkshire<br> SL3 0QR</p>
                <p>Opening Hours </p>
                <p>09:30am - 20:00pm </p>
                <p>Monday - Friday</p>
                <p>
                    <i class="fa fa-phone" style="color: #FECE00" aria-hidden="true"></i>
                    <span>01753 683 700</span>
                    <br>
                    <i class="fa fa-location-arrow" style="color: #FECE00" aria-hidden="true"></i>
                    <a href="mailto:office@impactexpress.co.uk">office@impactexpress.co.uk</a>
                </p>
            </div>
            <div class="pull-right">
                <form action="/contact" method="post">
                    @csrf
                    <textarea class="form-textarea" name=contactMessage"" id="contactMessage" cols="10" rows="10" tabindex="1" placeholder="MESSAGE"></textarea>
                    <input class="form-text" type="text" name="contactFullName" id="contactFullName" tabindex="3" placeholder="FULL NAME">
                    <input class="form-email" type="email" name="contactEmailAddr" id="contactEmailAddr" tabindex="2" placeholder="EMAIL ADDRESS">
                    <input class="button-main" id="form-btn" type="submit" tabindex="4" value="Send Message">
                </form>
            </div>
        </div>
    </div>
@endsection