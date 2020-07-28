@extends('admin.app')
@section('title', isset($tag) ? 'Edit Tag' : 'New Tag')
@section('css')
    <link href="{{asset('css/simplemde.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css rel="stylesheet">
@endsection
@section('js')
<script src="{{ asset('js/simplemde.min.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js" ></script>
@endsection
@section('content')
<div id="drawer" data-role="drawer" class="k-widget k-drawer">
    <div class="drawer-content">
        <h3 class="cms-title">{{ isset($tag) ? 'Edit Tag' : 'Add New Tag' }}</h3>
        <div id="Dashboard">
            <div class="card-body card-posts">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                                <form action="{{ isset($tag) ? route('categories.update', $tag->slug) : route('tags.store') }}" method="post">
                                    @csrf
                                    @if (isset($tag)) 
                                        @method('PUT')
                                    @endif
                                    <div class="form-group @error('title') has-error @enderror">
                                        <label for="title">Tag Name</label>
                                        <input type="text" name="title" id="new-category" class="form-text @error('title') has-error @enderror" value="{{ isset($tag) ? $tag->title : '' }}">
                                        @error('title')
                                            <span class="help-block has-error">{{ $message }}</span>
                                            <br><br>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('slug') has-error @enderror">
                                        <label for="slug">Tag Slug</label>
                                        <input type="text" name="slug" id="new-category-slug" class="form-text @error('slug') has-error @enderror" value="{{ isset($tag) ? $tag->slug : '' }}">
                                        @error('slug')
                                            <span class="help-block has-error">{{ $message }}</span>
                                            <br><br>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="button-success">{{ isset($tag) ? 'Update Tag' : 'Add Tag' }}</button>
                                    </div>
                                </form>
                        <!-- /.box-header -->
                            <div class="box-body table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#new-category').on('blur', function() {
        var theTitle  = this.value.toLowerCase().trim(),
            slugInput = $('#new-category-slug'),
            theSlug   = theTitle.replace(/&/g, '-and-')
                                .replace(/[^a-z0-9-]+/g, '-')
                                .replace(/\-\-+/g, '-')
                                .replace(/^-+|-+$/g, '');

        slugInput.val(theSlug)
    });
</script>
@endsection

