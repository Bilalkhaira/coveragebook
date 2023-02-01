<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.pages.profile');
    }

    public function updateprofile(Request $request)
    {
        $admin = User::find($request->user_id);
      
        $imgpath = public_path('img/admin/profile/');

        if (empty($request->profile_photo)) {

            $updateimage = $admin->profile_photo;

        } else {

            $imagePath =  $imgpath . $admin->profile_photo;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->profile_photo;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }
        
        try {

            $admin->update([
                'name'          => $request->name,
                'email'         => $request->email,
                'profile_photo' => $updateimage,
            ]);

        } 
        catch (Exception $e) {

            dd($e->getMessage());
        }

        toastr()->success('Profile Updated Successfully');

        return back();
    }


    public function deleteProfilePhoto(){

        $imgpath = public_path('img/admin/profile/');
        $imagePath =  $imgpath . auth()->user()->profile_photo;

        if(File::exists($imagePath)) {

            File::delete($imagePath);
            $user = User::find(auth()->user()->id);
            $user->profile_photo = "";
            $user->save();

            toastr()->success('Profile Image Deleted Successfully');
            return redirect()->back();
        }
    }

    public function passwordReset(Request $request)
    {
        $admin = User::find($request->user_id);

        if($request->password != $request->confirmpassword) {

            toastr()->error('Your New Password and Re-enter New Password  does not match');
            return back();
        }

        if(Hash::check($request->current_password, $admin->password)){

            $newpassword = Hash::make($request->password);

            $admin->update([
                'password' => $newpassword
            ]);

            toastr()->success('Your Password updated successfully');
            return back();
            
        } else{

            toastr()->error('Your Current password does not match our records');
            return back();
        }
           
    }
}