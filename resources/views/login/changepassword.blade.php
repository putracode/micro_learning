<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="/voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="/voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/voler/dist/assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card py-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                {{-- <img src="/voler/dist/assets/images/favicon.svg" height="48" class='mb-4'> --}}
                                <h3>Change Password</h3>
                                <p>Please enter your new password</p>
                            </div>
                            <form action="/change-password" method="POST">
                                <div class="form-group">
                                    <label for="first-name-column">Password</label>
                                    <input type="password" id="first-name-column" class="form-control" name="fname-column">
                                </div>

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
