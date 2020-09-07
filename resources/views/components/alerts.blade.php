<style>
    div .alert {
        margin-left: 40%;
        margin-top: 1%;
    }
</style>
<div class="service-information" style="display: flex; flex-direction: row; flex-wrap: wrap;">
    @if (session()->has('success'))
    <div class="alert alert-success">
        <span class="closebtn">&times;</span>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (session()->has('warning'))
    <div class="alert alert-warning">
        <span class="closebtn">&times;</span>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <span class="closebtn">&times;</span>
        <strong>One or More Required Fields are Empty.</strong>
    </div>
    @endif
</div>
