<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrZReWRNwe3fIDNtm5ObEjOVJ6Y0/KO0v9I48JfG5fZJi4q5Pm8Fj3EIcXwJwFfS" crossorigin="anonymous"></script>

    <style>

        /* Navbar Styles */
        .navbar {
            background-color: #007bff;
            color: #fff;
            height: 60px; /* Adjust navbar height */
            /* Add hover effects to navbar links */
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Change color on hover */
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 280px; /* Adjust sidebar width */
            /* Modify font styles and hover effects for menu items */
        }
        .menu li:hover {
            background-color: #555;
        }
        .menu li a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }
        .menu li a:hover {
            color: #ffc107; /* Change color on hover */
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 280px; /* Match sidebar width */
            padding: 20px;
        }
        .card {
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            /* Enhance card styles, add hover effects */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Profile Picture Styles */
        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            /* Add a subtle hover effect */
            transition: transform 0.3s ease;
        }
        .profile-pic:hover {
            transform: scale(1.1);
        }

        /* Adding space below the row of links */
        .row.row-cols-1.row-cols-md-2.row-cols-lg-4.g-4 {
            margin-bottom: 30px; /* Adjust the space as needed */
        }
        /* Main Content Styles */

        .card {
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 20px; /* Space between individual cards */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card .card-body {
            padding: 20px;
        }

        .card a {
            text-decoration: none;
            color: #333;
        }

        .card i {
            margin-right: 10px;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }


        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #007bff;
            color: #fff;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            padding-top: 60px;
        }

        .logo {
            padding: 10px 20px;
            font-size: 24px;
            font-weight: bold;
            border-bottom: 1px solid #555;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .menu li {
            padding: 15px 20px;
            transition: background-color 0.3s ease;
        }

        .menu li:hover {
            background-color: #555;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border: 1px solid #eee;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Profile Picture Styles */
        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .profile-pic:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                margin-bottom: 20px;
            }

            .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                padding: 10px;
            }

            .logo {
                font-size: 20px;
            }

            .menu li {
                padding: 10px 15px;
            }

            .profile-pic {
                width: 30px;
                height: 30px;
                margin-right: 5px;
            }
        }

    </style>
</head>
<body class="sidebar-open">

<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" onclick="toggleSidebar()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="{{route('profile',['id'=>$id->id])}}" class="nav-link active" aria-current="page" href="#">
                    <div class="profile-pic">
                        <!-- This span will hold the first letter of the name -->
                        <span id="profile-initial"></span>
                    </div>
                    <div id="user-name" class="d-none"></div> <!-- Div for user name (initially hidden) -->
                </a>
            </div>
        </div>
    </div>
</nav>


<div class="sidebar">
    <div class="logo">
        Shothik AI
    </div>
    <ul class="menu">
        <li><a href="{{route('dashboard',['id'=>$id->id])}}"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="{{route('dashboard',['id'=>$id->id])}}"><i class="fas fa-chart-bar"></i> Dashboard</a></li>
        <li><a href="#"><i class="fas fa-history"></i> History</a></li>
        <li><a href="{{route('editprofile',['id'=>$id->id])}}"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>

</div>

<div class="main-content">
    <h1 id="greeting-message"></h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fas fa-box-open me-2"></i> <!-- Font Awesome icon representing a product box -->
                    <a href="#product" class="text-decoration-none product-dashboard">Product QR</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-envelope me-2"></i>
                    <a href="#email" class="text-decoration-none email-dashboard">Email QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-message me-2"></i>
                    <a href="#sms" class="text-decoration-none sms-dashboard">SMS QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-wifi me-2"></i>
                    <a href="#wifi" class="text-decoration-none wifi-dashboard">WIFI QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-location-dot me-2"></i>
                    <a href="#location" class="text-decoration-none location-dashboard">Location QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-link me-2"></i>
                    <a href="#url" class="text-decoration-none url-dashboard">URL QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-user me-2"></i>
                    <a href="#contact" class="text-decoration-none contact-dashboard">Contact QR</a>
                </div>
            </div>
        </div>

{{--        <div class="col">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <a href="#">Link 2</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <section id= "product" style="display: block;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product QR Code Details</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($users as $use)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                @php

                                $qrcode = 'Company Name: '. $use->company_name . "\n" .
                                           'Product Name: '.$use->product_name . "\n".
                                            'Batch Number: '.$use->batch_number ."\n".
                                            'Making Date: '.$use->making_date."\n".
                                            'Expired Date: '. $use->expired_date;
                                $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                            @endphp
                                <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Company Name:</strong> {{$use->company_name}}</li>
                                    <li class="list-group-item"><strong>Product Name:</strong> {{$use->product_name}}</li>
                                    <li class="list-group-item"><strong>Batch Number:</strong> {{$use->batch_number}}</li>
                                    <li class="list-group-item"><strong>Making Date:</strong> {{$use->making_date}}</li>
                                    <li class="list-group-item"><strong>Expired Date:</strong> {{$use->expired_date}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </section>

    <section id="email" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Email QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($emailuser as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'User Name: '. $use->user_name . "\n" .
                                                   'From: '.$use->userfrom . "\n".
                                                    'To: '.$use->userto ."\n".
                                                    'Message: '.$use->message."\n";

                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>User Name:</strong> {{$use->user_name}}</li>
                                        <li class="list-group-item"><strong>From:</strong> {{$use->userfrom}}</li>
                                        <li class="list-group-item"><strong>To:</strong> {{$use->userto}}</li>
                                        <li class="list-group-item"><strong>Message:</strong> {{$use->message}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="sms" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">SMS QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($sms as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'User Name: '. $use->user_name . "\n" .
                                                   'From: '.$use->userfrom . "\n".
                                                    'To: '.$use->userto ."\n".
                                                    'Message: '.$use->smsmessage."\n";

                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>User Name:</strong> {{$use->user_name}}</li>
                                        <li class="list-group-item"><strong>From:</strong> {{$use->userfrom}}</li>
                                        <li class="list-group-item"><strong>To:</strong> {{$use->userto}}</li>
                                        <li class="list-group-item"><strong>Message:</strong> {{$use->smsmessage}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="location" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Location QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($location as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'Location: '. $use->location . "\n" .
                                                   'Destination: '.$use->destination . "\n".
                                                    'Details Address: '.$use->address ."\n";

                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Location:</strong> {{$use->location}}</li>
                                        <li class="list-group-item"><strong>Destination:</strong> {{$use->destination}}</li>
                                        <li class="list-group-item"><strong>Details Address:</strong> {{$use->address}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="url" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">URL QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($url as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'Website Name: '. $use->websitename . "\n" .
                                                   'Link: '.$use->link . "\n";


                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Website Name:</strong> {{$use->websitename}}</li>
                                        <li class="list-group-item"><strong>Link:</strong> {{$use->link}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="wifi" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Wifi QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($wifi as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'Network Type: '. $use->networktype . "\n" .
                                                   'Network Name: '.$use->network_name . "\n".
                                                    'Password: '.$use->password ."\n".
                                                    'Password Type: '.$use->passwordtype."\n";

                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Network Type:</strong> {{$use->networktype}}</li>
                                        <li class="list-group-item"><strong>Network Name:</strong> {{$use->network_name}}</li>
                                        <li class="list-group-item"><strong>Password:</strong> {{$use->password}}</li>
                                        <li class="list-group-item"><strong>Password Type:</strong> {{$use->passwordtype}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="display: none;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact QR Code Details</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($contact as $use)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        $qrcode = 'First Name: '. $use->firstname . "\n" .
                                                   'Name: '.$use->name . "\n".
                                                    'Organization: '.$use->organization ."\n".
                                                    'Title: '.$use->title."\n".
                                                    'Email: '.$use->email."\n".
                                                    'Telephone: '.$use->phone."\n".
                                                    'Mobile Phone: '.$use->mobileph."\n".
                                                    'Fax: '.$use->fax."\n".
                                                    'Street: '.$use->street."\n".
                                                    'City: '.$use->city."\n".
                                                    'Region: '.$use->region."\n".
                                                    'Postcode: '.$use->postcode."\n".
                                                    'Country: '.$use->country."\n".
                                                    'Link: '.$use->url."\n";

                                        $qrCode = SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($qrcode);
                                    @endphp
                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code" class="img-fluid mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>First Name:</strong> {{$use->firstname}}</li>
                                        <li class="list-group-item"><strong>Name:</strong> {{$use->name}}</li>
                                        <li class="list-group-item"><strong>Organization:</strong> {{$use->organization}}</li>
                                        <li class="list-group-item"><strong>Title:</strong> {{$use->title}}</li>
                                        <li class="list-group-item"><strong>Email:</strong> {{$use->email}}</li>
                                        <li class="list-group-item"><strong>Mobile Phone:</strong> {{$use->mobileph}}</li>
                                        <li class="list-group-item"><strong>Telephone:</strong> {{$use->phone}}</li>
                                        <li class="list-group-item"><strong>Fax:</strong> {{$use->fax}}</li>
                                        <li class="list-group-item"><strong>Street:</strong> {{$use->street}}</li>
                                        <li class="list-group-item"><strong>City:</strong> {{$use->city}}</li>
                                        <li class="list-group-item"><strong>Region:</strong> {{$use->region}}</li>
                                        <li class="list-group-item"><strong>Postcode:</strong> {{$use->postcode}}</li>
                                        <li class="list-group-item"><strong>Country:</strong> {{$use->country}}</li>
                                        <li class="list-group-item"><strong>Link:</strong> {{$use->url}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</div>
</body>
<script>

    const product = document.getElementById('product');
    const email = document.getElementById('email');
    const urls = document.getElementById('url');
    const smss = document.getElementById('sms');
    const rubayet = document.getElementById('wifi');
    const locations = document.getElementById('location');
    const contact = document.getElementById('contact');

    const productLink = document.querySelector('.product-dashboard');
    const emailLink = document.querySelector('.email-dashboard');
    const urlLink = document.querySelector('.url-dashboard');
    const smsLink = document.querySelector('.sms-dashboard');
    const wifiLink= document.querySelector('.wifi-dashboard');
    const locationLink = document.querySelector('.location-dashboard');
    const contactLink = document.querySelector('.contact-dashboard');

    productLink.addEventListener('click',()=>{
        product.style.display = 'block'
        email.style.display = 'none'
        urls.style.display = 'none'
        smss.style.display = 'none'
        rubayet.style.display = 'none'
        locations.style.display = 'none'
        contact.style.display = 'none'
    })

    emailLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'block'
        urls.style.display = 'none'
        smss.style.display = 'none'
        rubayet.style.display = 'none'
        locations.style.display = 'none'
        contact.style.display = 'none'
    })
    urlLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'none'
        urls.style.display = 'block'
        smss.style.display = 'none'
        rubayet.style.display = 'none'
        locations.style.display = 'none'
        contact.style.display = 'none'
    })
    smsLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'none'
        urls.style.display = 'none'
        smss.style.display = 'block'
        rubayet.style.display = 'none'
        locations.style.display = 'none'
        contact.style.display = 'none'
    })
    wifiLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'none'
        urls.style.display = 'none'
        smss.style.display = 'none'
        rubayet.style.display = 'block'
        locations.style.display = 'none'
        contact.style.display = 'none'
    })
    locationLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'none'
        urls.style.display = 'none'
        smss.style.display = 'none'
        rubayet.style.display = 'none'
        locations.style.display = 'block'
        contact.style.display = 'none'
    })
    contactLink.addEventListener('click',()=>{
        product.style.display = 'none'
        email.style.display = 'none'
        urls.style.display = 'none'
        smss.style.display = 'none'
        rubayet.style.display = 'none'
        locations.style.display = 'none'
        contact.style.display = 'block'
    })

    const greetingMessage = document.getElementById('greeting-message');
    const currentTime = new Date().getHours();

    if (currentTime >= 5 && currentTime < 12) {
        greetingMessage.textContent = 'Good Morning!';
    } else if (currentTime >= 12 && currentTime < 18) {
        greetingMessage.textContent = 'Good Afternoon!';
    } else if (currentTime >= 18 && currentTime < 22) {
        greetingMessage.textContent = 'Good Evening!';
    } else {
        greetingMessage.textContent = 'Good Night!';
    }

    function getInitial(name) {
        return name.charAt(0);
    }

    const userName = "{{$id->name}}";

    const names = userName.split(' '); // Split the full name by space into an array of parts

    let firstCharacter = '';
    if (names.length >= 1) {
        firstCharacter += getInitial(names[0]); // Get the first character of the first name
    }

    if (names.length >= 3) {
        firstCharacter += getInitial(names[2]); // Get the first character of the third name
    }

    const profilePic = document.querySelector('#profile-initial');

    if (!firstCharacter || firstCharacter.trim() === '') {
        profilePic.textContent = getInitial('');
    } else {
        profilePic.textContent = firstCharacter;
    }
    // ... your existing JavaScript code ...

    // Add body classes for sidebar and greeting animations
    document.body.classList.add('sidebar-open'); // Show sidebar on page load
    document.body.classList.add('greeting-visible'); // Show greeting

    function toggleSidebar() {
        const body = document.body;
        body.classList.toggle('sidebar-collapsed'); // Toggle class for collapsed sidebar
    }


</script>
<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
<script src="{{asset('JS/link.js')}}"></script>
</html>
