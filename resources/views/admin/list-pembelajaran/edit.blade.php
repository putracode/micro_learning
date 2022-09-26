@extends('layout.admin')

@section('content')


<div class="col-12 grid-margin stretch-card pt-3">
    <div class="card">
        <div class="card-header py-3">
            {{-- <h4 class="card-title">Tambah User</h4> --}}
            <h6 class="m-0 font-weight-bold text-primary">Edit List Pembelajaran</h6>
        </div>
        <div class="card-body">

            <form class="forms-sample" action="/admin/p/aklik/{{ $list->id }}" method="POST">

                @csrf
                <div class="mb-4">
                    <label for="embed_pembelajaran" class="form-label">Embed List Pembelajaran</label>
                    <input type="text" class="form-control @error('embed_pembelajaran') @enderror" id="embed_pembelajaran" name="embed_pembelajaran" required value="{{ $list->embed_pembelajaran }}">
                    @error('embed_pembelajaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary px-5 float-right">Submit</button>
                <a href="/admin/p/aklik" class="btn btn-danger px-5 mr-2 float-right">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
