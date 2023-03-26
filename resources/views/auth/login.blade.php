<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login Page</title>
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-md-7 col-lg-4 p-4 mb-0">

                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-medium-emphasis">Sign In to your account</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg>
                            </span>
                            <input class="form-control shadow-none" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-4"><span class="input-group-text">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg></span>
                            <input class="form-control shadow-none" type="password" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-block btn-primary px-4" type="button">Login</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
