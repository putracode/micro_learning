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
            'embed_youtube' => ['max:1000'],
            'foto1' => ['image'],
            'foto2' => ['image'],
            'foto3' => ['image'],
            'foto4' => ['image'],
            'foto5' => ['image']
        ]);

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

        return redirect()->route('AdminGallery')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        return view('admin.gallery.edit',[
            'gallery' => Gallery::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $validatedData = $this->validate($request,[
            'title' => ['required'],
            'embed_youtube' => ['max:1000'],
            'foto1' => ['image'],
            'foto2' => ['image'],
            'foto3' => ['image'],
            'foto4' => ['image'],
            'foto5' => ['image']
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
        return redirect()->route('AdminGallery')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $list = Gallery::find($id);
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
        $list->delete();
        
        return redirect()->route('AdminGallery');
    }
}
