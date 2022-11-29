<?php

namespace App\Http\Controllers\App;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\ListPembelajaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['newpassword']);
    //     $this->middleware(['approved']);
    // }
    public function index(){
        // if ((Auth::user()->password_change == false)) {
        //     return redirect('/change-password');
        // }else{
        //     return view('app.home',[
        //         'post' => Post::all()
        //     ]);
        // }

        return view('app.landing',[
            'post' => Post::all()
        ]);
    }

    public function indexHome(){
        if ((Auth::user()->password_change == false)) {
            return redirect('/change-password');
        }else{
            return view('app.home',[
                'post' => Post::all()
            ]);
        }
        return view('app.home');
    }

    public function indexListPembelajaran(){
        return view('app.listpembelajaran.index');
    }
}
