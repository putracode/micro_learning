<?php

namespace App\Http\Controllers\Admin;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembelajaran;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.materi.index',['materi' => Materi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materi.create',['pembelajaran' => Pembelajaran::orderBy('materi','asc')->get()]);
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
            'title' => ['required'],
            'sub_title' => ['required'],
            'pembelajaran_id' => ['required'],
            'video' => ['required'],
            'quiz' => ['required'],
            'slug' => ['required'],
        ]);

        Materi::create($validasi);
        return redirect('/admin/materi')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('admin.materi.edit',['materi' => $materi, 'pembelajaran' => Pembelajaran::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {   
        $rules = [
            'title' => ['required'],
            'sub_title' => ['required'],
            'pembelajaran_id' => ['required'],
            'video' => ['required'],
            'quiz' => ['required'],
        ];

        if($request->slug != $materi->slug){
            $rules['slug'] = 'required|unique:materis';
        }

        $validasi = $request->validate($rules);

        materi::where('id',$materi->id)->update($validasi);
        return redirect('/admin/materi')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        materi::destroy($materi->id);
        return redirect('/admin/materi')->with('success','Data berhasil dihapus!');
    }

    public function slugMateri(Request $request){
        $slug = SlugService::createSlug(Materi::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function slugPembelajaran(Request $request){
        $slug = SlugService::createSlug(Pembelajaran::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
