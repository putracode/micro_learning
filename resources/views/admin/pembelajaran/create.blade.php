@extends('layout.sneat')

@section('title')
Pembelajaran 
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Create/</span> Pembelajaran</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/pembelajaran" method="POST">
                    @csrf
                    
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title') }}" autocomplete="off">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="slug">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" autocomplete="off" readonly>
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="sub_title">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" name="sub_title" required value="{{ old('sub_title') }}" autocomplete="off">
                            @error('sub_title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="materi_id" class="col-sm-2 col-form-label">Materi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="materi_id">
                                <option selected disabled></option>
                                @foreach ($materi as $row)
                                    @if(old('materi_id') == $row->id)
                                        <option value="{{ $row->id }}" selected>{{ $row->materi }}</option>
                                    @else
                                        <option value="{{ $row->id }}">{{ $row->materi }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="quiz">Embed Quiz</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('quiz') is-invalid @enderror" id="quiz" name="quiz" required value="{{ old('quiz') }}" autocomplete="off">
                            @error('quiz')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="video">Embed Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('video') is-invalid @enderror" id="video" name="video" required value="{{ old('video') }}" autocomplete="off">
                            @error('video')
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
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/slugPembelajaran?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>

@endsection
