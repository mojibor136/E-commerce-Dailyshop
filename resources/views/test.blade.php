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
        <form action="{{route('test.data')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="productImg[]" multiple />
            <button type="submit">Upload</button>
        </form>
        
    </div>
</body>
</html>
