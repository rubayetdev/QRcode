<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        body.sidebar-collapsed .sidebar {
            transform: translateX(-100%);
        }

        /* Adjust main content when sidebar is collapsed */
        body.sidebar-collapsed .main-content {
            margin-left: 0;
        }

        /* Hide logo text when sidebar is collapsed */
        body.sidebar-collapsed .logo {
            display: none;
        }

        /* Show logo icon only when sidebar is collapsed */
        body.sidebar-collapsed .navbar-toggler {
            display: block;
        }

        body.sidebar-collapsed .sidebar {
            transform: translateX(-100%);
        }

        /* Adjust main content when sidebar is collapsed */
        body.sidebar-collapsed .main-content {
            margin-left: 0;
        }

        /* Hide logo text when sidebar is collapsed */
        body.sidebar-collapsed .logo {
            display: none;
        }

        /* Show logo icon only when sidebar is collapsed */
        body.sidebar-collapsed .navbar-toggler {
            display: block;
        }
        /* Color scheme */
        body {
            background-color: #ffffff; /* Light gray background */
            color: #333;
            font-family: Poppins, sans-serif; /* Add your preferred font */
        }

        .navbar {
            background-color: #007bff; /* Primary color */
        }

        .sidebar {
            background-color: #333;
            color: #fff;
        }

        a {
            color: #007bff; /* Primary color for links */
        }

        /* Typography */
        h1 {
            font-size: 2rem;
        }

        /* Card design */
        .card {
            border: 1px solid #eee;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease-in-out; /* Add transition for hover effects */
        }

        .card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Sidebar transition */
        .sidebar {
            transform: translateX(-100%); /* Initially hidden */
            transition: transform 0.3s ease-in-out;
        }

        body.sidebar-open .sidebar {
            transform: translateX(0); /* Show sidebar on body class change */
        }

        /* Profile picture interaction */
        .profile-pic {
            transition: transform 0.2s ease-in-out;
        }

        .profile-pic:hover {
            transform: scale(1.1); /* Expand on hover */
        }

        /* Animated greeting */
        #greeting-message {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        body.greeting-visible #greeting-message {
            opacity: 1; /* Fade in greeting */
        }


        .sidebar {
            background-color: #333;
            color: #fff;
            width: 250px;
            height: 100vh; /* Set full height of viewport */
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto; /* Enable vertical scrolling if needed */

            /* New styles for better aesthetics */
            padding-top: 60px; /* Create space for logo */
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
            transition: background-color 0.3s ease; /* Add transition for background color change */
        }

        .menu li:hover {
            background-color: #555; /* Change background color on hover */
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }
        /* Reset default margin and padding */
        body, html {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        /* Basic styling for the sidebar/menu */
        .sidebar {
            background-color: #333;
            color: #fff;
            width: 250px;
            height: 100vh; /* Set full height of viewport */
            position: fixed;
            top: 0;
            left: 0;
        }

        .logo {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .menu {
            list-style: none;
            padding: 0;
        }

        .menu li {
            padding: 15px 20px;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
        }

        /* Styling for the main content area */
        .main-content {
            margin-left: 250px; /* Same width as sidebar */
            padding: 20px;
        }
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

        .nav-link {
            display: flex;
            align-items: center;
        }

        #profile-initial {
            text-transform: uppercase;
        }

        .profile-pic:hover {
            transform: scale(1.1); /* Scale the picture on hover */
            transition: transform 0.3s ease; /* Add smooth transition */
        }

        /* Animation for menu items */
        .menu li a {
            transition: color 0.3s ease; /* Add transition for color change */
        }

        .menu li a:hover {
            color: #ffcc00; /* Change color on hover */
        }

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

        /* Adjustments for smaller devices like mobile phones */
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

            .navbar-brand {
                font-size: 20px;
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
        <li><a href="#"><i class="fas fa-chart-bar"></i> Dashboard</a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i> Analytics</a></li>
        <li><a href="{{route('editprofile',['id'=>$id->id])}}"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>

</div>

<div class="main-content">
    <h1 id="greeting-message"></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Product Information</h2>
                        @if(session('success'))
                            <div class="alert alert-success" id="successmessage">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form>
                            <input type="hidden" name="id" value="{{$id->id}}" readonly>
                            <input type="hidden" name="username" value="{{$id->name}}" readonly>
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Network Type</label>
                                <input type="email" class="form-control" id="companyName" value="{{$product->networktype}}" name="companyName" required readonly>
                            </div>
                            <div class="mb-3">
                                <label for="productName" class="form-label">Network Name</label>
                                <input type="email" class="form-control" id="productName" value="{{$product->network_name}}" name="productName" required readonly>
                            </div>
                            <div class="mb-3">
                                <label for="batchNumber" class="form-label">Password</label>
                                <input class="form-control" value="{{$product->password}}" name="batchNumber"required readonly>
                            </div>
                            <div class="mb-3">
                                <label for="batchNumber" class="form-label">Password Type</label>
                                <input class="form-control" value="{{$product->passwordtype}}" name="batchNumber"required readonly>
                            </div>
                            <a href="{{route('wifiqr',['id'=>$id->id])}}" class="btn btn-primary">Re-Generate</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">QR Code</h2>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
                        </div>
                        <div class="text-center mt-3">
                            <button onclick="downloadQRCode()" class="btn btn-primary">Download QR Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
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

    function downloadQRCode() {
        // Get the QR code data from the displayed image
        var qrCodeImage = document.querySelector('img');
        var qrCodeDataURL = qrCodeImage.src;

        // Create a temporary anchor element
        var downloadLink = document.createElement('a');
        downloadLink.href = qrCodeDataURL; // Set QR code data URL as href
        downloadLink.download = '{{$id->user_name}}.png'; // Set download file name

        // Append the anchor element to the body
        document.body.appendChild(downloadLink);

        // Simulate a click on the anchor element to trigger download
        downloadLink.click();

        // Remove the temporary anchor element
        document.body.removeChild(downloadLink);
    }



</script>
<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
</body>
</html>



