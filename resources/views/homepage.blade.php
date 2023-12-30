{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>User Profile</title>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
{{--    <style>--}}
{{--        .blur {--}}
{{--            filter: blur(5px);--}}
{{--            transition: filter 0.5s ease;--}}
{{--        }--}}
{{--        .no-blur {--}}
{{--            filter: blur(0);--}}
{{--        }--}}
{{--        body {--}}
{{--            font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;--}}
{{--            font-weight: 300;--}}
{{--        }--}}
{{--        .hub {--}}
{{--            background-color: yellow;--}}
{{--            color: white;--}}
{{--            font-weight: bolder;--}}
{{--            font-size: 6rem;--}}
{{--            padding: 20px;--}}
{{--            border-radius: 30px/* Adding padding for better visibility */--}}
{{--        }--}}

{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="#">ScanHub</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">--}}
{{--            <div class="navbar-nav">--}}
{{--                <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                <a class="nav-link" href="#">Features</a>--}}
{{--                <a class="nav-link" href="{{route('tools')}}">Tools</a>--}}
{{--                <a class="nav-link" href="{{route('alter2')}}">Sign In</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<section class="container mt-4" id="container-section">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6 offset-md-3 text-center">--}}
{{--            <div style="padding-top: 30px;">--}}
{{--                <h1 style="font-size: 3.5rem; color: #333;">Enhance Efficiency with</h1>--}}
{{--                <h1 style="font-weight: bolder; font-size: 6rem; color: black;">Scan<span class="hub">Hub</span></h1>--}}
{{--                <p style="font-size: 1.2rem; padding-top: 20px; color: #666;">--}}
{{--                    Empower your productivity with ScanHub, your go-to QR scanning solution. Easily decode QR codes, access information swiftly, and streamline your tasks seamlessly.--}}
{{--                </p>--}}

{{--                <div style="padding-top: 30px;">--}}
{{--                    <a href="{{route('alter2')}}" class="btn btn-primary btn-lg" style="background-color: #007bff; border-color: #007bff;">Sign up here</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<section class="features-container" id="features-section" style="padding-top: 80px;">--}}
{{--    <div class="row" style="background-color: #f0f0f0; padding: 50px 0;">--}}
{{--        <div class="col-md-8 offset-md-2">--}}
{{--            <h2 style="text-align: center; font-size: 2.5rem; font-weight: bold; margin-bottom: 30px;">Why Choose ScanHub?</h2>--}}
{{--            <div class="feature-item">--}}
{{--                <h3>Effortless QR Scanning</h3>--}}
{{--                <p>ScanHub provides seamless QR code scanning, enabling quick access to information with ease and efficiency.</p>--}}
{{--            </div>--}}
{{--            <div class="feature-item">--}}
{{--                <h3>Multi-Purpose Functionality</h3>--}}
{{--                <p>From accessing website links to storing contact details, ScanHub serves various needs with its versatile QR code decoding.</p>--}}
{{--            </div>--}}
{{--            <div class="feature-item">--}}
{{--                <h3>Time-Efficient Solution</h3>--}}
{{--                <p>Save time by instantly decoding QR codes, eliminating the need for manual typing or searching for information.</p>--}}
{{--            </div>--}}
{{--            <div class="feature-item">--}}
{{--                <h3>Cross-Device Accessibility</h3>--}}
{{--                <p>Access ScanHub effortlessly on multiple devices, ensuring flexibility and convenience in QR code scanning wherever you go.</p>--}}
{{--            </div>--}}
{{--            <div class="feature-item">--}}
{{--                <h3>Enhanced Sharing Capabilities</h3>--}}
{{--                <p>Facilitates easy sharing and exchange of QR code information, promoting seamless collaboration among users.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script>--}}
{{--    window.addEventListener("scroll", function () {--}}
{{--        const featuresSection = document.getElementById("features-section");--}}
{{--        const navbar = document.getElementById("navbar");--}}

{{--        if (featuresSection) {--}}
{{--            if (window.scrollY > featuresSection.offsetTop) {--}}
{{--                navbar.classList.add("fixed-top");--}}
{{--            } else {--}}
{{--                navbar.classList.remove("fixed-top");--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}

{{--    window.addEventListener("scroll", function () {--}}
{{--        const featuresSection = document.getElementById("features-section");--}}
{{--        const containerSection = document.getElementById("container-section");--}}

{{--        if (featuresSection && containerSection) {--}}
{{--            const scrollTop = window.scrollY;--}}
{{--            const featuresSectionTop = featuresSection.offsetTop;--}}

{{--            if (scrollTop > featuresSectionTop) {--}}
{{--                featuresSection.classList.add("no-blur");--}}
{{--                containerSection.classList.add("blur");--}}
{{--            } else {--}}
{{--                featuresSection.classList.remove("no-blur");--}}
{{--                containerSection.classList.remove("blur");--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>--}}

{{--</body>--}}

{{--</html>--}}
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation Bar with Search Box</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="{{asset('JS/script.js')}}" defer></script>
    <!-- Google tag (gtag.js) -->
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
        <li><a href="#">Services</a></li>
        <li><a href="#">Signin Here</a></li>
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
                    <a href="{{route('alter2')}}" class="btn btn-primary btn-lg">Sign up here</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-container" id="features-section">
    <div class="row features-row">
        <div class="col-md-8 offset-md-2">
            <h2 class="features-title">Why Choose ScanHub?</h2>
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
            <div class="feature-item">
                <h3 class="feature-heading">Cross-Device Accessibility</h3>
                <p class="feature-description">Access ScanHub effortlessly on multiple devices, ensuring flexibility and convenience in QR code scanning wherever you go.</p>
            </div>
            <div class="feature-item">
                <h3 class="feature-heading">Enhanced Sharing Capabilities</h3>
                <p class="feature-description">Facilitates easy sharing and exchange of QR code information, promoting seamless collaboration among users.</p>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="footer">
    &copy; All rights reserved to SMRIIB
</footer>

</body>
</html>
