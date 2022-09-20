<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        // $validatedData = $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required|string|min:6|confirmed',
        // ]);

        //Change Password
        $user = user::all()->where('id',Auth()->user()->id)->first();
        // Auth::user()->password = bcrypt($request->get('new_password'));
        $user->password = bcrypt($request->get('new_password'));
        // Auth::user()->password = bcrypt($request->get('new_password'));
        $user->password_change = true;
        $user->save();


        // Auth::user()->password_change = true;


        return redirect('/home')->with("success","Password changed successfully !");

    }

    public function change(){
        return view('login.changepassword');
    }


    // public function update(Request $request,$id){
    //     $user = user::find($id);

    //     // $request['password'] = bcrypt($request['password']);
    //     $user->update($request->all());
        
    //     return redirect()->route('login')->with('Edit','Password berhasil Diubah!');
    // }
}
