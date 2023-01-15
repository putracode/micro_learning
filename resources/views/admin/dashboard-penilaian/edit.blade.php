@extends('layout.sneat')

@section('title')
Dashboard Penilaian
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Edit/</span> Dashboard Penilaian</h4>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/dashboard-penilaian/{{ $nilai->id }}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="bidang" value="1"> --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="embed">Embed</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed') @enderror" id="embed" name="embed" required value="{{ $nilai->embed }}">
                            @error('embed')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-4 btn-sm">Save</button>
                            <a href="/admin/dashboard-penilaian" class="btn btn-danger px-4 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
