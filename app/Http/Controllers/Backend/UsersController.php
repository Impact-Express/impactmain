<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index ()
    {
        $userid = 1;
        return view('admin.dashboard.usersPages.users', compact('userid'))->with('users', User::all());
    }
    
    public function register (User $user)
    {
        return view('admin.auth.register', compact('user'));
    }

    public function profile (User $user)
    {
        return view('admin.dashboard.usersPages.profile', compact('user'));
    }
    

    public function update (UpdateUserRequest $request, User $user)
    {
        $currentpass = Hash::check($request->currentpass, $user->password);

        if ($currentpass == true) {
            $user->update(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password), 'bio' => $request->bio]);
        }
        $user->update(['name' => $request->name, 'email' => $request->email, 'bio' => $request->bio]);

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
        if ($user == Auth::user()) {
            session()->flash('warning', 'You cannot remove Admin From your own account!');
    
            return redirect(route('admin-users'));
        } elseif ($user == User::find(1)) 
        {
            session()->flash('warning', 'You cannot remove Admin from the Administrator Account!');
    
            return redirect(route('admin-users'));
        }
            $user->role = 'writer';

            $user->save();
    
            session()->flash('success', 'User Made Writer Successfully');
    
            return redirect(route('admin-users'));
    }
}
