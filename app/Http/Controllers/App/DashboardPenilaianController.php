<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Models\DashboardPenilaian;
use App\Http\Controllers\Controller;

class DashboardPenilaianController extends Controller
{
    public function index(){
        return view('app.dashboard-penilaian.index',[
            'nilai' => DashboardPenilaian::all()
        ]);
    }
}
