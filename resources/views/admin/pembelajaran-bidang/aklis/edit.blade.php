@extends('layout.sneat')

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Edit/</span> Pembelajaran Aklis</h4>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/p/aklis/{{ $pembelajaran->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="materi" value="Bidang Aktivasi Listrik">
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') @enderror" id="title" name="title" required value="{{ $pembelajaran->title }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="sub_title">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('sub_title') @enderror" id="sub_title" name="sub_title" required value="{{ $pembelajaran->sub_title }}">
                            @error('sub_title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="embed_form">Embed Form</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed_form') @enderror" id="embed_form" name="embed_form" required value="{{ $pembelajaran->embed_form }}">
                            @error('embed_form')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="embed_youtube">Embed Youtube</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed_youtube') @enderror" id="embed_youtube" name="embed_youtube" required value="{{ $pembelajaran->embed_youtube }}">
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
                            <a href="/admin/p/aklis" class="btn btn-danger px-5 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
