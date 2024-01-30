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

    public function showEditModalUser($id)
    {
        $item = User::findOrFail($id);
        $roles = User::distinct()->pluck('role')->toArray();
        return view('admin.layouts.pages.modal.edit-users', compact('item', 'roles'));
    }

    public function editUsers(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'role' => 'required', 
        ]);
        $user = User::findOrFail($request->id);

        $user->role = $request->role;

        $user->save();

        return redirect()->back()->with('success', 'Role user berhasil diedit.');
    }
}
