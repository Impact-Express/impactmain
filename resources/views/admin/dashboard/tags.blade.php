@extends('admin.app')
@section('title', 'Tags')
@section('content')
    <h3 class="cms-title">Tags</h3>
    <div id="Dashboard">
        <div class="card-body card-posts">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a id="add-button" title="Add New" class="button-success" href="{{ route('tags.create') }}">Add New Tags</a>
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
                            <th>Tag</th>
                            <th>Post Count</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tags as $tag)
                        <tr>
                            <td width="85" height="35">
                                <a title="Edit" class="button-default" href="{{ route('tags.edit', $tag->slug) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="/admin/tags/{{ $tag->slug }}" method="post" style="display: inline">
                                    @method('DELETE')
                                    @csrf

                                    <button title="Delete" class="button-danger" href="{{ route('tags.destroy', $tag->slug) }}">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $tag->title }}</td>
                            <td>{{ $tag->posts->count() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer clearfix">
                        <div class="pull-left">
                            {{ $tags->links() }}
                        </div>
                        <div class="pull-right">
                            <small>{{ $tagCount }} {{ Str::plural('Item', $tagCount) }} </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection