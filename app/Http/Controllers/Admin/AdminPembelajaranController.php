<?php

namespace App\Http\Controllers\Admin;

use App\Models\Materi;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pembelajaran.index',['pembelajaran' => Pembelajaran::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $this->validate($request,[
            'materi' => ['required'],
            'kategori' => ['required'],
            'deskripsi' => ['max:255'],
            'thumbnail' => ['required'],
            'slug' => ['required','unique:pembelajarans'],
        ]);

        if($request->file('thumbnail')){
            $validasi['thumbnail'] = $request->file('thumbnail')->store('thumbnail-pembelajaran');
        }

        Pembelajaran::create($validasi);
        return redirect('/admin/pembelajaran')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelajaran $pembelajaran)
    {
        return view('admin.pembelajaran.edit',['pembelajaran' => $pembelajaran,'materi' => Materi::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelajaran $pembelajaran)
    {
        $rules = [
            'materi' => ['required'],
            'kategori' => ['required'],
            'deskripsi' => ['max:255'],
            'thumbnail' => ['image'],
        ];

        if($request->slug != $pembelajaran->slug){
            $rules['slug'] = 'required|unique:pembelajarans';
        }

        $validasi = $request->validate($rules);

        if($request->file('thumbnail')){
            if($request->lama){
                Storage::delete($request->lama);
            }
            $validasi['thumbnail'] = $request->file('thumbnail')->store('thumbnail-pembelajaran');
        }
        
        pembelajaran::where('id',$pembelajaran->id)->update($validasi);
        return redirect('/admin/pembelajaran')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelajaran $pembelajaran)
    {
        if($pembelajaran->thumbnail){
            Storage::delete($pembelajaran->thumbnail);
        }
        pembelajaran::destroy($pembelajaran->id);
        return redirect('/admin/pembelajaran')->with('success','Data berhasil dihapus!');
    }
}
