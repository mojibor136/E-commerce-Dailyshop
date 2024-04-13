<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .fixed-header {
        position: fixed;
        top: 0;
        z-index: 99999;
    }

    .phone-header-container {
        width: 100%;
        display: flex;
        justify-content: center;
        display: none;
    }

    .header {
        background-color: #f85606;
        width: 100%;
        padding: 5px 10px;
    }

    .icon-logo {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .icon-logo .logo {
        display: flex;
        align-items: center;
    }

    .icon-logo .logo a {
        text-decoration: none;
    }

    .icon-logo .logo h4 {
        font-size: 30px;
        font-weight: 600;
        color: #fff;
        text-transform: capitalize;
        letter-spacing: 1;
        margin: 0;
    }

    .icon-logo .logo h4::first-letter {
        color: coral;
    }

    .icon-logo .icon a {
        text-decoration: none;
        padding: 5px;
    }

    .icon-logo .icon a span {
        color: white;
    }

    .search-container {
        padding: 2px 0;
        position: relative;
    }

    .search-container .search {
        display: flex;
        align-items: center;
        padding-left: 5px;
        background-color: #ffffff;
        border-radius: 4px;
        overflow: hidden;
    }

    .search-container .search input {
        width: 100%;
        height: 28px;
        font-size: 14px;
        border: none;
        outline: none;
        background-color: transparent;
    }

    .search-container .search .dropdown-menu-bar {
        box-sizing: border-box;
        background: #afc0d1;
        cursor: pointer;
    }

    .search-container .search.dropdown-menu-bar:hover {
        background: #e9ecef;
    }

    .search-container .search .dropdown-menu-bar .select-bar {
        display: flex;
        align-items: center;
        color: #41464b;
        background-color: transparent;
        padding: 6px 8px;
        text-transform: capitalize;
        font-weight: 600;
    }

    .search-container .search .dropdown-menu-bar .caret {
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 6px solid #333;
        margin-left: 4px;
        margin-top: 2px;
    }

    .dropdown-category {
        right: 0;
        position: absolute;
        background-color: #2a2f2a;
        display: flex;
        justify-content: center;
        flex-direction: column;
        visibility: hidden
    }

    .dropdown-category a {
        text-decoration: none;
        padding: 7px 20.5px;
    }

    .dropdown-category a:hover {
        background-color: #333;
    }

    .dropdown-category a span {
        color: #fff;
        text-transform: capitalize;
    }

    @media (max-width: 640px) {
        .phone-header-container {
            display: block;
        }

    }
</style>

<body>
    <div class="phone-header-container">
        <div class="header">
            <div class="icon-logo">
                <div class="logo">
                    <a href="">
                        <h4>dailyshop</h4>
                    </a>
                </div>
                <div class="icon">
                    <a href=""><span class="ri-shopping-cart-line"></span></a>
                    <a href=""><span class="ri-user-line"></span></a>
                    <a href=""><span class="ri-logout-box-r-line"></span></a>
                </div>
            </div>
            <div class="search-container">
                <div class="search">
                    <input type="text" placeholder="Search in Dailyshop....">
                    <div class="dropdown-menu-bar">
                        <div class="select-bar">
                            <span class="selected">categories</span>
                            <div class="caret"></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-category">
                    <?php
                        $categories = getCategoryData();
                    ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href=""><span><?php echo e($category->category_name); ?></span></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('scroll', function() {
            let iconLogo = document.querySelector('.icon-logo');
            let header = document.querySelector('.header');
            if (pageYOffset >= 200) {
                header.classList.add('fixed-header');
                iconLogo.style.display = 'none';
            } else {
                header.classList.remove('fixed-header');
                iconLogo.style.display = 'revert-layer';
            }
        })
        let dropdownBtn = document.querySelector('.dropdown-menu-bar');
        let dropdownCategory = document.querySelector('.dropdown-category');
        let one = true;
        dropdownBtn.addEventListener('click', function() {
            if (one) {
                dropdownCategory.style.visibility = 'visible';
                dropdownCategory.style.zIndex = '9999';
            } else {
                dropdownCategory.style.visibility = 'hidden';
            }
            one = !one;
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/layouts/PhoneHeader.blade.php ENDPATH**/ ?>