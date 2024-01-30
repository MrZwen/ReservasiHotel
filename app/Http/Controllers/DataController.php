<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    function users(){
        $data = User::orderBy('id', 'desc')->paginate(5);
        $roles = User::distinct()->pluck('role')->toArray();
        return view('admin.layouts.pages.users', ['data' => $data, 'roles' => $roles]);
    }

    function transaksiadmin(){
        $data = Transaksi::orderBy('id_transaksi', 'asc')->paginate(5);
        return view('admin.layouts.pages.transaksi', ['data' => $data]);
    }

    function transaksipegawai(){
        $data = Transaksi::orderBy('id_transaksi', 'desc')->paginate(5);
        return view('pegawai.layouts.pages.transaksi', ['data' => $data]);
    }

    function pegawaiuser(){
        $data = User::orderBy('id', 'desc')->paginate(5);
        return view('pegawai.layouts.pages.users', ['data' => $data]);
    }
    function transaksicostumer(){
        return view('layouts.formtransaksi', [
            'data' => Kamar::all()
        ]);
    }
    function simpantransaksi(Request $request){
        $kamar = Kamar::where('id', $request->id)->first();
        $data = [
            'id_users' => Auth::user()->id,
            'id_kamar' => $request->id,
            'status' => 'Belum Terverifikasi',
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'nominal' => $kamar->harga,
        ];
        Transaksi::create($data);
        return redirect('/')->with('message','');
    }

    function verifikasi(Request $request){
        Transaksi::where('id_transaksi', $request->id_transaksi)->update(['status' => 'Terverifikasi']);
        return redirect()->back();
    }

    function verifikasipegawai(Request $request){
        Transaksi::where('id_transaksi', $request->id_transaksi)->update(['status' => 'Terverifikasi']);
        return redirect()->back();
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
    }
}
