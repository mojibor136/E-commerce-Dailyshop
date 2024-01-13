@include('layouts.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping in Bangladesh</title>
    <!-- remixicon -->
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Online Shopping in Bangladesh</title>
    <!-- bootstrap end -->
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .related-product-li a {
        text-decoration: none;
    }


    body {
        background: #e9ecef;
        margin: 0;
    }

    .single-product-box {
        display: grid;
        grid-template-columns: 1fr 2fr;
        background-color: #ffffff;
        cursor: pointer;
    }

    /*SINGLE  PRODUCT IMG BOX */
    .product-img {
        width: 100%;
        padding: 15px;
    }

    .big-img {
        text-align: center;
        height: 320px;
    }

    .big-img img {
        width: 100%;
        height: 100%;
    }

    .small-box {
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .small-img {
        height: 55px;
        width: 55px;
    }

    .small-img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        cursor: pointer;
    }

    /* PRODUCT WRAP */


    .product-details {
        width: 100%;
        border-left: 1px solid #dfdfdf;
        padding: 15px 200px 0 15px;
    }

    .product-details .product-name {
        color: rgb(0, 0, 0);
        font-size: 19px;
        font-weight: 500;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-details .product-desc {
        font-size: 14px;
        color: #000000;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-details .rating-icons {
        display: flex;
        align-items: center;
        padding: 10px 0;
    }

    .product-details .rating-icons .rating {
        display: flex;
        width: auto;
        color: #ffca00;
        font-size: 14px;
    }

    .product-details .rating-icons .rating .rating-count {
        color: rgb(0, 175, 117);
        font-size: 14px;
        padding-left: 10px;
    }

    .product-details .rating-icons .icon {
        position: absolute;
        right: 350px;
    }

    .product-details .rating-icons .icon .icons {
        color: black;
        font-size: 22px;
        margin: 0 10px;
    }

    .product-details .brand {
        padding: 5px 0;
        display: flex;
        align-items: center;
    }

    .product-details .brand .brand-title {
        font-size: 14px;
        font-weight: 300;
    }

    .product-details .brand .brand-name {
        color: rgb(0, 175, 117);
        font-size: 14px;
    }

    .product-details .price-info .price {
        font-weight: 400;
        --tw-text-opacity: 1;
        color: rgb(248 86 6/var(--tw-text-opacity));
        font-size: 22px;
    }

    .product-details .price-info .dis-price {
        font-size: 14px;
        font-weight: 300;
        text-decoration-line: line-through;
        text-decoration-color: black;
    }

    .product-details .price-info .parcent-price {
        font-size: 14px;
        font-weight: 300;
    }

    .product-details .promotions-info {
        margin: 10px 0;
    }

    .product-details .promotions-info span {
        font-size: 14px;
    }

    .product-details .quantity-info {
        margin: 20px 0;
        display: flex;
        align-items: center;
    }

    .product-details .quantity-info .quantity {
        padding: 5px 0 5px 0;
    }

    .product-details .quantity-info .quantity span {
        font-size: 14px;
    }

    .quantity-info .quantity-box input {
        outline: none;
        border: none;
        border: 1px solid #3d3d3d;
        border-radius: 0;
        margin: 0 10px;
        height: 28px;
        width: 145px;
    }

    .product-details .button .btn {
        border-radius: 1px;
    }

    .product-all-details {
        margin: 15px 0;
    }

    .product-all-details .product-name {
        background-color: #ffffff;
        color: #000000;
        font-weight: 500;
        line-height: 40px;
        font-size: 14px;
        padding: 4px 2px 4px 12px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-transform: capitalize;
        border-bottom: 1px solid #d7d7d7;
    }

    .product-all-details .product-titel {
        background-color: #ffffff;
        color: #000000;
        font-weight: 500;
        line-height: 40px;
        font-size: 14px;
        padding: 4px 2px 4px 12px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-transform: capitalize;
        border-bottom: 1px solid #d7d7d7;
    }

    .product-all-details .Description-details {
        padding: 15px 0 5px 10px;
        background-color: #ffffff;
    }

    .product-all-details .Description-details span {
        font-weight: bold;
        font-size: 14px;
    }

    .product-all-details .Description-details p {
        margin: 2px 2px 0 0;
        font-size: 14px;
    }


    /* REVIEW AND RATING */

    .rating-review-ul {
        background-color: #ffffff;
        margin: 10px 0;
    }

    .rating-titel {
        background-color: #ffffff;
        color: #000000;
        font-weight: 500;
        line-height: 40px;
        font-size: 14px;
        padding: 4px 2px 4px 12px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-transform: capitalize;
        border-bottom: 1px solid #d7d7d7;
    }

    .rating-review {
        display: grid;
        grid-template-columns: 1fr 1fr 1.5fr 3fr;
    }

    .product-all-details .rating-review .number-count {
        width: 100%;
        padding: 12% 0 0 10%;
    }

    .product-all-details .rating-review .number-count .count {
        font-size: 20px;
        font-weight: 500;
    }

    .product-all-details .rating-review .number-count .total-count {
        font-size: 17px;
        font-weight: 400;
    }


    .product-all-details .rating-review .number-count .icon {
        font-size: 20px;
        color: #afafaf;
    }

    .product-all-details .rating-review .rating-icons {
        width: 100%;
        padding: 0 0 0 20px;
    }

    .product-all-details .rating-review .rating-icons .normal {
        text-align: right;
        font-size: 14px;
        padding: 10% 0;
    }

    .product-all-details .rating-review .rating-icons .normal .icon li {
        padding: 3px 0 4px 5px;
    }

    .product-all-details .rating-review .rating-box {
        width: 100%;
        padding: 8px 10px;
    }


    .product-all-details .rating-review .rating-box .box {
        width: 80%;
        height: 12px;
        background-color: #adb5bd;
        margin: 10px 0 10px 0;
    }

    /* RELATED PRODUCT  */

    .related-product-li {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

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

    .related-product-card {
        background-color: #ffffff;
        cursor: pointer;
        width: 100%;
        height: fit-content;
        border-radius: 3px;
        overflow: hidden;
    }

    .related-product-card:hover {
        box-shadow: 1px 2px 4px 1px #abababab;
    }

    .related-product-card .img {
        text-align: center;
        margin-bottom: 5px;
        height: 200px;
    }

    .related-product-card .img img {
        width: 100%;
        height: 100%;
    }

    .related-product-card .title {
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

    .related-product-card .price {
        padding-left: 5px;
        --tw-text-opacity: 1;
        color: rgb(248 86 6/var(--tw-text-opacity));
    }

    .related-product-card .price span {
        font-size: 16px;
    }

    .related-product-card .price-details {
        padding: 0 5px;
        font-size: 11.3px;
    }

    .related-product-card .price-details span:first-child {
        text-decoration-line: line-through;
        text-decoration-color: black;
    }

    .related-product-card .price-details span {
        color: #41464b;
    }

    .related-product-card .price-details span:last-child {
        color: #41464b;
    }

    .related-product-card .sell-details {
        padding: 0 5px;
        display: flex;
    }

    .related-product-card .sell-details .rating-icon {
        font-size: 12px;
        color: #ffca00;
    }

    .related-product-card .sell-details .sell {
        padding: 0 5px;
        font-size: 12px;
        font-family: monospace;
        color: #41464b;
    }

    /* <!-- BOTTOM ADD CART BUY BUTTON  --> */
    .bottom-bar {
        display: none;
    }

    /* media css */
    @media (max-width: 1280px) {

        main {
            margin: 2% 5%;
        }

    }

    @media (max-width: 1024px) {
        main {
            margin: 2% 4%;
        }

        .big-img {
            height: 250px;
        }

        .product-details .rating-icons {
            padding: 5px 0;
        }

        .product-details .brand {
            padding-bottom: 2px;
        }

        .product-details .promotions-info {
            margin: 0;
        }

        .product-details .rating-icons {
            display: flex;
            align-items: center;
        }

        .product-details .rating-icons .icon {
            position: absolute;
            right: 300px;
        }

        .rating-review {
            grid-template-columns: 1fr 1fr 1.5fr 2fr;
        }

        .related-product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            margin-bottom: 50px;
        }

        .related-product-card .img {
            text-align: center;
            margin-bottom: 5px;
            height: 160px;
        }
    }

    @media (max-width: 768px) {

        main {
            margin: 1% 2%;
        }

        .single-product-box {
            grid-template-columns: 1fr 2fr;
        }

        .single-product {
            width: 100%;
        }

        .big-img {
            text-align: center;
            height: 260px;
        }

        .big-img img {
            width: 100%;
        }

        .small-img img {
            width: 45px;
            height: 45px;
        }

        .product-details {
            width: 100%;
            padding-right: 50px;
        }

        .product-details .rating-icons .rating .rating-count {
            font-size: 13px;
        }

        .product-details .rating-icons .icon {
            position: absolute;
            right: 160px;
        }

        .product-details .price-info .price {
            font-size: 18px;
        }

        .product-details .button .btn {
            border-radius: 2px;
            padding: 5px;
        }

        .product-details .price-info .dis-parcent-price {
            margin: 2px;
        }

        .product-details .price-info .dis-price {
            font-size: 13px;
        }

        .product-details .price-info .parcent-price {
            font-size: 13px;
        }

        .product-details .promotions-info {
            padding: 5px 0;
        }

        .product-all-details .product-fist-titel {
            padding-left: 10px;
        }

        .quantity-info .quantity-box input {
            outline: none;
            border: none;
            border: 1px solid #3d3d3d;
            padding-left: 7px;
            height: 28px;
            width: 120px;
        }

        .product-all-details .rating-review .rating-icons {
            padding: 0;
        }

        .related-product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

    }

    @media (max-width: 640px) {

        main {
            margin: 0%;
        }

        .single-product-box {
            display: grid;
            grid-template-columns: 1fr;
            background-color: #ffffff;
            cursor: pointer;
            margin-top: 55px;
        }

        .single-product {
            padding: 0;
        }

        .product-img {
            padding: 0px;
        }

        .big-img {
            padding: 0;
            width: 100%;
        }

        .big-img img {
            width: 100%;
            height: 100%;
        }

        .small-box {
            display: none;
        }

        .product-details {
            width: 100%;
            border: none;
            padding: 5px;
            padding-right: 50px;
        }

        .product-details .product-name {
            display: none;
        }

        .product-details .product-desc {
            font-size: 15px;
        }

        .product-details .rating-icons .icon {
            position: absolute;
            right: 100px;
        }

        .product-details .promotions-info {
            display: none;
        }

        .product-details .quantity-info {
            display: none;
        }

        .button {
            display: none;
        }

        .border {
            display: none;
        }

        .product-details .price-info {
            padding: 5px 0 5px 0;
        }

        .product-details .rating-icons .rating .fa {
            font-size: 13px;
        }

        .product-details .rating-icons .rating .rating-count {
            font-size: 14px;
        }

        .slod-by .visit-store a {
            font-size: 15px;
        }

        .product-all-details .product-details {
            grid-template-columns: 1fr;
        }

        .product-all-details .Description-details p {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .rating-review {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .product-all-details .rating-review .rating-box {
            padding: 7% 0 0 5%;
        }


        .related-product-li {
            grid-template-columns: 1fr 1fr 1fr;

        }

        /* <!-- BOTTOM ADD CART BUY BUTTON  --> */
        .bottom-bar {
            width: 100%;
            background: #fff;
            display: flex;
            box-shadow: 1px 1px 2px 1px #6c757d;
            justify-content: space-between;
            padding: 5px 0;
            padding-left: 10px;
            position: fixed;
            bottom: 1px;
        }

        .bottom-bar form {
            display: flex;
            margin: 0 3px;
        }

        .bottom-bar .button {
            display: flex;
        }

        .button>div {
            margin-right: 10px;
        }

        .button-buyNow {
            display: flex;
            align-items: center;
        }

        .button-addcart {
            display: flex;
            align-items: center;
        }

        .button-inner {
            color: #ffffff;
            font-size: 18px;
            border: none;
            outline: none;
            padding: 5px 10px;
        }

        .bottom-bar .icon {
            display: flex;
        }

        .icon-inner a {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 10px;
            text-decoration: none;
            color: black;
            line-height: normal;
            padding: 0px 5px;
        }

        .bottom-bar .button .button-addcart .button-inner {
            background-color: #ff4400;
            color: #ffffff;
        }

        .footer {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 475px) {

        main {
            margin: 0%;
        }

        .single-product-box {
            display: grid;
            grid-template-columns: 1fr;
            background-color: #ffffff;
            cursor: pointer;
        }

        .product-details {
            width: 100%;
        }

        .product-details .quantity-info {
            display: none;
        }

        .border {
            display: none;
        }

        .product-details .price-info {
            padding: 5px 0 5px 0;
        }

        .product-all-details .rating-review .number-count .count {
            font-size: 19px;
        }

        .product-all-details .rating-review .number-count .count p {
            color: red;
        }

        .product-all-details .rating-review .number-count .icon {
            font-size: 15px;
            color: #afafaf;
        }

        .product-details .rating-icons .icon {
            position: absolute;
            right: 60px;
        }

        .product-all-details .rating-review .rating-icons .normal .icon li {
            padding: 0 0 4px 5px;
        }

        .product-all-details .rating-review .rating-icons {
            padding: 0;
        }

        .product-all-details .rating-review .rating-icons .normal {
            font-size: 11px;
            padding: 15% 0;
        }

        .product-all-details .rating-review .rating-box {
            padding: 11% 0 0 5px;
        }

        .product-all-details .rating-review .rating-box .box {
            width: 90%;
            height: 8.5px;
            margin: 9px 0 0 0;

        }

        .related-product-ul {
            padding: 0 1%;
        }

        .related-product-li {
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
    }

    @media (max-width: 320px) {
        .product-details {
            padding-right: 10px;
        }

        .product-details .rating-icons .icon {
            position: absolute;
            right: 20px;
        }

        .icon-inner a {
            margin: 0;
        }
    }
</style>

<body>
    <main>
        <!-- CONTAINER ALL -->
        <div class="single-product-box">
            <!-- PRODUCT IMG -->
            @foreach ($singleProducts as $product)
                <div class="product-img">
                    <div class="big-img">
                        <img id="img" src="{{ asset('assets/img/product/download.jpeg') }}">
                    </div>

                    <div class="small-box">
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/beg.webp') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/uujjjj.jpg') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/sstr.jpg') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/sssrit.webp') }}" onclick="showImg(this.src)">
                        </div>
                    </div>

                </div>

                <!-- PRODUCT WRAP -->
                <div class="product-details">
                    <span class="product-name">{{ $product->product_name }}</span>

                    <span class="product-desc">{{ $product->product_short_desc }}</span>

                    <div class="rating-icons">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <span class="rating-count">No Rating</span>
                        </div>
                        <div class="icon">
                            <i class="ri-share-line icons"></i>
                            <i class="ri-heart-line icons"></i>
                        </div>
                    </div>

                    <div class="brand">
                        <span class="brand-title">Brand:</span>
                        <span class="brand-name">No Brand from No Brand</span>
                        <div class="border"></div>
                    </div>

                    <div class="price-info">
                        <span class="price">Tk-{{ $product->product_price }}</span>
                        <div class="dis-parcent-price">
                            <span class="dis-price">&#2547;302</span>
                            <span class="parcent-price">-53%</span>
                        </div>
                    </div>

                    <div class="promotions-info">
                        <span>Promotions</span>
                    </div>

                    <form action="{{ route('store.addtocart') }}" method="post">

                        <div class="quantity-info">
                            <div class="quantity">
                                <span>Quantity</span>
                            </div>
                            <div class="quantity-box">
                                <input type="text" class="form-control" value="1" min="1"
                                    name="quantity">
                            </div>
                        </div>

                        <div class="button">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="submit" class="btn btn-primary" value="Buy Now">
                            <input type="submit" class="btn btn-warning" value="Add To Cart">
                    </form>
                </div>
        </div>

        </div>


        <!-- PRODUCT DETAILS WRAP -->
        <div class="product-all-details">
            <div class="product-titel">
                <span>{{ $product->product_short_desc }}</span>
            </div>

            <div class="Description-details">
                <span>Description.....</span>
                <p>{{ $product->product_long_desc }}
                </p>
            </div>

            <div class="rating-review-ul">

                <div class="rating-titel">
                    <span>Ratings & Reviews of Xiaomi 4A (Regular Edition) 1200Mbps Dual Band Global Version
                        Router</span>
                </div>

                <div class="rating-review">
                    <div class="number-count">
                        <span class="count">5</span>
                        <span class="total-count">/5</span>
                        <div class="icon">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="total-rating">0 Ratings</p>
                    </div>


                    <div class="rating-icons">
                        <div class="normal">
                            <div class="icon">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                    </div>

                    <div class="rating-box">
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <div class="related-product-ul">
            <div class="card-titel">
                <p>Related Product</p>
            </div>
            <div class="related-product-li">
                @foreach ($products as $product)
                    <a href="{{ route('product.details', $product->id) }}">
                        <div class="related-product-card">
                            <div class="img">
                                <img src="{{ asset('assets/img/product/download.jpeg') }}" alt="">
                            </div>
                            <div class="title">
                                <span>{{ $product->product_name }}</span>
                            </div>
                            <div class="price"><span>Tk{{ $product->product_price }}</span></div>
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
                @endforeach
            </div>
        </div>
    </main>
    <!-- BOTTOM ADD CART BUY BUTTON  -->
    <div class="bottom-bar">
        <div class="icon">
            <div class="icon-inner">
                <a href="">
                    <i class="ri-store-line"></i>
                    <span>Store</span>
                </a>
            </div>

            <div class="icon-inner">
                <a href="">
                    <i class="ri-chat-4-line"></i>
                    <span>Chat</span>
                </a>
            </div>
        </div>
        <div class="button">
            <form action="{{ route('store.addtocart') }}" method="post">
                @csrf
                <div class="button-buyNow">
                    <input type="hidden" class="form-control" value="1" min="1" name="quantity">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="submit" class="button-inner btn btn-primary" value="Buy Now">
                </div>
            </form>
            <form action="{{ route('store.addtocart') }}" method="post">
                @csrf
                <div class="button-addcart">
                    <input type="hidden" class="form-control" value="1" min="1" name="quantity">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="submit" class="button-inner btn" value="Add To Cart">
                </div>
            </form>
        </div>
    </div>

    <script>
        function showImg(fileName) {
            let Img = document.querySelector('#img');
            Img.setAttribute('src', fileName);
        }
    </script>
</body>

</html>
@include('layouts.footer')
