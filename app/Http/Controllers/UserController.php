<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function admin(){
        return view('admin.layouts.pages.dashboard');
    }

    function settings(){
        return view('admin.layouts.pages.settings');
    }

    function profile(){
        return view('admin.layouts.pages.profile');
    }

    function kamar(){
        return view('admin.layouts.pages.kamar');
    }
}
