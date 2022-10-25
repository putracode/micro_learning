@extends('layout.sneat')

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Create/</span>List Pembelajaran</h4>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/list-pembelajaran" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="embed_pembelajaran">Embed List Pembelajaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('embed_pembelajaran') @enderror" id="embed_pembelajaran" name="embed_pembelajaran" required>
                            @error('embed_pembelajaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-5 btn-sm">Save</button>
                            <a href="/admin/list-pembelajaran" class="btn btn-danger px-5 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
