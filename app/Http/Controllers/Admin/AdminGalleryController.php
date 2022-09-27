<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

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
            'embed_youtube' => ['required'],
            'title' => ['required']
        ]);

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
            'embed_youtube' => ['required'],
            'title' => ['required']
        ]);

        Gallery::where('id',$id)->update($validatedData);
        return redirect()->route('AdminGallery')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $list = Gallery::find($id);
        $list->delete();
        
        return redirect()->route('AdminGallery');
    }
}
