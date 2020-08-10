<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index ()
    {
        return view('admin.dashboard.usersPages.users')->with('users', User::all());
    }
    
    public function register (User $user)
    {
        return view('admin.auth.register', compact('user'));
    }

    public function profile (User $user)
    {
        return view('admin.dashboard.usersPages.profile', compact('user'));
    }
    

    public function update (Request $request, User $user)
    {
        $user->update(['name' => $request->name, 'bio' => $request->bio]);

        session()->flash('success', 'User Updated Successfully');

        return redirect()->back();

    }

    public function makeAdmin (User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'User Made Admin Successfully');

        return redirect(route('admin-users'));
    }

    public function makeWriter (User $user)
    {
        $user->role = 'writer';

        $user->save();

        session()->flash('success', 'User Made Writer Successfully');

        return redirect(route('admin-users'));
    }
}
