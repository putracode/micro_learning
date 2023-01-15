@extends('layout.sneat')

@section('title')
Pembelajaran   
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Edit/</span> Pembelajaran</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/pembelajaran/{{ $pembelajaran->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="materi">Nama Pelajaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('materi') is-invalid @enderror" id="materi" name="materi" required value="{{ old('materi',$pembelajaran->materi) }}" autocomplete="off">
                            @error('materi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="slug">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug',$pembelajaran->slug) }}" autocomplete="off" readonly>
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="kategori" class="form-label col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                                <option selected disabled hidden></option>
                                <option value="Bidang" {{ $pembelajaran->kategori == "Bidang" ? 'selected' : '' }}>Bidang</option>
                                <option value="Umum" {{ $pembelajaran->kategori == "Umum" ? 'selected' : '' }}>Umum</option>
                            </select>
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi',$pembelajaran->deskripsi) }}" autocomplete="off">
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="thumbnail">Thumbnail</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="lama" value="{{ $pembelajaran->thumbnail }}">
                            @if ($pembelajaran->thumbnail)
                            <img src="{{ asset('storage/' . $pembelajaran->thumbnail ) }}" alt="" class="img-preview img-fluid mb-3 rounded-2 d-block " style="width: 250px; height: 150px;">
                            @else
                            <img class="img-preview mb-3 img-fluid rounded-2" style="width: 250px; height: 150px;">
                            @endif
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}" autocomplete="off" onchange="previewImage()">
                            @error('thumbnail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-4 btn-sm">Save</button>
                            <a href="/admin/pembelajaran" class="btn btn-danger px-4 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#materi');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/slugPembelajaran?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage(){
        const image = document.querySelector("#thumbnail");
        const imgPreview = document.querySelector(".img-preview");
    
        imgPreview.style.display = "block";
    
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>

@endsection
