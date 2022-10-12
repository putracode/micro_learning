<?php

namespace App\Http\Controllers\Admin\Pembelajaran;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPemeliharaanController extends Controller
{
    public function index(){
        $post = Post::all()->where('bidang','Bidang Pemeliharaan');
        return view('admin.pembelajaran-bidang.pemeliharaan.index',[
            'post' => $post
        ]);
    }

    public function create(){
        $post = Post::all();
        return view('admin.pembelajaran-bidang.pemeliharaan.create',[
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

        return redirect()->route('PembelajaranPemeliharaan')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        $post = post::find($id);

        return view('admin.pembelajaran-bidang.pemeliharaan.edit',[
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
        return redirect()->route('PembelajaranPemeliharaan')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $post = post::find($id);
        $post->delete();
        
        return redirect()->route('PembelajaranPemeliharaan');
    }
}
