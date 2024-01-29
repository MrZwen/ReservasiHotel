<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255',
            'no_hp' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login');
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    function authenticating(Request $request) {
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
                return redirect()->intended('/pegawai');
            } elseif($user->role == 'costumer'){
                return redirect()->intended('/');
            }
        }
    
        // Authentication failed
        // You can flash a message here if needed
        return redirect('login')->withErrors('Username Atau Password Yang Dimasukkan Tidak Sesuai!');
    }
}
