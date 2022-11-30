<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        return view('app.gallery.index',[
            // 'gallery' => Gallery::all()
            'gallery' => Gallery::latest()->filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }
}
