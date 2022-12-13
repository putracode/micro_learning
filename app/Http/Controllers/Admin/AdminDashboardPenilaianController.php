<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\DashboardPenilaian;
use App\Http\Controllers\Controller;

class AdminDashboardPenilaianController extends Controller
{
    public function index(){
        return view('admin.dashboard-penilaian.index',[
            'nilai' => DashboardPenilaian::all()
        ]);
    }

    public function create(){
        return view('admin.dashboard-penilaian.create',[
            'nilai' => DashboardPenilaian::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $this->validate($request,[
            'embed' => ['required'],
        ]);

        DashboardPenilaian::create($validatedData);

        return redirect('/admin/dashboard-penilaian')->with('success','Data berhasil ditambahkan!');
    }

    public function edit($id){
        return view('admin.dashboard-penilaian.edit',[
            'nilai' => DashboardPenilaian::find($id)
        ]);
    }

    public function update(Request $request,$id){
        $validatedData = $this->validate($request,[
            'embed' => ['required']
        ]);

        DashboardPenilaian::where('id',$id)->update($validatedData);
        return redirect('/admin/dashboard-penilaian')->with('success','Data berhasil diubah!');
    }
    
    public function destroy($id){
        $nilai = DashboardPenilaian::find($id);
        $nilai->delete();
        
        return redirect('/admin/dashboard-penilaian')->with('success','Data berhasil dihapus!');
    }
}
