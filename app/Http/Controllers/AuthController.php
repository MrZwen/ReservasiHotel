<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Check user role
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->intended('/admin');
            } elseif ($user->role == 'pegawai') {
                return redirect()->intended('/admin');
            } elseif ($user->role == 'costumer') {
                return redirect()->route('landing');
            }
        }

        // Authentication failed
        // You can flash a message here if needed
        return redirect('login')->withErrors('Username Atau Password Yang Dimasukkan Tidak Sesuai!');
    }
}
