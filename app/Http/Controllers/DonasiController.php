<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        return view('donate.donasi');
    }

    public function store(Request $request)
{
    // $request->validate([
    //     'nama' => 'required',
    //     'alamat' => 'required',
    //     'nomor_hp' => 'required',
    //     'berat' => 'required',
    //     'pilihan_pengiriman' => 'required'
    // ]);

    $donasi = new Donasi();
    $donasi->nama = $request->nama;
    $donasi->alamat = $request->alamat;
    $donasi->nomor_hp = $request->nomor_hp;
    $donasi->berat = $request->berat;
    $donasi->pilihan_pengiriman = $request->pilihan_pengiriman;
    $donasi->save();

    return response()->json(['message' => 'Data donasi berhasil ditambahkan!']);
}

}
