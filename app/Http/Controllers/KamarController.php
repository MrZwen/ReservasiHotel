<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class KamarController extends Controller
{
    function kamar(){
        $data = Kamar::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.layouts.pages.kamar', ['data' => $data]);
    }
    function kamarpegawai(){
        $data = Kamar::orderBy('created_at', 'desc')->paginate(5);
        return view('pegawai.layouts.pages.kamar', ['data' => $data]);
    }

    function kamarUser(){
        $data = Kamar::all();
        return view('user.dashboard', ['data' => $data]);
    }

    public function add(Request $request)
{
    $data = $request->validate([
        'tipe_kamar' => 'required|string|max:255',
        'no_kamar' => 'required|integer|unique:kamar,no_kamar',
        'deskprisi' => 'required|string',  // Periksa penamaan yang benar
        'status' => 'required|string',
        'harga' => 'required|numeric',
    ]);

    Log::info('Data yang divalidasi:', $data);

    $kamar = new Kamar([
        'no_kamar' => $data['no_kamar'],
        'tipe_kamar' => $data['tipe_kamar'],
        'deskripsi' => $data['deskprisi'],  // Periksa penamaan yang benar
        'status' => $data['status'],
        'harga' => $data['harga'],
    ]);
    $saved = $kamar->save();

    if (!$saved) {
        return redirect()->back()->withError('message', 'Data kamar gagal ditambah!');
    } else {
        return redirect()->back()->with('message', 'Data kamar berhasil ditambah!');
    }

}

    // public function showEditModal($id)
    // {
    //     $item = Kamar::findOrFail($id);
    //     return view('admin.layouts.pages.modal.edit-kamar', compact('item'));
    // }

    public function editKamar(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'id' => 'required|exists:kamar,id',
            'tipe_kamar' => 'required|string',
            'no_kamar' => 'required|string',
            'deskripsi' => 'required|string',
            'status' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        // Temukan data kamar berdasarkan ID
        $kamar = Kamar::find($request->id);

        if ($kamar) {
            // Update data kamar
            $kamar->tipe_kamar = $request->tipe_kamar;
            $kamar->no_kamar = $request->no_kamar;
            $kamar->deskripsi = $request->deskripsi;
            $kamar->status = $request->has('status') ? $request->status : $kamar->status;
            $kamar->harga = $request->harga;

            // Simpan pembaruan dan periksa apakah pembaruan berhasil
            if ($kamar->save()) {
                return redirect()->back()->with('message', 'Data kamar berhasil diupdate.');
            } else {
                return redirect()->back()->withErrors('message', 'Gagal memperbarui data kamar.');
            }
        } else {
            // Kamar tidak ditemukan
            return redirect()->back()->withErrors('message', 'Data kamar tidak ditemukan.');
        }
    }
    public function delete($id)
    {
        $kamar = Kamar::find($id);

        if (!$kamar) {
            return redirect()->back()->withError('message','Data kamar tidak ditemukan');
        }

        $kamar->delete();

        return redirect()->back()->with('message','Data kamar berhasil dihapus!');
        // dd($id);
    }

}
