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
            'materib' => Pembelajaran::all()->where('kategori','Bidang'),
            'materiu' => Pembelajaran::all()->where('kategori','Umum'),
        ]);
    }
    
    public function index(Pembelajaran $pembelajaran){
        return view('app.pembelajaran.index',[
            'materi' => Materi::all()->where('pembelajaran_id',$pembelajaran->id),
            'judul' => $pembelajaran,
        ]);
    }

    public function materi(Pembelajaran $pembelajaran, $materi){
        return view('app.pembelajaran.materi',[
            'materi' => materi::all()->where('slug',$materi)->first(),
            'judul' => $pembelajaran,
        ]);
    }

    public function quiz(Pembelajaran $pembelajaran, $materi){
        return view('app.pembelajaran.quiz',[
            'materi' => Materi::all()->where('slug',$materi)->first(),
            'judul' => $pembelajaran,
        ]);
    }
}
