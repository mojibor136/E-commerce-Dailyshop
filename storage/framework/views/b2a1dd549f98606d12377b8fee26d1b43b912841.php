<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('name'); ?>
    Register
<?php $__env->stopSection(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        background-color: #eeeeee;
    }

    /* HEADER TOW*/
    .header-tow-ul {
        display: none;
    }

    .register-form {
        display: flex;
        justify-content: center;
    }

    .register-bar {
        background-color: #fff;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
        border-radius: 5px;
    }

    .register-bar h5 {
        font-size: 24px;
        margin: 20px 0;
    }

    .register-bar form {
        width: 90%;
    }

    .register-bar form .form-group {
        margin-bottom: 10px;
    }

    .register-bar form .form-control {
        display: flex;
        align-items: center;
    }

    .register-bar form .name input,
    .register-bar form .email input,
    .register-bar form .password input {
        border-radius: 3px;
        width: 100%;
        padding: 2px 5px;
        border: 0;
        outline: none;
    }

    .register-bar form .remember {
        display: flex;
        align-items: center;
        margin: 12px 0;
    }

    .register-bar form .remember input {
        margin-right: 5px;
    }

    .register-bar form .remember p {
        margin: 0
    }

    .register-bar form .button input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #3000dd;
        color: #fff;
        cursor: pointer;
    }

    .register-bar .titel {
        margin: 25px 0 0 0;
    }

    .register-bar .titel p {
        margin: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .register-bar .register-with {
        margin: 10px 0;
        display: flex;
        width: 100%;
        padding: 10px 12px;
    }

    .register-bar .register-with .facebook,
    .register-bar .register-with .google {
        flex: 1;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        margin: 0 3px;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .register-bar .register-with .facebook a,
    .register-bar .register-with .google a {
        display: flex;
        text-decoration: none;
        color: #333;
    }

    .register-bar .register-with .facebook i,
    .register-bar .register-with .google i {
        margin-right: 8px;
    }

    .register-bar .register-with .facebook a p,
    .register-bar .register-with .google a p {
        margin: 0;
    }

    .register-bar .signup-link {
        margin-bottom: 20px;
        margin-top: 10px;
        text-align: center;
    }

    .register-bar .signup-link span {
        font-weight: 400;
    }

    .register-bar .signup-link span a {
        color: #333;
        font-weight: 500;
    }

    @media (max-width: 640px) {
        .register-bar {
            margin-top: 80px;
            margin-bottom: 50px;
        }

        .register-bar h5 {
            margin: 15px 0;
        }
        .register-bar .titel {
            margin: 15px 0 0 0;
        }

        .register-bar .signup-link {
            margin: 5px 0 15px 0;
        }
    }
</style>

<body>
    <div class="register-form">
        <div class="register-bar">
            <h5>REGISTER</h5>
            <form action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="name form-control">
                        <i class="ri-user-fill"></i>
                        <input type="text" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>">
                    </div>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <div class="email form-control">
                        <i class="ri-mail-line"></i>
                        <input type="text" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-danger">
                    <div class="password form-control">
                        <i class="ri-lock-line"></i>
                        <input type="password" name="password" placeholder="Password" value="<?php echo e(old('password')); ?>">
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="remember">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class="button">
                    <input id="btn" type="submit" value="REGISTER" class="btn btn-primary">
                </div>
            </form>
            <div class="titel">
                <p>Or Singin Using</p>
            </div>
            <div class="register-with">
                <div class="facebook">
                    <a href="">
                        <i class="ri-facebook-box-fill"></i>
                        <p>Facebook</p>
                    </a>
                </div>
                <div class="google">
                    <a href="">
                        <i class="ri-google-fill"></i>
                        <p>Google</p>
                    </a>
                </div>
            </div>
            <div class="signup-link">
                <span>Not a member? <a href="<?php echo e(route('login.form')); ?>">Sing in now</a></span>
            </div>
        </div>
    </div>
</body>

</html>
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/auth/register.blade.php ENDPATH**/ ?>