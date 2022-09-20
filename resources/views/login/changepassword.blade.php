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
                <div class="col-md-8 col-sm-12 mx-auto">
                    <div class="card">
                        @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show float-top" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card-body">
                            {{-- <form action="/logout" method="post" class="form-class">
                                @csrf
                                <button type="submit" class="dropdown-item"><i data-feather="log-out"
                                        class="mr-1"></i>Logout</button>
                            </form> --}}
                            <div class="text-center mb-5">
                                <h3>Change Password</h3>
                                <p>Please change your password to continue to Micro Learning.</p>
                            </div>
                            <form action="/change-password" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="current_password">Current Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="current_password"
                                            name="current_password" required>
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <div class="clearfix">
                                        <label for="new_password">New Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="new_password"
                                            name="new_password" required>
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group position-relative has-icon-left mb-4">
                                    <div class="clearfix">
                                        <label for="confirm_new_password">Confirm New Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="confirm_new_password" required>
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right">Submit</button>
                                </div>
                            </form>
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
