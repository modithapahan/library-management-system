<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
                return view('pages.user.register');
            } else {
                return redirect()->back()->with('error', 'Invalid Login');
            }
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }
    }

    public function register(Request $request) {
        $request->validate([
             'email' => 'required|unique:users|email',
             'password' => 'required|confirmed'
        ]);

        User::create([
            'email' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }

        return redirect()->back()->withErrors('Error');
    }
}
