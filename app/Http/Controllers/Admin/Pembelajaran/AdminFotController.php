<?php

namespace App\Http\Controllers\Admin\Pembelajaran;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminFotController extends Controller
{
    public function index(){
        $post = Post::all()->where('bidang','FOT');
        return view('admin.pembelajaran-umum.fot.index',[
            'post' => $post
        ]);
    }

    public function create(){
        $post = Post::all();
        return view('admin.pembelajaran-umum.fot.create',[
            'post' => $post
        ]);
    }

    public function store(Request $request){

        $validatedData = $this->validate($request,[
            'title' => ['required'],
            'sub_title' => ['required'],
            'bidang' => ['required'],
            // 'slug' => ['required'],
            'embed_form' => ['required'],
            'embed_youtube' => ['required']
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        Post::create($validatedData);

        return redirect()->route('PembelajaranFOT')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        $post = post::find($id);

        return view('admin.pembelajaran-umum.fot.edit',[
            'post' => $post
        ]);
    }

    public function update(Request $request,$id){
        $validasi = $this->validate($request,[
            'title' => ['required'],
            'sub_title' => ['required'],
            'bidang' => ['required'],
            // 'slug' => ['required'],
            'embed_form' => ['required'],
            'embed_youtube' => ['required']
        ]);

        Post::where('id',$id)->update($validasi);
        return redirect()->route('PembelajaranFOT')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $post = post::find($id);
        $post->delete();
        
        return redirect()->route('PembelajaranFOT');
    }
}
