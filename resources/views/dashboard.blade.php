<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QHCMCY84FV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QHCMCY84FV');
    </script>
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
        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" onclick="toggleSubMenu(this)">
                <i class="fas fa-chart-bar"></i> Dashboard
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="sub-menu">
                <li><a href="{{route('productqr',['id'=>$id->id])}}">Product QR</a></li>
                <li><a href="{{route('emailqr',['id'=>$id->id])}}">Email QR</a></li>
                <li><a href="{{route('smsqr',['id'=>$id->id])}}">SMS QR</a></li>
                <li><a href="{{route('wifiqr',['id'=>$id->id])}}">WIFI QR</a></li>
                <li><a href="{{route('locationqr',['id'=>$id->id])}}">Location QR</a></li>
                <li><a href="{{route('urlqr',['id'=>$id->id])}}">URL QR</a></li>
                <li><a href="{{route('contactqr',['id'=>$id->id])}}">Contact QR</a></li>
            </ul>
        </li>
        <li><a href="{{route('history',['id'=>$id])}}"><i class="fas fa-history"></i> History</a></li>
        <li><a href="{{route('editprofile',['id'=>$id->id])}}"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>

<div class="main-content">
    <!-- Main content area -->
    <h1 id="greeting-message"></h1>
{{--    <p id="greeting-message"></p>--}}

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Each link will be in a card view -->
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fas fa-box-open me-2"></i> <!-- Font Awesome icon representing a product box -->
                    <a href="{{route('productqr',['id'=>$id->id])}}" class="text-decoration-none">Product QR</a>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-envelope me-2"></i>
                    <a href="{{route('emailqr',['id'=>$id->id])}}" class="text-decoration-none">Email QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-message me-2"></i>
                    <a href="{{route('smsqr',['id'=>$id->id])}}" class="text-decoration-none">SMS QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-wifi me-2"></i>
                    <a href="{{route('wifiqr',['id'=>$id->id])}}" class="text-decoration-none">WIFI QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-location-dot me-2"></i>
                    <a href="{{route('locationqr',['id'=>$id->id])}}" class="text-decoration-none">Location QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-link me-2"></i>
                    <a href="{{route('urlqr',['id'=>$id->id])}}" class="text-decoration-none">URL QR</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa-solid fa-user me-2"></i>
                    <a href="{{route('contactqr',['id'=>$id->id])}}" class="text-decoration-none">Contact QR</a>
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

    function toggleSubMenu(elem) {
        const parentListItem = elem.parentElement; // Get the parent <li> element
        parentListItem.classList.toggle('active'); // Toggle the 'active' class on the parent <li>
    }


</script>
<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
</body>
</html>
