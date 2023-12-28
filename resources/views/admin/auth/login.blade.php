<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        background: linear-gradient(90deg, #3498db, #8e44ad);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-form {
        display: flex;
        justify-content: center;
    }

    .login-bar {
        background-color: rgba(255, 255, 255, 0.9);
        width: 320px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .login-bar h5 {
        font-size: 22px;
        margin: 20px 0;
        display: flex;
        justify-content: center;
    }

    .login-bar form {
        width: 100%;
    }

    .login-bar form label {
        margin: 5px 0;
    }

    .login-bar form .email,
    .login-bar form .password {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .login-bar form .email i,
    .login-bar form .password i {
        margin-right: 10px;
    }

    .login-bar form .email input,
    .login-bar form .password input {
        width: 100%;
        padding: 6px;
        padding-left: 0;
        border: 0;
        outline: 0;
    }

    .login-bar form .button {
        margin-top: 20px;
    }

    .login-bar form .button input {
        background-color: #e74c3c;
        padding: 10px;
        width: 100%;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-bar form .button input:hover {
        background-color: #c0392b;
    }

    .login-bar .forgot-password {
        text-align: right;
        margin-top: 10px;
    }
</style>

<body>
    <div class="login-form">
        <div class="login-bar">
            <h5>ADMIN LOGIN</h5>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <label for="Email">Email</label>
                <div class="email form-control">
                    <i class="ri-mail-line"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <label for="Password">Password</label>
                <div class="password form-control">
                    <i class="ri-lock-line"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="button">
                    <input type="submit" value="ADMIN LOGIN" class="btn btn-danger">
                </div>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>

</html>
