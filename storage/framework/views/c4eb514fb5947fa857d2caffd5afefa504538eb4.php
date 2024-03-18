<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
</head>
<style>
    .button-container {
        display: flex;
        justify-content: space-around;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        box-sizing: border-box;
        z-index: 9999;
        display: none;
    }

    .button {
        border: none;
        color: #fff;
        width: 50px;
        height: 45px;
        font-size: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        position: relative;
    }

    .button.clicked {
        color: rgb(16, 0, 243);
    }

    .count-container {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: red;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: 2px;
        right: 0;
    }

    .count-container div {
        font-size: 14px;
        font-weight: bolder;
        color: #fff;
    }

    @media (max-width: 640px) {
        .button-container {
            display: block;
            display: flex;
        }
    }
</style>

<body>
    <div class="button-container">
        <a href="" class="button"><i class="ri-home-4-line"></i></a>
        <a href="" class="button"><i class="ri-layout-grid-fill"></i></a>
        <a href="<?php echo e(route('addtocart')); ?>" class="button"><i class="ri-shopping-cart-line">
                <div class="count-container">
                    <div>0</div>
                </div>
            </i></a>
        <?php if(Auth::check()): ?>
            <a href="" class="button"><i class="ri-user-line"></i></a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="button">
                <i class="ri-logout-box-r-line"></i>
            </a>
        <?php endif; ?>

    </div>

    <script>
        let buttons = document.querySelectorAll('.button');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Toggle the 'clicked' class
                this.classList.toggle('clicked');
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/layouts/bottom-button.blade.php ENDPATH**/ ?>