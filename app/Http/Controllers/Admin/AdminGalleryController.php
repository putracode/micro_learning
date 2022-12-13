<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    public function index(){
        return view('admin.gallery.index',[
            'list' => Gallery::all()
        ]);
    }

    public function create(){
        return view('admin.gallery.create',[
            'list' => Gallery::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $this->validate($request,[
            'title' => ['required'],
            'thumbnail' => ['required'],
            'embed_youtube1' => ['max:1000'],
            'embed_youtube2' => ['max:1000'],
            'embed_youtube3' => ['max:1000'],
            'embed_youtube4' => ['max:1000'],
            'embed_youtube5' => ['max:1000'],
            'foto1' => ['image'],
            'foto2' => ['image'],
            'foto3' => ['image'],
            'foto4' => ['image'],
            'foto5' => ['image'],
            'foto6' => ['image'],
            'foto7' => ['image'],
            'foto8' => ['image'],
            'foto9' => ['image'],
            'foto10' => ['image'],
        ]);

        if($request->file('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('foto-galeri');
        }
        if($request->file('foto1')){
            $validatedData['foto1'] = $request->file('foto1')->store('foto-galeri');
        }
        if($request->file('foto2')){
            $validatedData['foto2'] = $request->file('foto2')->store('foto-galeri');
        }
        if($request->file('foto3')){
            $validatedData['foto3'] = $request->file('foto3')->store('foto-galeri');
        }
        if($request->file('foto4')){
            $validatedData['foto4'] = $request->file('foto4')->store('foto-galeri');
        }
        if($request->file('foto5')){
            $validatedData['foto5'] = $request->file('foto5')->store('foto-galeri');
        }

        Gallery::create($validatedData);

        return redirect()->route('AdminGallery')->with('success','Data berhasil ditambahkan!');
    }

    public function edit($id){
        return view('admin.gallery.edit',[
            'gallery' => Gallery::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $validatedData = $this->validate($request,[
            'title' => ['required'],
            'embed_youtube1' => ['max:1000'],
            'embed_youtube2' => ['max:1000'],
            'embed_youtube3' => ['max:1000'],
            'embed_youtube4' => ['max:1000'],
            'embed_youtube5' => ['max:1000'],
            'foto1' => ['image'],
            'foto2' => ['image'],
            'foto3' => ['image'],
            'foto4' => ['image'],
            'foto5' => ['image'],
            'foto6' => ['image'],
            'foto7' => ['image'],
            'foto8' => ['image'],
            'foto9' => ['image'],
            'foto10' => ['image'],
        ]);

        if($request->file('foto1')){
            if($request->lama1){
                Storage::delete($request->lama1);
            }
            $validatedData['foto1'] = $request->file('foto1')->store('foto-galeri');
        }
        if($request->file('foto2')){
            if($request->lama2){
                Storage::delete($request->lama2);
            }
            $validatedData['foto2'] = $request->file('foto2')->store('foto-galeri');
        }
        if($request->file('foto3')){
            if($request->lama3){
                Storage::delete($request->lama3);
            }
            $validatedData['foto3'] = $request->file('foto3')->store('foto-galeri');
        }
        if($request->file('foto4')){
            if($request->lama4){
                Storage::delete($request->lama4);
            }
            $validatedData['foto4'] = $request->file('foto4')->store('foto-galeri');
        }
        if($request->file('foto5')){
            if($request->lama5){
                Storage::delete($request->lama5);
            }
            $validatedData['foto5'] = $request->file('foto5')->store('foto-galeri');
        }

        Gallery::where('id',$id)->update($validatedData);
        return redirect()->route('AdminGallery')->with('success','Data berhasil diubah!');
    }
    
    public function destroy($id){
        $list = Gallery::find($id);
        if($list->thumbnail){
            Storage::delete($list->thumbnail);
        }
        if($list->foto1){
            Storage::delete($list->foto1);
        }
        if($list->foto2){
            Storage::delete($list->foto2);
        }
        if($list->foto3){
            Storage::delete($list->foto3);
        }
        if($list->foto4){
            Storage::delete($list->foto4);
        }
        if($list->foto5){
            Storage::delete($list->foto5);
        }
        if($list->foto6){
            Storage::delete($list->foto6);
        }
        if($list->foto7){
            Storage::delete($list->foto7);
        }
        if($list->foto8){
            Storage::delete($list->foto8);
        }
        if($list->foto9){
            Storage::delete($list->foto9);
        }
        if($list->foto10){
            Storage::delete($list->foto10);
        }
        $list->delete();
        
        return redirect()->route('AdminGallery')->with('success','Data berhasil dihapus!');
    }
}
