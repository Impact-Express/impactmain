@extends('customer.layouts.main')

@section('master')

    <div class="top-strip">
        <img class="top-strip-img" src="/img/dhl-strip-img.png" alt="DHL Authorised Service Partner">
    </div>
    <nav class="main-nav">
        <a class="navbar-logo" href="<?= route('home'); ?>">
            <img class="nav-logo-img" src="/img/navbar-logo.png" alt="Impact Express Logo">
        </a>
        <div class="hamburger-container">
            <button class="hamburger button-square" type="button">
                <span class="hamburger-icon"><i class="fas fa-bars"></i></span>
            </button>
        </div>
        <ul class="nav-items">
            <li class="nav-item">
                <a class="nav-link" href="<?= route('quote.index'); ?>">Track My Parcel</a>
            </li>
             
            <li class="nav-dropdown">
                <a class="nav-link" href="<?= route('services.index'); ?>">Shipping</a>
            </li>
             
            <li class="nav-dropdown">
                <a class="nav-link" href="<?= route('news'); ?>">News & Events</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= route('contact'); ?>">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button-main" href="<?= route('quote.index'); ?>">Get a Quote</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button-main" href="<?= route('login'); ?>">Log in</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="main-footer">
        <div class="container">
            <div class="column-sm">
                <h4>Subscribe</h4>
                <form action="//impactexpress.us2.list-manage.com/subscribe/post?u=4d790aba1fda36ef88d81225e&amp;id=4f5fd23105" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-email-footer" name="EMAIL" id="i-subscribe-email" placeholder="E-mail">
                            <input type="hidden" value="Subscribe" name="subscribe">
                            <button class="form-email-footer-link">
                                Send <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                        <p class="footer-text">We like to keep you up to date with our latest news so please subscribe to our newsletter.</p>
                    </div>
                </form>
            </div>
            <div class="column-md">
               <h4>Explore</h4>

            </div>
            <div class="column-sm">
                <h4>Services</h4>

            </div>
            <div class="column-sm">
               <p class="copyrights">© <?= date('Y'); ?>, Impact Express Wholesale Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

<div class="mobile-nav">
    <ul class="mobile-nav-items">
        <li class="mobile-nav-img">
            <a href=""><img src="" alt=""></a>
        </li>
        <li class="mobile-nav-item-top">Get a Quote</li>
        <li class="mobile-nav-item-top">Login</li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-img"></li>
        <li class="mobile-nav-item">Track My Parcel</li>
        <li class="mobile-nav-item mobile-accordion">Shipping</li>
        <li class="mobile-nav-item">Services</li>
        <li class="mobile-nav-item">Shipping Destinations</li>
        <li class="mobile-nav-item mobile-accordion">News & Events</li>
        <li class="mobile-nav-item">Contact Us</li>
    </ul>
</div>

@endsection
