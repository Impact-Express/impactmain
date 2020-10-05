@extends('customer.destinations.layout.destination')
@section('title', "Parcel Delivery and Shipping to Canada")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('quotebox')
<style>
    .quote-box {
        background-image: url(<?php echo $bannerImage; ?>);
    }
</style>
@include('customer.destinations.partials.quick-quote')
@endsection

@section('maintext')
<div class="container">
    <h1 class="service-title">SHIPPING TO CHINA</h1>
    <div class="service-text">
        <br>
        Recognised as one of the largest and fastest growing economies in the world, we offer affordable, fast, and reliable parcel shipping and courier services to China.
        <br><br>
        With a population of more than 1.4 billion, over the last decade China has developed a diverse and vibrant economy that includes manufacturing, technology, tourism, and energy, making China the second largest importer of goods in the world.
        <br><br>
        With a rich cultural heritage, vast and beautiful landscapes, and some of the world’s most modern and impressive skyscrapers, being able to ship quickly and securely to China is now essential for many businesses and individuals.
        <br><br>
        Wherever you need to ship to in China, we offer affordable and competitive rates. A two-day delivery option is available, depending on the specific destination.
    </div>
    <h2 class="service-title">SHIPPING TO CHINA: OUR SERVICES</h2>
    <p class="service-text">
        We’ve designed our courier services to China with flexibility and convenience in mind. Impact Express offers different shipping options, including Express Delivery (two working days) for main destinations, and Economy Delivery for non-time sensitive or heavier packages.
        <br><br>
        Sending a parcel of package to China with us is easy. Depending on whether you have a ‘business’ or ‘personal’ account, we can either arrange collection of your parcel from you, or you can drop it off at a designated location.
        <br><br>
        All parcels can be tracked on their journey with our online tracking tool. It will provide you with confidence and peace of mind: whether you’re shipping to the capital, Beijing, the coastal city of Tianjin in the north east, the famous and dynamic city of Shanghai in the east, or the quieter regions of the west and south.
        <br><br>
    </p>
    <h2 class="service-title">PARCEL PACKAGING FOR SHIPPING TO CHINA</h2>
    <div class="service-text">
        We take a great deal of care with all packages shipped by us. Nonetheless, when shipping overseas, it’s always important to ensure your item is properly and securely packaged to prevent damage in transit.
        <br><br>
        Ensure the contents are carefully wrapped inside the parcel with bubble wrap, padding and secure tape. Then ensure that the outer packaging is robust and firmly secured with suitable tape. Make sure the label we have provided you with is properly and clearly completed, and then securely attached. We also recommend including a return address.
    </div>
    <br><br>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">CHINESE CUSTOMS RESTRICTIONS</h2>
        <div class="service-text">
            As with all countries, China has its own customs regulations and restrictions in respect of any imports, even via courier. Failure to comply with these may result in your parcel being delayed, returned or even destroyed.
            <br><br>
            China has placed restrictions on the importation of:
            <ul class="service-list">
                <li>Alcohol</li>
                <li>Country currency</li>
                <li>Tobacco</li>
                <li>Gold and silver products</li>
            </ul>
            <br>
            China also prohibits the importation of a number of items including:
            <ul class="service-list">
                <li>Weapons, ammunition and explosives</li>
                <li>Counterfeit items (currencies, securities, etc.)</li>
                <li>Audio or video materials (from CDs, video, computer programs, etc.)</li>
                <li>Sick animals or plants, and rare animals or plants</li>
            </ul>
            Before planning a delivery to China with Impact Express, please ensure your parcel does not contain any restricted goods. Check with the Chinese Customs Authority. For a full list of prohibited items, please see our <a href="/information/prohibited-items">Restricted Items section.</a>
        </div>
        <h2 class="service-title">HOW MUCH DOES IT COST TO SHIP TO CHINA?</h2>
        <div class="service-text">
            We’re pleased to be able to offer highly competitive shipping rates to China. How much it costs will depend on the size, weight and nature of the parcel you are shipping, and the delivery service that you choose. Please use our Online Quote Tool or contact us direct so that we can provide you with an accurate quote.
        </div>
    </div>
@endsection
@section('faq')
<div class="tab" style="height: 100px">
</div>
@endsection
@section('destinations-boxes')
    <div class="box">
        <div class="destination destination1">
        </div>
    </div>
    <div class="box">
        <div class="destination destination2">
        </div>
    </div>
    <div class="box">
        <div class="destination destination3">
        </div>
    </div>
    <div class="box">
        <div class="destination destination4">
        </div>
    </div>
@endsection