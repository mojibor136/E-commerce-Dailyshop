@include('layouts.header')
@extends('layouts.navbar')

@section('name')
    Payment
@endsection

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

    main {
        display: flex;
        justify-content: center;
    }

    /* Order content container styles */
    .order-content-container {
        margin: 2% 10px;
        width: 50%;
    }

    /* Order content styles */
    main .order-content {
        width: 100%;
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    main .order-content table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    main .order-content table thead tr th {
        font-size: 12px;
    }

    main .order-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
        align-items: center;
    }

    main .order-content table tbody tr td p {
        margin: 0;
        margin-left: 10px;
    }

    main .order-content table tbody tr td p span {
        font-weight: bold;
    }

    main .payment-bar {
        width: 100%;
        height: fit-content;
        padding: 20px;
        margin: 10px 0;
        background-color: #fff;
        border-radius: 5px;
    }

    main .payment-bar .form-group button {
        width: 100%;
    }

    main .payment-bar .form-group .number-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    main .payment-bar .form-group .number-box .icon {
        cursor: pointer;
    }

    main .payment-bar .form-group .nagad {
        border: 1px solid #333;
    }

    @media (max-width: 640px) {

        main {
            margin-top: 60px;
        }

        .order-content-container {
            margin: 2% 10px;
            width: 100%;
        }

        .footer {
            margin: 0;
        }


    }
</style>

<body>
    <main>
        <!-- ORDER TABLE CONTENT SECTION -->
        <div class="order-content-container">
            <div class="order-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $delivery = 80;
                        @endphp
                        @foreach ($cartItems as $items)
                            <tr>
                                <td class="align-middle" style="display: flex;">
                                    <img src="{{ asset('assets/img/product/images.jpeg') }}" alt=""
                                        width="40px" height="40px">
                                    <p>smart shirt smart shirt smart shirt <span>x{{ $items->quantity }}</span></p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="align-middle">{{ $items->product_price }}Tk</td>
                            </tr>
                            @php
                                $price = $items->quantity * $items->product_price;
                                $total = $total + $price;
                            @endphp
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th>TOTAL</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>{{ $total + $delivery }}Tk</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <form action="{{route('order.place')}}" method="post">
                @csrf
                <input type="hidden" value="{{ $total + $delivery }}" name="total">
                <div class="payment-bar">
                    <div class="">
                        <h4>Payment Method</h4>
                    </div>
                    <div class="form-group">
                        <label for="Bkash" class="btn btn-warning bkash">Bkash</label>
                        <label for="Nagad" class="btn nagad">Nagad</label>
                        <div class="form-control mt-2 number-box">
                            <div class="Number">+8801311899083</div>
                            <div class="icon"><i class="ri-file-copy-line"></i></div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="Sand Number" class="mb-1">Sand Number</label>
                        <input type="text" class="form-control" name="sand-number" value="Enter your sand number">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">CONFRIM ORDER</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>
