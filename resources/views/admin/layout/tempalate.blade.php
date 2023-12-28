<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remixicon -->
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- bootstrap end -->
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" />
</head>

<body>
    <header>
        <div class="logo">
            <a href="{{ route('admin') }}">
                <span>Daliy Shop</span>
            </a>
        </div>
        <div class="search-bar">
            <div class="search-box">
                <form action="">
                    <i class="ri-search-line"></i>
                    <input type="text" class="form-contrl" placeholder="Search here..">
                </form>
            </div>
        </div>
        <div class="icon-bar">
            <div class="icon-box">
                <a href=""><i class="ri-message-2-fill"></i></a>
                <a href=""><i class="ri-notification-fill"></i></a>
            </div>
        </div>
        <div class="profile-bar">
            <div class="profile-box">
                <img src="{{ asset('assets/img/product/omor.png') }}" alt="">
                <div class="name">
                    <h6>Admin</h6>
                    <div class="arr"></div>
                </div>
            </div>
        </div>
        <div class="menu" style="display: none;">
            <ul>
                <a href="">
                    <i class="ri-user-line"></i>
                    <li>Profile</li>
                </a>
                <a href="">
                    <i class="ri-settings-3-fill"></i>
                    <li>Settings</li>
                </a>
                <a href="{{ route('admin.logout') }}">
                    <i class="ri-logout-box-r-line"></i>
                    <li>Admin Logout</li>
                </a>
            </ul>
        </div>
    </header>
    <div class="content">
        <nav>
            <ul>
                <li>
                    <div class="dropdownButton">
                        <i class="ri-dashboard-2-line"></i>
                        <span>my dashboard</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="">
                            <li>Dashboard</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-layout-grid-fill"></i>
                        <span>Category</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="{{ route('addcategory') }}">
                            <li>Add Category</li>
                        </a>
                        <a href="{{ route('allcategory') }}">
                            <li>All Category</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-dashboard-fill"></i>
                        <span>subcategory</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="{{ route('addsubcategory') }}">
                            <li>Add SubCategory</li>
                        </a>
                        <a href="{{ route('allsubcategory') }}">
                            <li>All SubCategory</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-product-hunt-line"></i>
                        <span>product</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="{{ route('allproduct') }}">
                            <li>All Product</li>
                        </a>
                        <a href="{{ route('addproduct') }}">
                            <li>Add Product</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-order-play-line"></i>
                        <span>order</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="{{ route('allorder') }}">
                            <li>All Order</li>
                        </a>
                        <a href="{{ route('pandingorder') }}">
                            <li>Panding Order</li>
                        </a>
                        <a href="{{ route('confrimorder') }}">
                            <li> Confrim Order</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <div class="dropdownButton">
                        <i class="ri-group-fill"></i>
                        <span>customer</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="">
                            <li>Add Category</li>
                        </a>
                        <a href="">
                            <li>All Category</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-settings-3-fill"></i>
                        <span>setting</span>
                        <div class="nav-arr"></div>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="">
                            <li>Add Category</li>
                        </a>
                        <a href="">
                            <li>All Category</li>
                        </a>
                    </ul>
                </li>

            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
