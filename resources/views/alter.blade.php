<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="{{asset('JS/script.js')}}" defer></script>

    <title>Document</title>
    <style>
        body {
            font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        /* Additional CSS styles */
        .form-input {
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
            color: #111827;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .submit-btn {
            background-color: #000;
            color: #fff;
            padding: 0.75rem;
            border-radius: 0.375rem;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
<nav class="nav">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="{{route('home')}}" class="logo">ScanHub</a>

    <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Signin Here</a></li>
    </ul>
</nav>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div
        class="relative flex flex-col m-8 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
    >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
            <form action="{{route('insert')}}" method="post">
                @csrf

                <div class="py-4">
                    <span class="mb-2 text-md">Name</span>
                    <input
                        type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="FullName"
                        id="email"
                    />
                </div>

                <div class="py-4">
                    <span class="mb-2 text-md">Phone</span>
                    <input
                        type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="PhoneNumber"
                        id="email"
                    />
                </div>
            <div class="py-4">
                    <span class="mb-2 text-md">Email</span>
                    <input
                        type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="Email"
                        id="email"
                    />
            </div>
            <div class="py-4">
                <span class="mb-2 text-md">Password</span>
                <input
                    type="password"
                    name="Password"
                    id="pass"
                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                />
            </div>

            <button type="submit"
                    class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300"
            >
                Register
            </button>
            </form>
{{--            <button--}}
{{--                class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white"--}}
{{--            >--}}
{{--                <img src="google.svg" alt="img" class="w-6 h-6 inline mr-2" />--}}
{{--                Sign in with Google--}}
{{--            </button>--}}
            <div class="text-center text-gray-400">
                Already have an account?
                <a href="{{route('alter2')}}"><span class="font-bold text-black">Sign in here</span></a>
            </div>
        </div>
        <!-- {/* right side */} -->
        <div class="relative">
            <img
                src="{{asset('/Photo/407388772_1571564950313630_1448468611101014233_n.png')}}"
                alt="img"
                class="w-[500px] h-full hidden rounded-r-2xl md:block object-cover"
            />
            <!-- text on image  -->
            <div
                class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block"
            >

            </div>
        </div>
    </div>
</div>
</body>
</html>
