@extends('admin.app')
@section('title', 'Posts')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer" data-role="drawer" class="k-widget k-drawer">
        <div class="drawer-content">
            <h3 class="cms-title">Posts</h3>
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body table-responsive">
                                <div class="box-header">
                                    <div class="pull-left" style="padding-bottom: 40px;">
                                        <a id="add-button" title="Add New" class="button-success" href="{{ route('posts.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                                    </div>
                              <!-- /.box-header -->
                                @if ($postCount > 0)
                                <table class="table table-bordered table-condesed">
                                  <thead>
                                      <tr>
                                        <th>Action</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td width="85" height="35">
                                            <a title="Edit Post" class="button-default" href="{{ route('posts.edit', $post->slug) }}">
                                                <i class="fa fa-edit"></i> 
                                            </a>
                                            <p style="display: inline;padding: 0;margin: 5px;">|</p>
                                            <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" style="display: inline;position: relative;right: 3px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Trash Post" class="button-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author->name }}</td>
                                        <td>{{ $post->category->title }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span class="tag-badge">{{ $tag->title }}</span>
                                            @endforeach
                                        </td>
                                        <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | {!! $post->publicationlabel() !!}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-left">
                                        {{ $posts->links() }}
                                    </div>
                                    <div class="pull-right">
                                        <small>{{ $postCount }} {{ Str::plural('Item', $postCount) }} </small>
                                    </div>
                                </div>
                                @else
                                    <h3 style="text-align: center; position: relative; top: -45px; right: -660px; height: 70px; width: fit-content;">No Posts Yet</h3>
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

