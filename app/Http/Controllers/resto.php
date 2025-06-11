<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class resto extends Controller
{
    public function admin()
    {
        $admin = produk::orderBy('nm_produk', 'asc')->paginate(5);
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
            'url_gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',
            'id_kategori' => 'required'
        ]);

        // Simpan gambar ke storage
        $path = $request->file('url_gambar')->store('produk', 'public');

        produk::create([
            'id_produk'   => $request->id_produk,
            'nm_produk'   => $request->nm_produk,
            'url_gambar'  => $path,
            'status'      => $request->status,
            'id_kategori' => $request->id_kategori
        ]);

        return redirect()->route('adminResto')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(produk $produk)
    {
        return view('admin.edit', compact('produk'));
    }

    public function update(Request $request, produk $produk)
    {
        $request->validate([
            'id_produk' => 'required|unique:produk,id_produk,' . $produk->id_produk . ',id_produk',
            'nm_produk' => 'required|unique:produk,nm_produk,' . $produk->id_produk . ',id_produk',
            'id_kategori' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = [
            'id_produk'   => $request->id_produk,
            'nm_produk'   => $request->nm_produk,
            'status'      => $request->status,
            'id_kategori' => $request->id_kategori
        ];

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
            $data['gambar'] = $path;
        }

        $produk->update($data);

        return redirect()->route('admin')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(produk $produk)
    {
        if ($produk->gambar && Storage::disk('public')->exists($produk->gambar)) {
            Storage::disk('public')->delete($produk->gambar);
        }

        $produk->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus.');
    }
    public function produk()
    {
        $produk = produk::where('status', 'Tersedia')->get();
        return view('index', compact('produk'));
    }
}
