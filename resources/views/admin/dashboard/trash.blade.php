@extends('admin.app')
@section('title', 'Posts')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer" data-role="drawer" class="k-widget k-drawer">
        <div class="drawer-content">
            <h3 class="cms-title">Trashed Posts</h3>
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="col-xs-12">
                        <div class="box"> 
                          <div class="box-body table-responsive">
                            @if ($postCount > 0)
                            <div class="box-header">
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
                                  @foreach ($posts as $post)
                                  <tr>
                                      <td width="85" height="35">
                                          <a title="Restore Post" class="button-restore" href="{{ route('posts.edit', $post->slug) }}">
                                              <i class="fa fa-trash-restore" style="width: 8px;"></i>
                                          </a>
                                          <form action="{{ route('trash.eradicate', $post->id) }}" method="POST" style="display: inline;">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" title="Delete Post" class="button-danger">
                                                  <i class="fa fa-trash-alt"></i>
                                              </button>
                                          </form>
                                      </td>
                                      <td>{{ $post->title }}</td>
                                      <td>{{ $post->author->name }}</td>
                                      <td>{{ $post->category->title}}</td>
                                      <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | {!! $post->publicationlabel() !!}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              <div class="card-footer clearfix">
                                <div class="pull-left">
                                </div>
                                <div class="pull-right">
                                    <small>{{ $postCount }} {{ Str::plural('Item', $postCount) }} </small>
                                </div>
                            </div>
                            @else
                                <h3 style="text-align: center">No Trashed Posts!</h3>
                            @endif
                          </div>
                            
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

