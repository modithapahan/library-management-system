<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_view() {
        return view('pages.user.login');
    }
    public function register_view() {
        return view('pages.user.register');
    }

    public function register(Request $request) {
        
    }
}
