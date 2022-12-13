<?php

namespace App\Http\Controllers\Admin\Pembelajaran;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembelajaran;

class AdminSarjuController extends Controller
{
    public function index(){
        $pembelajaran = pembelajaran::all()->where('materi','Bidang Sarju');
        return view('admin.pembelajaran-bidang.sarju.index',[
            'pembelajaran' => $pembelajaran
        ]);
    }

    public function create(){
        $pembelajaran = pembelajaran::all();
        return view('admin.pembelajaran-bidang.sarju.create',[
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
        pembelajaran::create($validatedData);

        return redirect()->route('PembelajaranSarju')->with('success','Data berhasil ditambahkan!');
    }

    public function edit($id){
        $pembelajaran = pembelajaran::find($id);

        return view('admin.pembelajaran-bidang.sarju.edit',[
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

        pembelajaran::where('id',$id)->update($validasi);
        return redirect()->route('PembelajaranSarju')->with('success','Data berhasil diubah!');
    }
    
    public function destroy($id){
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->delete();
        
        return redirect()->route('PembelajaranSarju')->with('success','Data berhasil dihapus!');
    }
}
