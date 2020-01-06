<div class="container-fluid req-consultation">
    <div class="left-side">
        <h3 class="consultation_title">
            Interested?<br>
            Contact us today.
        </h3>
        <h4 class="consultation_desc">
            Do you want to Learn More about Impact Express' Services? Get in touch with our worldwide shipping experts today to discover how we connect the courier industry, e-commerce and retailers across the UK, with their customers across the globe.
        </h4>
        <i class="fas fa-phone-square fa-2x"></i><p class="tel-no"> 01753 683700</p></i>
        <br>
        <i class="fas fa-envelope fa-2x"><p class="office-email"> office@impactexpress.co.uk</p></i>
    </div>
    <div class="vr"></div>
    <div class="right-side">
        <form class="" method="POST" action="{{url('quote/send')}}">
            @csrf
            <div class="form-group">
                <input class="form-text" type="text" name="contactName" id="quote-contact-name" placeholder="Contact Name" required>
                <input class="form-email" type="email" name="emailAddress" id="quote-email-address" placeholder="Email Address" required>
                <input class="form-number" type="tel" name="telephoneNumber" id="quote-telephone-number" placeholder="Telephone Number" required>
            </div>
            <input type="submit" class="form-submit" value="Submit Form">
        </form>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <span class="closebtn">&times;</span>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
</div>