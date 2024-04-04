<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('name'); ?>
    Login..
<?php $__env->stopSection(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    .login-form {
        display: flex;
        justify-content: center;
    }

    .login-bar {
        background-color: #fff;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
        border-radius: 5px;
    }

    .login-bar h5 {
        font-size: 24px;
        margin: 25px 0;
    }

    .login-bar form {
        width: 90%;
    }

    .login-bar form .form-control {
        display: flex;
        align-items: center;
    }

    .login-bar form .form-group {
        margin-bottom: 15px;
    }

    .login-bar form .email input,
    .login-bar form .password input {
        border-radius: 3px;
        width: 100%;
        padding: 5px;
        border: 0;
        outline: none;
    }

    .login-bar form .remember {
        display: flex;
        align-items: center;
        margin: 12px 0;
    }

    .login-bar form .remember input {
        margin-right: 5px;
    }

    .login-bar form .remember p {
        margin: 0
    }

    .login-bar form .button input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #28a745;
        color: #fff;
        cursor: pointer;
    }

    .login-bar .titel {
        margin: 25px 0 0 0;
    }

    .login-bar .titel p {
        margin: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .login-bar .login-with {
        margin: 10px 0;
        display: flex;
        width: 100%;
        padding: 10px 12px;
    }

    .login-bar .login-with .facebook,
    .login-bar .login-with .google {
        flex: 1;
        border: 1px solid #dee2e6;
        border-radius: 3px;
        margin: 0 3px;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-bar .login-with .facebook a,
    .login-bar .login-with .google a {
        display: flex;
        text-decoration: none;
        color: #333;
    }

    .login-bar .login-with .facebook i,
    .login-bar .login-with .google i {
        margin-right: 8px;
    }

    .login-bar .login-with .facebook a p,
    .login-bar .login-with .google a p {
        margin: 0;
    }

    .login-bar .signup-link {
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .login-bar .signup-link span {
        font-weight: 400;
    }

    .login-bar .signup-link span a {
        color: #333;
        font-weight: 500;
    }

    @media (max-width: 640px) {
        .login-bar {
            margin-top: 80px;
            margin-bottom: 50px;
        }

        .login-bar h5 {
            margin: 15px 0;
        }

        .login-bar .titel {
            margin: 15px 0 0 0;
        }

        .login-bar .signup-link {
            margin: 10px 0 15px 0;
        }
    }
</style>

<body>
    <div class="login-form">
        <div class="login-bar">
            <h5>LOGIN</h5>
            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
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
                <div class="form-group">
                    <div class="password form-control">
                        <i class="ri-lock-line"></i>
                        <input type="password" name="password" placeholder="Password">
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
                    <input type="submit" value="LOGIN" class="btn btn-success">
                </div>
            </form>
            <div class="titel">
                <p>Or Singup Using</p>
            </div>
            <div class="login-with">
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
                <span>Not a member? <a href="<?php echo e(route('register.form')); ?>">Sing up now</a></span>
            </div>
        </div>
    </div>
</body>

</html>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/auth/login.blade.php ENDPATH**/ ?>