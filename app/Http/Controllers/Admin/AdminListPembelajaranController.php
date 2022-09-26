<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ListPembelajaran;
use App\Http\Controllers\Controller;

class AdminListPembelajaranController extends Controller
{
    public function index(){
        return view('admin.list-pembelajaran.index',[
            'list' => ListPembelajaran::all()
        ]);
    }

    public function create(){
        return view('admin.list-pembelajaran.create',[
            'list' => ListPembelajaran::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $this->validate($request,[
            'embed_pembelajaran' => ['required']
        ]);

        ListPembelajaran::create($validatedData);

        return redirect()->route('AdminListPembelajaran')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        return view('admin.list-pembelajaran.edit',[
            'list' => ListPembelajaran::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $validatedData = $this->validate($request,[
            'embed_pembelajaran' => ['required']
        ]);

        ListPembelajaran::where('id',$id)->update($validatedData);
        return redirect()->route('AdminListPembelajaran')->with('Edit','Data berhasil di ubah!');
    }
    
    public function destroy($id){
        $list = ListPembelajaran::find($id);
        $list->delete();
        
        return redirect()->route('AdminListPembelajaran');
    }
}
