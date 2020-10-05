@extends('admin.app')
@section('title', 'Media')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer">
        <div class="drawer-content">
            <div id="Dashboard">
                <div class="card-body card-posts">
                    <div class="box">
                        <div class="box-header">
                            <div class="pull-left" style="padding-bottom: 20px;">
                                <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label>
                                        <span>Upload Media</span>
                                        <label for="name" class="button-image">Browse...</label>
                                        <input type="file" class="button-image" name="name" id="name" tabindex="8">
                                    </label>
                                    <input type="submit" value="Upload">
                                </form>
                            </div>
                            <div class="pull-right">
                                <form class="search-form" action="" method="post">
                                    @csrf
                                    <input type="text" name="query" class="form-text" id="form-search-box" placeholder="Search for...">
                                        <button class="form-search-btn" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </form>
                            </div>
                          <!-- /.box-header -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">
                        <table class="table table-bordered table-condesed">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ((array)$media->nameUrl as $file)
                                    <td><img src="{{ $file }}" alt=""></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

