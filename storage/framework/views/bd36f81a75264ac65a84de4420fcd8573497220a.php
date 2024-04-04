<!-- resources/views/test.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
</head>

<body>
    <div class="container mt-5">
        <form action="<?php echo e(route('Data')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" class="form-control mt-3 mb-2" name="InData" placeholder="Big Letter">
            <input type="submit" class="btn btn-success mt-3">
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/test.blade.php ENDPATH**/ ?>