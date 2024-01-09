@extends('admin.layout.tempalate')
@section('content')
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- bootstrap end -->
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" />
    <style>
        .card-header {
            text-transform: uppercase;
        }

        .order-details-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .close-btn {
            position: absolute;
            top: 0px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        p {
            margin-top: 20px;
            font-size: 20px;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        p span {
            color: red;
            margin: 0 5px;
            font-size: 18px;
        }

        #orderDetailsContent .card table tbody tr td {
            text-transform: capitalize;
        }

        #orderDetailsContent .card table tbody tr td img {
            width: 40px;
            height: 45px;
        }

        #orderDetailsContent .card .table> :not(caption)>*>* {
            padding: 10px;
        }

        .btn-outline-success {
            margin-left: 5px;
        }
    </style>
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Order</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th style="width: 50px;">order id</th>
                            <th style="width: 150px;">customer name</th>
                            <th style="width: 100px;">total price</th>
                            <th style="width: 80px;">type</th>
                            <th style="width: 120px;">order date</th>
                            <th>status</th>
                            <th style="width: 50px;">action</th>
                            <th style="width: 50px;">view</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $order)
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->order_type }}</td>
                                <td>12-01-2023</td>
                                <td><a href="" class="text-success">delivery</a></td>
                                <td><a href="{{ route('delete.order', $order->id) }}"
                                        class="btn btn-outline-warning border-warning">delete</a>
                                </td>
                                <td><a href="{{ $order->id }}" class="btn btn-outline-danger border-danger">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card order-details-popup">
                <div class="popup-content">
                    <span class="close-btn">×</span>
                    <div class="titel">
                        <p>Order number<span>#422454</span></p>
                    </div>
                    <div id="orderDetailsContent">
                        <div class="card table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>IMAGE</th>
                                        <th>PRODUCT</th>
                                        <th></th>
                                        <th>QNTY</th>
                                        <th>PRICE</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td class="align-middle">
                                            <img src="{{ asset('assets/img/product/images.jpeg') }}" alt="">
                                        </td>
                                        <td>shirt smart shirt smart shirt</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>250TK</td>
                                        <td>500TK</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="{{ asset('assets/img/product/images.jpeg') }}" alt="">
                                        </td>
                                        <td>shirt smart shirt smart shirt</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>250TK</td>
                                        <td>500TK</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="{{ asset('assets/img/product/images.jpeg') }}" alt="">
                                        </td>
                                        <td>shirt smart shirt smart shirt</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>250TK</td>
                                        <td>500TK</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th>TOTAL</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>500Tk</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Shipping Address</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Customer Name</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>md mojibor rahman</td>
                                </tr>
                                <tr>
                                    <td>Number</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>01311890283</td>
                                </tr>
                                <tr>
                                    <td>Shipping Address</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Nawabpu,Road Dhaka-1100</td>
                                </tr>
                                <tr>
                                    <td>Payment Status</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Pending</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="action mt-3 d-flex justify-content-end">
                        <a href="" class="btn btn-outline-danger border-danger">Cancel</a>
                        <a href="" class="btn btn-outline-success border-success">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
