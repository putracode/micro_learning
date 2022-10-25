@extends('layout.sneat')

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Create/</span> User</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/user" method="POST">
                    @csrf
                    <input type="hidden" name="is_approve" value="Approved">
                    <input type="hidden" name="password_change" value="true">
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="name">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') @enderror" id="name" name="name"
                                required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="role" class="form-label col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                                <option selected disabled></option>
                                <option value="2">Admin</option>
                                <option value="1">User</option>
                            </select>
                            @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control @error('email') @enderror" id="email" name="email"
                                required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="password">password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('password') @enderror" id="password"
                                name="password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="no_telepon">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('no_telepon') @enderror" id="no_telepon"
                                name="no_telepon" required>
                            @error('no_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Pengguna</label>
                        <div class="col-sm-10">

                            <div class="form-group">
                                <input type="radio" id="internal"
                                    class="form-check-input @error('pengguna') is-invalid @enderror  radio-button"
                                    name="pengguna" value="Internal">
                                <label for="internal" class=" me-4">Internal</label>



                                <input type="radio" id="eksternal"
                                    class="form-check-input @error('pengguna') is-invalid @enderror radio-button"
                                    name="pengguna" value="Eksternal">
                                <label for="eksternal">Eksternal</label>

                                @error('pengguna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <div id="FormInternal" style="display: none;">
                        <div class="row mb-4">
                            <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
                            <div class="col-sm-10">

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
                        </div>
                        <div class="row mb-4">
                            <label for="perusahaanInternal" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" id="perusahaanInternal"
                                    class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan"
                                    value="PT ICON+">
                                @error('perusahaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div id="FormEksternal" style="display: none;">
                        <div class="row mb-4">

                            <label for="bidangEksternal" class="col-sm-2 col-form-label">Bidang</label>
                            <div class="col-sm-10">

                                <input type="text" id="bidangEksternal"
                                    class="form-control @error('bidang') is-invalid @enderror" name="bidang"
                                    value="{{ old('bidang') }}">
                                @error('bidang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="perusahaanEksternal" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">

                                <input type="text" id="perusahaanEksternal"
                                    class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan"
                                    value="{{ old('perusahaan') }}" value="PT ICON+">
                                @error('perusahaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-4 btn-sm">Save</button>
                            <a href="/admin/user" class="btn btn-danger px-4 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
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


    Internal.addEventListener("click", function () {
        FormInternal.style.display = "block";
        FormEksternal.style.display = "none";
        BidangEksternal.disabled = true;
        PerusahaanEksternal.disabled = true;
        BidangInternal.disabled = false;
        PerusahaanInBidangInternal.disabled = false;
    })

    Eksternal.addEventListener("click", function () {
        FormInternal.style.display = "none";
        FormEksternal.style.display = "block";
        BidangEksternal.disabled = false;
        PerusahaanEksternal.disabled = false;
        BidangInternal.disabled = true;
        PerusahaanInBidangInternal.disabled = true;
    })

</script>
@endsection
