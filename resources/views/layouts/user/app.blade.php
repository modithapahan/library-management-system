<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samudra Library</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body style="box-sizing: border-box">
    {{-- Header Section --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container"> 
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.png') }}" 
                        alt="logo" 
                        style="width: 40px"
                    >
                </a>
                <button class="navbar-toggler float-end" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false" aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills me-3 ms-2 mb-2 mb-lg-0">
                    <li class="nav-item me-3 fw-normal">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            aria-current="page" href="#">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            href="#">
                            Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            href="#">
                            Journals
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            href="#">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            href="#">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                            style="color: rgb(0, 0, 0); font-weight: 500" 
                            href="{{ route('user.login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2"
                            style="color: rgb(255, 255, 255); font-weight: 500; background-color: rgb(21, 123, 232);"
                            href="{{ route('user.register') }}">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
