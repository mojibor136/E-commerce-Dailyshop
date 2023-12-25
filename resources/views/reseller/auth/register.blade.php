@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #eeeeee;
    }

    .login-form {
        display: flex;
        justify-content: center;
    }

    .login-bar {
        background-color: #fff;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
        border-radius: 5px;
    }

    .login-bar h5 {
        font-size: 20px;
        margin: 25px 0;
    }

    .login-bar form {
        width: 90%;
    }

    .login-bar form .name input {
        border-radius: 0;
        width: 100%;
        border: none;
        outline: none;
        margin-left: 2px;
    }

    .login-bar form .email input {
        border-radius: 0;
        width: 100%;
        border: none;
        outline: none;
        margin-left: 2px;
    }

    .login-bar form .password input {
        border-radius: 0;
        width: 100%;
        border: none;
        outline: none;
        margin-left: 2px;
    }

    .login-bar form .name {
        width: 100%;
        margin-bottom: 15px;
        display: flex;
    }

    .login-bar form .email {
        width: 100%;
        margin-bottom: 15px;
        display: flex;
    }

    .login-bar form .password {
        width: 100%;
        margin-top: 15px;
        display: flex;
    }

    .login-bar form .remember {
        display: flex;
        margin: 7px 0 12px 0;
    }

    .login-bar form .remember p {
        margin: 0 3px;
    }

    .login-bar form .button input {
        width: 100%;
    }

    .login-bar .titel {
        margin: 25px 0 0 0;
    }

    .login-bar .titel p {
        margin: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .login-bar .login-with {
        margin: 10px 0;
        display: flex;
        width: 100%;
        padding: 10px 12px;
    }

    .login-bar .login-with .facebook a {
        color: rgb(47, 68, 255);
    }

    .login-bar .login-with .facebook {
        border: 1px solid#dee2e6;
        border-radius: 2px;
        width: 100%;
        margin: 0 3px;
        padding: 2px 0;
    }

    .login-bar .login-with .google {
        border: 1px solid#dee2e6;
        border-radius: 2px;
        width: 100%;
        margin: 0 3px;
        padding: 2px 0;
    }

    .login-bar .login-with .facebook a {
        display: flex;
        text-decoration: none;
        color: #0d6efd;
        padding: 0 5px;
    }

    .login-bar .login-with .google a {
        display: flex;
        text-decoration: none;
        color: black;
        padding: 0 5px;
    }

    .login-bar .login-with .facebook a p {
        margin: 0;
    }

    .login-bar .login-with .google a p {
        margin: 0;
    }

    .login-bar .signup-link {
        margin-bottom: 25px;
        margin-top: 30px;
    }

    .login-bar .signup-link span {
        font-weight: 400;
    }

    .login-bar .signup-link span a {
        color: black;
    }
</style>

<body>
    <div class="login-form">
        <div class="login-bar">
            <h5> RESELLER REGISTER</h5>
            <form action="{{ route('reseller.register') }}" method="POST">
                @csrf
                <div class="name form-control">
                    <i class="ri-user-fill"></i>
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="email form-control">
                    <i class="ri-mail-line"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="password form-control">
                    <i class="ri-lock-line"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="remember">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class="button">
                    <input type="submit" value="REGISTER" class="btn btn-primary">
                </div>
            </form>
            <div class="titel">
                <p>Or Singin Using</p>
            </div>
            <div class="login-with">
                <div class="facebook">
                    <a href="">
                        <i class="ri-facebook-box-fill"></i>
                        <p>Facebook</p>
                    </a>
                </div>
                <div class="google">
                    <a href="">
                        <i class="ri-google-fill"></i>
                        <p>Google</p>
                    </a>
                </div>
            </div>
            <div class="signup-link">
                <span>Not a member? <a href="{{ route('reseller.login.form') }}">Sing in now</a></span>
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
