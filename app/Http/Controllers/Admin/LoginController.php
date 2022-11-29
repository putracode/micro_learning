<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // Login
    public function indexLogin(){
        return view('login.login');
    }
    
    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError','Login Failed!');
    }

    public function logout(Request $request){
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Register

    public function indexRegister(){
        return view('login.registrasi');
    }

    public function store(Request $request){
        $validatedData = $this->validate($request,[
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required','unique:users'],
            'no_telepon' => ['required'],
            'password' => ['required'],
            'bidang' => ['required'],
            'pengguna' => ['required'],
            'perusahaan' => ['required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect()->route('login')->with('success','You have successfully registered. username and password will be sent to your email');
        // return redirect()->route('login')->with('success','Anda Berhasil Registrasi!. Username dan password akan dikirim via Email');
    }


    
}
