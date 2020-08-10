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
</style>
<h2>"Send My Parcel" Request Received From: {{$data['sender-company-name']}} ({{ $data['sender-email-address'] }}) </h2>

<h3>The Details are as follows:</h3>
<h4>Sender Address:</h4>
<ul>
    <h4>Company Name: {{$data['sender-company-name']}}</h4>
    <h4>Address Line 1: {{$data['sender-address-1']}}</h4>
    <h4>Address Line 2: {{$data['sender-address-2']}}</h4>
    <h4>Town: {{$data['sender-town']}}</h4>
    <h4>Zip / Postal Code: {{$data['sender-zipcode']}}</h4>
    <h4>Country: {{$data['sender-country']}}</h4>
    <h4>Contact Name: {{$data['sender-contact-name']}}</h4>
    <h4>Email Address: {{ $data['sender-email-address'] }}</h4>
    <h4>Telephone Number: {{ $data['sender-telephone-number'] }}</h4>
    <h4>Sender EORI / VAT Number: {{$data['sender-eori-number']}}</h4>
</ul>
<br>
<h4>Reciever Address:</h4>
<ul>
    <h4>Company Name: {{$data['reciever-company-name']}}</h4>
    <h4>Address Line 1: {{$data['reciever-address-1']}}</h4>
    <h4>Address Line 2: {{$data['reciever-address-2']}}</h4>
    <h4>Town: {{$data['reciever-town']}}</h4>
    <h4>Zip / Postal Code: {{$data['reciever-zipcode']}}</h4>
    <h4>Country: {{$data['reciever-country']}}</h4>
    <h4>Contact Name: {{$data['reciever-contact-name']}}</h4>
    <h4>Telephone Number: {{ $data['reciever-telephone-number'] }}</h4>
</ul>
<br>
<h4>Shipment Details:</h4>
<ul>
    <h4>Shipment Contents: {{$data['shipment-description']}}</h4>
    <h4>Shipment Value: {{$data['shipment-value']}}</h4>
    <h4>Reason for Sending: {{$data['shipment-export-reason']}}</h4>
</ul>


