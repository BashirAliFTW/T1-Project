<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .nav {
            padding: 0;
            margin: 0;
            background-color:rgb(77, 77, 77);
        }

        li a {
            display: block;
            color: black;
            padding: 14px 16px;
        }

        li a:hover {
            background-color: rgb(0, 0, 0);
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <!--Navigation Bar-->
    <div class="nav">
        <li class="signin"><a href="signin.html">Sign Out</a>
        </li>
        <li class="addarticle"><a href="{{ route('article') }}">Add an article</a>
        </li>
        <li class="about"><a href="aboutus.html">About us</a>
        </li>
    </div>
    <!--Main Title-->
    <div class="container.fluid p-3 my-3 bg-dark text-white">
        <h1 class="display-2" align="center">Techno Times Main Page</h1><br>
        <h1 class="display-4" align="center">By Team R1</h1>
    </div>
    <div class="row">
        <div class="col">
            <article id="0">
                <h1 class="display-5" align="center">Article 1</h1>
                <p align="center">Article 1 text</p>
            </article>
        </div>
        <div class="col">
            <article id="1">
                <h1 class="display-5" align="center">Article 2</h1>
                <p align="center">Article 2 text</p>
            </article>
        </div>

    </div>
</body>

</html>
