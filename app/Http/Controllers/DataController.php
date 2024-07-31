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
    function kamarAll(Request $request){
    $kamarId = $request->query('id');

    $data = Kamar::find($kamarId);

    if (!$data) {
        abort(404); 
    }
    return view('user.layouts.formtransaksi', ['data' => $data]);
    }
    public function simpantransaksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date',
            'nominal' => 'required|numeric',
        ]);

        // Periksa apakah pengguna sudah memiliki transaksi yang belum selesai
        $existingTransaction = Transaksi::where('id_users', Auth::user()->id)
                                        ->whereIn('status', ['Belum Terverifikasi', 'Terverifikasi'])
                                        ->first();

        if ($existingTransaction) {
            return redirect()->back()->with('error', 'Anda sudah memiliki booking yang belum selesai. Silakan tunggu hingga booking Anda selesai sebelum melakukan booking lagi.');
        }

        // Periksa status kamar
        $kamar = Kamar::where('id', $request->id)->first();
        
        if ($kamar->status === 'unavailable') {
            return redirect()->back()->with('error', 'Kamar ini tidak tersedia untuk booking.');
        }

        // Menangani upload file
        $file = $request->file('bukti_pembayaran');
        $filename = time() . '_' . $file->getClientOriginalName();
        $buktiPembayaranPath = $file->storeAs('assets/images', $filename, 'public');

        if (!$buktiPembayaranPath) {
            return back()->with('error', 'File upload failed');
        }

        // Buat data transaksi
        $data = [
            'id_users' => Auth::user()->id,
            'id_kamar' => $request->id,
            'status' => 'Belum Terverifikasi',
            'bukti_pembayaran' => $buktiPembayaranPath,
            'tgl_pembayaran' => now()->toDateString(), // Menggunakan tanggal saat ini
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'nominal' => $request->nominal, // Pastikan menggunakan nilai nominal dari form
        ];

        // Simpan data transaksi
        Transaksi::create($data);

        // Ubah status kamar menjadi 'unavailable'
        $kamar->status = 'unavailable';
        $kamar->save();

        return redirect('/dashboard-user')->with('message', 'Berhasil melakukan booking kamar');
    }

    public function verifikasi(Request $request)
    {
        $transaksi = Transaksi::where('id_transaksi', $request->id_transaksi)->first();

        if ($transaksi) {
            $transaksi->update(['status' => 'Terverifikasi']);
            
            $kamar = Kamar::find($transaksi->id_kamar);
            if ($kamar) {
                $kamar->update(['status' => 'unavailable']);
            }
        }

        return redirect()->back();
    }

    function verifikasipegawai(Request $request)
    {
        $transaksi = Transaksi::where('id_transaksi', $request->id_transaksi)->first();

        if ($transaksi) {
            $transaksi->update(['status' => 'Terverifikasi']);
            
            $kamar = Kamar::find($transaksi->id_kamar);
            if ($kamar) {
                $kamar->update(['status' => 'unavailable']);
            }
        }

        return redirect()->back();
    }

    function selesaiTransaksi(Request $request)
    {
        $transaksi = Transaksi::where('id_transaksi', $request->id_transaksi)->first();

        if ($transaksi) {
            $transaksi->update(['status' => 'Selesai']);

            $kamar = Kamar::find($transaksi->id_kamar);
            if ($kamar) {
                $kamar->update(['status' => 'available']);
            }
        }

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
