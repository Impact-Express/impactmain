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
                            <a id="add-button" title="Add New" class="button-success" href="{{ route('admin-register-user') }}">Register New user</a>
                        </div>
                        <div class="pull-right">
                            <form class="search-form" action="/admin/users/search" method="get">
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
                            <th>Display Name</th>
                            <th>Email Address</th>
                            <th>User Role</th>
                            <th>Admin / Writer Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td width="85" height="35">
                                <form action="{{ route('admin-profile', $user->slug) }}" method="get" style="display: inline">
                                    @csrf
                                    <button title="Delete" class="button-default">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                <form action="#" method="post" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button title="Delete" class="button-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                            <td><img src="{{ $user->gravatar() }}" style="border-radius: 50%" width="80" height="80"></td>
                            <td>{{ $user->slug }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            @if ($user == Auth::user())
                                <td>Cannot Remove Admin <br>From Yourself!</td>
                            @endif
                            @if ($user->id == $userid)
                                <td>Cannot Remove Admin <br>From The Administrator!</td>  
                            @endif
                            @if ($user != Auth::user() && $user->id != $userid && $user->isAdmin())
                            
                            <form action="{{ route('admin-users-makeWriter', $user->slug) }}" method="post">
                                @csrf
                                <td><button href="" class="button-success" style="padding: 7px 10px; border-radius: 6px;">Make Writer</button></td>
                            </form>
                            @endif



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