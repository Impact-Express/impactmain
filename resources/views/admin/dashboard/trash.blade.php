@extends('admin.app')
@section('title', 'Trashed Posts')
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
                                            <form action="{{ route('trash.restore', $post->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <button title="Restore Post" class="button-restore">
                                                    <i class="fa fa-trash-restore"></i>
                                                </button>
                                            </form>
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

