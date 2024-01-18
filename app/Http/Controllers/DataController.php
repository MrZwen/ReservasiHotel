<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function users(){
        $data = User::orderBy('id', 'desc')->paginate(5);
        return view('admin.layouts.pages.users', ['data' => $data]);
    }
}
