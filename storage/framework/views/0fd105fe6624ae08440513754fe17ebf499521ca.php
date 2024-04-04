<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #e9ecef;
    }

    nav {
        background-color: #dc3545;
        width: 100%;
        padding: 8px 30px 8px 30px;
        display: flex;
        justify-content: space-between;
        display: none;
    }

    nav .bottom-button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    @media (max-width: 640px) {
        nav {
            display: inline-flex;
            position: absolute;
            top: 0;
        }
    }

    @media (max-width: 768px) {
        nav {
            padding: 5px 10px;
        }
    }
</style>

<body>
    <nav>
        <div class="bottom-button">
            <i class="ri-arrow-left-s-line" id="back-buttton" onclick="history.back()" style="font-size: 32px;"></i>
            <p style="margin:0;"><?php echo $__env->yieldContent('name'); ?></p>
        </div>
        <div class="bottom-button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>