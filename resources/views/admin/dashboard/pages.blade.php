@extends('admin.app')
@section('title', 'Posts')
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
                            <div class="box-body table-responsive">
                                <div class="box-header">
                                    <div class="pull-left" style="padding-bottom: 40px;">
                                        <a id="add-button" title="Add New" class="button-success" href="{{ route('pages.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                                    </div>
                              <!-- /.box-header -->
                                @if ($pageCount > 0)
                                <table class="table table-bordered table-condesed">
                                  <thead>
                                      <tr>
                                        <th>Action</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($pages as $page)
                                    <tr>
                                        <td width="85" height="35">
                                            <a title="Edit Post" class="button-default" href="{{ route('pages.edit', $page->slug) }}">
                                                <i class="fa fa-edit"></i> 
                                            </a>
                                            <p style="display: inline;padding: 0;margin: 5px;">|</p>
                                            <form action="{{ route('posts.destroy', $page->slug) }}" method="POST" style="display: inline;position: relative;right: 3px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Trash Post" class="button-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->author->name }}</td>
                                        <td><abbr title="{{ $page->dateFormatted(true) }}">{{ $page->dateFormatted() }}</abbr> | {!! $page->publicationlabel() !!}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-left">
                                        {{-- {{ $pages->links() }} --}}
                                    </div>
                                    <div class="pull-right">
                                        <small>{{ $pageCount }} {{ Str::plural('Item', $pageCount) }} </small>
                                    </div>
                                </div>
                                @else
                                    <h3 style="text-align: center; position: relative; top: -8px; right: -660px; height: 70px; width: fit-content;">No Pages Yet</h3>
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

