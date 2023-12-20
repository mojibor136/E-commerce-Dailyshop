<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<style>
    a {
        text-decoration: none;
    }

    form {
        width: 420px;
        margin: 80px 330px;
        border: 1px solid;
        padding: 30px 25px;
    }

    h3 {
        text-align: center;
        text-transform: capitalize;
    }
</style>

<body>
    <form action="{{ route('reseller.register') }}" method="POST">
        @csrf
        <h3>reseller register</h3>
        <div class="mb-2">
            <label for="">Nmae</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" placeholder="Enter your password">
        </div>

        <div>
            <a href="{{ route('reseller.login.form') }}">Already created account</a>
        </div>

        <div class="mt-2">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</body>

</html>
