<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\ApprovedMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

        if(strcmp($request->get('confirm_password'), $request->get('new_password'))){
            return redirect()->back()->with("error","Your confirm password does not matches with your new password. Please try again.");
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

    public function forgotpassword(){
        return view('login.forgotpassword');
    }

    public function emailpassword(Request $request){
        $user = User::where('email',$request->email)->first();
        if (count($user) < 1) {
            return redirect()->back()->with('info','User does not exist');
        }
        
        Mail::to($user->email)->send(new ForgotPasswordMail($user));

        return redirect()->back()->with("info","Your password is being sent to your email");
    }


    // public function update(Request $request,$id){
    //     $user = user::find($id);

    //     // $request['password'] = bcrypt($request['password']);
    //     $user->update($request->all());
        
    //     return redirect()->route('login')->with('Edit','Password berhasil Diubah!');
    // }
}
