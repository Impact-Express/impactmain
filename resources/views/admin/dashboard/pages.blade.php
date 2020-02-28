@extends('admin.app')
@section('title', 'Pages')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer" data-role="drawer" class="k-widget k-drawer">
        <div class="drawer-content">
            <h3 class="cms-title">Pages</h3>
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="pull-left">
                                    <a id="add-button" title="Add New" class="button-success" href=""><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                                <div class="pull-right">
                                    <form class="search-form" action="" method="post">
                                        @csrf
                                        <input type="text" class="form-text" id="form-search-box" placeholder="Search for...">
                                            <button class="form-search-btn" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                    </form>
                                </div>
                            </div>
                          <!-- /.box-header -->
                          <div class="box-body table-responsive">
                            <table class="table table-bordered table-condesed">
                              <thead>
                                  <tr>
                                    <th>Action</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td width="85" height="35">
                                        <a title="Edit" class="button-default" href="{{ route('posts.edit', $page->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a title="Delete" class="button-danger" href="{{ route('posts.destroy', $page->id) }}">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->author->name }}</td>
                                    <td>{{ $page->category->title}}</td>
                                    <td><abbr title="{{ $page->dateFormatted(true) }}">{{ $page->dateFormatted() }}</abbr> | {!! $page->publicationlabel() !!}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="card-footer clearfix">
                            <div class="pull-left">
                                {{ $pages->links() }}
                            </div>
                            <div class="pull-right">
                                <small>{{ $pageCount }} {{ Str::plural('Item', $pageCount) }} </small>
                            </div>
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
            <a style='overflow: hidden;' href='{{ route('admin-posts') }}'><li data-role='drawer-item' style='height: 18px; width: 18px;'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-pages') }}'><li data-role='drawer-item' style='height: 18px;' class='k-state-selected'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span class='k-item-text' style='padding-left: 16px;'>Pages</span></li></a> \
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
</script>
@endsection

