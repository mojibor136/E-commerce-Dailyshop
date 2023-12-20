<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- bootstrap end -->
</head>
<style>
    body {
        background: #e7e8ec;
    }

    .payment-box {
        width: 400px;
        padding: 20px;
        border-radius: 10px;
        margin: 100px 380px;
        background: #fff;
    }

    .form-control {
        display: flex;
        justify-content: space-between;
    }

    .form-control:focus {
        border-color: none;
        box-shadow: none;
    }

    .form-group {
        margin: 10px 0;
    }

    h4 {
        text-align: center;
        margin-bottom: 5px;
    }

    .ri-file-copy-line {
        cursor: pointer;
        color: blue;
    }
</style>

<body>
    <div class="payment-box">
        <form action="">
            <h4>Payment Method</h4>
            <div class="form-group">
                <div>
                    <label for="" class="mb-1">Bkash Nagad Rocekt</label>
                    <div class="form-control">
                        <div>+8801311890283</div>
                        <i class="ri-file-copy-line"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="sand number" class="mb-1">Sand Number</label>
                <input type="text" class="form-control" placeholder="Enter your Sand Number">
            </div>
            <div class="form-group">
                <input type="submit" value="Confrim Order" class="btn btn-success mt-1">
            </div>
        </form>
    </div>
</body>

</html>
