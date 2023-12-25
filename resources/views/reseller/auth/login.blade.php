@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <title>Reseller Login</title>
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
        font-size: 24px;
        margin: 20px 0;
    }

    .login-bar form {
        width: 90%;
    }

    .login-bar form .form-control {
        margin-bottom: 15px;
    }

    .login-bar form .email input,
    .login-bar form .password input {
        border-radius: 3px;
        width: 100%;
        padding: 5px;
        border: 0;
        outline: none;
    }

    .login-bar form .email,
    .login-bar form .password {
        width: 100%;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .login-bar form .remember {
        display: flex;
        align-items: center;
        margin: 12px 0;
    }

    .login-bar form .remember input {
        margin-right: 5px;
    }

    .login-bar form .remember p {
        margin: 0
    }

    .login-bar form .button input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #28a745;
        color: #fff;
        cursor: pointer;
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

    .login-bar .login-with .facebook,
    .login-bar .login-with .google {
        flex: 1;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        margin: 0 3px;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-bar .login-with .facebook a,
    .login-bar .login-with .google a {
        display: flex;
        text-decoration: none;
        color: #333;
    }

    .login-bar .login-with .facebook i,
    .login-bar .login-with .google i {
        margin-right: 8px;
    }

    .login-bar .login-with .facebook a p,
    .login-bar .login-with .google a p {
        margin: 0;
    }

    .login-bar .signup-link {
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .login-bar .signup-link span {
        font-weight: 400;
    }

    .login-bar .signup-link span a {
        color: #333;
        font-weight: 500;
    }
</style>

<body>
    <div class="login-form">
        <div class="login-bar">
            <h5>RESELLER LOGIN</h5>
            <form action="{{ route('reseller.login') }}" method="POST">
                @csrf
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
                    <input type="submit" value="LOGIN" class="btn btn-success">
                </div>
            </form>
            <div class="titel">
                <p>Or Singup Using</p>
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
                <span>Not a member? <a href="{{ route('reseller.register.form') }}">Sing up now</a></span>
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
