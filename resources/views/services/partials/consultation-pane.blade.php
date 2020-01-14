<div class="container-fluid req-consultation">
    <div class="left-side">
        <h3 class="consultation_title">
            Interested?<br>
            Contact us today.
        </h3>
        <h4 class="consultation_desc">
            Do you want to Learn More about Impact Express' Services? Get in touch with our worldwide shipping experts today to discover how we connect the courier industry, e-commerce and retailers across the UK, with their customers across the globe.
        </h4>
        <i class="fas fa-phone-square fa-2x"></i><a href="tel:01753683700" rel="nofollow"><p class="tel-no"> 01753 683700</p></a></i>
        <br>
        <i class="fas fa-envelope fa-2x"><a href="mailto:office@impactexpress.co.uk"><p class="office-email"> office@impactexpress.co.uk</p></a></i>
    </div>
    <div class="vr"></div>
    <div class="right-side">
        <form class="" method="POST" action="{{url('services/express/send')}}">
            @csrf
            <div class="form-group">
                <input class="form-text" type="text" name="contactName" id="consultation-contact-name" placeholder="Contact Name" required>
                <input class="form-email" type="email" name="emailAddress" id="consultation-email-address" placeholder="Email Address" required>
                <input class="form-number" type="tel" name="telephoneNumber" id="consultation-tel-no" placeholder="Telephone Number" required>
            </div>
            <p class="consultation_desc">For more information on how we store your data, please refer to our <a class="consultation_desc" href="#">Privacy Policy.</a></p>
            <input type="submit" class="button-main" value="Request Consultation">
        </form>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" id="consultation">
                <span class="closebtn">&times;</span>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
</div>