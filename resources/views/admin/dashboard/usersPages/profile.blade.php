@extends('admin.app')
@section('title', 'Edit Profile')

@section('content')
<div id="drawer" data-role="drawer" class="k-widget k-drawer">
    <div class="drawer-content">
        <h3 class="cms-title">Edit Profile</h3>
        <div id="Dashboard">
            <div class="card-body card-posts">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box">
                            <div class="box-header">
                                <div class="pull-left" style="width: 65%;">
                                   <div class="post-details">
                                        <label for="slug">Username (Cannot Be Changed)</label>
                                        <input disabled type="text" name="slug" id="edit-user-slug" class="form-text @error('userName') has-error @enderror" value="{{ $user->slug }}">

                                    <form action="{{ route('admin-edit-profile', $user->slug) }}" id="post-form" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="form-group @error('displayName') has-error @enderror">
                                            <label for="name">Display Name</label>
                                            <input type="text" name="name" id="edit-user-displayName" class="form-text @error('name') has-error @enderror" value="{{ $user->name }}">
                                            @error('displayName')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>

                                        <div class="form-group @error('bio') has-error @enderror">
                                            <label for="bio">User Bio</label>
                                            <textarea name="bio" id="edit-user-bio" class="form-text @error('bio') has-error @enderror" maxlength="250">{{ $user->bio }}</textarea>
                                            @error('bio')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="button-success">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="pull-right" style="width: 17.7%; right: 110px;">
                                <div class="post-details-right">
                                    <div class="form-group @error('avatar') has-error @enderror">
                                        <label for="avatar">User Avatar (Changable at<a class="tag-badge" href="https://gravatar.com/">Gravatar</a> )</label>
                                        <img name="avatar" style="margin-top: 15px;border-radius: 50%;" id="edit-user-avatar" class="@error('avatar') has-error @enderror" alt="{{ $user->name }}" width="250" height="250" src="{{ $user->gravatar() }}" class="media-object">
                                        @error('avatar')
                                            <span class="help-block has-error">{{ $message }}</span>
                                            <br><br>
                                        @enderror
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection