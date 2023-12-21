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
                <a class="nav-link active" aria-current="page" href="#">
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
        <li><a href="{{route('dashboard',['id'=>$id->id])}}">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="{{route('home')}}">Logout</a></li>
    </ul>
</div>

<div class="container mt-5 main-content">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Your Profile</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if(session('success'))
                            <div class="alert alert-success" id="errorMessage">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
                        </div>

                        <div class="col-md-8">
                            <form id="editForm" action="{{ route('update') }}" method="post">
                                @csrf
                                <h4>Edit Profile</h4>
                                <input type="hidden" name="id" value="{{ $id->id }}">
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" name="FullName" class="form-control" id="editName" value="{{ $id->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email</label>
                                    <input type="email" name="Email" class="form-control" id="editEmail" value="{{ $id->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editPhone" class="form-label">Phone</label>
                                    <input type="text" name="Phone" class="form-control" id="editPhone" value="{{ $id->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editLocation" class="form-label">Location</label>
                                    <input type="text" name="Location" class="form-control" id="editLocation" value="{{ $id->address }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editAbout" class="form-label">About</label>
                                    <textarea name="About" class="form-control" id="editAbout" rows="3">{{ $id->about }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{route('profile',['id'=>$id->id])}}" type="button"  class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
