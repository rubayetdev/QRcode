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
</head>
<body>
<nav class="nav">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="#" class="logo">ScanHub</a>

    <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="#">Home</a></li>
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
    <div class="container">
        <h2 class="features-title text-center mb-5">Why Choose ScanHub?</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="feature-item">
                    <h3 class="feature-heading">Effortless QR Scanning</h3>
                    <p class="feature-description">ScanHub provides seamless QR code scanning, enabling quick access to information with ease and efficiency.</p>
                </div>
                <div class="feature-item">
                    <h3 class="feature-heading">Multi-Purpose Functionality</h3>
                    <p class="feature-description">From accessing website links to storing contact details, ScanHub serves various needs with its versatile QR code decoding.</p>
                </div>
                <div class="feature-item">
                    <h3 class="feature-heading">Time-Efficient Solution</h3>
                    <p class="feature-description">Save time by instantly decoding QR codes, eliminating the need for manual typing or searching for information.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-item">
                    <h3 class="feature-heading">Cross-Device Accessibility</h3>
                    <p class="feature-description">Access ScanHub effortlessly on multiple devices, ensuring flexibility and convenience in QR code scanning wherever you go.</p>
                </div>
                <div class="feature-item">
                    <h3 class="feature-heading">Enhanced Sharing Capabilities</h3>
                    <p class="feature-description">Facilitates easy sharing and exchange of QR code information, promoting seamless collaboration among users.</p>
                </div>
                <!-- Add more feature items here if needed -->
            </div>
        </div>
    </div>
</section>

<footer class="footer">
{{--    <div class="container text-center py-4">--}}
        <p>&copy; 2023 ScanHub. All rights reserved.</p>
        <div class="footer-links mt-2">
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a> |
            <a href="#">Contact Us</a>
        </div>
        <div class="social-links mt-3">
            <!-- Social media icons -->
            <!-- Google Play link with an image -->
            <a href="https://play.google.com/store/apps/details?id=com.yourapp" target="_blank">
                <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" style="width: 150px;">
            </a>
        </div>
{{--    </div>--}}
</footer>


</body>
</html>
