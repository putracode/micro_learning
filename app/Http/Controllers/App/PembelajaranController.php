<?php

namespace App\Http\Controllers\App;

use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materi;

class PembelajaranController extends Controller
{

    public function page(){
        return view('app.pembelajaran.page',[
            'materib' => Materi::all()->where('kategori','Bidang'),
            'materiu' => Materi::all()->where('kategori','Umum'),
        ]);
    }
    
    public function index(Materi $materi){
        return view('app.pembelajaran.index',[
            'pembelajaran' => Pembelajaran::all()->where('materi_id',$materi->id),
            'judul' => $materi,
        ]);
    }

    public function materi(Materi $materi, $pembelajaran){
        return view('app.pembelajaran.materi',[
            'pembelajaran' => Pembelajaran::all()->where('slug',$pembelajaran)->first(),
            'judul' => $materi,
        ]);
    }

    public function quiz(Materi $materi, $pembelajaran){
        return view('app.pembelajaran.quiz',[
            'pembelajaran' => Pembelajaran::all()->where('slug',$pembelajaran)->first(),
            'judul' => $materi,
        ]);
    }
}
