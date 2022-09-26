<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Models\ListPembelajaran;
use App\Http\Controllers\Controller;

class ListPembelajaranController extends Controller
{
    public function index(){
        return view('app.listpembelajaran.index',[
            'list' => ListPembelajaran::all()
        ]);
    }
}
