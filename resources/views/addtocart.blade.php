@include('layouts.header')
@extends('layouts.navbar')
@section('name')
    AddToCart
@endsection
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

    .main-container {
        padding: 0 80px;
    }

    .card-container {
        margin-top: 20px;
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

    .card-container .cart-content {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        height: fit-content;
        width: 100%;
        margin: 5px 0;
    }

    .card-container .cart-content .table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    .card-container .cart-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    .card-container .cart-content table tbody tr td input {
        width: 40px;
        height: 34px;
        padding: 0;
    }

    .card-container .cart-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
    }

    .card-container .cart-content table tbody tr td .btn {
        padding: 3px 7px;
    }

    .card-container .list-content {
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        width: 40%;
    }

    .card-container .list-content button {
        color: #fff;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
    }

    .card-container .list-content h4 {
        font-size: 16px;
        text-transform: uppercase;
        color: #555666;
    }

    .card-container .list-content .summary-li {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        text-transform: uppercase;
    }

    .card-container .list-content .summary-li p {
        margin: 5px 0;
        font-size: 13px;
        color: #666666;
    }

    .card-container .list-content .summary-li form {
        width: -webkit-fill-available;
        display: flex;
    }

    .card-container .list-content .summary-li input {
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
        font-size: 14px;
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
        text-transform: uppercase;
    }

    .button-container .total-bar .details-bar p {
        font-size: 13px;
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

    /* Products container all css */
    .product-container {
        margin: 10px 0;
    }

    .product-container .type {
        padding: 10px 5px;
        background-color: #fff;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px;
    }


    .product-container .type span {
        text-transform: capitalize;
        font-weight: 500;
        font-size: 17px;
        color: #41464b;
    }

    .product-container .product-card {
        background-color: transparent;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 10px;
        border: none;
    }

    .card a {
        text-decoration: none;
    }

    .card a .card {
        overflow: hidden;
        border-radius: 3px;
    }

    .card a .card img {
        max-width: 100%;
        height: 160px;
    }

    .card a .card .text {
        padding: 2px 5px;
        line-height: 1.2;
    }

    .card a .card .text .titel {
        text-transform: capitalize;
        font-size: 13.5px;
        color: #353535;
        font-weight: 600;
        font-family: system-ui;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-card a .card .text .tk span {
        color: #084298;
        font-weight: 600;
    }

    .product-card a .card .text .discount {
        font-size: 11px;
        padding: 1.5px 0;
        font-weight: 700;
        color: #41464b;
    }

    .product-card a .card .text .discount span:first-child {
        font-weight: 700;
        color: #41464b;
        text-decoration: line-through;
    }

    .card a .card .text .star {
        font-size: 13px;
        position: relative;
        padding-bottom: 2px;
    }

    .card a .card .text .star i {
        color: orange;
    }

    .card a .card .text .star span {
        color: #676767;
    }

    .card a .card .text .star .charge {
        color: #676767;
        text-transform: capitalize;
        position: absolute;
        top: 0;
        right: 0;
    }

    @media (max-width: 1280px) {}

    @media (max-width: 1024px) {
        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        nav {
            padding: 5px 10px;
        }

        .main-container {
            padding: 0 30px;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 640px) {

        nav {
            display: inline-flex;
        }

        .main-container {
            padding: 0;
        }

        .card-container {
            width: 100%;
            flex-direction: column;
            height: fit-content;
            padding: 6.5px;
            padding-bottom: 0;
            margin: 0;
            margin-top: 60px;
        }

        .cart-container {
            margin: 0;
            width: 100%;
        }

        .card-container .list-content {
            width: initial;
            margin: 10px 0;
        }

        .card-container .cart-content {
            width: initial;
            margin: 5px 0;
            padding: 10px 0;
        }

        .checkout {
            display: none;
        }

        .checkout-button-bar {
            visibility: visible;
        }

        .product-container {
            padding: 0 2px;
            margin-bottom: 95px;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 5px;
        }

        footer {
            display: none;
        }
    }

    @media (max-width: 475px) {

        .product-container .product-card {
            grid-template-columns: 1fr 1fr;
        }

        .card-container .cart-content table tbody tr td input {
            width: 30px;
            height: 30px;
            padding: 0;
        }
    }

    @media (max-width: 320px) {}
</style>

<body>
    <main class="main-container">
        <div class="card-container">
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
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <li>{{ session()->get('message') }}</li>
                                </div>
                            @endif
                            @foreach ($cartItems as $items)
                                <tr>
                                    <td class="align-middle">
                                        <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                                    </td>
                                    <td class="align-middle">{{ $items->product_name }}</td>
                                    <td class="align-middle"><input type="text" style="text-align: center;"
                                            class="form-control" value="{{ $items->quantity }}"></td>
                                    <td class="align-middle">{{ $items->quantity * $items->product_price }}TK</td>
                                    <td class="align-middle">
                                        <a href="{{ route('delete.cart.item', $items->id) }}"
                                            class="btn btn-outline-warning border-warning">remove</a>
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
            <!--ORDER PRODUCT LIST SECTION -->
            <div class="list-content">
                <h4>Order Summary</h4>
                <div class="summary-li">
                    @php
                        $totalItem = getTotalItems();
                    @endphp
                    <p>Subtotal items({{ $totalItem }})</p>
                    <p>{{ $totalItem }}</p>
                </div>
                <div class="summary-li">
                    <p>Shopping Fee Discount</p>
                    <p style="text-transform: uppercase;">0tk</p>
                </div>
                <div class="summary-li">
                    <p>Total</p>
                    <p style="text-transform: uppercase;">{{ $total }}tk</p>
                </div>
                <div class="summary-li">
                    <form action="">
                        <input type="text" class="form-control"style="border-radius: 0;"
                            placeholder="Enter Voucher Code">
                        <input type="submit" class="btn btn-success" value="APPLY">
                    </form>
                </div>
                <form action="{{ route('checkout') }}" class="checkout">
                    @foreach ($cartItems as $index => $items)
                        <input type="hidden" name="ProductItems[{{ $index }}][id]"
                            value="{{ $items['id'] }}">
                        <input type="hidden" name="ProductItems[{{ $index }}][name]"
                            value="{{ $items['product_name'] }}">
                        <input type="hidden" name="ProductItems[{{ $index }}][price]"
                            value="{{ $items['product_price'] }}">
                        <input type="hidden" name="ProductItems[{{ $index }}][quantity]"
                            value="{{ $items['quantity'] }}" class="hiddenQuantity">
                    @endforeach
                    <input type="submit" class="btn btn-success mt-3" style="width: 100%;" value="CHECKOUT">
                </form>
            </div>
        </div>
        {{-- /* Products container all html*/ --}}
        <div class="product-container">
            <div class="type">
                <span>latest products</span>
            </div>
            <div class="card product-card">
                @foreach ($products as $Product)
                    <a
                        href="{{ route('product.details', ['id' => $Product->id, 'productName' => $Product->product_name]) }}">
                        <li class="card">
                            <img src="{{ asset('assets/img/product/sssrit.webp') }}" alt="">
                            <div class="text">
                                <span class="titel">{{ $Product->product_name }}</span>
                                <div class="tk">
                                    <span>${{ $Product->product_price }}</span>
                                </div>
                                <div class="discount">
                                    <span>$620</span>
                                    <span>32%</span>
                                    <span>5k-Stock</span>
                                </div>
                                <div class="star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <span>(25)</span>
                                    <div class="charge">
                                        <span>free</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            </div>
        </div>
        </div>
    </main>
    <!-- ORDER BUTTON SECTION -->
    <form action="{{ route('checkout') }}">
        <input type="hidden" value="id" name="cart">
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
                <button type="submit" class="btn btn-warning" style=" font-weight:600;">CHECKOUT</button>
            </div>
        </div>
    </form>

    @include('layouts.footer')
