@if (session()->has('success'))
<div class="card-body success-message">
    <h5 class="card-title">
        {{ session()->get('success') }}
    </h5>
</div>
@endif
@if (session()->has('warning'))
<div class="card-body warning-message">
    <h5 class="card-title">
        {{ session()->get('warning') }}
    </h5>
</div>
@endif