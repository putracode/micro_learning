<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="voler/dist/assets/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
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
                                                {{ $messege }}
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
                                                {{ $messege }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12 col-12 mb-3">
                            <label for="pengguna" class="form-label">Pengguna</label>
                            <select class="form-select @error('pengguna') is-invalid @enderror" id="pengguna"
                                name="pengguna">
                                <option selected disabled></option>
                                <option value="1">Internal</option>
                                <option value="2">Eksternal</option>
                            </select>
                            @error('pengguna')
                            <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                        </div> --}}
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
                                    {{ $messege }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div id="FormInternal" style="display: none;">
                            <div class="col-md-12 col-12 mb-3">
                                <label for="bidang"><small>BIDANG</small></label>
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
                            <div class="col-md-12 col-12 mb-3">
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
                            <div class="col-md-12 col-12 mb-3">
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

                            <div class="col-md-12 col-12 mb-3">
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
</body>

</html>
{{-- if (val == 'Internal') { // Assuming your value for radio buttons is radio1, radio2 and radio3.
FormInternal.style.display = 'block'; // show
FormEksternal.style.display = 'none'; // hide
} else if (val == 'Eksternal') {
FormEksternal.style.display = 'none';
FormInternal.style.display = 'block';
} --}}
