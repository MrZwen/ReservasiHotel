<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
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
        $data = Kamar::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.layouts.pages.kamar', ['data' => $data]);
    }
}
