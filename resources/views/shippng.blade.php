@include('layouts.header')
@include('layouts.navbar')
<!-- remixicon -->
<link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
<!-- bootstrap start -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<!-- bootstrap end -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* HEADER TOW*/
    .header-tow-ul {
        display: none;
    }

    body {
        background: #e7e8ec;
    }

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

    form {

        padding: 0;
    }

    main {
        display: flex;
    }

    main .order-form {
        width: 60%;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
    }

    .form-control {
        margin-top: 5px;
    }

    main .order-form h4 {
        text-align: center;
    }

    main .order-form .form-group {
        margin: 15px 0;
    }

    .order-content-container {
        margin: 0 10px;
        width: 40%;
    }

    main .order-content {
        width: 100%;
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    main .order-content .table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    main .order-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
    }

    main .order-content table tbody tr td p {
        margin: 0;
        margin-left: 10px;
    }

    main .order-content table tbody tr td p span {
        font-weight: bold;
    }

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
    }

    main .summary-ul .summary-li {
        display: flex;
        justify-content: space-between;
    }

    main .summary-ul .summary-li p {
        margin: 5px 0;
        font-size: 14px;
        color: #666666;
    }

    .order-button-section {
        display: flex;
        position: fixed;
        visibility: hidden;
        justify-content: space-between;
        background-color: #ffff;
        width: 100%;
        padding: 10px;
        bottom: 0;
    }

    .order-button-section .order-place-ul {
        display: flex;
        flex-direction: column;
    }

    .order-button-section .order-place-ul .order-place-li {
        display: flex;
        align-items: center;
    }

    .order-button-section .order-place-ul .order-place-li .total {
        margin: 0;
        font-size: 18px;
        color: black;
        margin: 0 5px;
    }

    .order-button-section .order-place-ul .order-place-li .price {
        color: #f85606;
        margin: 0;
        font-size: 18px;
        letter-spacing: 1;
    }

    .order-button-section .order-place-ul .vat {
        margin: 0 7px;
    }

    .order-button-section .order-place-ul .vat p {
        color: black;
        margin: 0;
        font-size: 14px;
    }

    .order-button-section .place-btn {
        display: flex;
        align-items: center;
    }

    .order-button-section .order-button {
        background-color: #f85606;
        color: #fff;
        height: fit-content;
        font-size: 18px;
    }

    .btn-success {
        width: 100%;
    }

    @media (max-width: 1280px) {
        main {
            margin: 2% 5%;
        }
    }

    @media (max-width: 1024px) {
        main {
            margin: 2% 4%;
        }
    }

    @media (max-width: 768px) {
        nav {
            padding: 5px 10px;
        }

        main {
            display: flex;
        }

        main .order-form {
            width: 100%;
        }

        .order-content-container {
            width: 100%;
        }

        main .order-content {
            margin-bottom: 15px;
        }

        main .order-content table tbody tr td {
            text-align: left;
        }
    }

    @media (max-width: 640px) {

        nav {
            display: inline-flex;
        }

        .order-content-container {
            margin: 10px 0;
            width: 100%;
        }

        main {
            display: flex;
            flex-direction: column;
            margin: 10px 10px 70px 10px;
        }

        main .order-content table thead tr th {
            font-size: 14px;
        }

        main .order-form {
            width: 100%;
            margin: 5px 0;
        }

        main .order-content {
            margin-bottom: 15px;
            padding: 10px 20px;
        }

        .summary-ul button {
            display: none;
        }

        .summary-ul #total-div {
            display: none;
        }

        .order-button-section {
            visibility: visible;
        }

        .footer {
            margin-bottom: 70px;
        }
    }

    @media (max-width: 475px) {}

    @media (max-width: 320px) {
        main {
            margin-bottom: 40px;
        }

        .order-content-container {
            width: 100%;
            margin-bottom: 30px;
        }

        .order-button-section .order-place-ul .order-place-li .total {
            font-size: 16px;
        }

        .order-button-section .order-place-ul .order-place-li .price {
            font-size: 16px;
        }

        .order-button-section .order-place-ul .vat p {
            font-size: 12px;
        }

        .order-button-section .order-button {
            font-size: 16px;
        }

        .footer {
            margin-bottom: 65px;
        }
    }
</style>

<body>
    <form action="{{ route('shipping.product') }}" method="POST">
        @csrf
        <main>
            <!-- ORDER FORM CUSTOMER DETAILS -->
            <div class="order-form">
                <h4>Shipping Address</h4>
                <div class="form-group">
                    <label for="Name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="c-name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address
                    </label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="c-email">
                </div>
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="phone" class="form-control" placeholder="Enter your phone number" name="c-nuumber">
                </div>
                <div class="form-group">
                    <label for="">Division</label>
                    <select name="division" id="myDropdown" class="form-control">
                        <option value="" disabled selected style="display:none;">Enter your Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rangpur">Rangpur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="address" class="form-control" placeholder="Enter your Address" name="c-address">
                </div>
            </div>

            <!-- ORDER TABLE CONTENT SECTION -->

            <div class="order-content-container">
                <div class="order-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th> </th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                $delivery = 80;
                            @endphp
                            @foreach ($cart_items as $items)
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
                                    <td class="align-middle">{{ $items->quantity * $items->product_price }}Tk</td>
                                </tr>
                                @php
                                    $price = $items->quantity * $items->product_price;
                                    $total = $total + $price;
                                @endphp
                                <input type="hidden" name="cartitem" value="{{ json_encode($cart_items) }}">
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- TOTAL SUMMARY PRICE SECTION -->

                <div class="summary-ul">
                    <h4>Total Summary</h4>
                    <div class="summary-li">
                        <p>Items Total</p>
                        <p>2</p>
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
                    <button type="submit" class="btn btn-success">Place Order</button>
                </div>
            </div>
        </main>

        <!-- ORDER BUTTON SECTION -->

        <div class="order-button-section">
            <div class="order-place-ul">
                <div class="order-place-li">
                    <p class="total">Total:</p>
                    <p class="price">210TK</p>
                </div>
                <div class="vat">
                    <p>VAT included where applicable</p>
                </div>
            </div>
            <div class="place-btn">
                <button type="submit" class="btn float-right order-button">Place Order</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(".click").click(function() {
            alert('hello click');
        });
    </script>
    @include('layouts.footer')
