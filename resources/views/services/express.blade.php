@extends('services.layout.service')
@section('title', 'Express Delivery')

@section('quotebox')
<div class="container">
    <h2 class="quote-box-title">Get a Quote</h2>
    <p class="quote-box-subtitle">Send from any UK Postcode</p>

    <div class="container">
        {{ Form::select('countries',
            [
                'AE'  => 'United Arab Emirates',
                'SEL' => 'Please Choose a Country',

                'AF'  => 'Afghanistan',
                'AL'  => 'Albania',
                'DZ'  => 'Algeria',
                'AS'  => 'American Samoa',
                'AD'  => 'Andorra',
                'AO'  => 'Angola',
                'AI'  => 'Anguilla',
                'AG'  => 'Antigua',
                'AR'  => 'Argentina',
                'AM'  => 'Armenia',
                'AW'  => 'Aruba',
                'AU'  => 'Australia',
                'AT'  => 'Austria*',
                'AZ'  => 'Azerbaijan',
                'BS'  => 'Bahamas',
                'BH'  => 'Bahrain',
                'BD'  => 'Bangladesh',
                'BB'  => 'Barbados',
                'BY'  => 'Belarus',
                'BE'  => 'Belgium*',
                'BZ'  => 'Belize',
                'BJ'  => 'Benin',
                'BM'  => 'Bermuda',
                'BT'  => 'Bhutan',
                'BO'  => 'Bolivia',
                'BQ'  => 'Bonaire',
                'BA'  => 'Bosnia Herzegovnia',
                'BW'  => 'Botswana',
                'BR'  => 'Brazil',
                'BN'  => 'Brunei',
                'BG'  => 'Bulgaria*',
                'BF'  => 'Burkina Faso',
                'BI'  => 'Burundi',
                'KH'  => 'Cambodia',
                'CM'  => 'Cameroon',
                'CA'  => 'Canada',
                'IC'  => 'Canary Islands',
                'CV'  => 'Cape Verde Islands',
                'KY'  => 'Cayman Islands',
                'CF'  => 'Central African Rep.',
                'TD'  => 'Chad',
                'GG'  => 'Channel Islands (Guernsey)',
                'JE'  => 'Channel Islands (Jersey)',
                'CL'  => 'Chile',
                'CN'  => 'China, Peoples Rep.',
                'CO'  => 'Colombia',
                'KM'  => 'Comoros Islands',
                'CD'  => 'Congo, Democratic Rep.',
                'CG'  => 'Congo',
                'CK'  => 'Cook Islands',
                'CR'  => 'Costa Rica',
                'HR'  => 'Croatia*',
                'CU'  => 'Cuba',
                'CW'  => 'Curacao',
                'CY'  => 'Cyprus*',
                'CZ'  => 'Czech Republic*',


    ],'SEL', ['class' => 'form-select']) }}
    </div>
</div>
@endsection

@section('maintext')
<div class="container">
    <h2 class="service-title">Express Delivery Service</h2>
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
@section('infographic')
<h2 class="service-infogfx-text" style="margin-top: 193px;">How It Works</h2>
    <div class="express-infogfx"></div>
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