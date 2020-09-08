@extends('admin.app')
@section('title', 'Categories')
@section('content')
    <h3 class="cms-title">Categories</h3>
    <div id="Dashboard">
        <div class="card-body card-posts">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left" style="padding-bottom: 40px;">
                            <a id="add-button" title="Add New" class="button-success" href="{{ route('categories.create') }}">Add New Category</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                    <table class="table table-bordered table-condesed">
                        <thead>
                            <tr>
                            <th>Action</th>
                            <th>Category</th>
                            <th>Post Count</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td width="85" height="35">
                                <a title="Edit" class="button-default" href="{{ route('categories.edit', $category->slug) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="/admin/categories/{{ $category->slug }}" method="post" style="display: inline">
                                    @method('DELETE')
                                    @csrf

                                    <button title="Delete" class="button-danger" href="{{ route('categories.destroy', $category->slug) }}">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->posts->count() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer clearfix">
                        <div class="pull-left">
                            {{ $categories->links() }}
                        </div>
                        <div class="pull-right">
                            <small>{{ $categoryCount }} {{ Str::plural('Item', $categoryCount) }} </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection