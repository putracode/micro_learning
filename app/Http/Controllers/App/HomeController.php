<?php

namespace App\Http\Controllers\App;

use App\Models\ListPembelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['approved']);
    }
    public function index(){
        return view('app.home',[
            'post' => Post::all()
        ]);
    }

    public function indexListPembelajaran(){
        return view('app.listpembelajaran.index');
    }
}
