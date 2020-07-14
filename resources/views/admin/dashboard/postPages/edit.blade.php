@extends('admin.app')
@section('title', 'Edit Post')
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
            <h3 class="cms-title">Edit Post</h3>
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="pull-left">
                                   <div class="post-details">
                                    <form action="{{ route('posts.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                                           @method('PATCH')
                                           @csrf

                                            <div class="form-group @error('title') has-error @enderror">
                                                <label for="Title">Title</label>
                                                <input class="form-text @error('title') has-error @enderror" id="new-post-title" tabindex="1" name="title" type="text" value="{{ $post->title }}">

                                                @error('title')
                                                    <span class="help-block has-error">{{ $message }}</span>
                                                    <br><br>
                                                @enderror
                                            </div>

                                            <div class="form-group excerpt @error('excerpt') has-error @enderror">
                                                <label for="Excerpt">Excerpt</label>
                                                <textarea class="form-textarea @error('excerpt') has-error @enderror" id="new-post-excerpt" tabindex="3" name="excerpt" cols="50" rows="10">{{ $post->excerpt }}</textarea>

                                                @error('excerpt')
                                                    <span class="help-block has-error">{{ $message }}</span>
                                                    <br><br>
                                                @enderror
                                            </div>

                                            <div class="form-group @error('body') has-error @enderror">
                                                <label for="Body">Body</label>
                                                <textarea class="form-textarea @error('body') has-error @enderror" id="new-post-body" tabindex="4" name="body" cols="50" rows="10">{{ $post->body }}</textarea>

                                                @error('body')
                                                    <span class="help-block has-error">{{ $message }}</span>
                                                    <br><br>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                <div class="pull-right">
                                    <div class="post-details-right">
                                        <div class="form-group @error('published_at') has-error @enderror">
                                            <label for="Publication Date">Publication Date</label>
                                            <div class="post-publishdate">
                                                <input class="form-text @error('published_at') has-error @enderror" id="new-post-publishdate" name="published_at" type="text" value="{{ $post->published_at }}">
                                            </div>
                                            <hr>
                                            <div class="publish-buttons">
                                                <a id="draft-button" class="button-white">Save Draft</a>
                                                <input class="button-main" type="submit" value="Publish">
                                            </div>
                                            @error('published_at')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="post-details-right">
                                        <div class="form-group @error('category_id') has-error @enderror">
                                            <label for="category_id">Category</label>
                                            <select class="form-text" id="new-post-category" tabindex="6" name="category_id">
                                                <option value="">Choose Category</option>
                                                <option value="1">Uncategorized</option>
                                                <option value="2">Web Design</option>
                                                <option value="3" selected="selected">Web Programming</option>
                                                <option value="4">Internet</option>
                                                <option value="5">Social Marketing</option>
                                                <option value="6">Photography</option>
                                            </select>
                                        
                                            @error('category_id')
                                                <span class="help-block has-error">{{ $message }}</span>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="post-details-right">
                                        <label for="image">Feature Image</label>
                                            <div class="fileinput-new">
                                                <img id="img-thumbnail" width="425" height="250" src="{{ ($post->image_thumb_url) ? $post->image_thumb_url : 'https://via.placeholder.com/425x250.png?text=No+Image' }}">
                                              </div>
                                              <label class="button-image">
                                                  Choose Image
                                                <input type="file" class="button-image" name="image" tabindex="7" onchange="document.getElementById('img-thumbnail').src = window.URL.createObjectURL(this.files[0])">
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
     $("#drawer").kendoDrawer({
        template: "<ul>\
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span class='k-item-text' style='padding-left: 16px;'>Dashboard</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin-media') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span class='k-item-text' style='padding-left: 16px;'>Media</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-posts') }}'><li data-role='drawer-item' style='height: 18px; width: 18px;' class='k-state-selected'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('home') }}'><li style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-external-link-alt'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span></li></a> \
            <li  style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-info-circle'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Impact Express CMS System - v0.1</span></li> \
      </ul>",
        mode: "push",
        mini: true,
        position: 'left',
        minHeight: 915,
    });
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

