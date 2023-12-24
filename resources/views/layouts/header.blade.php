<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- remixicon -->
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- bootstrap end -->
</head>
<style>
    body {
        background: #e7e8ec;
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
        font-size: 14px;
        text-transform: capitalize;
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
        width: 20px;
        height: 20px;
        background: red;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 10px solid transparent;
    }

    header .icon .btn i .count span {
        margin: 0;
        font-size: 16px;
        font-weight: bolder;
        color: ghostwhite;
    }

    header .icon .btn:hover {
        color: rgb(126, 126, 126);
        transition: 0.2s ease;
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
        right: 0;
        top: 100%;
        display: none;
    }

    .menu ul {
        background: #464646;
        padding: 0;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        overflow: hidden;
    }

    .menu ul li {
        list-style: none;
        background: #333335;
        padding: 7px 30px 7px 10px;
        margin-bottom: 2px;
        cursor: pointer;
    }

    .menu ul li:hover {
        background: #555555;
    }

    .menu ul li a {
        text-decoration: none;
        color: white;
        text-transform: capitalize;
        font-size: 14.5px;
    }

    .menu ul li a:hover {
        color: white;
    }

    .menu ul li i {
        color: rgb(255, 255, 255);
        font-size: 16px;
        margin-right: 2px;
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
            z-index: 10;
        }

        .header-tow-ul .search-box {
            display: flex;
            line-height: 35px;
            height: 35px;
            margin: auto 0;
            cursor: pointer;
            background-color: #ffffff;
        }


        .header-tow-ul .search-box i {
            font-size: 22px;
            color: #292929;
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
            color: rgb(20, 20, 20);
            font-size: 16px;
            text-transform: capitalize;
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

<!-- TOP HEADER  -->
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
            <li> <i class="ri-user-line"></i><a href="">Profile</a></li>
            <li><i class="ri-shopping-cart-line"></i><a href="">mycart</a></li>
            <li><i class="ri-order-play-line"></i><a href="">order tracking</a></li>
            <li><i class="ri-settings-3-fill"></i><a href="">setting</a></li>
            @if (Auth::check())
                <li><i class="ri-logout-box-r-line"></i><a href="{{ route('logout') }}">Logout</a></li>
            @else
                <li><a href="{{ route('login.form') }}">Login</a></li>
            @endif
        </ul>
    </div>
</header>
<!-- HEADER TOW -->
<div class="header-tow-ul">
    <form action="{{ route('search.product') }}" method="GET">
        <div class="search-box">
            <i class="ri-search-line"></i>
            <input type="text" name="search" placeholder="Enert search product">
        </div>
    </form>
</div>
<script src="{{ asset('assets/js/app.js') }}"></script>
