@extends('admin.app')

@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link href="{{asset('css/auth.css')}}" rel="stylesheet">
@endsection

@section('title', 'Register New User')

@section('content')
<div id="drawer" data-role="drawer" class="k-widget k-drawer">
    <div class="drawer-content">
        <h3 class="cms-title">Register New User</h3>
        <div id="Dashboard">
            <div class="card-body card-posts">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box">
                            <div class="box-header">
                                <div class="pull-left" style="width: 100%;">
                                   <div class="post-details">
                                       

                                    <form action="{{ route('admin-register-user') }}" id="post-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group @error('userName') has-error @enderror">
                                            <label for="slug">Username</label>
                                            <input type="text" name="slug" id="edit-user-slug" class="form-text @error('userName') has-error @enderror">
                                            @error('userName')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('displayName') has-error @enderror">
                                            <label for="name">Display Name</label>
                                            <input type="text" name="name" id="edit-user-displayName" class="form-text @error('name') has-error @enderror">
                                            @error('displayName')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group @error('emailAddress') has-error @enderror">
                                            <label for="email">Email Address (Used for Login)</label>
                                            <input type="email" name="email" id="edit-user-displayName" class="form-text @error('emailAddress') has-error @enderror">
                                            @error('emailAddress')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>

                                        <div class="form-group @error('password') has-error @enderror">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="edit-user-displayName" class="form-text @error('password') has-error @enderror">
                                            @error('password')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('passwordConfirmation') has-error @enderror">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="edit-user-displayName" class="form-text @error('passwordConfirmation') has-error @enderror">
                                            @error('passwordConfirmation')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="button-success">Create User</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#edit-user-displayName').on('blur', function() {
        var theTitle  = this.value.toLowerCase().trim(),
            slugInput = $('#edit-user-slug'),
            theSlug   = theTitle.replace(/&/g, '-and-')
                                .replace(/[^a-z0-9-]+/g, '-')
                                .replace(/\-\-+/g, '-')
                                .replace(/^-+|-+$/g, '');

        slugInput.val(theSlug)
    });
</script>
@endsection