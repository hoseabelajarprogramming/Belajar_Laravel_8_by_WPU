<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        // perlakuan regenerate pada session untuk menghindari session fixation (bagaimana seseorang masuk ke dalam session dengan session yang sama sebelumnya)
        //intended adalah sebuah method dari laravel yang akan membawa usernya ke sebuah tempat sebelum memasuki otentikasi middleware
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }


        return back()->with('loginError', 'Login failed!');
    }
}
