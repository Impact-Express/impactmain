@extends('customer.layouts.master')
@section('title', "Import Request Form")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 30%;
        background: url('/img/worldwide-imports.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
    .container input {
        width: 47%;
    }
    .container select {
        width: 47%;
    }
    .container .shipment-pieces input {
        width: 160px;
    }
    .main-text {
        border-right: 0 !important;
        margin: auto;
       
    }
    .service-title {
        margin-bottom: 2%;
    }
    .container input.has-error {
        border: 1px solid red;
        background-color: #ffdddd
    }   
    .container select.has-error {
        border: 1px solid red;
        background-color: #ffdddd
    } 
</style>
    
@section('content')
    <div class="services-image"></div>
    <form action="{{ route('email-import-request') }}" method="post" style="margin: 0">
        <x-alerts/>
        @csrf
        <div class="service-information" style="padding: 5px">
            <div class="main-text">
                <div class="container">
                    <h2 class="service-title">Requestor Details</h2>
                    <input type="text" placeholder="Company Name *" name="requestorCompanyName" class="form-text @error('requestorCompanyName') has-error @enderror">
                    <input type="text" placeholder="Address 1 *" name="requestorAddr1" class="form-text @error('requestorAddr1') has-error @enderror">
                    <input type="text" placeholder="Address 2" name="requestorAddr2" class="form-text">
                    <input type="text" placeholder="Address 3" name="requestorAddr3" class="form-text">

                    <input type="text" placeholder="City *" name="requestorCity" class="form-text @error('requestorCity') has-error @enderror">

                    
                    <input placeholder="Contact Name *" type="text" name="requestorContactName" class="form-text @error('requestorContactName') has-error @enderror">
                    <input placeholder="Telephone Number *" type="tel" name="requestorTelNumber" class="form-email @error('requestorTelNumber') has-error @enderror">
                    <input placeholder="Email Address *" type="email" name="requestorEmailAddr" class="form-email @error('requestorEmailAddr') has-error @enderror">
                </div>
            </div>
            <div class="main-text">
                <div class="container">
                    <h2 class="service-title">Collection Details</h2>
                    <input type="text" placeholder="Company Name *" name="collectionCompanyName" class="form-text @error('collectionCompanyName') has-error @enderror">

                    <input type="text" placeholder="Address 1 *" name="collectionAddr1" class="form-text @error('collectionAddr1') has-error @enderror">
                    <input type="text" placeholder="Address 2" name="collectionAddr2" class="form-text">
                    <input type="text" placeholder="Address 3" name="collectionAddr3" class="form-text">
                    <select name="collectionCountry" class="form-select form-selectbox @error('collectionCountry') has-error @enderror">
                        <option value="" disabled selected hidden >Country *</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua">Antigua</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria*">Austria*</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium*">Belgium*</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia Herzegovina">Bosnia Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria*">Bulgaria*</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde Islands">Cape Verde Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China, Peoples Rep.">China, Peoples Rep.</option><option value="Colombia">Colombia</option><option value="Comoros Islands">Comoros Islands</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep.">Congo, Dem. Rep.</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia*">Croatia*</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus*">Cyprus*</option><option value="Czech Republic*">Czech Republic*</option><option value="Denmark*">Denmark*</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia*">Estonia*</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland*">Finland*</option><option value="France* - Paris">France* - Paris</option><option value="France* - All Other Locations">France* - All Other Locations</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany* - Cologne">Germany* - Cologne</option><option value="Germany* - Frankfurt">Germany* - Frankfurt</option><option value="Germany* - All Other Locations">Germany* - All Other Locations</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece*">Greece*</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea Rep.">Guinea Rep.</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras Rep.">Honduras Rep.</option><option value="Hong Kong">Hong Kong</option><option value="Hungary*">Hungary*</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland Republic of*">Ireland Republic of*</option><option value="Israel">Israel</option><option value="Italy*">Italy*</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, D.P.R of (North)">Korea, D.P.R of (North)</option><option value="Korea, Rep of (South)">Korea, Rep of (South)</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos Peoples Dem. Rep">Laos Peoples Dem. Rep</option><option value="Latvia*">Latvia*</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania*">Lithuania*</option><option value="Luxembourg*">Luxembourg*</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta*">Malta*</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed States Of">Micronesia, Fed States Of</option><option value="Moldova, Rep of">Moldova, Rep of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru, Rep of">Nauru, Rep of</option><option value="Nepal">Nepal</option><option value="Netherlands*">Netherlands*</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland*">Poland*</option><option value="Portugal*">Portugal*</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion, Island of">Reunion, Island of</option><option value="Romania*">Romania*</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia*">Slovakia*</option><option value="Slovenia*">Slovenia*</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Somaliland Rep. Of">Somaliland Rep. Of</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain*">Spain*</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts">St Kitts</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Vincent">St Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden*">Sweden*</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom*">United Kingdom*</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, US">Virgin Islands, US</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <input type="text" placeholder="City *" name="collectionCity" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="Zip / Postal Code * (State Prefix Needed for USA)" name="collectionZip" class="form-text @error('collectionZip') has-error @enderror">

                    <input placeholder="Contact Name *" type="text" name="collectionContactName" class="form-text @error('collectionContactName') has-error @enderror">
                    <input placeholder="Telephone Number *" type="tel" name="collectionTelNumber" class="form-email @error('collectionTelNumber') has-error @enderror">
                    <input placeholder="Email Address *" type="email" name="collectionEmailAddr" class="form-email @error('collectionEmailAddr') has-error @enderror">
                    <br>
                    <textarea name="collectionAdditionalNotes" placeholder="Additional Notes" class="form-textarea" cols="100" rows="7"></textarea>
                </div>
            </div>
        </div>
        <div class="service-information" style="padding: 5px">
            <div class="main-text">
                <div class="container">
                    <h2 class="service-title">Delivery Details</h2>
                    <input type="text" placeholder="Company Name *" name="deliveryCompanyName" class="form-text @error('collectionCity') has-error @enderror">

                    <input type="text" placeholder="Address 1 *" name="deliveryAddr1" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="Address 2" name="deliveryAddr2" class="form-text">
                    <input type="text" placeholder="Address 3" name="deliveryAddr3" class="form-text">
                    <select name="deliveryCountry" class="form-select form-selectbox @error('collectionCity') has-error @enderror">
                        <option value="Country">Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua">Antigua</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria*">Austria*</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium*">Belgium*</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia Herzegovina">Bosnia Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria*">Bulgaria*</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde Islands">Cape Verde Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep.">Central African Rep.</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China, Peoples Rep.">China, Peoples Rep.</option><option value="Colombia">Colombia</option><option value="Comoros Islands">Comoros Islands</option><option value="Congo">Congo</option><option value="Congo, Dem. Rep.">Congo, Dem. Rep.</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia*">Croatia*</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus*">Cyprus*</option><option value="Czech Republic*">Czech Republic*</option><option value="Denmark*">Denmark*</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Rep.">Dominican Rep.</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia*">Estonia*</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland*">Finland*</option><option value="France* - Paris">France* - Paris</option><option value="France* - All Other Locations">France* - All Other Locations</option><option value="French Guiana">French Guiana</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany* - Cologne">Germany* - Cologne</option><option value="Germany* - Frankfurt">Germany* - Frankfurt</option><option value="Germany* - All Other Locations">Germany* - All Other Locations</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece*">Greece*</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea Rep.">Guinea Rep.</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras Rep.">Honduras Rep.</option><option value="Hong Kong">Hong Kong</option><option value="Hungary*">Hungary*</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland Republic of*">Ireland Republic of*</option><option value="Israel">Israel</option><option value="Italy*">Italy*</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, D.P.R of (North)">Korea, D.P.R of (North)</option><option value="Korea, Rep of (South)">Korea, Rep of (South)</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos Peoples Dem. Rep">Laos Peoples Dem. Rep</option><option value="Latvia*">Latvia*</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania*">Lithuania*</option><option value="Luxembourg*">Luxembourg*</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta*">Malta*</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Fed States Of">Micronesia, Fed States Of</option><option value="Moldova, Rep of">Moldova, Rep of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru, Rep of">Nauru, Rep of</option><option value="Nepal">Nepal</option><option value="Netherlands*">Netherlands*</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland*">Poland*</option><option value="Portugal*">Portugal*</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion, Island of">Reunion, Island of</option><option value="Romania*">Romania*</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia*">Slovakia*</option><option value="Slovenia*">Slovenia*</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="Somaliland Rep. Of">Somaliland Rep. Of</option><option value="South Africa">South Africa</option><option value="South Sudan">South Sudan</option><option value="Spain*">Spain*</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts">St Kitts</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Vincent">St Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden*">Sweden*</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom*">United Kingdom*</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, US">Virgin Islands, US</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <input type="text" placeholder="Zip / Postal Code * (State Prefix Needed for USA)" name="deliveryZip" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="City *" name="deliveryCity" class="form-text @error('collectionCity') has-error @enderror">
                    
                    <input placeholder="Contact Name *" type="text" name="deliveryContactName" class="form-text @error('collectionCity') has-error @enderror">
                    <input placeholder="Telephone Number *" type="tel" name="deliveryTelNumber" class="form-email @error('collectionCity') has-error @enderror">
                </div>
            </div>
            <div class="main-text" style="width: 64%;">
                <div class="container">
                    <h2 class="service-title">Shipment and Piece Details</h2>
                    <input type="text" placeholder="Billing Reference" name="billingRef" class="form-text">
                    <label for="collectionDate" style="display: block; width: fit-content;">Collection Date *:</label>
                    <input type="date" name="collectionDate" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="Goods Description *" name="goodsDesc" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="Currency *" name="currency" class="form-text @error('collectionCity') has-error @enderror">
                    <input type="text" placeholder="Goods Value *" name="goodsValue" class="form-text @error('collectionCity') has-error @enderror">
                    <br>
                    <div class="shipment-pieces">
                        <label>Pieces:</label><br>
                        <div class="repeater">
                            <div data-repeater-list="shipmentPieces" style="display: block;">
                                <input data-repeater-create type="button" class="button-main" style="width: 57px;height: 48px;margin-right:5px;" value="+">
                                <div data-repeater-item style="display: inline;">
                                    <input data-repeater-delete type="button" class="button-main" style="width: 58px;height: 48px;margin-right:5px;" value="-">
                                    <input placeholder="Quantity" type="number" name="pieceQuantity" class="form-text">
                                    <input placeholder="Weight (Kg)" type="number" name="pieceWeight" class="form-text">
                                    <input placeholder="Length (cm)" type="number" name="pieceLength" class="form-email">
                                    <input placeholder="Width (cm)" type="number" name="pieceWidth" class="form-email">
                                    <input placeholder="Height (cm)" type="number" name="pieceHeight" class="form-email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button class="button-main login-button" type="submit">Send Request</button>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <span class="closebtn">&times;</span>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </form>

   

    @include('customer.services.partials.consultation-pane')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.repeater').repeater({

                show: function () {
                    $(this).slideDown();
                },

                hide: function (deleteElement) {
                        $(this).slideUp(deleteElement);
                },

                isFirstItemUndeletable: true
            })
        });
    </script>
@endsection
