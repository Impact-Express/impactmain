@extends('admin.app')
@section('title', 'New Post')
@section('css')
    <link href="{{asset('css/forms.css')}}" rel="stylesheet">
    <link  href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css" rel="stylesheet">
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
                                    {!! Form::model($post, ['method' => 'POST', 'route' => 'posts.store']) !!}
                                    <div class="form-group">
                                        {!! Form::label('Title') !!}
                                        {!! Form::text('title', null , ['required', 'class' => 'form-text','id' => 'new-post-title','tabindex' => '1']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Slug') !!}
                                        {!! Form::text('slug', null , ['required', 'class' => 'form-text','id' => 'new-post-slug','tabindex' => '2']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Excerpt') !!}
                                        {!! Form::textarea('excerpt', null , ['required', 'class' => 'form-text','id' => 'new-post-excerpt','tabindex' => '3']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Body') !!}
                                        {!! Form::textarea('body', null , ['required', 'class' => 'form-text','id' => 'new-post-body','tabindex' => '4']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Publication Date') !!}
                                        {!! Form::date('published_at', null , ['required', 'class' => 'form-text','id' => 'new-post-publishdate','tabindex' => '4']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', App\Category::pluck('title', 'id'), null , ['required', 'class' => 'form-text','id' => 'new-post-category','tabindex' => '4', 'placeholder' => 'Choose Category']) !!}
                                    </div>
                                    <hr>
                                    {!! Form::submit('Create Post', ['class' => 'button-main']) !!}
                                    {!! Form::close() !!}
                                   </div>
                                </div>
                                <div class="pull-right">
                                    
                                </div>
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
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
     $("#drawer").kendoDrawer({
        template: "<ul>\
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span class='k-item-text' style='padding-left: 16px;'>Dashboard</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin-media') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span class='k-item-text' style='padding-left: 16px;'>Media</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-posts') }}'><li data-role='drawer-item' style='height: 18px; width: 18px;' class='k-state-selected'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-pages') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span class='k-item-text' style='padding-left: 16px;'>Pages</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('admin-settings') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-cog'></i><span class='k-item-text' style='padding-left: 16px;'>Settings</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('home') }}'><li style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-external-link-alt'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span></li></a> \
            <li  style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-info-circle'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Impact Express CMS System - v0.1</span></li> \
      </ul>",
        mode: "push",
        mini: true,
        position: 'left',
        minHeight: 915,
    });
    var simplemde1 = new SimpleMDE({ element: document.getElementById("new-post-excerpt") });
    var simplemde2 = new SimpleMDE({ element: document.getElementById("new-post-body") });
</script>
@endsection

