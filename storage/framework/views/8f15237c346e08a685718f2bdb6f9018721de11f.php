<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- remixicon -->
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
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
        padding: 0;
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
        font-weight: 600;
        color: #636464;
    }

    /* HEADER */
    header {
        background-color: #ffffff;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        padding: 10px 15px;
        z-index: 9999;
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

    header .search-bar {
        display: flex;
        align-items: center;
        height: 40px;
        margin: auto 0;
        cursor: pointer;
    }

    header .search-bar form {
        display: flex;
        align-items: center;
        height: 100%;
    }

    header .search-bar form .search-box {
        padding: 0;
        overflow: hidden;
        width: 450px;
        display: flex;
        align-items: center;
    }

    header .search-bar form .border {
        border-bottom-left-radius: 0;
    }

    header .search-bar form .search-box .dropdown-bar {
        box-sizing: border-box;
        background: #f8f9fa;
        border-right: 1px solid #e9ecef;
    }

    header .search-bar form .search-box.dropdown-bar:hover {
        background: #e9ecef;
    }

    header .search-bar form .search-box .dropdown-bar .select-bar {
        display: flex;
        align-items: center;
        color: #41464b;
        background-color: transparent;
        padding: 7px 10px;
        text-transform: capitalize;
        font-weight: 500;
    }

    header .search-bar form .search-box .dropdown-bar .caret {
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 6px solid #333;
        margin-left: 7px;
        margin-top: 2px;
    }

    .menu-bar {
        display: none;
        position: absolute;
        top: 77%;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        margin: 0;
        padding: 0;
    }

    .menu-bar-block {
        display: block;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .menu-bar a {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: #41464b;
        font-size: 15px;
        font-weight: 500;
        text-transform: capitalize;
    }

    .menu-bar a:hover {
        color: #f8f9fa;
        background: #41464b;
    }

    header .search-bar form .search-box input {
        padding: 7px 10px;
        border: none;
        outline: none;
        width: 100%;
    }

    header .search-bar form .search-box button {
        border: none;
        outline: none;
        background: #f1b500;
        padding: 7px 12px;
    }

    header .icon {
        display: flex;
        align-items: center;
    }

    header .icon a {
        text-decoration: none;
        color: #41464b;
    }

    header .icon a i {
        font-size: 22px;
        position: relative;
        font-weight: 500;
        cursor: pointer;
        padding: 0 10px;
    }

    header .account {
        cursor: pointer;
        display: flex;
        align-items: center;
        font-weight: 600;
        color: #2d393f;
    }

    header .icon i .count {
        position: absolute;
        width: 15px;
        height: 15px;
        top: -2px;
        right: -2px;
        padding-top: 2px;
        background: #dc3545;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    header .icon i .count span {
        margin: 0;
        font-size: 12px;
        font-weight: 900;
        color: #fff;
    }

    /* Menu all css */
    .menu {
        position: absolute;
        top: 100%;
        right: 0;
        visibility: hidden;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        background: #f8f9fa;
    }

    .menu ul a {
        text-decoration: none;
        color: #475359;
        font-weight: 700;
        display: flex;
        padding: 3px 5px;
        align-items: center;
        text-transform: capitalize;
    }

    .menu ul a li {
        list-style: none;
        font-size: 13.5px;
        padding: 2px 1px;
        margin-top: 5px;
        padding-right: 40px;
        font-family: sans-serif;
    }

    .menu ul a:hover {
        color: #e4e4e4;
        background: #41464b;
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

        header .logo {
            display: flex;
            align-items: center;

        }

        header .search-bar form .search-box {
            width: 400px;
        }

        header .logo h4 {
            font-size: 28px;
            font-weight: 600;
            color: #000000;
            letter-spacing: 1;
            margin: 0;
        }
    }

    @media (max-width: 640px) {

        .top-header {
            display: none;
        }

        header {
            display: none;
        }

        @media (max-width: 475px) {
            header {
                display: none;
            }
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
            <li><a href="<?php echo e(route('reseller')); ?>">daily shop affiliate program</a></li>
        </ul>
    </div>

    <!-- MAIN HEADER -->
    <header>
        <div class="logo">
            <a href="<?php echo e(route('home')); ?>">
                <h4>dailyshop</h4>
            </a>
        </div>
        <div class="search-bar">
            <form action="<?php echo e(route('search.product')); ?>" method="GET">
                <div class="form-control search-box">
                    <div class="dropdown-bar">
                        <div class="select-bar">
                            <span class="selected">Facebook</span>
                            <div class="caret"></div>
                        </div>
                    </div>
                    <input type="text" name="search" placeholder="Search in dailyshop">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </div>
            </form>
            <ul class="menu-bar">
                <?php
                    $categories = getCategoryData();
                ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="<?php echo e(route('category.product', ['id' => $category->id, 'slug' => $category->slug])); ?>"><?php echo e($category->category_name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="icon">
            <a href="">
                <i class="ri-heart-line">
                    <div class="count">
                        <span>0</span>
                    </div>
                </i>
            </a>
            <a href="<?php echo e(route('addtocart')); ?>">
                <i class="ri-shopping-cart-line">
                    <?php
                        $totalItem = getTotalItems();
                    ?>

                    <?php if($totalItem > 0): ?>
                        <div class="count">
                            <span><?php echo e($totalItem); ?></span>
                        </div>
                    <?php endif; ?>
                </i>
            </a>

        </div>
        <div class="account">
            <i class="ri-user-line"></i>
            <span>Account</span>
        </div>
        <div class="menu">
            <ul>
                <a href="<?php echo e(route('home')); ?>">
                    <i class="ri-home-4-line"></i>
                    <li>home</li>
                </a>
                <a href="<?php echo e(route('addtocart')); ?>">
                    <i class="ri-shopping-cart-line"></i>
                    <li>addToCart</li>
                </a>
                <a href="">
                    <i class="ri-order-play-line"></i>
                    <li>order tracking</li>
                </a>
                <a href="#">
                    <i class="ri-user-line"></i>
                    <li>profile</li>
                </a>
                <a href="">
                    <i class="ri-settings-3-fill"></i>
                    <li>setting</li>
                </a>
                <?php if(Auth::check()): ?>
                    <a href="<?php echo e(route('logout')); ?>">
                        <i class="ri-logout-box-r-line"></i>
                        <li>logout</li>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>">
                        <i class="ri-logout-box-r-line"></i>
                        <li>login</li>
                    </a>
                <?php endif; ?>
            </ul>
        </div>
    </header>
    <script src="<?php echo e(asset('assets/js/header.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/layouts/header.blade.php ENDPATH**/ ?>