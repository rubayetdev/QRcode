<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScanHub Homepage</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="{{asset('JS/script.js')}}" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QHCMCY84FV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QHCMCY84FV');
    </script>
    <style>
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }

        body {
            background-color: #fff;
            padding-top: 60px;
        }
        .ag-courses_box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;

            padding: 50px 0;
        }
        .ag-courses_item {
            -ms-flex-preferred-size: calc(33.33333% - 30px);
            flex-basis: calc(33.33333% - 30px);

            margin: 0 15px 30px;

            overflow: hidden;

            border-radius: 28px;
        }
        .ag-courses-item_link {
            display: block;
            padding: 30px 20px;
            background-color: #121212;

            overflow: hidden;

            position: relative;
        }
        .ag-courses-item_link:hover,
        .ag-courses-item_link:hover .ag-courses-item_date {
            text-decoration: none;
            color: #FFF;
        }
        .ag-courses-item_link:hover .ag-courses-item_bg {
            -webkit-transform: scale(10);
            -ms-transform: scale(10);
            transform: scale(10);
        }
        .ag-courses-item_title {
            min-height: 87px;
            margin: 0 0 25px;

            overflow: hidden;

            font-weight: bold;
            font-size: 30px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }
        .ag-courses-item_date-box {
            font-size: 18px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }
        .ag-courses-item_date {
            font-weight: bold;
            color: #f9b234;

            -webkit-transition: color .5s ease;
            -o-transition: color .5s ease;
            transition: color .5s ease
        }
        .ag-courses-item_bg {
            height: 128px;
            width: 128px;
            background-color: #f9b234;

            z-index: 1;
            position: absolute;
            top: -75px;
            right: -75px;

            border-radius: 50%;

            -webkit-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }
        .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
            background-color: #3ecd5e;
        }
        .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
            background-color: #e44002;
        }
        .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
            background-color: #952aff;
        }
        .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
            background-color: #cd3e94;
        }
        .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
            background-color: #4c49ea;
        }



        @media only screen and (max-width: 979px) {
            .ag-courses_item {
                -ms-flex-preferred-size: calc(50% - 30px);
                flex-basis: calc(50% - 30px);
            }
            .ag-courses-item_title {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

        }
        @media only screen and (max-width: 639px) {
            .ag-courses_item {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
            }
            .ag-courses-item_title {
                min-height: 72px;
                line-height: 1;

                font-size: 24px;
            }
            .ag-courses-item_link {
                padding: 22px 40px;
            }
            .ag-courses-item_date-box {
                font-size: 16px;
            }
        }
        @media only screen and (max-width: 767px) {
            body {
                padding-top: 80px; /* Adjust as needed for smaller screens */
            }
        }
        
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
</head>
<body>
<nav class="nav">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="#" class="logo">ScanHub</a>

    <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('tools')}}">Tools</a></li>
        <li><a href="{{route('alter2')}}">Signin</a></li>
    </ul>
</nav>

<section class="container mt-4" id="container-section">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="main-content">
                <h1 class="main-title">Enhance Efficiency with</h1>
                <h1 class="main-subtitle">Scan<span class="hub">Hub</span></h1>
                <p class="main-description">
                    Empower your productivity with ScanHub, your go-to QR scanning solution. Easily decode QR codes, access information swiftly, and streamline your tasks seamlessly.
                </p>

                <div class="signup-button">
                    <a href="{{route('alter2')}}" class="btn btn-primary btn-lg">Sign In</a>

                    <a href="{{route('alter')}}" class="btn btn-primary btn-lg">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-container" id="features-section">
    <div class="ag-format-container">
        <h2 class="features-title text-center mb-5">Why Choose ScanHub?</h2>
    <div class="ag-courses_box">
        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Effortless QR Scanning
                </div>

                <div class="ag-courses-item_date-box">
                   
                    <span class="ag-courses-item_date">
            <p align="justify">ScanHub provides seamless QR code scanning, enabling quick access to information with ease and efficiency.</p>
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Multi-Purpose Functionality
                </div>

                <div class="ag-courses-item_date-box">
                   
                    <span class="ag-courses-item_date">
            <p align="justify">From accessing website links to storing contact details, ScanHub serves various needs with its versatile QR code decoding.</p>
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Time-Efficient Solution
                </div>

                <div class="ag-courses-item_date-box">
                    
                    <span class="ag-courses-item_date">
            <p align="justify">Save time by instantly decoding QR codes, eliminating the need for manual typing or searching for information.</p>
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Cross-Device Accessibility
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
            <p align = "justify">Access ScanHub effortlessly on multiple devices, ensuring flexibility and convenience in QR code scanning wherever you go.</p>
          </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>

                <div class="ag-courses-item_title">
                    Enhanced Sharing Capabilities
                </div>

                <div class="ag-courses-item_date-box">
            
                    <span class="ag-courses-item_date">
            <p align= "justify">
                Facilitates easy sharing and exchange of QR code information, promoting seamless collaboration among users.
            </p>
          </span>
                </div>
            </a>
        </div>



<!--        <div class="ag-courses_item">-->
<!--            <a href="#" class="ag-courses-item_link">-->
<!--                <div class="ag-courses-item_bg">-->
<!--                </div>-->
<!--                <div class="ag-courses-item_title">-->
<!--                    URL QR-->
<!--                </div>-->
                
<!--                <div class="ag-courses-item_date-box">-->
<!--                    <span class="ag-courses-item_date">-->
<!--<p align="justify">Effortlessly generate personalized URL QR codes, encapsulating website name, URL, and input values. Simplify access and enhance digital interactions with our streamlined QR method for efficient website navigation.</p>-->
<!--          </span>-->
<!--                </div>-->
                
<!--            </a>-->
<!--        </div>-->

<!--        <div class="ag-courses_item">-->
<!--            <a href="#" class="ag-courses-item_link">-->
<!--                <div class="ag-courses-item_bg"></div>-->

<!--                <div class="ag-courses-item_title">-->
<!--                    Contact QR-->
<!--                </div>-->

<!--                <div class="ag-courses-item_date-box">-->
<!--                    <span class="ag-courses-item_date">-->
<!--            <p align="justify">Effortlessly create personalized Contact QR codes with our method, encompassing name, mobile, company, and social media details. Streamline connections by sharing a QR code, simplifying contact exchange with integrated website information.</p>-->
<!--          </span>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->

    </div>
</div>
    
</section>

<footer class="footer">
{{--    <div class="container text-center py-4">--}}
        <p>&copy; 2024 ScanHub. All rights reserved.</p>
        <div class="footer-links mt-2">
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a> |
            <a href="#">Contact Us</a>
        </div>
        <div class="social-links mt-3">
            <!-- Social media icons -->
            <!-- Google Play link with an image -->
            <a href="https://play.google.com/store/apps/dev?id=6580660399707616800&hl=en&gl=US" target="_blank">
                <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" style="width: 150px;">
            </a>
        </div>
{{--    </div>--}}
</footer>


</body>
</html>
