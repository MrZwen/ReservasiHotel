<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function admin()
    {
        return view('admin.layouts.pages.dashboard');
    }

    function register()
    {
        return view('auth.register');
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'no_hp' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login');
    }

    function settings()
    {
        return view('admin.layouts.pages.settings');
    }

    function profile()
    {
        return view('admin.layouts.pages.profile');
    }

    function kamar()
    {
        return view('admin.layouts.pages.kamar');
    }
}
