<nav class="main-nav">
    <a class="navbar-logo" href="{{ route('home') }}">
        <img class="nav-logo-img" src="/img/navbar-logo.png" alt="Impact Express Logo">
    </a>
    <div class="hamburger-container">
        <button class="hamburger button-square" type="button">
            <span class="hamburger-icon"><i class="fas fa-bars"></i></span>
        </button>
    </div>
    <ul class="nav-items">
        {{-- Likely wont be used in conjunction with the personal bit
            <li class="nav-item">
                <a class="nav-link" href="{{ route('send-my-parcel') }}">Send My Parcel</a>
            </li> 
        --}}
        <li class="nav-dropdown">
            <button class="nav-link" style="padding: 0px;" onclick="event.preventDefault(); document.getElementById('services-form').submit();" aria-expanded="false" aria-controls="services-dropdown">
                {{ __('Services') }}
            </button>
            <form id="services-form" action="{{ route('services-index') }}" method="GET" style="display: none;"></form>

            <ul class="dropdown-menu" id="services-dropdown">
                <li>
                    <a href="/services/express">Express Delivery</a>
                </li>
                <li>
                    <a href="/services/economy">Economy Delivery</a>
                </li>
                <li>
                    <a href="/services/uk-overnight">UK Overnight</a>
                </li>
                <li>
                    <a href="/services/worldwide-imports">Worldwide Imports</a>
                </li>
                <li>
                    <a href="/services/dangerous-goods">Dangerous Goods Service</a>
                    <ul>
                        <li style="list-style-type: none">
                            <a href="/services/dangerous-goods/dry-ice">Dry Ice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/services/e-commerce">E-Commerce</a>
                </li>
                <li>
                    <a href="/services/fulfilment-services">Fulfilment - Pick And Pack</a>
                </li>
                <li>
                    <a href="/services/mobile-phone-services">Mobile Phone Services</a>
                </li>
            </ul>
        </li>
        <li class="nav-dropdown">
            <button class="nav-link" style="padding: 0px;" onclick="event.preventDefault(); document.getElementById('news-form').submit();" aria-expanded="false" aria-controls="news-dropdown">
                {{ __('News & Events') }}
            </button>
            <form id="news-form" action="{{ route('news') }}" method="GET" style="display: none;"></form>

            <ul class="dropdown-menu" style="min-width: 45ch" id="news-dropdown">
                <li>
                    <a href="/information/coronavirus">Coronavirus Update</a>
                </li>
                <li>
                    <a href="/information/monthly-fuel-surcharge">Monthly Fuel Surcharge</a>
                </li>
                <li>
                    <a href="/information/service-level-agreement-and-surcharges">Service Level Agreement and Surcharges</a>
                </li>
                <li>
                    <a href="/information/remote-area-surcharges">Remote Area Surcharges</a>
                </li>
                <li>
                    <a href="/information/denied-parties">Denied Parties</a>
                </li>
                <li>
                    <a href="/information/prohibited-items">Prohibited Items</a>
                </li>
                <li>
                    <a href="/information/packaging-guide">Packaging Guide</a>
                </li>
                <li>
                    <a href="/information/opening-hours">Opening Hours</a>
                </li>
                <li>
                    <a href="/information/gdpr-policy">GDPR Policy</a>
                </li>
                <li>
                    <a href="/information/careers">Work With Us</a>
                </li>
                <li>
                    <a href="/information/impact-express-rate-increase-2020">Impact Express Rate Increase 2020</a>
                </li>
                <li>
                    <a href="/information/general-sanctions-warranty-and-indemnity-letter">General Sanctions Warranty and Indemnity Letter</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('destinations') }}">Destinations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= route('contact'); ?>">Contact Us</a>
        </li>
        <li style="padding: 10px;">
            <a class="nav-link button-main" href="<?= route('quote.index'); ?>">Get a Quote</a>
        </li>
    </ul>
</nav>