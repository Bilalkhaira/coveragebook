<?php

namespace App\Http\Controllers\Profile;

use File;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        return view('auth.update_password');
    }

    public function passwordReset(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if($request->password != $request->confirmpassword) {

            toastr()->error('Your New Password and Confirm New Password  does not match');
            return back();
        }

        if(Hash::check($request->current_password, $user->password)){

            $newpassword = Hash::make($request->password);

            $user->update([
                'password' => $newpassword
            ]);

            toastr()->success('Your Password updated successfully');
            return redirect()->route('dashboard');
            
        } else{

            toastr()->error('Your Current password does not match our records');
            return back();
        }
           
    }
}