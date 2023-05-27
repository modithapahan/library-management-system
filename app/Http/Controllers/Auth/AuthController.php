<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view() {
        return view('pages.user.login');
    }

    public function register_view() {
        return view('pages.user.register');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $details = $request->only('email','password');

        if(Auth::attempt($details)) {
            return redirect('/');
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => "Invalid Credentials"
            ]);
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/user/login');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|max:8|max:12|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res) {
            return redirect('/user/login')->with('success', 'You have registerd successfully!');
        } else {
            return back()->with('fail', 'Something wrong!');
        }
    }
}
