@extends('layout.admin')

@section('content')


<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header py-3">
            {{-- <h4 class="card-title">Tambah User</h4> --}}
            <h6 class="m-0 font-weight-bold text-primary">Tambah Post</h6>
        </div>
        <div class="card-body">

            <form 3lass="forms-sample" action="/admin/p/spap" method="POST">

                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') @enderror" id="title" name="title" required>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="sub_title" class="form-label">Sub Title</label>
                    <input type="text" class="form-control @error('sub_title') @enderror" id="sub_title" name="sub_title" required>
                    @error('sub_title')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="embed_form" class="form-label">Embed Form</label>
                    <input type="text" class="form-control @error('embed_form') @enderror" id="embed_form" name="embed_form" required>
                    @error('embed_form')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>
                
                
                <div class="mb-4">
                    <label for="embed_youtube" class="form-label">Embed Youtube</label>
                    <input type="text" class="form-control @error('embed_youtube') @enderror" id="embed_youtube" name="embed_youtube" required>
                    @error('embed_youtube')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>
                
                <input type="hidden" name="bidang" value="6">
                <button type="submit" class="btn btn-primary px-5 float-right">Submit</button>
                <a href="/admin/p/spap" class="btn btn-danger px-5 mr-2 float-right">Cancel</a>
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


