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
{{-- disabled for now, not sure how we will do this with the page layout yet. 
    <div class="quick-quote quick-quote-int">
    <div class="quick-quote-box">
        <p style="width: 40%;margin: auto;margin-block-start: 1em;margin-block-end: 1.1em;">
            Send from any UK postcode
        </p>
        <div class="form-group" style="">
            <div class="row" style="position: relative;left: 15px;bottom: 25px;width: 66%;margin: auto;">
                <div class="col country-select">
                    <label for="qq-deliver-to-p8q2mp">Deliver to:</label><br>
                        <select id="qq-deliver-to-p8q2mp" required="">
                            <option value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua">Antigua</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria*">Austria*</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium*">Belgium*</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria*">Bulgaria*</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde Islands">Cape Verde Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China, Peoples Rep.">China, Peoples Rep.</option><option value="Colombia">Colombia</option><option value="Comoros Islands">Comoros Islands</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep.">Congo, Dem. Rep.</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia*">Croatia*</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus*">Cyprus*</option><option value="Czech Republic*">Czech Republic*</option><option value="Denmark*">Denmark*</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia*">Estonia*</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland*">Finland*</option><option value="France* - Paris">France* - Paris</option><option value="France* - All Other Locations">France* - All Other Locations</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany* - Cologne">Germany* - Cologne</option><option value="Germany* - Frankfurt">Germany* - Frankfurt</option><option value="Germany* - All Other Locations">Germany* - All Other Locations</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece*">Greece*</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea Rep.">Guinea Rep.</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras Rep.">Honduras Rep.</option><option value="Hong Kong">Hong Kong</option><option value="Hungary*">Hungary*</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland Republic of*">Ireland Republic of*</option><option value="Israel">Israel</option><option value="Italy*">Italy*</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, D.P.R of (North)">Korea, D.P.R of (North)</option><option value="Korea, Rep of (South)">Korea, Rep of (South)</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos Peoples Dem. Rep">Laos Peoples Dem. Rep</option><option value="Latvia*">Latvia*</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania*">Lithuania*</option><option value="Luxembourg*">Luxembourg*</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta*">Malta*</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed States Of">Micronesia, Fed States Of</option><option value="Moldova, Rep of">Moldova, Rep of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru, Rep of">Nauru, Rep of</option><option value="Nepal">Nepal</option><option value="Netherlands*">Netherlands*</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland*">Poland*</option><option value="Portugal*">Portugal*</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion, Island of">Reunion, Island of</option><option value="Romania*">Romania*</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia*">Slovakia*</option><option value="Slovenia*">Slovenia*</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Somaliland Rep. Of">Somaliland Rep. Of</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain*">Spain*</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts">St Kitts</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Vincent">St Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden*">Sweden*</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom*">United Kingdom*</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, US">Virgin Islands, US</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                        </select>
                </div>
                <div class="col weight-select">
                        <label for="qq-weight-p8q2mp">Weight [kg]:</label><br>
                        <input type="number" id="qq-weight-p8q2mp" min="0.5" max="1000" step="0.5" value="0.5" required="">
                </div>
            </div>
            <div class="row" style="">
                <div class="col" style="display: flex;">
                    <p class="radio" style="position: relative; bottom: 37px; left: 125px;">
                        <label><input type="radio" name="qq-type-p8q2mp" value="docs">Documents</label>
                    </p>
                    <p class="radio" style="position: relative; bottom: 37px; left: 138px;">
                        <label><input type="radio" name="qq-type-p8q2mp" value="non_docs" checked="">Non-documents</label>
                    </p>    
                </div>
                <div class="col gp-col">    
                    <button style="position: relative;bottom: 65px;left: 370px;" type="submit" id="qq-submit-p8q2mp" class="q-button-alt get-price">Get Quote</button>
                </div>
            </div>
        </div>
        <div style="border-top: 1px solid black;position: relative;bottom: 44px;left: 97px;width: 64%;"></div>
        <div class="q-price">
            <div id="q-row" class="row">
                <div style="float:left;" class="dhl-express q-quote col"><img src="https://impactexpress.co.uk/wp-content/themes/impact-express-current/images/services-dhl.png" alt="DHL Express"></div>
                <div class="country-quote col" style="width: 26%; position: relative; top: 8px; left: 4px;">
                    <div class="row q-quote" style="font-size:12px;">Express Delivery from</div>
                    <div class="row q-quote"><b>£<span id="qq-price-p8q2mp">20.87</span></b></div>
                </div>
                <button style="float: right; position: relative; top: 12px;" type="submit" id="qq-book-now" class="col q-quote q-button-main book-now">Continue</button>
            </div>
        </div>
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
                    $('#qq-deliver-to-p8q2mp').val('');
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
</div> --}}
@endsection

@section('maintext')
<div class="container">
    <h1 class="service-title">SHIPPING TO THE USA</h1>
    <div class="service-text">
        <br>
        With low-cost next-day shipping options, make Impact Express your first choice for fast and secure parcel delivery to the USA.
        <br><br>
        As the largest English-speaking country in the world, it’s no surprise thousands of parcels are delivered to the United States from the UK each day.
        <br><br>
        At some points, the USA spans almost 3,000 miles from east to west coast (100 times the greatest longitudinal distance in the UK) but with the help 
        of our trustworthy partner couriers, we can guarantee next day delivery anywhere in the country.
        <br><br>
        Whether you’re posting for business or personal reasons; to New York, Los Angeles or Washington, we can cater for all your UK to US shipping needs.
    </div>
    <h2 class="service-title">SHIPPING TO CANADA: OUR SERVICES</h2>
    <p class="service-text">
        We have a variety of convenient dispatch options for our customers. The type of service we can offer you will be outlined at the time of payment and will depend on whether you have a ‘business’ or ‘personal’ account with us.
        <br><br>
        Our authorised service partner DHL specialises in express international delivery. If you are pressed for time, DHL will be able to get your shipment to its destination within 2-4 days.
        <br><br>
        DHL will also provide you with a tracking number so that you can be sure exactly where your parcel is at all times. You can stay up to date with your parcel’s movements by text, phone or online, depending on which is the most convenient for you.
        <br><br>
        We offer competitive international shipping rates so that you can sure be that you’ll receive the best price possible for a reliable and efficient service.
        <br><br>
    </p>
</div>
@endsection
@section('maintext-right')
    <div class="container">
        <h2 class="service-title">PREPARING YOUR PARCEL FOR SHIPMENT</h2>
        <div class="service-text">
            Make sure to pack your goods properly before shipment to ensure they have a safe arrival. 
            If you’re unsure how to package a parcel appropriately, you can follow our simple packaging guide.
            <br><br>
            It’s also important to check that your parcel is correctly addressed before you send it off. 
            Make sure to pay close attention when filling out the address, so that we can provide you with an accurate print-at-home label. 
            Please stick your label firmly to the outside of the box in a visible location.
        </div>
        <h2 class="service-title">HOW MUCH WILL IT COST TO SEND MY PARCEL TO CANADA?</h2>
        <div class="service-text">
            The cost of shipping a parcel from the UK to Canada will depend on the size and weight of your parcel. 
            To get an estimate of how much your parcel will cost to ship, input the dimensions of your parcel into our instant quote generator.
            <br><br>
            The timeframe in which you’d like your parcel to arrive will also affect the final cost. If you require express delivery, 
            it will be more expensive than standard delivery.
        </div>
        <h2 class="service-title">THINGS TO REMEMBER…</h2>
        <div class="service-text">
            Please include the full contact details (phone number, email and full address) of the recipient within your parcel. 
            It’s safest to tuck this inside the parcel itself so that it can’t get lost. It’s also wise to provide a return address, 
            just in case we are unable to deliver your parcel.
        </div>
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
            <h2 class="toUpper">WHICH ITEMS CAN I SEND TO CANADA?</h2>
            <p>
                Like most countries, Canada has strict import restrictions in place to prevent counterfeit items from entering the country. Prohibited items include:
            </p>
            <ul>
                <li>Obscene or pornographic material;</li>
                <li>Anything crafted in prison;</li>
                <li>Firearms;</li>
                <li>Flammable materials.</li>
            </ul>
            <p>
                If you’re unsure whether your item is considered contraband, you can submit an inquiry or check Canada Post’s websites where you can find a full list of prohibited items.

                At Impact Express, we also have a list of prohibited items that we will not ship. Please also refer to our full list of prohibited items before preparing your parcel for shipment.
            </p>
            <h2 class="toUpper">ARE THERE ANY CUSTOMS RESTRICTIONS WHEN SHIPPING TO CANADA?</h2>         
            <p>
                All international parcels sent to Canada will be checked by customs to check if any duty or tax should be added to your shipment. 
                For this reason, we will need to know the approximate value of your parcel along with its contents so that the correct duties and taxes can be applied.
                <br><br>
                You will enter this information online when creating the shipping data, removing the need for a paper customs invoices and allowing customs to start the 
                clearance process as soon as possible.
                <br><br>
                It’s always best to check the latest customs advice on the web before you send your parcel, as they are ever subject to change and you can prepare yourself 
                with any extra charges you may face.
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