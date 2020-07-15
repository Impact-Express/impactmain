@extends('admin.app')
@section('title', 'New Post')
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
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer" data-role="drawer" class="k-widget k-drawer">
        <div class="drawer-content">
            <h3 class="cms-title">New Post</h3>
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="pull-left">
                                   <div class="post-details">
                                    {!! Form::model($post, ['method' => 'POST', 'route' => 'posts.store', 'files' => TRUE, 'id' => 'post-form']) !!}
                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                        {!! Form::label('Title') !!}
                                        {!! Form::text('title', null , ['required', 'class' => 'form-text','id' => 'new-post-title','tabindex' => '1']) !!}
                                        @if($errors->has('title'))
                                            <span class="help-block">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                        {!! Form::label('Slug') !!}
                                        {!! Form::text('slug', null , ['required', 'class' => 'form-text','id' => 'new-post-slug','tabindex' => '2']) !!}
                                        @if($errors->has('slug'))
                                            <span class="help-block">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group excerpt{{ $errors->has('excerpt') ? 'has-error' : '' }}">
                                        {!! Form::label('Excerpt') !!}
                                        {!! Form::textarea('excerpt', null , ['class' => 'form-textarea','id' => 'new-post-excerpt','tabindex' => '3']) !!}
                                        @if($errors->has('excerpt'))
                                            <span class="help-block">{{ $errors->first('excerpt') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                        {!! Form::label('Body') !!}
                                        {!! Form::textarea('body', null , ['class' => 'form-textarea','id' => 'new-post-body','tabindex' => '4']) !!}
                                        @if($errors->has('body'))
                                            <span class="help-block">{{ $errors->first('body') }}</span>
                                        @endif
                                    </div>
                                   </div>
                                </div>
                                <div class="pull-right">
                                    <div class="post-details-right">
                                        <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                                            {!! Form::label('Publication Date') !!}
                                            <div class="post-publishdate">
                                                {!! Form::text('published_at', NULL,['class' => 'form-text', 'id' => 'new-post-publishdate']) !!}
                                            </div>
                                            <hr>
                                            <div class="publish-buttons">
                                                <a id="draft-button" class="button-white">Save Draft</a>
                                                {!! Form::submit('Publish',['class' => 'button-main']) !!}
                                            </div>
                                            @if($errors->has('published_at'))
                                                <span class="help-block">{{ $errors->first('published_at') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="post-details-right">
                                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                            {!! Form::label('category_id', 'Category') !!}
                                            {!! Form::select('category_id', App\Category::pluck('title', 'id'), null , ['class' => 'form-text','id' => 'new-post-category','tabindex' => '6', 'placeholder' => 'Choose Category']) !!}
                                            @if($errors->has('category_id'))
                                                <span class="help-block">{{ $errors->first('category_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="post-details-right">
                                        {!! Form::label('image', 'Feature Image') !!}
                                            <div class="fileinput-new">
                                                <img id="img-thumbnail" width="425" height="250">
                                              </div>
                                              <label class="button-image">
                                                  Choose Image
                                                <input type="file" class="button-image" name="image" tabindex="7" onchange="document.getElementById('img-thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                              </label>

                                            @if($errors->has('image'))
                                                <span class="help-block">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
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
    $('#new-post-title').on('blur', function() {
        var theTitle  = this.value.toLowerCase().trim(),
            slugInput = $('#new-post-slug'),
            theSlug   = theTitle.replace(/&/g, '-and-')
                                .replace(/[^a-z0-9-]+/g, '-')
                                .replace(/\-\-+/g, '-')
                                .replace(/^-+|-+$/g, '');

        slugInput.val(theSlug)
    });
    $("#new-post-publishdate").datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss',
        controlType: 'select',
        oneLine: true,
        showHour: true,
        showMinute: true,
        showSecond: true,
        showMillisec: false,
        showMicrosec: false,
    });
    var simplemde1 = new SimpleMDE({ 
        element: $('#new-post-excerpt')[0],
        autofocus: false
    });
    var simplemde2 = new SimpleMDE({ 
        element: $('#new-post-body')[0],
        autofocus: false
    });

    $('#draft-button').click(function(e) {
        e.preventDefault();
        $('#new-post-publishdate').val("");
        $('#post-form').submit();
    });
</script>
@endsection

