@extends('customer.services.layout.service')
@section('title', "Packaging Guide")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/packaging-new-1.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">PACKAGING GUIDE</h2>
    <p class="service-text">
        At Impact Express we have over 30 years of combined courier knowledge, so we know a thing or two about how to package goods. 
        Here is our easy to follow guide. Click here for our mobile phone packaging guide.
    </p>

    <h2 class="service-title">WHAT WILL YOU NEED?</h2>
    <ul class="service-text">
       <li>Appropriate sized box</li>
       <li>Adhesive parcel tape</li>
       <li>Cardboard box dividers</li>
       <li>Protective materials (newspaper, tissue paper)</li>
       <li>Access to a printer</li>
    </ul>
    <h2 class="service-title">STEP 1</h2>
    <p class="service-text">
        Find an appropriately sized cardboard box, that will be large enough for all the good(s). Place all goods in the box, and be sure to fill 
        the gaps in the box with protective materials if needed. You can also add dividers into the box if goods are considerably smaller than outer 
        box. Filling the gaps will help reduce the goods moving around the box in transit.
    </p>
    <h2 class="service-title">STEP 2</h2>
    <p class="service-text">
        Once the goods are packed in the box. The next step is to seal the box. This can be done by using strong parcel tape or any durable thick tape. 
        Be sure to confirm the box is secure and sturdy for transit.
    </p>
    <h2 class="service-title">STEP 3</h2>
    <p class="service-text">
        Once the box is sealed safely. Measure the height and weight of your box to confirm you have sent over the correct dimensions to Impact Express. 
        Remember to give your measurements in centimetres (cm) and kilograms (kg). Please note all parcels must be measured before receiving a quote online 
        or over the phone from us. You can measure your shipment using your kitchen scales or weighing scales.
    </p>
    <h2 class="service-title">STEP 4</h2>
    <p class="service-text">
        Print off the shipping label and archive label we have emailed to you. Attach the shipping label to the most visible face of the shipment. 
        Use clear tape to secure the label to the box, all text on the shipping label must be legible. If you do not have any clear tape at hand 
        and have arranged for a DHL courier to collect your parcel, the driver may carry a clear documents sticker. We advise as well as attaching 
        the label, that you hand write the delivery address and senders contact number on the box, in the unlikely event that the label may become 
        damaged or removed from the shipment.
    </p>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('maintext-right')
<div class="container">
    <h2 class="service-title">STEP 5</h2>
    <p class="service-text">
        When all these steps have been followed, it’s time to start your parcel’s journey. You can drop your parcel off to your closest DHL Service Point 
        or we can arrange a DHL courier collection from your work or home address. We always aim to give a 1-4 hour window for all courier collections. 
        Remember to hand over the archive label to the DHL driver. Click here to find the nearest DHL Service Point to you.
    </p>

    <h2 class="service-title">STEP 6</h2>
    <p class="service-text">
        When your parcel has been received by DHL, you can fully track its journey via our easy to use online portal. Click here to track your parcel. 
        You can always call us at Impact Express to check the status of your shipment.
    </p>

    <h2 class="service-title">MORE HELPFUL TIPS</h2>
    <p class="service-text">
        If you are shipping an item which cannot be boxed, we advise you still protect the goods using the materials and guidelines suggested above.
    </p>
    <p class="service-text">
        For example, if you are shipping larger items, such as golf clubs or pipes. We advise you to wrap each piece individually with bubble wrap 
        and then with plastic packaging. We suggest you attach the shipping label using a plastic adhesive document wallet or with durable clear tape. 
        This will help reduce damage to the label and will ensure it is delivered to the correct destination.
    </p>
    <p class="service-text">
        If you are sending a package with multiple loose items such as non-boxed loose jewelry we advise you wrap the items individually in tissue paper 
        before bubble wrapping. You can then place the items in an appropriately sized cardboard box with dividers or in a protective bubble wrapped large 
        envelope.
    </p>
    <p class="service-text">
        If you have any questions, please give us a call on <b>01753 683700</b>.
    </p>
    <ul class="service-list">
    <b>
        <li>Please note Impact Express are not liable for any damages or lost goods.</li>
        <li>If you are reusing a cardboard box, ensure all previous labels are removed and the box is still in a good condition to reuse.</li>
        <li>Labels such as “Fragile” and “This way up” can be placed on exterior cardboard boxes, however, we advise to appropriately pack and wrap goods as damage may potentially occur.</li>
        <li>All materials listed above can be purchased at your local post office or stationary store.</li>
        <li>Be aware that Impact Express has a strict prohibited items list. Please make yourself familiar with these items before attempting to send a shipment. Visit our prohibited items page by clicking here.</li>
        <li>If you wish to send an oversized parcel, click here for additional information.</li>
    </b>
    </ul>
    
    <br><br>
</div>
@endsection