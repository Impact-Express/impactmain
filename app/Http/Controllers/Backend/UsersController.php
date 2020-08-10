<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index ()
    {
        return view('admin.dashboard.usersPages.users')->with('users', User::all());
    }
    
    public function edit (User $user)
    {
        return view('admin.dashboard.usersPages.profile')->with('user', $user);
    }

    public function profile (User $user)
    {
        return view('admin.dashboard.usersPages.profile')->with('user', $user);
    }
    
    public function makeAdmin (User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'User Made Admin Successfully');

        return redirect(route('admin-users'));
    }
}
