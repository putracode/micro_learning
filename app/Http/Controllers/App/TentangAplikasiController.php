<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangAplikasiController extends Controller
{
    public function index(){
        return view('app.tentang-aplikasi.index');
    }
}
