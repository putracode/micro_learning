<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="/voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="/voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/voler/dist/assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mx-auto">
                    <div class="card">
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show float-top" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if (session()->has('NotApproved'))
                        <div class="alert alert-secondary alert-dismissible fade show float-top" role="alert">
                            {{ session('NotApproved') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show float-top" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="text-center mb-5">
                                {{-- <img src="/voler/dist/assets/images/favicon.svg" height="48" class='mb-4'> --}}
                                <h3>Sign In</h3>
                                <p>Please sign in to continue to Microlearning</p>
                            </div>
                            <form action="/" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="email">Email</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required value="{{ old('email') }}"
                                            autocomplete="off">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $messege }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        {{-- <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a> --}}
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" required value="{{ old('password') }}"
                                            autocomplete="off">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $messege }}
                                        </div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    {{-- <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div> --}}
                                    <div class="float-right">
                                        <a href="/register">Don't have an account?</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right" type="submit">Submit</button>
                                </div>
                            </form>
                            {{-- <div class="divider">
                        <div class="divider-text">-</div>
                    </div> --}}
                            {{-- <div class="row">
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
    <script src="/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="/voler/dist/assets/js/app.js"></script>

    <script src="/voler/dist/assets/js/main.js"></script>
    
</body>

</html>
