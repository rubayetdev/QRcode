<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    /* Hide inactive forms */
    .form-inactive {
        display: none;
    }

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            @if(session('error'))
                <div class="alert alert-danger" id="errorMessage">
                    {{ session('error') }}
                </div>
            @endif

                <form action="{{route('Logged')}}" method="post" class="active-form" id="loginForm">
                @csrf
                <h2>Login</h2>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="loginEmail" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" name="Password" class="form-control" id="loginPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-secondary" onclick="toggleForm('register')">Switch to Register</button>
            </form>
        </div>
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

                <form action="{{route('insert')}}" method="post" class="form-inactive" id="registerForm">
                @csrf
                <h2>Register</h2>
                <div class="mb-3">
                    <input type="text" name="FullName" class="form-control" id="registerName" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <input type="text" name="Address" class="form-control" id="registerName" placeholder="Enter your address">
                </div>
                <div class="mb-3">
                    <input type="text" name="PhoneNumber" class="form-control" id="registerName" placeholder="Enter phone number">
                </div>
                <div class="mb-3">
                    <input type="email" name="Email" class="form-control" id="registerEmail" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <input type="password" name="Password" class="form-control" id="registerPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                    <button type="button" class="btn btn-secondary" onclick="toggleForm('login')">Switch to Login</button>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    setTimeout(function() {
        document.getElementById('errorMessage').style.display = 'none';
    }, 10000);

    function toggleForm(formType) {
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        if (formType === 'register') {
            loginForm.classList.add('form-inactive');
            registerForm.classList.remove('form-inactive');
        } else {
            loginForm.classList.remove('form-inactive');
            registerForm.classList.add('form-inactive');
        }
    }
</script>
</html>
