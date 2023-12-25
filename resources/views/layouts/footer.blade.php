<!-- remixicon -->
<link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
<!-- bootstrap start -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<!-- bootstrap end -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #e9ecef;
    }

    .footer {
        background-color: #24262b;
        padding: 20px 0;
    }

    .footer-container {
        width: 100%;
    }

    ul {
        list-style: none;
    }

    .footer-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin: 0 5%;
    }

    .footer-col {
        padding: 0 15px;
        height: fit-content;
    }

    .footer-col ul {
        padding: 0;
        margin: 0;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #eeeeee;
        text-transform: capitalize;
        margin-bottom: 15px;
        font-weight: 500;
    }


    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        text-decoration: none;
        font-weight: 300;
        color: #cccccc;
    }

    .footer-col ul li:not(last-child) {
        margin-bottom: 10px;
    }

    .footer-col .social-icon {
        display: flex;
    }

    .footer-col .social-icon a {
        display: inline-block;
        height: 40px;
        width: 40px;
        margin: 0 10px 10px 0;
        background-color: #636464;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.5s ease;
        font-size: 18px;
    }

    .footer-col .social-icon a:hover {
        background-color: #ffffff;
        color: #24262b;
    }

    .footer-container .copyright {
        text-align: center;
    }

    .footer-container .copyright span {
        color: #eeeeee;
    }

    @media (max-width: 640px) {
        .footer-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: 0 5%;
        }
    }

    @media (max-width: 475px) {

        .footer-row {
            display: grid;
            grid-template-columns: 1fr;
            margin: 0 5%;
        }


        .footer-col {
            padding: 10px 15px;
        }
    }
</style>
</head>

<body>
    <!-- FOOTER  -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Contact Information</h4>
                    <ul>
                        <li><a href="">mojibor6321@gmail.com</a></li>
                        <li><a href="">01311890283</a></li>
                        <li><a href=""> Jatrabari kazla</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Shipping Information</a></li>
                        <li><a href="">Return Policy</a></li>

                        <li><a href="">order track </a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Privacy Policy</h4>
                    <ul>
                        <li><a href="">Shopping mall</a></li>
                        <li><a href="">Shopping mall</a></li>
                        <li><a href="">Shopping mall</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Media Links</h4>
                    <div class="social-icon">
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                        <a href=""><i class="ri-home-2-line"></i></a>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <span>&copy; 2023 Your Website Name. All Rights Reserved.</span>
            </div>

        </div>
    </footer>
