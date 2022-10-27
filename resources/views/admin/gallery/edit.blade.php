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
                <form action="/admin/gallery/{{ $gallery->id }}" method="POST">
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
                        <label class="col-sm-2 col-form-label" for="embed_youtube">Embed Youtube</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed_youtube') @enderror" id="embed_youtube" name="embed_youtube" required value="{{ $gallery->embed_youtube }}">
                            @error('embed_youtube')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-5 btn-sm">Send</button>
                            <a href="/admin/gallery" class="btn btn-danger px-5 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection