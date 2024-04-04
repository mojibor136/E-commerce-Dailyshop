<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('name'); ?>
    Payment
<?php $__env->stopSection(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('remixicon/remixicon.css')); ?>">
    <!-- bootstrap start -->
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <!-- bootstrap end -->
</head>
<style>
    body {
        background: #e7e8ec;
    }

    main {
        display: flex;
        justify-content: center;
    }

    /* Order content container styles */
    .order-content-container {
        margin: 2% 10px;
        width: 50%;
    }

    /* Order content styles */
    main .order-content {
        width: 100%;
        height: fit-content;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    main .order-content table> :not(caption)>*>* {
        padding: 10px 5px;
    }

    main .order-content table thead tr th {
        font-size: 12px;
    }

    main .order-content table tbody tr td {
        text-transform: capitalize;
        font-size: 14px;
        align-items: center;
    }

    main .order-content table tbody tr td img {
        width: 40px;
        height: 40px;
        cursor: pointer
    }

    main .payment-method {
        width: 100%;
        height: fit-content;
        padding: 20px;
        margin: 10px 0;
        margin-bottom: 90px;
        background-color: #fff;
        border-radius: 5px;
    }

    main .payment-method .form-group button {
        width: 100%;
    }

    main .payment-method .form-group .number-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    main .payment-method .form-group .number-box .icon {
        cursor: pointer;
    }

    main .payment-method .method {
        display: flex;
    }

    main .payment-method .form-group .nagad {
        margin-left: 10px;
    }

    main .payment-method .form-group .nagad,
    main .payment-method .form-group .bkash {
        padding: 5px 10px;
        border-radius: 18px;
        cursor: pointer;
    }

    main .payment-method .form-group .nagad label,
    main .payment-method .form-group .bkash label {
        cursor: pointer;
    }

    main .payment-method .form-group .btn-primary {
        display: none;
    }

    /* Place button bar styles */
    .button-container {
        padding: 10px;
        padding-top: 5px;
        background-color: #fff;
        visibility: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .button-container .total-bar {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .button-container .total-bar p {
        margin: 0;
    }

    .button-container .total-bar .name {
        padding: 5px 0;
        text-transform: uppercase;
    }

    .button-container .total-bar .price {
        color: rgb(255, 0, 149);
        padding: 5px;
        font-weight: 600;
    }

    .button-container .total-bar .details-bar {
        display: flex;
        align-items: center;
        position: absolute;
        right: 15px;
        text-transform: uppercase;
    }

    .button-container .total-bar .details-bar p {
        font-size: 13px;
    }

    .button-container .total-bar .details-bar .arr {
        width: 9px;
        height: 9px;
        border-top: 2px solid;
        border-left: 2px solid;
        transform: rotate(-135deg);
        margin: 5px;
        margin-top: 0;
    }

    .button-container .button {
        width: 100%;
    }

    .button-container .button button {
        width: 100%;
        font-weight: 600;
    }


    @media (max-width: 640px) {
        .header-tow-ul {
            display: none;
        }

        main {
            margin-top: 60px;
        }

        .order-content-container {
            margin: 2% 10px;
            width: 100%;
        }

        main .payment-bar .form-group button {
            margin-left: 520px;
            width: auto;
        }

        main .payment-bar .form-group .confirm {
            display: none;
        }

        main .payment-bar .form-group .btn-primary {
            display: block;
        }

        footer {
            display: none;
        }

        .button-container {
            visibility: visible;
        }

    }

    @media (max-width: 475px) {
        main .payment-bar .form-group button {
            margin-left: 350px;
            width: auto;
        }
    }

    @media (max-width: 375px) {
        main .payment-bar .form-group button {
            margin-left: 250px;
            width: auto;
        }
    }

    @media (max-width: 320px) {
        main .payment-bar .form-group button {
            margin-left: 200px;
            width: auto;
        }
    }
</style>

<body>
    <main>
        <!-- ORDER TABLE CONTENT SECTION -->
        <div class="order-content-container">
            <div class="order-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $total = 0;
                            $delivery = 80;
                        ?>
                        <?php $__currentLoopData = $processeData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle">
                                    <img src="<?php echo e(asset('assets/image/ProductImg/' . $items['productsImg'])); ?>"
                                        alt="">
                                </td>
                                <td class="align-middle"><?php echo e($items['name']); ?> x<?php echo e($items['quantity']); ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="align-middle"><?php echo e($items['quantity'] * $items['price']); ?>Tk</td>
                            </tr>
                            <?php
                                $price = $items['quantity'] * $items['price'];
                                $total = $total + $price;
                            ?>
                            <form action="<?php echo e(route('order.place')); ?>" method="post">
                                <input type="hidden" value="<?php echo e($items['productsId']); ?>"
                                    name="productsData[<?php echo e($index); ?>][id]">
                                <input type="hidden" value="<?php echo e($items['name']); ?>"
                                    name="productsData[<?php echo e($index); ?>][name]">
                                <input type="hidden"
                                    value="<?php echo e($items['quantity']); ?>"name="productsData[<?php echo e($index); ?>][quantity]">
                                <input type="hidden" value="<?php echo e($items['quantity'] * $items['price']); ?>"
                                    name="productsData[<?php echo e($index); ?>][price]">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <thead>
                        <tr>
                            <th>TOTAL</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><?php echo e($total + $delivery); ?>Tk</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <?php echo csrf_field(); ?>
            <input type="hidden" value="<?php echo e($total + $delivery); ?>" name="total">
            <div class="payment-method">
                <div class="">
                    <h4>Payment Method</h4>
                </div>
                <div class="form-group method">
                    <div class="bkash btn btn-danger">
                        <input type="radio" value="bkash" name="method">
                        <label for="Bkash">Bkash</label>
                    </div>
                    <div class="nagad btn btn-warning">
                        <input type="radio" value="nagad" name="method">
                        <label for="Nagad">Nagad</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control mt-2 number-box">
                        <div class="Number">+8801311899083</div>
                        <div class="icon"><i class="ri-file-copy-line"></i></div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="Sand Number" class="mb-1">Sand Number</label>
                    <input type="text" class="form-control" name="sand-number" placeholder="Enter your sand number">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">SAND</button>
                    <button type="submit" class="btn btn-success confirm">CONFIRM ORDER</button>
                </div>
            </div>
        </div>
    </main>
    <!-- ORDER BUTTON SECTION -->
    <div class="button-container">
        <div class="total-bar">
            <p class="name">Total:</p>
            <p class="price"><?php echo e($delivery + $total); ?>Tk</p>
            <div class="details-bar">
                <p>Details</p>
                <div class="arr"></div>
            </div>
        </div>
        <div class="button">
            <button type="submit" class="btn btn-success">CONFIRM ORDER</button>
        </div>
    </div>
    </form>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/payment.blade.php ENDPATH**/ ?>