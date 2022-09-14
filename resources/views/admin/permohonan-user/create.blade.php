@extends('layout.admin')

@section('content')


<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header py-3">
            {{-- <h4 class="card-title">Tambah User</h4> --}}
            <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
        </div>
        <div class="card-body">

            <form class="forms-sample" action="/admin/user" method="POST">

                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') @enderror" id="name" name="name" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') @enderror" id="username" name="username" required>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select @error('role') is-invalid @enderror" aria-label="Default select example"
                        id="role" name="role">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') @enderror" id="email" name="email" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control @error('password') @enderror" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $messege }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary px-5 float-right">Submit</button>
                <a href="/admin/user" class="btn btn-danger px-5 mr-2 float-right">Cancel</a>
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
