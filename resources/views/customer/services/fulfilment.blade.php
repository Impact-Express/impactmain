@extends('customer.services.layout.service')
@section('title', "E-Commerce Shipping Service")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/fulfilment-services.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">FULFILMENT ​SERVICES</h2><br>

    <h3 class="service-title">WHY DO I NEED A FULFILMENT SERVICE?</h3>
    <p class="service-text">
        Do you run your business on Amazon, EBay, Etsy, Magento, Shopify or your own website? 
        We can tailor our fulfillment solutions to suit your growing e-commerce business. 
    </p>
    <p class="service-text">
        Your home office, garage or spare room turned into a make shift despatch Centre? 
        It’s stacked full of cardboard boxes, products and printers. But you want your evenings 
        back and never want to walk to your post office laden down with parcels and packets again.
    </p>
    <p class="service-text">
        With the help of Impact Express, you can concentrate on growing your online e-commerce business 
        because we concentrate on bringing you and your customer value by streamlining your shipping services. 
        By Placing customer satisfaction at the top of the agenda, as a result your seller ratings will rise 
        along with your profit margins and ROI on products.
    </p>
    
    <h3 class="service-title">THE ADVANTAGE OF CHOOSING IMPACT EXPRESS</h3>
    <p class="service-text">
        We have market leading Warehouse Management Systems and staff in place to offer you the best services and 
        lowest rates for both UK Domestic and International deliveries in both Express and Mail products. We offer 
        huge discounts thanks to our partnerships and agreements with the major carriers and share the discount 
        between multiple clients across different sectors within the logistics industry, What does this mean for you, 
        we can offer you lower more competitive rates than you would achieve with your own commercial partnerships 
        with multiple carriers, plus we take the strain and deal with the customer services, tracking, customs and 
        any other issues that may arise leaving you free to innovate, design new products and concentrate on selling.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 600px;">
    <div class="container">
        <h2 class="service-title" style="width: 22%;margin: auto;">ECOMMERCE CALENDAR 2019</h2>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;width: 80%;margin: auto;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg .tg-cly1{text-align:left;vertical-align:middle}
            .tg .tg-1wig{font-weight:bold;text-align:left;vertical-align:top}
            .tg .tg-fymr{border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
        </style>
        <table class="tg">
            <tbody>
              <tr>
                <td class="tg-fymr">January &nbsp;&nbsp;1st</td>
                <td class="tg-cly1">New Years Day</td>
                <td class="tg-1wig">July               TBC</td>
                <td class="tg-cly1">Amazon Prime Day</td>
              </tr>
              <tr>
                <td class="tg-cly1">                  21st</td>
                <td class="tg-cly1">Blue Monday </td>
                <td class="tg-1wig">August</td>
                <td class="tg-cly1">Back to school   sales</td>
              </tr>
              <tr>
                <td class="tg-1wig">February 5th</td>
                <td class="tg-cly1">Lunar New Year</td>
                <td class="tg-1wig">September   9th</td>
                <td class="tg-cly1">9-9 Day (online  sales)</td>
              </tr>
              <tr>
                <td class="tg-cly1">                  14th</td>
                <td class="tg-cly1">Valentines Day</td>
                <td class="tg-cly1">                   13th</td>
                <td class="tg-cly1">Mid Autumn      Festival</td>
              </tr>
              <tr>
                <td class="tg-1wig">March      14th</td>
                <td class="tg-cly1">White Day</td>
                <td class="tg-cly1">                  21st</td>
                <td class="tg-cly1">Oktoberfest</td>
              </tr>
              <tr>
                <td class="tg-cly1">                  17th</td>
                <td class="tg-cly1">St Patrick’s Day</td>
                <td class="tg-1wig">October 10th</td>
                <td class="tg-cly1">10-10  Day</td>
              </tr>
              <tr>
                <td class="tg-cly1">                  24th</td>
                <td class="tg-cly1">Earth Day</td>
                <td class="tg-cly1">27th</td>
                <td class="tg-cly1">Diwali </td>
              </tr>
              <tr>
                <td class="tg-1wig">April        1st</td>
                <td class="tg-cly1">April Fool’s Day</td>
                <td class="tg-cly1">31st</td>
                <td class="tg-cly1">Halloween</td>
              </tr>
              <tr>
                <td class="tg-cly1">                 21st</td>
                <td class="tg-cly1">Easter</td>
                <td class="tg-1wig">November 11th</td>
                <td class="tg-cly1">Singles day (11.11)</td>
              </tr>
              <tr>
                <td class="tg-1wig">May         1st</td>
                <td class="tg-cly1">May Day</td>
                <td class="tg-cly1">29th</td>
                <td class="tg-cly1">Black Friday</td>
              </tr>
              <tr>
                <td class="tg-cly1">               12th</td>
                <td class="tg-cly1">Mother’s Day</td>
                <td class="tg-1wig">December 2nd</td>
                <td class="tg-cly1">Cyber Monday</td>
              </tr>
              <tr>
                <td class="tg-1wig">June       4th</td>
                <td class="tg-cly1">Eid al Fitr</td>
                <td class="tg-cly1">12th</td>
                <td class="tg-cly1">12:12 Day</td>
              </tr>
              <tr>
                <td class="tg-cly1">               16th</td>
                <td class="tg-cly1">Fathers Day</td>
                <td class="tg-cly1">25th</td>
                <td class="tg-cly1">Christmas Day</td>
              </tr>
              <tr>
                <td class="tg-cly1"></td>
                <td class="tg-cly1"></td>
                <td class="tg-cly1">26th </td>
                <td class="tg-cly1">Boxing Day        Sales</td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('maintext-right')
<div class="container">
    <br>
    <h3 class="service-title">IMPACT EXPRESS INTERNATIONAL SERVICE</h3>
    <p class="service-text">
        Our flagship product via integrators such as DHL, FedEx and DPD
    </p>
    <h3 class="service-title">IMPACT DIRECT SERVICE</h3>
    <p class="service-text">
        Direct mail delivery service, quicker than traditional mail with added customs control and tracking for cross 
        border international deliveries
    </p>
    <h3 class="service-title">IMPACT TRACKED MAIL SERVICE</h3>
    <p class="service-text">
        In partnership with Deutsche Post we offer a best in service last mile tracked mail delivery service from one 
        of the worlds best mail providers.
    </p>
    <h3 class="service-title">IMPACT RETURN SOLUTIONS</h3>
    <p class="service-text">
        Return solutions created for your clients to access from anywhere in the world. With drop offs available at 
        any postal office, label creation online available soon
    </p>
    <h3 class="service-title">IMPACT EXPRESS FULFILMENT</h3>
    <p class="service-text">
        We store, pick-pack, send and manage your shipments freeing you to enjoy your business, drive sales and 
        ensure success.
    </p>
    <p class="service-text">
        Our clean and clinical warehouse environment is available to visit upon request, so you can feel and touch 
        your products at any time. Due to our strategic location near to London, Heathrow and the M25, we are 
        perfectly placed to be able to receive your inbound products from all over the world directly into our 
        facility. Whilst helping with the customs clearance process, cutting down delivery and import costs 
        with our strategic partners.
    </p>
    <br><br>
</div>
@endsection