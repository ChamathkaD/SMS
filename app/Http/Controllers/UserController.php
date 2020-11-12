<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePassword;
use App\Http\Requests\UpdateProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ViewProfile(){
        return view('profile.profile');
    }

    public function editProfile(){
        return view('profile.edit');

    }

    public function updateProfile(UpdateProfile $request){
        User::where('id', Auth::id())->update([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
        ]);

        return back()->with('success', 'Update Successfully');
    }

    public function ChangePasswordForm(){
        return view('profile.password');
    }

    public function updatePassword(UpdatePassword $request){
        $current_Password = $request->current_password;
        //Check if the passwords are match
        if (Hash::check($current_Password, Auth::user()->password)){
            $new_password = $request->password_confirmation;
            //hashing the nwe password
            $hashed_password = Hash::make($new_password);
            //update password
            User::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password has been updated');

        }else{
            return back()->withErrors('Youe current password is not valid. Please enter your new password');
        }


    }

}
