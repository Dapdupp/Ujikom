<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class resto extends Controller
{
    public function admin()
    {
        $admin = Produk::orderBy('nm_produk', 'asc')->paginate(5);
        return view('admin.adminResto', compact('admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|unique:produk,id_produk',
            'nm_produk' => 'required|unique:produk,nm_produk',
            'harga'=> 'required|unique:produk,harga',
            'url_gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
            'id_kategori' => 'required'
        ]);

        // Simpan gambar ke storage
        $path = $request->file('url_gambar')->store('produk', 'public');

        Produk::create([
            'id_produk'   => $request->id_produk,
            'nm_produk'   => $request->nm_produk,
            'harga'       => $request->harga,
            'url_gambar'  => $path,
            'status'      => $request->status,
            'id_kategori' => $request->id_kategori
        ]);

        return redirect()->route('adminResto')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = produk::findOrFail($id);
        $validated = $request->validate([
            'id_produk' => 'required|unique:produk,id_produk,' . $produk->id_produk . ',id_produk',
            'nm_produk' => 'required|unique:produk,nm_produk,' . $produk->id_produk . ',id_produk',
            'harga' => 'required|unique:produk.harga,' . $produk->id_produk . ',id_produk',
            'url_gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'id_kategori' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('url_gambar')) {
            $path = $request->file('url_gambar')->store('produk', 'public');
            $validated['url_gambar'] = $path;
        }

        $produk->update($validated);

        return redirect()->route('admin')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->url_gambar && Storage::disk('public')->exists($produk->url_gambar)) {
            Storage::disk('public')->delete($produk->url_gambar);
        }

        $produk->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus.');
    }
    public function produk()
    {
        $produk = Produk::where('status', 'Tersedia')->get();
        return view('pengunjung.produk', compact('produk'));
    }
}
