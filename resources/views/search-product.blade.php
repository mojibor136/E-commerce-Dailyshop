@include('layouts.header')
<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
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

    a {
        text-decoration: none;
    }

    body,
    html {
        background-color: #f5f5f5;
        font-family: Roboto-Regular;
    }

    body {
        background: #e7e8ec;
        font-size: 12px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Helvetica Neue, Helvetica, sans-serif;
        -webkit-text-size-adjust: none;
        margin: 0;
        font-family: Roboto-Regular, 'Helvetica Neue', Helvetica, Tahoma, Arial, Sans-serif;
    }

    /* CATEGORY BANNER */
    .category-banner {
        display: grid;
        grid-template-columns: 1fr 3.5fr;
        gap: 5px;
        height: 344px;
    }

    .category-banner .category {
        overflow: hidden;
        height: 100%;
        border-radius: 10px;
    }

    .slideshow-container .banner img {
        width: 100%;
        height: 344px;
        border-radius: 10px;
    }

    .category ul {
        background-color: #ffffff;
        padding: 0;
        position: relative;
    }


    .category ul a {
        list-style: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #e9ecef;
        justify-content: space-between;
    }

    .category ul a:hover {
        background-color: rgb(207, 207, 207);
    }

    .category ul a li {
        color: #41464b;
        display: block;
        padding-left: 14px;
        line-height: 27.7px;
        font-size: 15px;
        text-decoration: none;
        display: flex;
    }

    .category ul a:hover li {
        color: #272626;
    }

    .category ul a:hover .arr {
        color: #636464;
    }

    .category ul a .arr {
        width: 10px;
        height: 10px;
        border-top: 1px solid;
        border-right: 1px solid;
        transform: rotate(45deg);
        margin-right: 10px;
        color: #ffffff;
    }

    /* CATEGORY TOW */

    .category-tow-container {
        margin: 2% 4%;
    }

    .category-tow-ul {
        display: flex;
        justify-content: space-evenly;
        cursor: pointer;
    }

    .category-tow-ul a {
        width: 20%;
        border-radius: 50px;
        background-color: #ffffff;
        margin: 2px;
    }

    .category-tow-ul a:hover {
        background-color: lightgray;
    }

    .category-tow-li {
        display: flex;
        align-items: center;
    }

    .category-tow-li .img {
        margin: 6px;
        width: 35px;
        height: 35px;
    }

    .category-tow-li .img img {
        width: 100%;
        height: 100%;
        border-radius: 50px;
    }

    .category-tow-li .name {
        color: #212121;
        font-size: 18px;
        font-weight: 400;
    }



    /* FLASH PRODUCT*/

    .time-details {
        display: flex;
        padding: 1% 5px;
        background: #ffffff;
    }

    .time-details .name h6 {
        font-size: 14px;
        color: rgb(218, 0, 0);
        margin: 0;
        padding: 6px 0;
    }

    .time-details .ending {
        padding: 6px 0;
        margin: 0 5px 0 20px;
    }

    .time-details .ending h6 {
        margin: 0;
        font-size: 14px;
    }

    .time-details .flash-time {
        display: flex;
        margin: 0 1%;
    }

    .time-details .flash-time h6 {
        margin: 0 2;
        font-size: 14px;
        text-transform: uppercase;
        width: 35px;
        border-radius: 4px;
        padding: 7px 10px;
        background: coral;
        color: #ffffff;
    }

    .product-flash-li {
        border-top: 1px solid #e9ecef;
        display: grid;
        gap: 10px;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        background: #ffffff;
    }

    .product-flash-card {
        cursor: pointer;
        width: 100%;
        margin: 10px 0;
    }

    .product-flash-card:hover {
        box-shadow: 1px 1px 6px 1px #41464b;
    }

    .product-flash-card .img img {
        width: 100%;
        height: 200px;
    }

    .product-flash-card .title {
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

    .product-flash-card .price {
        padding-left: 5px;
        --tw-text-opacity: 1;
        color: rgb(248 86 6/var(--tw-text-opacity));
    }

    .product-flash-card .price span {
        font-size: 16px;
    }

    .product-flash-card .price-details {
        padding: 0 5px;
        font-size: 11.3px;
    }

    .product-flash-card .price-details span:first-child {
        text-decoration-line: line-through;
        text-decoration-color: black;
    }

    .product-flash-card .price-details span {
        color: #41464b;
    }

    .product-flash-card .price-details span:last-child {
        color: #41464b;
    }

    .product-flash-card .sell-details {
        padding: 0 5px;
        display: flex;
    }

    .product-flash-card .sell-details .rating-icon {
        font-size: 12px;
        color: #ffca00;
    }

    .product-flash-card .sell-details .sell {
        padding: 0 5px;
        font-size: 12px;
        font-family: monospace;
        color: #41464b;
    }




    /* CATEGORY SECTION  START */


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

    .card-categories-ul {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        cursor: pointer;
        width: 100%;
        background-color: #fff;
    }

    .card-categories-li {
        border: 1px solid #dee2e6;
        background-color: #fff;
    }

    .card-categories-li:hover {
        box-shadow: 1px 1px 6px 1px #abababab;

    }

    .card-categories-li-content {
        width: 100%;
        height: 100%;
        display: block;
        text-align: center;
        padding: 16px 0;
    }

    .card-categories-image-container {
        margin: 0 auto;
        width: 80px;
        height: 80px;
    }

    .card-categories-image-container img {
        width: 100%;
        height: 100%;
    }

    .card-categories-name {
        font-size: 15px;
        color: black;
    }

    /* PRODUCT SECTION START */
    .product-li {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

    .product-card {
        background-color: #ffffff;
        cursor: pointer;
        width: 100%;
        height: fit-content;
        border-radius: 3px;
        overflow: hidden;
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

    .footer {
        background-color: #24262b;
        padding: 20px 0;
    }

    .footer-container {
        width: 100%;
    }

    ul {
        list-style: none;
    }

    .footer-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin: 0 5%;
    }

    .footer-col {
        padding: 0 15px;
        height: fit-content;
    }

    .footer-col ul {
        padding: 0;
        margin: 0;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #eeeeee;
        text-transform: capitalize;
        margin-bottom: 15px;
        font-weight: 500;
    }


    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        text-decoration: none;
        font-weight: 300;
        color: #cccccc;
    }

    .footer-col ul li a:hover {
        color: #aaabbb;
    }

    .footer-col ul li:not(last-child) {
        margin-bottom: 10px;
    }

    .footer-col .social-icon {
        display: flex;
    }

    .footer-col .social-icon a {
        display: inline-block;
        height: 40px;
        width: 40px;
        margin: 0 10px 10px 0;
        background-color: #636464;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.5s ease;
        font-size: 18px;
    }

    .footer-col .social-icon a:hover {
        background-color: #ffffff;
        color: #24262b;
    }

    .footer-container .copyright {
        text-align: center;
    }

    .footer-container .copyright span {
        color: #eeeeee;
        font-size: 14px
    }

    .bottom-navbar-button-ul {
        display: none;
    }

    @media (max-width: 1536px) {}

    @media (max-width: 1280px) {

        .header-container {
            margin: 1% 5%;
        }

        .offer-banner-container {
            margin: 3% 5%;
        }

        .category-tow-container {
            margin: 2% 5%;
        }

        .product-flash-ul {
            margin: 3% 5%;
        }

        .category-container {
            margin: 0% 5%;
        }

        .product-ul {
            margin: 3% 5%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        }

    }

    @media (max-width: 1024px) {

        .header-container {
            margin: 1% 4%;
        }

        .product-flash-ul {
            margin: 3% 4%;
        }

        .category-container {
            margin: 0% 4%;
        }

        .category-tow-container {
            margin: 2% 4%;
        }

        .product-flash-li {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            overflow: hidden;
            height: 320px;
        }

        .card-categories-ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
            height: 271px;
            overflow: hidden;
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
        .top-header ul li {
            list-style: none;
            padding: 0 5px;
            margin: 0;
        }

        .header-container {
            margin: 1% 2%;
        }

        .product-flash-ul {
            margin: 0% 2%;
        }

        .product-flash-li {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .category-container {
            margin: 0% 2%;
        }

        .category-tow-container {
            margin: 2% 1.5%;
        }

        .card-categories-ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        }

        .product-ul {
            margin: 0% 2%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .category-banner {
            grid-template-columns: 1fr 3fr;
            height: 314px;
        }

        .slideshow-container .banner img {
            height: 314px;
        }


        .footer-col h4 {
            font-size: 16px;
        }

        .footer-col ul li a {
            font-size: 14px;
        }

        .footer-col .social-icon {
            display: flex;
        }

        .footer-col .social-icon a {
            height: 35px;
            width: 35px;
            margin: 0 5px 10px 0;
            line-height: 35px;
            font-size: 18px;
        }
    }

    @media (max-width: 640px) {

        .top-header {
            display: none;
        }

        .category-banner {
            grid-template-columns: 1fr;
        }

        .category-banner .category {
            display: none;
        }

        .slideshow-container .banner img {
            border-radius: 0px;
        }

        /* CATEGORY TOW */
        .category-tow-li {
            flex-direction: column;
            align-items: center;
            background: none;
        }

        .category-tow-li .img {
            margin: 5px;
            width: 45px;
            height: 45px;
        }

        .category-tow-li .name {
            font-size: 16px;
        }

        .category-tow-ul a {
            background: #e7e8ec;
        }

        .category-tow-ul a:hover {
            background-color: #e7e8ec;
        }

        /* FLASH PRODUCT UL */
        .product-flash-ul {
            margin: 5% 2%;
        }

        .product-flash-li {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .time-details {
            background: #e76000;
        }

        .time-details .name h6 {
            display: none;
        }

        .time-details .ending h6 {
            color: #fff;
        }

        .time-details .flash-time h6 {
            color: black;
            background-color: #ffffff;
        }

        .category-container {
            margin: 0% 2%;
        }

        .card-categories-ul {
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            height: 204px;
            overflow: hidden;
        }

        .card-categories-li-content {
            padding: 2px;
            padding-top: 10px;
        }

        .card-categories-image-container {
            margin: 0 auto;
            width: 60px;
            height: 60px;
        }

        .card-categories-image-container img {
            width: 100%;
            height: 100%;
        }

        .card-categories-name {
            padding-top: 5px;
        }

        .product-ul {
            margin: 5% 2%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr 1fr;
        }

        /* FOOTER */
        .footer {
            margin-bottom: 40px
        }

        .footer-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: 0 5%;
        }

        .bottom-navbar-button-ul {
            bottom: 0;
            position: fixed;
            display: block;
            display: flex;
            justify-content: space-around;
            background-color: #dee2e6;
            width: 100%;
            padding: 5px 0;
        }

        .navbar-button-li {
            text-align: center;
            line-height: 18px;
        }

        .navbar-button-li i {
            font-size: 22px;
        }
    }

    @media (max-width: 640px) {
        .header-container {
            margin: 0%;
        }
    }

    @media (max-width: 475px) {

        .header-container {
            margin: 0%;
        }

        header {
            display: none;
        }

        .category-banner {
            grid-template-columns: 1fr;
            height: 220px;
        }

        .category-banner .category {
            display: none;
        }

        .slideshow-container .banner img {
            height: 220px;
        }

        .product-flash-ul {
            margin: 5% 1%;
        }

        .time-details {
            padding: 2% 2px;
        }

        .product-flash-li {
            grid-template-columns: 1fr 1fr;
        }

        .card-categories-ul {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .category-container {
            margin: 0% 1%;
        }

        .card-categories-li img {
            width: 60px;
            height: 60px;
        }

        .product-ul {
            margin: 5% 1%;
        }

        .product-li {
            grid-template-columns: 1fr 1fr;
        }

        /* FOOTER */
        .footer-row {
            display: grid;
            grid-template-columns: 1fr;
            margin: 0 5%;
        }


        .footer-col {
            padding: 10px 15px;
        }

        .bottom-navbar-button-ul {
            padding: 5px 0;
        }
    }

    @media (max-width: 320px) {

        .header-tow-ul .search-box input {
            width: 260px;
        }

        .category-tow-li:first-child {
            display: none;
        }
    }
</style>

<body>
    <main>
        <!-- CATEGORY BANNER -->
        <div class="header-container">
            <div class="category-banner">
                <div class="category">
                    <ul>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                        <a href="">
                            <li>Category</li>
                            <div class="arr"></div>
                        </a>
                    </ul>
                </div>

                <div class="slideshow-container">
                    <div class="banner">
                        <img src="{{ asset('assets/img/product/download.jpeg') }}">
                    </div>
                </div>

            </div>
        </div>


        <!-- CATEGORY TOW -->
        <div class="category-tow-container">
            <div class="category-tow-ul">
                <a href="">
                    <div class="category-tow-li">
                        <div class="img">
                            <img src="{{ asset('assets/img/product/omor.png') }}" alt="">
                        </div>
                        <div class="name">
                            <span>Fashoin</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="category-tow-li">
                        <div class="img">
                            <img src="{{ asset('assets/img/product/daraz.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>Fashoin</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="category-tow-li">
                        <div class="img">
                            <img src="{{ asset('assets/img/product/sssrit.webp') }}" alt="">
                        </div>
                        <div class="name">
                            <span>Fashoin</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-tow-li">
                        <div class="img">
                            <img src="{{ asset('assets/img/product/images.jpeg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>Fashoin</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="category-tow-li">
                        <div class="img">
                            <img src="{{ asset('assets/img/product/sstr.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <span>Fashoin</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <!-- FLASH PRODUCT  -->
        <div class="product-flash-ul">
            <div class="card-titel">
                <p>Flash Sale</p>
            </div>

            <div class="time-details">
                <div class="name">
                    <h6>On Sale Now</h6>
                </div>
                <div class="ending">
                    <h6>Ending in</h6>
                </div>
                <div class="flash-time">
                    <h6>59</h6>
                    <h6>59</h6>
                    <h6>59</h6>
                </div>

            </div>

            <div class="product-flash-li">

                <a href="">
                    <div class="product-flash-card">
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
                    <div class="product-flash-card">
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


                <a href="">
                    <div class="product-flash-card">
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
                    <div class="product-flash-card">
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


                <a href="">
                    <div class="product-flash-card">
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
                    <div class="product-flash-card">
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

            </div>
        </div>



        <!-- CATEGORY -->
        <div class="category-container">
            <div class="card-titel">
                <p>Categories</p>
            </div>

            <div class="card-categories-ul">
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="{{ asset('assets/img/product/omor.png') }}" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="{{ asset('assets/img/product/omor.png') }}" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="single-product.html">
                    <div class="card-categories-li">
                        <div class="card-categories-li-content">
                            <div class="card-categories-image-container">
                                <img src="public/assets/img/product/images.jpg" alt="">
                            </div>
                            <div class=" card-categories-name">
                                <span class="titel">Category</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <!-- PRODUCT -->
        <div class="product-ul">
            <div class="card-titel">
                <p>Just For You</p>
            </div>

            <div class="product-li">
                @foreach ($products as $product)
                    <a href="{{ route('product.details', $product->id) }}">
                        <div class="product-card">
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
            {{ $products->links() }}
        </div>
        <!-- BOTTOM NAVBAR  -->
        <div class="bottom-navbar-button-ul">
            <div class="navbar-button-li">
                <div>
                    <i class="ri-home-2-line"></i>
                </div>
                <span>Home</span>
            </div>
            <div class="navbar-button-li">
                <div>
                    <i class="ri-layout-grid-fill"></i>
                </div>
                <span>Category</span>
            </div>
            <div class="navbar-button-li">
                <div>
                    <i class="ri-shopping-cart-line"></i>
                </div>
                <span>Cart</span>
            </div>
            <div class="navbar-button-li">
                <div>
                    <i class="ri-user-line"></i>
                </div>
                <span>Profle</span>
            </div>
        </div>
    </main>
    <!-- FOOTER  -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><a href="">mojibor6321@gmail.com</a></li>
                        <li><a href="">01311890283</a></li>
                        <li><a href=""> Jatrabari kazla</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Shipping Information</a></li>
                        <li><a href="">Return Policy</a></li>

                        <li><a href="">order track </a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Privacy Policy</h4>
                    <ul>
                        <li><a href="">Shopping mall</a></li>
                        <li><a href="">Shopping mall</a></li>
                        <li><a href="">Shopping mall</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Media Links</h4>
                    <div class="social-icon">
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <span>&copy; 2023 Your Website Name. All Rights Reserved.</span>
            </div>

        </div>
    </footer>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
