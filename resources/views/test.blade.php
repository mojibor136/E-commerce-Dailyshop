<!-- resources/views/test.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('test.data') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="mb-3" for="">MULTIPLE PRODUCTS IMAGE</label>
            <input class="mb-2" type="file" multiple name="productImg[]">
            <button type="submit" class="btn btn-primary">Submit Data</button>
        </form>
    </div>
</body>
</html>
