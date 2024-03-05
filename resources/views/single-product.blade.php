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

    body {
        background: #e9ecef;
        margin: 0;
    }

    .main-container {
        padding: 20px 30px;
    }

    .main-container .alert .message {
        text-transform: capitalize;
        font-size: 13px;
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
        text-transform: capitalize;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-details .product-desc {
        font-size: 14px;
        text-transform: capitalize;
        color: #000000;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-details .rating-icons {
        display: flex;
        align-items: center;
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

    .product-details .brand {
        display: flex;
        align-items: center;
    }

    .product-details .brand .brand-title {
        font-size: 14px;
        font-weight: 600;
        color: #41464b;
    }

    .product-details .brand .brand-name {
        color: rgb(0, 175, 117);
        font-size: 14px;
    }

    .product-details .price-info .price {
        font-weight: 700;
        --tw-text-opacity: 1;
        text-transform: uppercase;
        color: rgb(248 86 6/var(--tw-text-opacity));
        font-size: 20px;
    }

    .product-details .price-info .dis-parcent-price {
        font-weight: 600;
        color: #41464b;
        font-size: 14px;
        text-transform: uppercase;
    }

    .product-details .stock span {
        font-weight: 700;
        text-transform: uppercase;
        font-size: 12px;
        color: #055160;
    }

    .product-details .quantity {
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 150px;
    }

    .product-details .quantity span {
        font-weight: 700;
        font-size: 12px;
        color: #41464b;
    }

    .product-details .quantity input {
        text-align: center;
        width: 80px;
        border: 2px solid #41464b;
        border-radius: 5px;
        font-size: 17px;
        font-weight: 500;
        color: #41464b;
    }

    .product-details .button {
        margin: 10px 0;
        display: flex;
        justify-content: space-between;
        width: 205px;
    }

    .product-details .button .btn {
        border-radius: 5px;
    }

    .product-details .text {
        margin: 4px 0;
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
        text-transform: capitalize;
        font-size: 14px;
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

    .product-card a .card .text .price {
        padding: 2.1px 0;
        padding-bottom: 1px;
        display: flex;
        align-items: center;
    }

    .product-card a .card .text .price .price {
        color: #41464b;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 14px;
    }

    .product-card a .card .text .price .discount {
        color: #6c757d;
        font-size: 10px;
        margin-left: 3px;
        font-weight: 800;
    }

    .product-card a .card .text .price .discount span {
        text-transform: uppercase;
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

    /* Bottom addToCart Buynow  */
    .bottom-bar {
        display: none;
    }

    @media (max-width: 1280px) {}

    @media (max-width: 1024px) {
        .big-img {
            height: 250px;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .main-container {
            padding: 20px 30px;
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

        .small-img img {
            width: 45px;
            height: 45px;
        }

        .product-details {
            width: 100%;
            padding-right: 50px;
        }

        .product-container {
            margin: 10px 2px;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }
    }

    @media (max-width: 640px) {
        .main-container {
            padding: 0;
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

        .product-details .rating-icons {
            padding: 0;
        }

        .product-details .brand {
            display: none;
        }

        .product-details .product-desc {
            font-size: 15px;
        }

        .product-details .button {
            display: none;
        }

        .button {
            display: none;
        }

        .border {
            display: none;
        }

        .product-details .price-info {
            padding: 0;
        }

        .product-details .price-info .dis-parcent-price {
            margin: 0;
        }

        .product-details .price-info .price {
            font-size: 18px;
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

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 5px;
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

        .icon-inner a i {
            font-size: 20px
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
        .single-product-box {
            display: grid;
            grid-template-columns: 1fr;
            background-color: #ffffff;
            cursor: pointer;
        }

        .product-details {
            width: 100%;
        }

        .border {
            display: none;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr 1fr;
        }

    }

    @media (max-width: 375px) {
        .product-details {
            padding-right: 10px;
        }

        .product-container .product-card {
            grid-template-columns: 1fr 1fr;
        }

        .icon-inner a {
            margin: 0;
        }
    }
</style>

<body>
    <main class="main-container">
        @if (session()->has('message'))
            <div class="alert alert-danger">
                <li class="message">{{ session()->get('message') }}</li>
            </div>
        @endif
        <!-- CONTAINER ALL -->
        <div class="single-product-box">
            @foreach ($SingleProducts as $Product)
                <div class="product-img">
                    <div class="big-img">
                        <img id="img" src="{{ asset('assets/image/ProductImg/' . $Product->product_img) }}">
                    </div>

                    <div class="small-box">
                        {{-- <div class="small-img">
                            <img src="{{ asset('assets/img/product/images (2).jfif') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/images.jfif') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/sstr.jpg') }}" onclick="showImg(this.src)">
                        </div>
                        <div class="small-img">
                            <img src="{{ asset('assets/img/product/nokia2.jfif') }}" onclick="showImg(this.src)">
                        </div> --}}
                    </div>

                </div>

                <!-- PRODUCT WRAP -->
                <div class="product-details">
                    <span class="product-name">{{ $Product->product_name }}</span>

                    <span class="product-desc">{{ $Product->product_short_desc }}</span>

                    <div class="rating-icons text">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <span class="rating-count">No Rating</span>
                        </div>
                    </div>

                    <div class="brand text">
                        <span class="brand-title">Brand:</span>
                        <span class="brand-name">No Brand from No Brand</span>
                        <div class="border"></div>
                    </div>

                    <div class="price-info text">
                        <span class="price">bdt-{{ $Product->product_price }}</span>
                        <div class="dis-parcent-price text">
                            <span class="dis-price">bdt:302</span>
                            <span class="parcent-price">(53%)</span>
                        </div>
                    </div>
                    <div class="stock text">
                        <span>Stock:({{ $Product->quantity }})</span>
                    </div>
                    <div class="quantity text">
                        <span>quantity</span>
                        <input type="text" value="1" name="quantity" class="quantityText"
                            oninput="hiddenQuantity()">
                    </div>
                    @if ($Product->quantity > 0)
                    <div class="button">
                        <form action="{{ route('buynow.products') }}" method="post">
                            @csrf
                            <input type="hidden" name="SingleProducts[productsId]" value="{{ $Product['id'] }}">
                            <input type="hidden" name="SingleProducts[productsImg]"
                                value="{{ $Product['product_img'] }}">
                            <input type="hidden" name="SingleProducts[name]" value="{{ $Product['product_name'] }}">
                            <input type="hidden" name="SingleProducts[price]" value="{{ $Product['product_price'] }}">
                            <input type="hidden" name="SingleProducts[quantity]" value="1" class="hiddenQuantity">
                            <input type="submit" class="btn btn-primary" value="Buy Now">
                        </form>
                        <form action="{{ route('addtocart.products') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $Product->id }}">
                            <input type="hidden" value="1" name="quantity" class="hiddenQuantity">
                            <input type="submit" class="btn btn-warning" value="Add To Cart">
                        </form>
                    </div>
                    @else
                    <p class="text-danger">This product is not available.</p>
                    @endif
                </div>
        </div>
        </div>
        <!-- PRODUCT DETAILS WRAP -->
        <div class="product-all-details">
            <div class="product-titel">
                <span>{{ $Product->product_short_desc }}</span>
            </div>

            <div class="Description-details">
                <span>Description.....</span>
                <p>{{ $Product->product_long_desc }}
                </p>
            </div>
            @endforeach
        </div>

        {{-- /* Products container all html*/ --}}
        <div class="product-container">
            <div class="type">
                <span>releted products</span>
            </div>
            <div class="card product-card">
                @foreach ($Products as $Product)
                    <a
                        href="{{ route('product.details', ['id' => $Product->id, 'productName' => $Product->product_name]) }}">
                        <li class="card">
                            <img src="{{ asset('assets/image/ProductImg/' . $Product->product_img) }}" alt="">
                            <div class="text">
                                <span class="titel">{{ $Product->product_name }}</span>
                                <div class="price">
                                    <span class="price">bdt:{{ $Product->product_price }}</span>
                                    <div class="discount">
                                        <span>bdt:570</span>
                                        <div class="line"></div>
                                    </div>
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
    </main>
    <!-- BOTTOM ADD CART BUY BUTTON  -->
    <div class="bottom-bar">
        <div class="icon">
            <div class="icon-inner">
                <a href="{{ route('home') }}">
                    <i class="ri-home-4-line"></></i>
                    <span>Home</span>
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
            <form action="{{ route('buynow.products') }}" method="post">
                @csrf
                <div class="button-buyNow">
                    <input type="hidden" name="SingleProducts[id]" value="{{ $Product['id'] }}">
                    <input type="hidden" name="SingleProducts[name]" value="{{ $Product['product_name'] }}">
                    <input type="hidden" name="SingleProducts[price]" value="{{ $Product['product_price'] }}">
                    <input type="hidden" name="SingleProducts[quantity]" value="1" class="hiddenQuantity">
                    <input type="submit" class="button-inner btn btn-primary" value="Buy Now">
                </div>
            </form>
            <form action="{{ route('addtocart.products') }}" method="post">
                @csrf
                <div class="button-addcart">
                    <input type="hidden" class="hiddenQuantity" value="1" name="quantity">
                    <input type="hidden" name="id" value="{{ $Product->id }}">
                    <input type="submit" class="button-inner btn" value="Add To Cart">
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
@include('layouts.footer')
