<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class Pemesanan extends Controller
{
    public function form($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pengunjung.pemesanan', compact('produk'));
    }
    public function submit(Request $request, $id)
{
    // contoh validasi
    $request->validate([
        'nama' => 'required',
        'jumlah' => 'required|integer',
        // tambahkan sesuai kebutuhan
    ]);

    // Lakukan proses simpan pesanan atau logika lain
    return redirect()->route('beranda')->with('success', 'Pesanan berhasil dikirim!');
}

}
