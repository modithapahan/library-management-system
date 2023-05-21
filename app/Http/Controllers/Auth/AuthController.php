<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function login_view() {
        return view('pages.user.login');
    }

    public function register_view() {
        return view('pages.user.register');
    }

    public function login(Request $request) {
        $check_email = $request->input('email');
        $user = DB::table('users')->where('email', $check_email)->first();

        if($user) {
            if(password_verify($request->input('password'), $user->password)) {
                return redirect()->intended('/');
            } else {
                return redirect()->back()->with('error', 'Invalid Login');
            }
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }
    }

    public function register(Request $request) {
        return dd($request->all());
    }
}
