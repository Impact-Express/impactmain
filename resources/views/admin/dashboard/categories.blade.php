@extends('admin.app')
@section('title', 'Categories')
@section('content')
    <h3 class="cms-title">Categories</h3>
    <div id="Dashboard">
        <div class="card-body card-posts">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a id="add-button" title="Add New" class="button-success" href="{{ route('categories.create') }}">Add New Category</a>
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
                            <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td width="85" height="35">
                                <a title="Edit" class="button-default" href="{{ route('categories.edit', $category->slug) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a title="Delete" class="button-danger" href="{{ route('categories.destroy', $category->slug) }}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                            <td>{{ $category->title }}</td>
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