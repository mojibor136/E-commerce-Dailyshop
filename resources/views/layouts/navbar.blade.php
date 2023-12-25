<head>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
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

    nav .button {
        display: flex;
        align-items: center;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
    }

    @media (max-width: 640px) {
        nav {
            display: inline-flex;
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
        <div class="button">
            <i class="ri-arrow-left-s-line" id="back-buttton" onclick="history.back()" style="font-size: 32px;"></i>
            <p style="margin:0;">Page</p>
        </div>
        <div class="button">
            <i class="ri-more-2-fill" style="font-size: 24px;"></i>
        </div>
    </nav>
</body>

</html>
