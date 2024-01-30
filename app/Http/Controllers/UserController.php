<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function admin(){
        return view('admin.layouts.pages.dashboard');
    }

    function pegawai(){
        return view('pegawai.layouts.pages.dashboard');
    }

    function settings(){
        return view('admin.layouts.pages.settings');
    }

    function profile(){
        return view('admin.layouts.pages.profile');
    }
}
