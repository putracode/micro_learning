<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'user' => User::all()->where('is_approve','Approved')->count(),
            'permohonan' => user::all()->where('is_approve','Not Approved')->count()
        ]);
    }

}
