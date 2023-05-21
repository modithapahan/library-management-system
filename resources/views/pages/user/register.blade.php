<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>
<body>
    <div class="container d-flex justify-content-around" 
        style="flex-wrap: wrap; align-items: center; justify-content: center;"
    >
        <div class="flex-shrink-0">
            <img style="width: 450px;" 
                src="https://i.pinimg.com/originals/47/94/73/479473ee35eff3744b072724e7a70e7a.png"
                class="img-fluid" 
                alt="login-image"
            >
            {{-- login image --}}
            {{-- https://media.istockphoto.com/id/1281150061/vector/register-account-submit-access-login-password-username-internet-online-website-concept.jpg?s=612x612&w=0&k=20&c=9HWSuA9IaU4o-CK6fALBS5eaO1ubnsM08EOYwgbwGBo= --}}
        </div>
        
        <div class="flex-grow-1 ms-3 mb-3" 
            style="display: flex; justify-content: center; align-items: center"
        >
            <div style="max-width: 100%">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="confirm-password" id="exampleInputPassword1">
                    </div>
                    <center>
                        <button type="submit" 
                            class="btn btn-primary" 
                            style="width: 50%; letter-spacing: 0.1em; font-weight: 700;"
                        > Register
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>