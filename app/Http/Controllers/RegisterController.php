<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255', 'min:3', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // cara bcrypt menggunakana laravel:

        //cara1
        // $validatedData['password'] = bcrypt($validatedData['password']);

        //cara2
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //cara untuk menampilkan notifikasi berhasil
        // cara 1
        // $request->session()->flash('success', 'Registration Success!!');

        // return redirect('/login');

        // cara 2
        return redirect('/login')->with('success', 'Registration Success!!');
    }
}
