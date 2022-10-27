<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="/voler/dist/assets/css/bootstrap.css">

    {{-- <link rel="shortcut icon" href="/voler/dist/assets/images/favicon.svg" type="image/x-icon"> --}}
    <link rel="stylesheet" href="/voler/dist/assets/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
            /* border: 1px solid; */
        }
        .toast { max-width: 100%; }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-full-width",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "100000",
        "hideDuration": "100000",
        "timeOut": "100000",
        "extendedTimeOut": "100000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>
</head>

<body>
    <div id="auth" style="background-image: url('/img/pembelajaran/sarju.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto rounded" >
                    <div class="card ">
                        @if (session()->has('success'))
                            <script>
                                toastr.info("{!! Session::get('success') !!}")
                            </script>
                        @endif
                        @if (session()->has('NotApproved'))
                            <script>
                                toastr.info("{!! Session::get('NotApproved') !!}")
                            </script>
                        @endif

                        @if (session()->has('loginError'))
                            <script>
                                toastr.error("{!! Session::get('loginError') !!}")
                            </script>
                        @endif
                        {{-- @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show float-top" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif --}}
                        <div class="card-body ">
                            <div class="text-center mb-5 ">
                                {{-- <img src="/voler/dist/assets/images/favicon.svg" height="48" class='mb-4'> --}}
                                <h3>Sign In</h3>
                                <p>Please sign in to continue to Microlearning</p>
                            </div>
                            <form action="/" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left mb-3">
                                    <label for="email">Email</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required value="{{ old('email') }}"
                                            autocomplete="off">
                                        <div class="form-control-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
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
                                            {{ $message }}
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
                                    <button class="btn btn-primary float-right px-5" type="submit">Submit</button>
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
    <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>

</body>

</html>
