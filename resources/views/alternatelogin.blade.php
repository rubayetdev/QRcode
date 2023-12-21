<html>
<head>

</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .hero{
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
        position: absolute;
        background: linear-gradient(to right, #005477, #f0f0f0);
    }

    .form-box{
        width: 380px;
        height: 480px;
        position: relative;
        margin: 6% auto;
        background: #ffffff;
        padding: 5px;
        overflow: hidden;
    }
    .button-box{
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #005477;
        border-radius: 30px;
    }
    .toggle-btn{
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }
    #btn{
       top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: linear-gradient(to right, #005477, #f0f0f0) ;
        border-radius: 30px;
        transition: .5s;
    }
    .input-group{
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }
    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        background: transparent;
        outline: none;
    }
    .submit-btn{
        width: 85%;
        padding: 10px 3px;
        cursor: pointer;
        display: block;
        margin: auto;
        border: 0;
        outline: none;
        border-radius: 30px;
        background: linear-gradient(to right, #005477, #f0f0f0);

    }

    #login{
        left: 50px;
    }
    #register{
        left: 450px;
    }
</style>
<body>

<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        @if(session('error'))
            <div class="alert alert-danger" id="errorMessage">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{route('Logged')}}" method="post" class="input-group" id="login">
        @csrf
            <input type="email" name="Email" class="input-field" id="loginEmail" placeholder="Enter email">
            <input type="password" name="Password" class="input-field" id="loginPassword" placeholder="Password">
        <button type="submit" class="submit-btn">Login</button>
        </form>
        <form action="{{route('insert')}}" method="post" class="input-group" id="register">
            @csrf
            <input type="text" name="FullName" class="input-field" id="registerName" placeholder="Enter your full name">
            <input type="text" name="Address" class="input-field" id="registerName" placeholder="Enter your address">
            <input type="text" name="PhoneNumber" class="input-field" id="registerName" placeholder="Enter phone number">
            <input type="email" name="Email" class="input-field" id="registerEmail" placeholder="Enter email">
            <input type="password" name="Password" class="input-field" id="registerPassword" placeholder="Password">
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>
</div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>
</body>
</html>
