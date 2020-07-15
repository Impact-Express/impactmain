@extends('customer.services.layout.service')
@section('title', "$page->title")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('quotebox')
<div class="container">
    <img src="/img/express-delivery-new.png" alt="Express Delivery">
</div>
<div class="quick-quote quick-quote-int">
<div class="pull-left">
    <div class="quick-quote-box">
        <div class="row">
            <h2>Get an Instant Quote</h2>
        </div>
        <div class="form-group">
            <div class="row">
                <p>
                    Send from any UK postcode
                </p>
            </div>
            <div class="row">
                <div class="col country-select">
                    
                        <label for="qq-deliver-to-p8q2mp">Deliver to:</label><br>
                        <select id="qq-deliver-to-p8q2mp" required="">
                            <option value=""></option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua">Antigua</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria*">Austria*</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium*">Belgium*</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia Herzegovina">Bosnia Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria*">Bulgaria*</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde Islands">Cape Verde Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China, Peoples Rep.">China, Peoples Rep.</option><option value="Colombia">Colombia</option><option value="Comoros Islands">Comoros Islands</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep.">Congo, Dem. Rep.</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia*">Croatia*</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus*">Cyprus*</option><option value="Czech Republic*">Czech Republic*</option><option value="Denmark*">Denmark*</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia*">Estonia*</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland*">Finland*</option><option value="France* - Paris">France* - Paris</option><option value="France* - All Other Locations">France* - All Other Locations</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany* - Cologne">Germany* - Cologne</option><option value="Germany* - Frankfurt">Germany* - Frankfurt</option><option value="Germany* - All Other Locations">Germany* - All Other Locations</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece*">Greece*</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea Rep.">Guinea Rep.</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras Rep.">Honduras Rep.</option><option value="Hong Kong">Hong Kong</option><option value="Hungary*">Hungary*</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland Republic of*">Ireland Republic of*</option><option value="Israel">Israel</option><option value="Italy*">Italy*</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, D.P.R of (North)">Korea, D.P.R of (North)</option><option value="Korea, Rep of (South)">Korea, Rep of (South)</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos Peoples Dem. Rep">Laos Peoples Dem. Rep</option><option value="Latvia*">Latvia*</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania*">Lithuania*</option><option value="Luxembourg*">Luxembourg*</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta*">Malta*</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed States Of">Micronesia, Fed States Of</option><option value="Moldova, Rep of">Moldova, Rep of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru, Rep of">Nauru, Rep of</option><option value="Nepal">Nepal</option><option value="Netherlands*">Netherlands*</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland*">Poland*</option><option value="Portugal*">Portugal*</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion, Island of">Reunion, Island of</option><option value="Romania*">Romania*</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia*">Slovakia*</option><option value="Slovenia*">Slovenia*</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Somaliland Rep. Of">Somaliland Rep. Of</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain*">Spain*</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts">St Kitts</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Vincent">St Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden*">Sweden*</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom*">United Kingdom*</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, US">Virgin Islands, US</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                        </select>
                </div>
                <div class="col weight-select">
                        <label for="qq-weight-p8q2mp">Weight [kg]:</label><br>
                        <input type="number" id="qq-weight-p8q2mp" min="0.5" max="1000" step="0.5" value="0.5" required="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="radio">
                        <label><input type="radio" name="qq-type-p8q2mp" value="docs">Documents</label>
                    </p>
                    <p class="radio">
                        <label><input type="radio" name="qq-type-p8q2mp" value="non_docs" checked="">Non-documents</label>
                    </p>    
                </div>
                <div class="col gp-col">    
                    <button type="submit" id="qq-submit-p8q2mp" class="btn btn-default btn-lg get-price">Get Quote</button>
                </div>
            </div>
        </div>
        <div class="pull-right">
            <div id="q-row" class="row" style="text-align:center;">
                <div style="float:left;" class="dhl-express q-quote col"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-dhl.png" alt="DHL Express"></div>
                <div class="country-quote col" style="width:26%;">
                    <div class="row q-quote" style="font-size:12px;">Express Delivery from</div>
                    <div class="row q-quote"><b>£<span id="qq-price-p8q2mp">20.87</span></b></div>
                </div>
                <button style="float:right;" type="submit" id="qq-book-now" class="col q-quote btn btn-default btn-lg book-now">Continue</button>
            </div>
        </div>
            <?php
                $country = ucwords(str_replace('-',' ', $page->title));
                switch ($country) {
                    case 'International Shipping Destinations':
                    case 'Usa':
                        $country = 'USA';
                        break;
                    case 'France':
                        $country = 'France* - All Other Locations';
                        break;
                    case 'Germany':
                        $country = 'Germany* - All Other Locations';
                        break;
                    case 'Italy':
                        $country = 'Italy*';
                        break;
                    case 'Spain':
                        $country = 'Spain*';
                        break;
                    case 'Sweden':
                        $country = 'Sweden*';
                        break;
                    case 'China':
                        $country = 'China, Peoples Rep.';
                        break;
                    case 'Portugal':
                        $country = 'Portugal*';
                        break;
                }
            ?>
            <script>
                $(function () {
                    function quickQuoteGetPrice() {
                        var deliverTo = $('#qq-deliver-to-p8q2mp').val(),
                            weight    = parseFloat($('#qq-weight-p8q2mp').val()),
                            type      = $("input[name='" + 'qq-type-p8q2mp' + "']:checked").val();
                        if (deliverTo && weight) {
                            $.post("https://ieapi2.stehlik.co.uk/api/quickquote/getQQPrice", {
                                "collect_from": "United Kingdom*",
                                "deliver_to": deliverTo,
                                "weight": weight,
                                "type": type
                            }, function (data) {
                                var text  = $('#qq-text-p8q2mp'),
                                    price = $('#qq-price-p8q2mp');
                                if (data && data["res"]) {
                                    var typeName = (type === "docs" ? "documents" : "non-documents");
                                    text.text(" for " + weight + " kg of " + typeName + " shipped to " + deliverTo);
                                    price.text(parseFloat(data["res"]).toFixed(2));
                                } else {
                                    text.text("");
                                    price.text("");
                                }
                            });
                        }
                    }
                    $('#qq-deliver-to-p8q2mp').val('<?= $country ?>');
                    $('#qq-weight-p8q2mp').val(parseFloat('') || 0.5);

                    $('#qq-submit-p8q2mp').on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        quickQuoteGetPrice();
                    });
                    quickQuoteGetPrice();
                    $('#qq-book-now').on('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        location.href = "/quote";
                    });
                });
            </script>
        </div>
    </div>
</div>
@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">{{ $page->title }}</h2>
    <div class="service-description">
        {!! $page->body_html !!}
    </div>
    <p class="service-text">
        Fully tracked Integrator based Global delivery solution.
    </p>
    <ul class="service-list">
        <li>Full tracked Delivery to over 220 countries</li>
        <li>Parcel Tracking personalised tracking portal to reduce customer queries</li>
        <li>Send direct notifications to customers</li>
    </ul>

    <p class="service-text">
        Site integration – Seamless integration process, we can plug our system into your website and set you up without any fuss.
        Our smart shipping APIs allows you to create, cancel and track parcel deliveries, add branding to customer tracking communication and much more.
    </p>
    <ul class="service-list">
        <li>USA – Next day delivery service</li>
        <li>Australia (2 working days)</li>
        <li>Asia (2 working days)</li>
        <li>Europe (Next day, AM,  for central Europe)</li>
    </ul>
    <p class="service-text">*All transit times are subject to customs clearance</p>
</div>
@endsection
@section('faq')
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
@endsection
@section('infographic')
<h2 class="service-infogfx-text" style="margin-top: 193px;">How It Works</h2>
    <div class="express-infogfx">
        <img src="{{ $page->image_url }}" alt="">
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