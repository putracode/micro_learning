@extends('layout.sneat')

@section('title')
Materi Pembelajaran   
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Edit/</span> Materi Pembelajaran</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/materi/{{ $materi->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="materi">Nama Materi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('materi') is-invalid @enderror" id="materi" name="materi" required value="{{ old('materi',$materi->materi) }}" autocomplete="off">
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
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug',$materi->slug) }}" autocomplete="off" readonly>
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
                                <option selected disabled></option>
                                <option value="Bidang" {{ $materi->kategori == "Bidang" ? 'selected' : '' }}>Bidang</option>
                                <option value="Umum" {{ $materi->kategori == "Umum" ? 'selected' : '' }}>Umum</option>
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
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required value="{{ old('deskripsi',$materi->deskripsi) }}" autocomplete="off">
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
                            <input type="hidden" name="lama" value="{{ $materi->thumbnail }}">
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" required value="{{ old('thumbnail') }}" autocomplete="off">
                            @error('thumbnail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-5 btn-sm">Save</button>
                            <a href="/admin/materi" class="btn btn-danger px-5 me-2 float-end btn-sm">Cancel</a>
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
        fetch('/admin/slugMateri?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection