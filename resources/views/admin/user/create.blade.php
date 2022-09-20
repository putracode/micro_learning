@extends('layout.admin')

@section('content')
<div class="col-12 grid-margin stretch-card pt-3">
    <div class="card">
        <div class="card-header py-3">
            {{-- <h4 class="card-title">Tambah User</h4> --}}
            <h6 class="m-0 font-weight-bold text-primary">TAMBAH USER</h6>
        </div>
        <div class="card-body">

            <form class="forms-sample" action="/admin/user" method="POST">

                @csrf
                <input type="hidden" name="is_approve" value="2">
                <input type="hidden" name="password_change" value="true">
                <div class="mb-4">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') @enderror" id="name" name="name" required>
                    @error('name')
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

                <label style="margin-bottom: -10px">Pengguna</label>
                <div class="col-md-12 col-12 mb-4 ms-3">
                    <div class="form-group">
                        <br>

                        <input type="radio" id="internal"
                            class="form-check-input @error('pengguna') is-invalid @enderror mb-2 radio-button"
                            name="pengguna" value="Internal">
                        <label for="internal">Internal</label>

                        <br>

                        <input type="radio" id="eksternal"
                            class="form-check-input @error('pengguna') is-invalid @enderror radio-button"
                            name="pengguna" value="Eksternal">
                        <label for="eksternal">Eksternal</label>

                        @error('pengguna')
                        <div class="invalid-feedback">
                            {{ $messege }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div id="FormInternal" style="display: none;">
                    <div class="col-md-12 col-12 mb-4">
                        <label for="bidang">Bidang</label>
                        <select class="form-select @error('bidang') is-invalid @enderror" id="bidangInternal"
                            name="bidang">
                            <option selected disabled></option>
                            <option value="Bidang Aktivasi Publik">Bidang Aktivasi Publik</option>
                            <option value="Bidang Aktivasi Listrik">Bidang Aktivasi Listrik</option>
                            <option value="Bidang NA3P">Bidang NA3P</option>
                            <option value="Bidang Pemeliharaan">Bidang Pemeliharaan</option>
                            <option value="Bidang Retail">Bidang Retail</option>
                            <option value="Bidang SPAP">Bidang SPAP</option>
                            <option value="Bidang Sarju">Bidang Sarju</option>
                        </select>
                        @error('bidang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 col-12 mb-4">
                        <div class="form-group">
                            <label for="perusahaanInternal">Perusahaan</label>
                            <input type="text" id="perusahaanInternal"
                                class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan"
                                value="PT ICON+">
                            @error('perusahaan')
                            <div class="invalid-feedback">
                                {{ $messege }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div id="FormEksternal" style="display: none;">
                    <div class="col-md-12 col-12 mb-4">
                        <div class="form-group">
                            <label for="bidangEksternal">Bidang</label>
                            <input type="text" id="bidangEksternal"
                                class="form-control @error('bidang') is-invalid @enderror" name="bidang"
                                value="{{ old('bidang') }}">
                            @error('bidang')
                            <div class="invalid-feedback">
                                {{ $messege }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 col-12 mb-4">
                        <div class="form-group">
                            <label for="perusahaanEksternal">Perusahaan</label>
                            <input type="text" id="perusahaanEksternal"
                                class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan"
                                value="{{ old('perusahaan') }}" value="PT ICON+">
                            @error('perusahaan')
                            <div class="invalid-feedback">
                                {{ $messege }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary px-5 float-right">Submit</button>
                <a href="/admin/user" class="btn btn-danger px-5 mr-2 float-right">Cancel</a>
            </form>
        </div>
    </div>
</div>
<script>
    // var pengguna = document.getElementsByName("pengguna");
    var Internal = document.querySelector("#internal");
    var Eksternal = document.querySelector("#eksternal");
    var FormInternal = document.getElementById("FormInternal");
    var FormEksternal = document.getElementById("FormEksternal");

    var BidangInternal = document.getElementById("bidangInternal");
    var PerusahaanInternal = document.getElementById("perusahaanInternal");

    var BidangEksternal = document.getElementById("bidangEksternal");
    var PerusahaanEksternal = document.getElementById("perusahaanEksternal");


    Internal.addEventListener("click",function(){
        FormInternal.style.display = "block";
        FormEksternal.style.display = "none";
        BidangEksternal.disabled = true;
        PerusahaanEksternal.disabled = true;
        BidangInternal.disabled = false;
        PerusahaanInBidangInternal.disabled = false;
    })

    Eksternal.addEventListener("click",function(){
        FormInternal.style.display = "none";
        FormEksternal.style.display = "block";
        BidangEksternal.disabled = false;
        PerusahaanEksternal.disabled = false;
        BidangInternal.disabled = true;
        PerusahaanInBidangInternal.disabled = true;
    })
</script>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

