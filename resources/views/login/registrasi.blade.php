<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="voler/dist/assets/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                {{-- <img src="voler/dist/assets/images/favicon.svg" height="48" class='mb-4'> --}}
                                <h3>Sign Up</h3>
                                <p>Please fill the form to register.</p>
                            </div>
                            <form action="/register" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="is_approve" value="1">
                                    <input type="hidden" name="role" value="1">
                                    <input type="hidden" name="password" value="1234567">

                                    <div class="col-md-12 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="name">Nama lengkap</label>
                                            <input type="text" id="name"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="no_telepon">No Telepon</label>
                                            <input type="number" id="no_telepon"
                                                class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                                value="{{ old('no_telepon') }}" minlength="12" maxlength="12">
                                            @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                        <div class="col-md-12 col-12 mb-3">
                            <div class="form-group">
                                <label class="mb-3">Pengguna</label>
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
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div id="FormInternal" style="display: none;">
                            <div class="col-md-12 col-12 mb-3">
                                <label for="bidang"><small>BIDANG</small></label>
                                <select class="form-select @error('bidang') is-invalid @enderror" id="bidangInternal"
                                    name="bidang">
                                    <option selected disabled hidden></option>
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
                            <div class="col-md-12 col-12 mb-3">
                                <div class="form-group">
                                    <label for="perusahaanInternal">Perusahaan</label>
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
                            <div class="col-md-12 col-12 mb-3">
                                <label for="bidang"><small>BIDANG</small></label>
                                <select class="form-select @error('bidang') is-invalid @enderror" id="bidangEksternal"
                                    name="bidang">
                                    <option selected disabled hidden></option>
                                    <option value="Bidang Aktivasi">Bidang Aktivasi</option>
                                    <option value="Bidang Pemeliharaan">Bidang Pemeliharaan</option>
                                    <option value="Bidang Retail">Bidang Retail</option>
                                    <option value="Bidang Pembangunan">Bidang Pembangunan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('bidang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12 col-12 mb-3">
                                <div class="form-group">
                                    <label for="perusahaanEksternal">Perusahaan</label>
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





                    </diV>
                    <a href="/">Have an account? Login</a>
                    <div class="clearfix">
                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                    </div>
                    </form>
                    {{-- <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-3 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-3 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    <script src="voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="voler/dist/assets/js/app.js"></script>

    <script src="voler/dist/assets/js/main.js"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
{{-- if (val == 'Internal') { // Assuming your value for radio buttons is radio1, radio2 and radio3.
FormInternal.style.display = 'block'; // show
FormEksternal.style.display = 'none'; // hide
} else if (val == 'Eksternal') {
FormEksternal.style.display = 'none';
FormInternal.style.display = 'block';
} --}}
