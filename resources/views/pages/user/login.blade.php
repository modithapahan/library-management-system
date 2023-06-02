@extends('layouts.user.app')

@section('content')
    <div class="container d-flex justify-content-around"
        style="flex-wrap: wrap; align-items: center; justify-content: center;"
    >
        <div class="flex-shrink-0 img-fluid">
            <img class="img-fluid"
                src="https://media.istockphoto.com/id/1281150061/vector/register-account-submit-access-login-password-username-internet-online-website-concept.jpg?s=612x612&w=0&k=20&c=9HWSuA9IaU4o-CK6fALBS5eaO1ubnsM08EOYwgbwGBo="
                alt="login-image">
        </div>

        <div class="flex-grow-1 ms-3 mb-3" style="display: flex; justify-content: center; align-items: center">
            <div style="max-width: 100%">
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary"
                            style="width: 50%; letter-spacing: 0.1em; font-weight: 700;"> Login
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection
