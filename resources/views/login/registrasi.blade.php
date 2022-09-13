<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="voler/dist/assets/css/app.css">
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
                            <form action="/registrasi" method="POST">
                                @csrf
                                <div class="row">

                                    <input type="hidden" name="role" value="2">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="first-name-column"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $messege }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Username</label>
                                            <input type="text" id="last-name-column"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $messege }}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="username-column">Email</label>
                                            <input type="email" id="username-column"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $messege }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Password</label>
                                            <input type="password" id="country-floating"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" value="{{ old('password') }}">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $messege }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Company</label>
                                    <input type="text" id="company-column" class="form-control" name="company-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column">
                                </div>
                            </div> --}}
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
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
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
</body>

</html>
