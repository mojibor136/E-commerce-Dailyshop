@include('layouts.header')
@include('layouts.navbar')
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

    body {
        background: #e9ecef;
    }

    /* HEADER TOW*/
    .header-tow-ul {
        display: none;
    }

    main {
        width: 100%;
        display: flex;
    }

    .cart-container {
        margin-right: 10px;
        width: 60%;
    }

    .delete-content-btn {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: rgb(255, 255, 255);
        padding: 10PX;
        border-radius: 5px;
    }

    .delete-content-btn a {
        text-decoration: none;
        color: black;
    }

    .select-box {
        display: flex;
        align-items: center;
    }

    .select-box span {
        font-size: 13px;
        padding: 0 5px;
    }

    main .cart-content {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
        width: 100%;
        margin: 5px 0;
    }

    main .cart-content .table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    main .cart-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    main .cart-content table tbody tr td input {
        width: 40px;
        height: 34px;
        padding: 0;
    }


    main .cart-content table thead tr th {
        color: #666666;
        font-size: 16px;
        text-transform: capitalize;
    }


    main .cart-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
    }

    main .list-content {
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        width: 40%;
    }

    main .list-content button {
        color: #fff;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
    }

    main .list-content h4 {
        font-size: 16px;
        color: #555666;
    }

    main .list-content .summary-li {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

    main .list-content .summary-li p {
        margin: 5px 0;
        font-size: 14px;
        color: #666666;
    }

    main .list-content .summary-li .btn-primary {
        width: initial;
        margin-left: 5px;
        border-radius: 0;
    }

    .checkout-button-bar {
        padding: 10px;
        padding-top: 5px;
        background-color: #fff;
        visibility: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .checkout-button-bar .total-bar {
        display: flex;
        align-items: center;
    }

    .checkout-button-bar .total-bar p {
        margin: 0;
    }

    .checkout-button-bar .total-bar .name {
        padding: 5px 0;
        text-transform: uppercase;
    }

    .checkout-button-bar .total-bar .price {
        color: rgb(255, 0, 149);
        padding: 5px;
        font-weight: 600;
    }

    .checkout-button-bar .total-bar .details-bar {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
    }

    .checkout-button-bar .total-bar .details-bar .arr {
        width: 9px;
        height: 9px;
        border-top: 2px solid;
        border-left: 2px solid;
        transform: rotate(-135deg);
        margin: 5px;
        margin-top: 0;
    }

    .checkout-button-bar .button {
        width: 100%;
    }

    .checkout-button-bar .button button {
        width: 100%;
    }

    /* PRODUCT SECTION START */

    .card-titel {
        margin: 2% 0 1% 0;
        background: 0 0;
        height: 38px;
        line-height: 38px;
    }

    .card-titel p {
        font-family: Roboto-Regular;
        font-size: 22px;
        color: #424242;
        width: 220px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .product-li {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

    .product-li a {
        text-decoration: none;
        color: black;
    }

    .product-card {
        background-color: #ffffff;
        cursor: pointer;
        width: 100%;
        height: fit-content;
    }

    .product-card:hover {
        box-shadow: 1px 2px 4px 1px #abababab;
    }

    .product-card .img img {
        width: 100%;
        height: 200px;
    }

    .product-card .title {
        padding: 0 5px;
        position: relative;
        font-size: 14px;
        height: 36px;
        line-height: 18px;
        color: #212121;
        overflow: hidden;
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .product-card .price {
        padding-left: 5px;
        --tw-text-opacity: 1;
        color: rgb(248 86 6/var(--tw-text-opacity));
    }

    .product-card .price span {
        font-size: 16px;
    }

    .product-card .price-details {
        padding: 0 5px;
        font-size: 11.3px;
    }

    .product-card .price-details span:first-child {
        text-decoration-line: line-through;
        text-decoration-color: black;
    }

    .product-card .price-details span {
        color: #41464b;
    }

    .product-card .price-details span:last-child {
        color: #41464b;
    }

    .product-card .sell-details {
        padding: 0 5px;
        display: flex;
    }

    .product-card .sell-details .rating-icon {
        font-size: 12px;
        color: #ffca00;
    }

    .product-card .sell-details .sell {
        padding: 0 5px;
        font-size: 12px;
        font-family: monospace;
        color: #41464b;
    }

    @media (max-width: 1280px) {
        main {
            padding: 2% 5%;
        }

        .product-ul {
            margin: 3% 5%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 1024px) {
        main {
            padding: 2% 4%;
        }

        .product-ul {
            margin: 3% 4%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }

        .product-card .img img {
            width: 100%;
            height: 160px;
        }
    }

    @media (max-width: 768px) {
        nav {
            padding: 5px 10px;
        }

        main {
            padding: 2%;
        }

        .product-ul {
            margin: 0 2%;
            margin-bottom: 20px;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }


    }

    @media (max-width: 640px) {

        nav {
            display: inline-flex;
        }

        main {
            width: 100%;
            flex-direction: column;
            height: fit-content;
            padding: 6.5px;
        }

        .cart-container {
            margin: 0;
            width: 100%;
        }

        main .list-content {
            width: initial;
            margin: 10px 0;
        }

        main .cart-content {
            width: initial;
            margin: 5px 0;
            padding: 10px 0;
        }

        main .cart-content table thead tr th {
            font-size: 14px;
        }

        .checkout {
            display: none;
        }

        .checkout-button-bar {
            visibility: visible;
        }

        .product-ul {
            margin: 0 2%;
            margin-bottom: 100px;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr;
        }

        footer {
            display: none;
        }
    }

    @media (max-width: 475px) {
        .product-ul {
            margin-bottom: 90px;
        }

        .product-li {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 320px) {
        main {
            margin-top: 5px;
            padding: 5px;
        }
    }
</style>

<body>

    <main>
        <div class="cart-container">
            <div class="delete-content-btn">
                <div class="select-box">
                    <span>All Product Items</span>
                </div>
                <div>
                    <a href="">
                        <span class="ri-delete-bin-7-fill" style="color: #adb5bd;"></span>
                        <span style="font-size: 14px;">All Delete</span>
                    </a>
                </div>
            </div>

            <!-- ORDER TABLE PRODUCT SECTION  -->

            <div class="cart-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart_items as $items)
                            @if (session()->has('massage'))
                                <div class="alert alert-success">
                                    <li>{{ session()->get('massage') }}</li>
                                </div>
                            @endif
                            <tr>
                                <td class="align-middle">
                                    <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                                </td>
                                <td class="align-middle">{{ $items->product_name }}</td>
                                <td class="align-middle"><input type="text" style="text-align: center;"
                                        class="form-control" value="{{ $items->quantity }}"></td>
                                <td class="align-middle">TK-{{ $items->quantity * $items->product_price }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('delete.cart.item', $items->id) }}"
                                        class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                            @php
                                $price = $items->quantity * $items->product_price;
                                $total = $total + $price;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--
        ORDER PRODUCT LIST SECTION -->

        <div class="list-content">
            <h4>Order Summary</h4>
            <div class="summary-li">
                <p>Subtotal items(3)</p>
                <p>2</p>
            </div>
            <div class="summary-li">
                <p>Shopping Fee Discount</p>
                <p style="text-transform: uppercase;">0tk</p>
            </div>
            <div class="summary-li" id="total-div">
                <p>Total</p>
                <p style="text-transform: uppercase;">{{ $total }}tk</p>
            </div>
            <div class="summary-li" id="total-div">
                <input type="text" class="form-control" value="Enter Vaoucher Code" style="border-radius: 0;">
                <button class="btn btn-primary">APPLY</button>
            </div>
            <form action="{{ route('shipping') }}" class="checkout">
                <input type="submit" class="btn btn-success mt-3" style="width: 100%;" value="Checkout">
            </form>
        </div>
    </main>

    <!-- PRODUCT -->
    <div class="product-ul">
        <div class="card-titel">
            <p>Just For You</p>
        </div>

        <div class="product-li">
            <a href="">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/uujjjj.jpg') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>


            <a href="single-product.html">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/images.jpeg') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>

            <a href="single-product.html">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>


            <a href="single-product.html">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/omor.png') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>

            <a href="single-product.html">
                <div class="product-card">
                    <div class="img">
                        <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                    </div>
                    <div class="title">
                        <span>i will data entry data mining copy paste typing china</span>
                    </div>
                    <div class="price"><span>Tk:530</span></div>
                    <div class="price-details">
                        <span>Tk270</span>
                        <span>32%</span>
                        <span>2k-Sold</span>
                    </div>
                    <div class="sell-details">
                        <div class="rating-icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="sell">(32)</div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <!-- ORDER BUTTON SECTION -->
    <form action="{{ route('shipping') }}">
        <div class="checkout-button-bar">
            <div class="total-bar">
                <p class="name">Total:</p>
                <p class="price">2500Tk</p>
                <div class="details-bar">
                    <p>Details</p>
                    <div class="arr"></div>
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-warning" style=" font-weight:600;">Checkout Order</button>
            </div>
        </div>
    </form>

    @include('layouts.footer')
