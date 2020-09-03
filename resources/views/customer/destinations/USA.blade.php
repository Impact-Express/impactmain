@extends('customer.destinations.layout.destination')
@section('title', "Parcel Delivery and Shipping to the USA")
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
    <h1 class="service-title">SHIPPING TO THE USA</h1>
    <p class="service-text">
        With low-cost next-day shipping options, make Impact Express your first choice for fast and secure parcel delivery to the USA.
    </p>
    <p class="service-text">
        As the largest English-speaking country in the world, it’s no surprise thousands of parcels are delivered to the United States from the UK each day.
    </p>
    <p class="service-text">
        At some points, the USA spans almost 3,000 miles from east to west coast (100 times the greatest longitudinal distance in the UK) but with the help 
        of our trustworthy partner couriers, we can guarantee next day delivery anywhere in the country.
    </p>
    <p class="service-text">
        Whether you’re posting for business or personal reasons; to New York, Los Angeles or Washington, we can cater for all your UK to US shipping needs.
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">SHIPPING TO USA: OUR SERVICES</h2>
        <p class="service-text">
            Our shipping services are designed with your convenience in mind, ensuring both speedy and safe delivery. We offer express shipping to America via 
            our courier partners, which guarantees delivery on the next working day – perfect for sending those last-minute Christmas and birthday gifts.
        </p>
        <p class="service-text">
            For non-urgent parcels, we also offer standard shipping to America, with delivery in 1 – 2 business days. Whether you opt for express or standard 
            shipping, all parcels can be tracked on their journey to the US via our simple online tracking tool.
        </p>
        <p class="service-text">
            Your parcel will begin its journey to the USA in one of several ways. Depending on whether you are a ‘business’ or ‘personal’ customer, you can 
            either arrange for your parcel to be picked up by one of our partnered couriers, or to drop it off at a designated spot. All dispatch options will 
            be available to you at the point of booking.
        </p>
        <h2 class="service-title">PACKAGING A PARCEL TO SHIP TO AMERICA: WHAT YOU NEED TO KNOW</h2>
        <p class="service-text">
            As with all overseas shipping, parcels sent to the USA must be securely packaged. Although the utmost care is taken to protect your goods, 
            we’d always recommend wrapping the contents of your parcel in protective packaging such as bubble wrap to prevent damage.
        </p>
        <p class="service-text">
            Using a sturdy outer container is also advisable. Complete the wrapping of your parcel with sturdy adhesive tape in order to prevent it 
            opening in transit.
        </p>
        <p class="service-text">
            We will provide you with a printable label, which must be securely affixed to the front of your package, with the address completely visible. 
            For more advice on wrapping your parcel and label placement, please see our guide to parcel packaging.
        </p>
        <br><br>
    </div>
@endsection
@section('faq')
<div class="tab">
    <div class="container flex-center">
        <button class="tablink hover-light-grey bottombar" id="faqs" href="javascript:void(0)">FAQ's</button>
    </div>
    <div class="container flex">
        <div id="FAQs" class="tabcontent" style="display:none;">
            <h2>USA CUSTOMS RESTRICTIONS</h2>
            <p>
                As a destination outside of the E.U., parcels sent to the United States of America are subject to duties and taxes. Customs will hold 
                all goods and prevent delivery until the necessary payment is made.
            </p>
            <p>
                The USA also operates strict regulations on what goods can be imported into the country. Prohibited/restricted items include:
            </p>
            <ul>
                <li>Designer items, such as clothing, shoes or accessories</li>
                <li>Real animal fur</li>
                <li>Food and beverages</li>
            </ul>
            <p >
                Before planning a delivery to the USA with Impact Express, please ensure your parcel does not contain any restricted goods. 
                US Customs and Border Protection (CBP) will be able to provide a complete list of prohibited items.
            </p>
            <h2>COST OF SHIPPING TO THE USA</h2>
            <p>
                We are proud to offer competitive shipping from the UK to the United States. The delivery cost will depend on both the weight of your parcel, 
                as well as delivery window. For an accurate estimate of delivery costs, please head to our <a href="{{ route('quote.index') }}">automatic quote tool</a>.
            </p>
        </div>
    </div>
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