<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KamarController extends Controller
{
    function kamar(){
        $data = Kamar::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.layouts.pages.kamar', ['data' => $data]);
    }

    function add(Request $request){
        $data = $request->validate([
            'tipe_kamar' => 'required',
            'no_kamar' => 'required',
            'harga' => 'required',
        ]);

        $kamar = new Kamar([
            'tipe_kamar' => $data['tipe_kamar'],
            'no_kamar' => $data['no_kamar'],
            'harga' => $data['harga'],
        ]);

        $kamar->save();

        return redirect()->back()->with('message', 'Data kamar berhasil ditambah!');
    }

    public function showEditModal($id)
    {
        $item = Kamar::findOrFail($id);
        return view('admin.layouts.pages.modal.edit-kamar', compact('item'));
    }

    public function editKamar(Request $request)
    {
        $this->validate($request, [
            'id_kamar' => 'required|exists:kamar,id',
            'tipe_kamar' => 'required|string',
            'no_kamar' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $kamar = Kamar::findOrFail($request->id_kamar);
        $kamar->update([
            'tipe_kamar' => $request->tipe_kamar,
            'no_kamar' => $request->no_kamar,
            'harga' => $request->harga,
            // Add other fields as needed
        ]);

        return redirect()->back()->with('message', 'Data kamar berhasil diupdate.');
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
