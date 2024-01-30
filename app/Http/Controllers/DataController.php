<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function users(){
        $data = User::orderBy('id', 'desc')->paginate(5);
        $roles = User::distinct()->pluck('role')->toArray();
        return view('admin.layouts.pages.users', ['data' => $data, 'roles' => $roles]);
    }

    function transaksiadmin(){
        $data = Transaksi::orderBy('id', 'desc')->paginate(5);
        return view('admin.layouts.pages.transaksi', ['data' => $data]);
    }

    function transaksipegawai(){
        $data = Transaksi::orderBy('id', 'desc')->paginate(5);
        return view('pegawai.layouts.pages.transaksi', ['data' => $data]);
    }

    function pegawaiuser(){
        $data = User::orderBy('id', 'desc')->paginate(5);
        return view('pegawai.layouts.pages.users', ['data' => $data]);
    }

    // public function showEditModalUser($id)
    // {
    //     $item = User::findOrFail($id);
    //     $roles = User::distinct()->pluck('role')->toArray();
    //     return view('admin.layouts.pages.modal.edit-users')->with('item', $item)->with('roles', $roles);
    // }

    public function editUsers(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'role' => 'required', 
        ]);
        $user = User::findOrFail($request->id);

        $user->role = $request->role;

        $user->save();

        return redirect()->back()->with('message', 'Role user berhasil diedit.');
    }

    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->withError('message','Data users tidak ditemukan');
        }

        $user->delete();

        return redirect()->back()->with('message','Data users berhasil dihapus!');
        // dd($id);
    }
}
