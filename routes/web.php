<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\resto;

// Halaman daftar produk (view: user.blade.php)
Route::get('/admin', [resto::class, 'admin'])->name('adminResto');

// Halaman form tambah produk (view: create.blade.php)
Route::get('/admin/create', [resto::class, 'create'])->name('produk.create');

// Proses tambah produk
Route::post('/admin', [resto::class, 'store'])->name('produk.store');

// Halaman form edit produk (view: edit.blade.php)
Route::get('/admin/{produk}/edit', [resto::class, 'edit'])->name('produk.edit');

// Proses update produk
Route::put('/admin/{produk}', [resto::class, 'update'])->name('produk.update');

// Proses hapus produk
Route::delete('/admin/{produk}', [resto::class, 'destroy'])->name('produk.destroy');

Route::get('/pengunjung', [resto::class, 'index'])->name('beranda');

Route::get('/', function () {
    return view('pengunjung.index');
});
Route::get('/pengunjung/produk', function() {
    return view('pengunjung.produk');
});
Route::get('/pengunjung/index', function() {
    return view('pengunjung.index');
});
Route::get('/pengunjung/pemesanan', function() {
    return view('pengunjung.pemesanan');
});