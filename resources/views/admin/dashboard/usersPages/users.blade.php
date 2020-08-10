@extends('admin.app')
@section('title', 'Users')
@section('content')
    <h3 class="cms-title">Users</h3>
    <div id="Dashboard">
        <div class="card-body card-posts">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a id="add-button" title="Add New" class="button-success" href="#">Register New user</a>
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
                            <th>Avatar</th>
                            <th>Username</th>
                            <th>Email Address</th>
                            <th>User Role</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td width="85" height="35">
                                <a title="Edit" class="button-default" href="{{ route('admin-profile', $user->slug) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="#" method="post" style="display: inline">
                                    @method('DELETE')
                                    @csrf

                                    <button title="Delete" class="button-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                            <td><img src="{{ $user->gravatar() }}" style="border-radius: 50%" width="80" height="80"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            @if (!$user->isAdmin())
                            <form action="{{ route('admin-users-makeAdmin', $user->slug) }}" method="post">
                                @csrf
                                <td><button href="" class="button-success" style="padding: 7px 10px; border-radius: 6px;">Make Admin</button></td>
                            </form>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer clearfix">
                        <div class="pull-left">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection