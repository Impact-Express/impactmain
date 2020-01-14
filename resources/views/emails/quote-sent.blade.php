<h2>Quote Request Received From: {{$data['company-name']}} <{{ $data['email-address'] }}> </h2>

<h3>The Details are as follows:</h3>
<h4>Company Name: {{$data['company-name']}}</h4>
<h4>Contact Name: {{$data['contact-name'] . $data['contact-surname']}}</h4>
<h4>Email Address: {{ $data['email-address'] }}</h4>
<h4>Telephone Number: {{ $data['telephone-number'] }}</h4>
<h4>Delivery Destinations: {{ $data['delivery-destinations'] }}</h4>
<h4>Parcels Sent Per Month: {{ $data['parcels-sent-per-month'] }}</h4>
<h4>Additional Comments: {{ $data['comments'] }}</h4>
