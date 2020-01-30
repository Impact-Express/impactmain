@extends('customer.layouts.master')

@section('content')
    <div class="quote-box">
        @yield('quotebox')
    </div>
    <div class="service-information">
        <div class="main-text">
            @yield('maintext')
        </div>
        <div class="service-infogfx">
            @yield('infographic')
        </div>
    </div>
    <div class="tab">
        <div class="container flex-center">
            <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
            <button class="tablink hover-light-grey bottombar" id="guides" href="javascript:void(0)">Guides</button>
        </div>
        <div class="container flex">
            <div id="FAQs" class="tabcontent" style="display:none;">
                <h2 class="toUpper">What Service is best for you?</h2>
                <p>Choosing from one of DHL's Service Points is the most popular service we provide.</p>
                <p>You can locate your nearest point, by clicking <a href="https://parcel.dhl.co.uk/dhl-service-point/find-your-nearest/">here.</a></p>
                <br>
                <p>
                    If you would like to arrange a DHL courier to pick up your parcel, we can help arrange it online and over the phone.
                    Whether it's your home address or work address, we'll pick it up.
                </p>
                <p>
                    Dropping your parcel off to Impact HQ isn't unheard of. If you find yourself near us, you can hand it over to us,
                    we'll then dispatch it to DHL
                </p>
                <br>
                <h2 class="toUpper">What do i Need?</h2>
                <p>
                    You will need to have access to a printer, as you will have to print your unique shipping label.
                    The next step would be to ensure your parcel/documents are safely packaged. <br>
                    Lastly you will need to attach the label to the outer most packaging. If you require any guidance on this,
                    click here as we have put together a step by step guide.
                </p>
            </div>
            <div id="Guides" class="tabcontent" style="display:none;">
                <h2 class="toUpper">Guide 1</h2>
                <p>Lorem Ipsum</p>
                <p>YLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.</p>
                <br>
                <p>
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                </p>
                <p>
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                </p>
                <br>
                <h2 class="toUpper">Guide 2</h2>
                <p>
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                    Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum
                </p>
            </div>
        </div>
    </div>
    <div class="other-destinations">
        <h4 class="destinations-title">Popular Shipping Destinations</h4>
        <div class="destinations">
            @yield('destinations-boxes')
        </div>
    </div>

    @include('customer.services.partials.consultation-pane')
@endsection