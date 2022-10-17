<?php

namespace App\Http\Controllers\Admin\Pembelajaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembelajaran;
use App\Models\Post;

class AdminAklikController extends Controller
{
    public function index(){
        $pembelajaran = pembelajaran::all()->where('materi','Bidang Aktivasi Publik ( Aklik )');
        return view('admin.pembelajaran-bidang.aklik.index',[
            'pembelajaran' => $pembelajaran
        ]);
    }

    public function create(){
        $pembelajaran = pembelajaran::all();
        return view('admin.pembelajaran-bidang.aklik.create',[
            'pembelajaran' => $pembelajaran
        ]);
    }

    public function store(Request $request){

        $validatedData = $this->validate($request,[
            'title' => ['required'],
            'sub_title' => ['required'],
            'materi' => ['required'],
            // 'slug' => ['required'],
            'embed_form' => ['required'],
            'embed_youtube' => ['required']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        Pembelajaran::create($validatedData);

        return redirect()->route('PembelajaranAklik')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        $pembelajaran = pembelajaran::find($id);

        return view('admin.pembelajaran-bidang.aklik.edit',[
            'pembelajaran' => $pembelajaran
        ]);
    }

    public function update(Request $request,$id){
        $validasi = $this->validate($request,[
            'title' => ['required'],
            'sub_title' => ['required'],
            'materi' => ['required'],
            // 'slug' => ['required'],
            'embed_form' => ['required'],
            'embed_youtube' => ['required']
        ]);

        Pembelajaran::where('id',$id)->update($validasi);
        return redirect()->route('PembelajaranAklik')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->delete();
        
        return redirect()->route('PembelajaranAklik');
    }
}
