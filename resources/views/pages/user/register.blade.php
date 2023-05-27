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

        <div class="ms-3 mb-3" style="display: flex; justify-content: center; align-items: center">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-success">{{ Session::get('fail') }}</div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="exampleInputName1" required>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="exampleInputPassword1" required>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary"
                        style="width: 50%; letter-spacing: 0.1em; font-weight: 700;"> Register
                    </button>
                </center>
            </form>
        </div>
    </div>
@endsection
