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

<body style="background-color: rgb(251, 251, 238)">
    {{-- Header Section --}}
    <nav class="navbar navbar-expand-lg shadow" style="background-color: rgb(71, 113, 219)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="logo" style="width: 40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-pills me-3 ms-2 mb-2 mb-lg-0">
                <li class="nav-item me-3 fw-normal">
                    <a class="nav-link" aria-current="page" href="#"
                        style="color: white; font-weight: 500">
                        Home
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#" 
                        style="color: white; font-weight: 500">
                        Books
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#" 
                        style="color: white; font-weight: 500">
                        journals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="#" 
                        style="color: white; font-weight: 500">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" href="#"
                        style="color: rgb(0, 0, 0); font-weight: 500; background-color: white;">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
