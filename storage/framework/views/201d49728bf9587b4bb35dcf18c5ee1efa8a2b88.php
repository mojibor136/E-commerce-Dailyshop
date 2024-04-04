<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/core.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/theme-default.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="<?php echo e(route('admin')); ?>">
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
                <img src="<?php echo e(asset('assets/img/banner/mojibor.png')); ?>" alt="">
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
                <a href="<?php echo e(route('admin.logout')); ?>">
                    <i class="ri-logout-box-r-line"></i>
                    <li>Admin Logout</li>
                </a>
            </ul>
        </div>
    </header>
    <div class="content-bar">
        <div class="nav">
            <ul>
                <li>
                    <div class="dropdownButton">
                        <i class="ri-dashboard-2-line"></i>
                        <span>my dashboard</span>
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
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="<?php echo e(route('addcategory')); ?>">
                            <li>Add Category</li>
                        </a>
                        <a href="<?php echo e(route('allcategory')); ?>">
                            <li>All Category</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-dashboard-fill"></i>
                        <span>subcategory</span>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="<?php echo e(route('addsubcategory')); ?>">
                            <li>Add SubCategory</li>
                        </a>
                        <a href="<?php echo e(route('allsubcategory')); ?>">
                            <li>All SubCategory</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-product-hunt-line"></i>
                        <span>manage product</span>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="<?php echo e(route('allproduct')); ?>">
                            <li>All Product</li>
                        </a>
                        <a href="<?php echo e(route('addproduct')); ?>">
                            <li>Add Product</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <div class="dropdownButton">
                        <i class="ri-order-play-line"></i>
                        <span>manage order</span>
                    </div>
                    <ul class="dropdownContent" style="display: none;">
                        <a href="<?php echo e(route('allorder')); ?>">
                            <li>All Order</li>
                        </a>
                        <a href="<?php echo e(route('panding.order')); ?>">
                            <li>Panding Order</li>
                        </a>
                        <a href="<?php echo e(route('confirm.order')); ?>">
                            <li> Confrim Order</li>
                        </a>
                        <a href="<?php echo e(route('manage.order')); ?>">
                            <li> Manage Order</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <div class="dropdownButton">
                        <i class="ri-group-fill"></i>
                        <span>manage customer</span>
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
        </div>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/admin/layout/tempalate.blade.php ENDPATH**/ ?>