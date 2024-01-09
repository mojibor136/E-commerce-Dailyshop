<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- remixicon -->
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- bootstrap end -->
</head>
<style>
    body {
        background: #e9ecef;
    }

    /* TOP HEADER  */
    .top-header {
        width: 100%;
        background-color: #dee2e6;
        padding: 3px 0 1px 0;
    }

    .top-header ul {
        display: flex;
        margin: 0;
        justify-content: center;
        align-items: center;
    }

    .top-header ul li {
        list-style: none;
        padding: 0 10px;
        margin-top: -3px;
    }

    .top-header ul li a {
        text-decoration: none;
        text-transform: uppercase;
        font-size: 11px;
        color: #636464;
    }

    /* HEADER */
    header {
        background-color: #ffffff;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        padding: 10px 15px;
        z-index: 10;
        position: relative;
    }

    .sticky_header {
        position: fixed;
        top: 0;
        box-shadow: 0px 1px 6px 0px rgb(158, 158, 158);
    }

    header .logo a {
        text-decoration: none;
    }

    header .logo {
        display: flex;
        align-items: center;
    }

    header .logo h4 {
        font-size: 30px;
        font-weight: 600;
        color: #000000;
        text-transform: capitalize;
        letter-spacing: 1;
        margin: 0;
    }

    header .logo h4::first-letter {
        color: coral;
    }

    header .search-box {
        display: flex;
        line-height: 40px;
        height: 40px;
        margin: auto 0;
        cursor: pointer;
    }

    header .search-box select {
        outline: none;
        border: none;
        background-color: #dee2e6;
        width: fit-content;
        text-transform: capitalize;
    }

    header .search-box select option {
        order: 0;
        outline: 0;
        color: rgb(0, 0, 0);
    }

    header .search-box form {
        display: flex;
        height: 100%;
    }

    header .search-box input {
        width: 320px;
        height: 100%;
        outline: none;
        border: none;
        padding: 0 10px;
        font-size: 16px;
        background-color: #e9ecef;
    }

    header .search-box input::placeholder {
        font-size: 16px;
        text-transform: capitalize;
    }

    header .search-box button {
        font-size: 22px;
        color: #000000;
        background-color: #ffc107;
        height: 100%;
        border: none;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        width: 40px;
    }

    header .search-box button:hover {
        color: #222222;
        background-color: #dfa805;
        transition: 0.2s ease;
    }

    header .icon a {
        color: black;
    }

    header .icon .btn {
        border: none;
    }

    header .icon .btn i {
        font-size: 22px;
        position: relative;
    }

    header .icon .btn i .count {
        top: -12px;
        right: -12px;
        position: absolute;
        width: 16px;
        height: 16px;
        padding-top: 2px;
        background: #dc3545;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    header .icon .btn i .count span {
        margin: 0;
        font-size: 14px;
        font-weight: bolder;
        color: #fff;
    }

    header .icon .btn img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    /* HEADER TOW*/
    .header-tow-ul {
        display: none;
    }

    /* HEADER TOW*/
    .header-tow-ul {
        display: none;
    }

    .menu {
        position: absolute;
        top: 100%;
        right: 0;
        visibility: hidden;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        background-color: #333;
    }

    .menu ul a {
        text-decoration: none;
        color: #ffffff;
        display: flex;
        align-items: center;
        text-transform: capitalize;
    }

    .menu ul a i {
        padding-left: 5px;
        font-size: 16px;
    }

    .menu ul a li {
        list-style: none;
        font-size: 15px;
        padding: 5px 2px;
        padding-right: 40px;
        font-family: sans-serif;
    }

    .menu ul a:hover {
        background-color: #586b80;
    }

    @media (max-width: 1280px) {
        .header-container {
            margin: 1% 4%;
        }
    }

    @media (max-width: 1024px) {
        .header-container {
            margin: 1% 3%;
        }
    }

    @media (max-width: 768px) {
        .top-header ul li {
            list-style: none;
            padding: 0 5px 2px 5px;
            margin: 0;
        }

        header {
            padding: 5px 15px;
        }

        .header-container {
            margin: 1% 2%;
        }


        header .logo {
            display: flex;
            align-items: center;

        }

        header .logo h4 {
            font-size: 28px;
            font-weight: 600;
            color: #000000;
            letter-spacing: 1;
            margin: 0;
        }

        header .search-box input {
            width: 250px;
        }

        header .icon .btn {
            padding: 10px;
        }
    }

    @media (max-width: 640px) {
        .top-header {
            display: none;
        }

        .header-container {
            margin: 0%;
        }

        header {
            display: none;
        }

        .header-tow-ul {
            background-color: #f85606;
            width: 100%;
            display: flex;
            position: absolute;
            top: 0;
            justify-content: space-evenly;
            padding: 10px 15px;
        }

        .header-tow-ul form {
            margin: 0;
        }

        .sticky_header_tow {
            background-color: #f85606;
            top: 0;
            position: fixed;
            z-index: 9999;
        }

        .header-tow-ul .search-box {
            display: flex;
            line-height: 35px;
            height: 35px;
            border-radius: 5px;
            overflow: hidden;
            margin: auto 0;
            cursor: pointer;
            background-color: #ffffff;
        }


        .header-tow-ul .search-box i {
            font-size: 22px;
            color: #636464;
            height: 100%;
            padding: 0 5px;
        }

        .header-tow-ul .search-box input {
            width: 400px;
            height: 100%;
            outline: none;
            border: none;
            font-size: 14px;
            text-transform: capitalize;
        }

        .header-tow-ul .search-box input::placeholder {
            color: #636464;
            font-size: 16px;
        }

        @media (max-width: 475px) {
            .header-container {
                margin: 0%;
            }


            header {
                display: none;
            }

            .header-tow-ul {
                background-color: #f85606;
                width: 100%;
                display: flex;
                justify-content: space-evenly;
                padding: 10px 15px;
            }

            .header-tow-ul .search-box {
                display: flex;
                line-height: 35px;
                height: 35px;
                margin: auto 0;
                cursor: pointer;
                background-color: #ffffff;
            }

            .header-tow-ul .search-box input {
                width: 300px;
            }
        }
    }

    @media (max-width: 320px) {
        .header-tow-ul .search-box input {
            width: 260px;
        }
    }
</style>

<body>
    <div class="top-header">
        <ul>
            <li><a href="">save more on app</a></li>
            <li><a href="">online donates</a></li>
            <li><a href="">sell on online</a></li>
            <li><a href="">customer care</a></li>
            <li><a href="">track my order</a></li>
            <li><a href="">daraz affiliate program</a></li>
        </ul>
    </div>

    <!-- MAIN HEADER -->
    <header>
        <div class="logo">
            <a href="{{ route('home') }}">
                <h4>dailyshop</h4>
            </a>
        </div>
        <div class="search-box">
            <select name="" id="myDropdown">
                <option value="" disabled selected style="display:none;">All-Category</option>
                <option value="lady">Lady</option>
                <option value="">Baby Items</option>
            </select>
            <form action="{{ route('search.product') }}" method="GET">
                <input type="text" name="search" placeholder="Search in dailyshop">
                <div>
                    <button type="submit" class="ri-search-line"></button>
                </div>
            </form>
        </div>
        <div class="icon">
            @if (Auth::check())
            @else
                <a href="{{ route('login.form') }}"><span class="btn">Login</span></a>
            @endif
            <a href=""> <span class="btn"><i class="ri-heart-line">
                        <div class="count">
                            <span>0</span>
                        </div>
                    </i></span></a>
            <a href="{{ route('addtocart') }}"><span class="btn"><i class="ri-shopping-cart-line">
                        <div class="count">
                            <span>1</span>
                        </div>
                    </i></span></a>
            @if (Auth::check())
                <span class="btn" id="button"><img src="{{ asset('assets/img/product/download.jpeg') }}"
                        alt=""></span>
            @endif
        </div>
        <div class="menu">
            <ul>
                <a href="#">
                    <i class="ri-user-line"></i>
                    <li>profile</li>
                </a>
                <a href="#">
                    <i class="ri-shopping-cart-line"></i>
                    <li>mycart</li>
                </a>
                <a href="">
                    <i class="ri-order-play-line"></i>
                    <li>order tracking</li>
                </a>
                <a href="">
                    <i class="ri-settings-3-fill"></i>
                    <li>setting</li>
                </a>
                @if (Auth::check())
                    <a href="{{ route('logout') }}">
                        <i class="ri-logout-box-r-line"></i>
                        <li>logout</li>
                    </a>
                @else
                @endif
            </ul>
        </div>
    </header>
    <!-- HEADER TOW -->
    <div class="header-tow-ul">
        <form action="{{ route('search.product') }}" method="GET">
            <div class="search-box">
                <i class="ri-search-line"></i>
                <input type="text" name="search" placeholder="Search here..">
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/js/header.js') }}"></script>

</body>

</html>
