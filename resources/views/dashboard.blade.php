<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        /* Reset default margin and padding */
        body, html {
            margin: 0;
            padding: 0;
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

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="{{route('editprofile',['id'=>$id->id])}}">Settings</a></li>
        <li><a href="{{route('home')}}">Logout</a></li>
    </ul>
</div>

<div class="main-content">
    <!-- Main content area -->
    <h1>Welcome to the Dashboard</h1>
    <p>This is the main content area</p>
</div>

<script>
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


</script>

</body>
</html>
