<div class="container-fluid req-consultation req-consultation-pc">
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
        {{ Form::open(['url' => 'services/express']) }}
            {{ Form::token() }}
            {{ Form::text('contactName', null, ['required', 'class' => 'form-text','id' => 'consultation-contact-name','placeholder' => 'Company Name']) }}
            {{ Form::email('emailAddress', null, ['required', 'class' => 'form-email','id' => 'consultation-email-address','placeholder' => 'Email Address']) }}
            {{ Form::tel('telephoneNumber', null, ['required', 'class' => 'form-number','id' => 'consultation-tel-no','placeholder' => 'Telephone Number']) }}
            <p class="consultation_desc">
                For more information on how we store your data, please refer to our <a class="consultation_desc" href="#">Privacy Policy.</a>
            </p>
            {{ Form::submit('Request Consultation',['class' => 'button-main']) }}
        {{ Form::close() }}
        @if ($message = Session::get('success'))
            <div class="alert alert-success" id="consultation">
                <span class="closebtn">&times;</span>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="container-fluid req-consultation req-consultation-mobile">
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
        <div style="margin: 20px"></div>
    </div>
    <div class="right-side">
        {{ Form::open(['url' => 'services/express']) }}
            {{ Form::token() }}
            {{ Form::text('contactName', null, ['required', 'class' => 'form-text','id' => 'consultation-contact-name','placeholder' => 'Company Name']) }}
            {{ Form::email('emailAddress', null, ['required', 'class' => 'form-email','id' => 'consultation-email-address','placeholder' => 'Email Address']) }}
            {{ Form::tel('telephoneNumber', null, ['required', 'class' => 'form-number','id' => 'consultation-tel-no','placeholder' => 'Telephone Number']) }}
            <p class="consultation_desc">
                For more information on how we store your data, please refer to our <a class="consultation_desc" href="#">Privacy Policy.</a>
            </p>
            {{ Form::submit('Request Consultation',['class' => 'button-main']) }}
        {{ Form::close() }}
        @if ($message = Session::get('success'))
            <div class="alert alert-success" id="consultation">
                <span class="closebtn">&times;</span>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
</div>