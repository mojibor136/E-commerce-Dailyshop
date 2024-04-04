<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Test</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
</head>
<style>
    .form {
        width: 100%;
        padding: 120px 0 120px 0;
        border: 1px solid;
    }

    div {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn {
        margin-left: 12px;
    }

    span {
        margin-left: 5px;
    }
</style>

<body>
    <div class="form">
        <div>
            <input type="text" class="form-control price" placeholder="Enter Data">
            <button class="btn btn-primary">Data</button>
        </div>
    </div>

    <script>
        let btn = document.querySelector('.btn');
        let text = document.querySelector('.price');

        btn.addEventListener('click', function() {
            if (text) {
                console.log(text.textContent);
            } else {
                console.log('No Data.........');
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ADMIN\Desktop\e-commarce\resources\views/test/PriceData.blade.php ENDPATH**/ ?>