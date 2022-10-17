<?php

namespace App\Http\Controllers\Admin\Pembelajaran;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembelajaran;

class AdminNa3pController extends Controller
{
    public function index(){
        $pembelajaran = pembelajaran::all()->where('materi','Bidang NA3P');
        return view('admin.pembelajaran-bidang.na3p.index',[
            'pembelajaran' => $pembelajaran
        ]);
    }

    public function create(){
        $pembelajaran = pembelajaran::all();
        return view('admin.pembelajaran-bidang.na3p.create',[
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

        return redirect()->route('PembelajaranNa3p')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        $pembelajaran = pembelajaran::find($id);

        return view('admin.pembelajaran-bidang.na3p.edit',[
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
        return redirect()->route('PembelajaranNa3p')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->delete();
        
        return redirect()->route('PembelajaranNa3p');
    }
}
