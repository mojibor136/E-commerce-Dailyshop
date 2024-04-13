@include('layouts.header')
@extends('layouts.navbar')
@section('name')
    Forget Password..
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    .forget-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 0;
    }

    .forget-card {
        background-color: #fff;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px 0;
        border-radius: 5px;
    }

    .forget-card h5 {
        font-size: 18px;
        margin: 0;
    }

    .forget-card .text {
        width: 100%;
        padding: 10px 30px;
        text-align: center;
    }

    .forget-card .form-control {
        display: flex;
        align-items: center;
    }

    .forget-card .form-control input {
        width: 100%;
        padding-left: 5px;
        border: 0;
        outline: none;
    }

    .forget-card .button {
        padding: 10px 0;
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <div class="forget-container">
        <div class="forget-card">
            <h5>FORGET PASSWORD</h5>
            <div class="text">
                <span>Hi there! Please enter your email to reset your password. Check your email afterwards. Thank
                    you!</span>
            </div>
            <form action="{{ route('reseller.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-control">
                        <i class="ri-mail-line"></i>
                        <input type="email" placeholder="Enter Your Forget Email">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Forget Password" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
@include('layouts.footer')
