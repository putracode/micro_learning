@extends('layout.sneat')

@section('title')
Galeri
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Edit/</span> Galeri</h4>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/gallery/{{ $gallery->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') @enderror" id="title" name="title" required value="{{ $gallery->title }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="foto1">Foto 1</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama1" value="{{ $gallery->foto1 }}">
                            <input type="file" class="form-control @error('foto1') @enderror" id="foto1" name="foto1">
                            @error('foto1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="foto2">Foto 2</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama2" value="{{ $gallery->foto2 }}">
                            <input type="file" class="form-control @error('foto2') @enderror" id="foto2" name="foto2">
                            @error('foto2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="foto3">Foto 3</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama3" value="{{ $gallery->foto3 }}">
                            <input type="file" class="form-control @error('foto3') @enderror" id="foto3" name="foto3">
                            @error('foto3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="foto4">Foto 4</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama4" value="{{ $gallery->foto4 }}">
                            <input type="file" class="form-control @error('foto4') @enderror" id="foto4" name="foto4">
                            @error('foto4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="foto5">Foto 5</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama5" value="{{ $gallery->foto5 }}">
                            <input type="file" class="form-control @error('foto5') @enderror" id="foto5" name="foto5">
                            @error('foto5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="embed_youtube">Embed Youtube</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed_youtube') @enderror" id="embed_youtube" name="embed_youtube" value="{{ $gallery->embed_youtube }}"> 
                            @error('embed_youtube')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-4 btn-sm">Send</button>
                            <a href="/admin/gallery" class="btn btn-danger px-4 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
