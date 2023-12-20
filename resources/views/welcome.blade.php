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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Login Form -->
            <form action="{{route('Logged')}}" method="post">
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
            </form>
        </div>
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{route('insert')}}" method="post">
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
            </form>
        </div>
    </div>
</div>

</body>
</html>
