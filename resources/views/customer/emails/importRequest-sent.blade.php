<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        margin-bottom: 5px; 
    }
    body {
        padding-left: 20px
    }
    .row {
       display: flex;
        }
</style>
<h2>Import Request Received From: {{$data['requestorCompanyName']}} ({{ $data['requestorEmailAddr'] }}) </h2>
<h3>The Details are as follows:</h3>
<br>
<div class="row">
    <ul>
        <h4>Requestor Details:</h4>
        <h4>Company Name: {{$data['requestorCompanyName']}}</h4>
        <h4>Address Line 1: {{$data['requestorAddr1']}}</h4>
        <h4>Address Line 2: {{$data['requestorAddr2']}}</h4>
        <h4>Address Line 3: {{$data['requestorAddr3']}}</h4>
        <h4>City: {{$data['requestorCity']}}</h4>
        <h4>Contact Name: {{$data['requestorContactName']}}</h4>
        <h4>Email Address: {{ $data['requestorEmailAddr'] }}</h4>
        <h4>Telephone Number: {{ $data['requestorTelNumber'] }}</h4>
    </ul>

    <ul style="display: inline-block;">
        <h4>Collection Details:</h4>
        <h4>Company Name: {{$data['collectionCompanyName']}}</h4>
        <h4>Address Line 1: {{$data['collectionAddr1']}}</h4>
        <h4>Address Line 2: {{$data['collectionAddr2']}}</h4>
        <h4>Address Line 3: {{$data['collectionAddr3']}}</h4>
        <h4>City: {{$data['collectionCity']}}</h4>
        <h4>Zip / Postal Code: {{$data['collectionZip']}}</h4>
        <h4>Country: {{$data['collectionCountry']}}</h4>
        <h4>Contact Name: {{$data['collectionContactName']}}</h4>
        <h4>Telephone Number: {{ $data['collectionTelNumber'] }}</h4>
        <h4>Email Address: {{ $data['collectionEmailAddr'] }}</h4>
        @if ($data['collectionAdditionalNotes'])
        <h4>Additional Notes: {{ $data['collectionAdditionalNotes'] }}</h4> 
        @endif
    </ul>
</div>
<br>
<div class="row">
    <ul>
        <h4>Delivery Details:</h4>
        <h4>Company Name: {{$data['deliveryCompanyName']}}</h4>
        <h4>Address Line 1: {{$data['deliveryAddr1']}}</h4>
        <h4>Address Line 2: {{$data['deliveryAddr2']}}</h4>
        <h4>Address Line 3: {{$data['deliveryAddr3']}}</h4>
        <h4>City: {{$data['deliveryCity']}}</h4>
        <h4>Zip / Postal Code: {{$data['deliveryZip']}}</h4>
        <h4>Country: {{$data['deliveryCountry']}}</h4>
        <h4>Contact Name: {{$data['deliveryContactName']}}</h4>
        <h4>Telephone Number: {{ $data['deliveryTelNumber'] }}</h4>
    </ul>

    <ul>
        <h4>Shipment Details:</h4>
        <h4>Billing Reference: {{$data['billingRef']}}</h4>
        <h4>Collection Date: {{$data['collectionDate']}}</h4>
        <br>
        <h4>Goods Description: {{$data['goodsDesc']}}</h4>
        <h4>Currency: {{$data['currency']}}</h4>
        <h4>Goods Value: {{$data['goodsValue']}}</h4>
    </ul>
</div>
<div class="row">
    <ul>
        <H4>Pieces:</H4>
        @foreach ($data['shipment-pieces'] as $piece)
        <div class="row" style="flex-direction: column;">
            <h4>Piece {{ $loop->iteration }}: </h4>
            <H4>Quantity: {{ $piece['pieceQuantity'] }}</H4>
            <H4>Weight: {{ $piece['pieceWeight'] }}</H4>
            <H4>Length: {{ $piece['pieceLength'] }}</H4>
            <H4>Width: {{ $piece['pieceWidth'] }}</H4>
            <H4>Height: {{ $piece['pieceHeight'] }}</H4>
        </div>
        <br>
        @endforeach
    </ul>
</div>




