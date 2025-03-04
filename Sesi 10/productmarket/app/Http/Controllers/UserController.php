<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Login
    function login(Request $request) {
        // Validasi input user
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt buat login
        if (Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return back();
    }

    // Register
    function register(Request $request) {
        // Validasi input user
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        // Store ke database
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        // redirect ke login page
        return redirect()->route('login');
    }

    // Logout
    function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
