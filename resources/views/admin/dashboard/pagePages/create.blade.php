@extends('admin.app')
@section('title', 'New Post')
@section('css')
    <link href="{{asset('css/simplemde.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css rel="stylesheet">
@endsection
@section('js')
<script src="{{ asset('js/simplemde.min.js') }}" ></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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
                                <div class="pull-left" style="width: 65%;">
                                   <div class="post-details">
                                    <form action="{{ route('pages.store', $page->slug) }}" id="post-form" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group @error('title') has-error @enderror">
                                            <label for="title">Title</label>
                                            <input class="form-text @error('title') has-error @enderror" id="new-post-title" tabindex="1" name="title" type="text" value="{{ $page->title }}">

                                            @error('title')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('slug') has-error @enderror">
                                            <label for="slug">Slug</label>
                                            <input class="form-text @error('slug') has-error @enderror" id="new-post-slug" tabindex="1" name="slug" type="text" value="{{ $page->slug }}">

                                            @error('slug')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('body') has-error @enderror">
                                            <label for="Body">Body</label>
                                            <textarea class="form-textarea @error('body') has-error @enderror" id="new-page-body" tabindex="4" name="body" cols="50" rows="10">{{ $page->body }}</textarea>

                                            @error('body')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right" style="width: 30%; right: 40px;">
                                    <div class="post-details-right">
                                        <div class="form-group @error('published_at') has-error @enderror">
                                            <label for="Publication Date">Publication Date</label>
                                            <div class="post-publishdate">
                                                <input class="form-text @error('published_at') has-error @enderror" id="new-page-publishdate" name="published_at" type="text" value="{{ $page->published_at }}">
                                            </div>
                                            <hr>
                                            <div class="publish-buttons">
                                                <input class="button-main" style="margin-left: auto;" type="submit" value="Publish">
                                            </div>
                                            @error('published_at')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="post-details-right">
                                        <label for="image">Feature Image</label>
                                            <div class="fileinput-new">
                                                <img id="img-thumbnail" width="425" height="250" src="{{ ($page->image_url) ? $page->image_url : 'https://via.placeholder.com/425x250.png?text=No+Image' }}">
                                                </div>
                                                <label class="button-image">
                                                    Choose Image
                                                <input type="file" class="button-image" name="image" id="image" tabindex="8" onchange="document.getElementById('img-thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                                </label>

                                                @error('image')
                                                <br><br>
                                                    <span class="help-block has-error">{{ $message }}</span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </form>                               
                                </div>
                            <!-- /.box-header -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $("#new-page-publishdate").datetimepicker({
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
        var simplemde = new SimpleMDE({ 
            element: $('#new-page-body')[0],
            autofocus: false
        });
</script>
@endsection

