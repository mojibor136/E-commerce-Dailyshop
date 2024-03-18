@extends('admin.layout.tempalate')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/dist/remixicon.css">
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css">
    <style>
        .card-header {
            text-transform: uppercase;
            padding: 30px 10px;
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

        .pagination-container {
            margin-left: 25px;
        }
    </style>
    <div class="container">
        <div class="card">
            <div style="display: flex; align-items:center;">
                <h5 class="card-header">pendding order</h5>
                <form action="">
                    <input type="text" class="form-control" placeholder="Search Order">
                </form>
                <form action="" style="margin-left: 220px">
                    <input type="text" name="datefilter" value="{{ old('datefilter') }}10/1/2024" class="form-control" />
                </form>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>order id</th>
                            <th>customer name</th>
                            <th>customer email</th>
                            <th>total price</th>
                            <th>type</th>
                            <th>order date</th>
                            <th>status</th>
                            <th>view</th>
                        </tr>
                    </thead>
                    @if (isset($massage))
                    @else
                        @foreach ($orders as $order)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td style="padding-left: 15px;">{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->order_type }}</td>
                                    <td>12-01-2023</td>
                                    <td><a href="" class="text-success">{{ $order->status }}</a></td>
                                    <td><a href="{{ $order->id }}" class="btn btn-outline-danger border-danger">View</a>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                        <div class="pagination-container mt-3 mb-3">
                            {{ $orders->links() }}
                        </div>
                    @endif
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script src="{{ asset('assets/js/theme-default.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('input[name="datefilter"]', {
                mode: 'range',
                dateFormat: 'm/d/Y',
                onClose: function(selectedDates, dateStr, instance) {
                    if (dateStr === "") {
                        instance.clear();
                    }
                }
            });
        });
    </script>
@endsection
