@extends('layouts.user.app')

@section('content')
    <div class="container d-flex justify-content-around"
        style="flex-wrap: wrap; align-items: center; justify-content: center;">

        <div class="flex-shrink-0 img-fluid">
            <img class="img-fluid"
                src="https://i.pinimg.com/originals/47/94/73/479473ee35eff3744b072724e7a70e7a.png"
                alt="login-image"
            >
        </div>

        <div class="flex-grow-1 ms-3 mb-3" style="display: flex; justify-content: center; align-items: center">
            <div style="max-width: 100%">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" id="exampleInputPassword1">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary"
                            style="width: 50%; letter-spacing: 0.1em; font-weight: 700;"> Register
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection
