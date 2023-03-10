<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();

        return view('pages.users.allusers', ['users' => $users]);
    }


    public function create()
    {
        $role = Role::where('name', 'Sub Admin')->first();

        return view('pages.users.adduser', ['role' => $role]);
    }


    public function store(Request $request)
    {

        if ($request->password != $request->confirm_password) {

            toastr()->error('Your Password and Confirm Password  does not match');
            return back();
        }


        $password = Hash::make($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);

        $user->assignRole([$request->role]);

        toastr()->success('User Created successfully');
        return redirect()->route('users');
    }


    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::where('name', 'Sub Admin')->first();

        return view('pages.users.edituser', ['user' => $user, 'role' => $role]);
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        toastr()->success('Updated Successfully');

        return redirect()->route('users');
    }
    

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        toastr()->success('User Deleted Successfully');

        return redirect()->route('users');
    }
}
