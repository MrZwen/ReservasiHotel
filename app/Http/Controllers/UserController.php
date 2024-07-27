<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    function dashboard(){
        $data = Kamar::all();
        return view('user.dashboard', ['data' => $data]);
    }

    function dashboardUser(){
        $user = Auth::user();
        $data = Transaksi::where('id_users', Auth::user()->id)->get();
        return view('user.pages.profile', ['data'=> $data, 'user' => $user]);
    }

    function dashboardBook(){
        $user = Auth::user();
        $data = Transaksi::where('id_users', Auth::user()->id)->get();
        return view('user.pages.history', ['data'=> $data, 'user' => $user]);
    }


}
