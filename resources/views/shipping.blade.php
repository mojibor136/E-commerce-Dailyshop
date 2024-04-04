@include('layouts.header')
@extends('layouts.navbar')

@section('name')
    Checkout
@endsection

<link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

<style>
    /* Reset styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body styles */
    body {
        background: #e7e8ec;
    }

    /* Navigation styles */
    nav {
        background-color: #dc3545;
        width: 100%;
        padding: 8px 30px 8px 30px;
        display: flex;
        justify-content: space-between;
        display: none;
    }

    nav .button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    /* Form styles */
    form {
        padding: 0;
    }

    /* Main container styles */
    main {
        display: flex;
        padding: 20px 70px;
    }

    /* Order form styles */
    main .order-form {
        width: 50%;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
    }

    .form-control {
        margin-top: 2px;
    }

    main .order-form h4 {
        text-align: center;
    }

    main .order-form .form-group {
        margin: 5px 0;
    }

    /* Order content container styles */
    .order-content-container {
        margin: 0 10px;
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
        vertical-align: middle;
    }

    main .order-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    /* Summary styles */
    main .summary-ul {
        width: 100%;
        height: fit-content;
        padding: 20px;
        margin: 5px 0;
        background-color: #fff;
        border-radius: 5px;
    }

    main .summary-ul button {
        color: #fff;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
    }

    main .summary-ul h4 {
        font-size: 16px;
        color: #555666;
        text-transform: uppercase;
    }

    main .summary-ul .summary-li {
        display: flex;
        justify-content: space-between;
        text-transform: uppercase;
    }

    main .summary-ul .summary-li p {
        margin: 5px 0;
        font-size: 12.5px;
        font-weight: 600;
        color: #666666;
    }

    .btn-success {
        width: 100%;
        font-weight: bolder;
    }

    /* Place button bar styles */
    .button-container {
        padding: 10px;
        padding-top: 5px;
        background-color: #fff;
        visibility: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .button-container .total-bar {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .button-container .total-bar p {
        margin: 0;
    }

    .button-container .total-bar .name {
        padding: 5px 0;
        text-transform: uppercase;
    }

    .button-container .total-bar .price {
        color: rgb(255, 0, 149);
        padding: 5px;
        font-weight: 600;
    }

    .button-container .total-bar .details-bar {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
        text-transform: uppercase;
    }

    .button-container .total-bar .details-bar p {
        font-size: 13px;
    }

    .button-container .total-bar .details-bar .arr {
        width: 9px;
        height: 9px;
        border-top: 2px solid;
        border-left: 2px solid;
        transform: rotate(-135deg);
        margin: 5px;
        margin-top: 0;
    }

    .button-container .button {
        width: 100%;
    }

    .button-container .button button {
        width: 100%;
        font-weight: 600;
    }

    /* Media queries for responsiveness */

    @media (max-width: 768px) {
        nav {
            padding: 5px 10px;
        }

        main {
            display: flex;
            padding: 20px 30px;
        }

        main .order-form {
            width: 45%;
        }

        .order-content-container {
            width: 55%;
        }

        main .order-content {
            margin-bottom: 15px;
        }

        main .order-content table tbody tr td {
            text-align: left;
        }
    }

    @media (max-width: 640px) {
        .header-tow-ul {
            display: none;
        }

        nav {
            display: inline-flex;
        }

        main {
            display: flex;
            flex-direction: column;
            padding: 80px 5px;
        }

        main .order-content table thead tr th {
            font-size: 14px;
        }

        main .order-form {
            width: auto;
        }

        .order-content-container {
            margin: 10px 0;
            width: auto;
        }

        .summary-ul button {
            display: none;
        }

        .summary-ul #total-div {
            display: none;
        }

        .button-container {
            visibility: visible;
        }

        .footer {
            display: none;
        }
    }

    @media (max-width: 475px) {
        main {
            padding-bottom: 80px;
        }
    }

    @media (max-width: 320px) {}
</style>

<body>
    <form action="{{ route('shipping.product') }}" method="POST">
        @csrf
        <main>
            <!-- ORDER FORM CUSTOMER DETAILS -->
            <div class="order-form">
                <h4>Add New Address</h4>
                <div class="form-group">
                    <label for="Name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="name"
                        value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email"
                        value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="phone" class="form-control" placeholder="Enter your phone number" name="number"
                        value="{{ old('number') }}">
                </div>
                @error('number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div>
                    <div class="form-group">
                        <label for="">Division</label>
                        <select name="division" id="myDropdown" class="form-control">
                            <option disabled selected style="display:none;">Select your Division</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>
                    </div>
                    @error('division')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="">City</label>
                        <select name="city" id="myDropdown" class="form-control">
                            <option value="" disabled selected style="display:none;">Select your City</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>
                    </div>
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="address" class="form-control" placeholder="Enter your Address" name="address"
                        value="{{ old('address') }}">
                </div>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

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
                                <th></th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        @php
                            $total = 0;
                            $delivery = 80;
                        @endphp
                        @foreach ($multipleItem ?? [$singleItem] as $index => $items)
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('assets/image/ProductImg/' . $items['productsImg']) }}"
                                            alt="">
                                    </td>
                                    <td>
                                    </td>
                                    <td>{{ $items['name'] }}X{{ $items['quantity'] }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $items['quantity'] * $items['price'] }}Tk</td>
                                </tr>
                                @php
                                    $price = $items['quantity'] * $items['price'];
                                    $total = $total + $price;
                                @endphp
                                <input type="hidden" value="{{ $items['productsId'] }}"
                                    name="productsData[{{ $index }}][productsId]">
                                <input type="hidden" value="{{ $items['productsImg'] }}"
                                    name="productsData[{{ $index }}][productsImg]">
                                <input type="hidden" value="{{ $items['name'] }}"
                                    name="productsData[{{ $index }}][name]">
                                <input type="hidden"
                                    value="{{ $items['quantity'] }}"name="productsData[{{ $index }}][quantity]">
                                <input type="hidden" value="{{ $items['quantity'] * $items['price'] }}"
                                    name="productsData[{{ $index }}][price]">
                        @endforeach
                        </tbody>
                        <thead>
                            <tr>
                                <th>TOTAL</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{ $total + $delivery }}Tk</th>
                                <input type="hidden" value="{{ $total + $delivery }}"
                                    name="productsData[{{ $index }}][total]">
                            </tr>
                        </thead>
                    </table>
                </div>

                <!-- TOTAL SUMMARY PRICE SECTION -->
                <div class="summary-ul">
                    <h4>Total Summary</h4>
                    <div class="summary-li">
                        <p>Items Total</p>
                        @php
                            $totalItem = getTotalItems();
                        @endphp
                        <p>({{ $totalItem }})</p>
                    </div>
                    <div class="summary-li">
                        <p>Delivery Fee</p>
                        <p style="text-transform: uppercase;">{{ $delivery }}tk</p>
                    </div>
                    <div class="summary-li">
                        <p>Total Payment</p>
                        <p style="text-transform: uppercase;">{{ $delivery + $total }}tk</p>
                    </div>
                    <div class="summary-li" id="total-div">
                        <p>Total</p>
                        <p style="text-transform: uppercase;">{{ $delivery + $total }}tk</p>
                    </div>
                    <input type="submit" class="btn btn-success" value="PLACE ORDER">
                </div>
            </div>
        </main>

        <!-- ORDER BUTTON SECTION -->
        <div class="button-container">
            <div class="total-bar">
                <p class="name">Total:</p>
                <p class="price">{{ $delivery + $total }}Tk</p>
                <div class="details-bar">
                    <p>Details</p>
                    <div class="arr"></div>
                </div>
            </div>
            <div class="button">
                <input type="submit" class="btn btn-success" value="PLACE ORDER">
            </div>
        </div>
    </form>
    @include('layouts.footer')
</body>
