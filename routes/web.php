<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\resto;
use App\Http\Controllers\Pemesanan;
use App\Http\Controllers\Auth;
// Halaman login (view: login.blade.php)
Route::get('/admin/login', [Auth::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [Auth::class, 'login']);
Route::get('/admin/logout', [Auth::class, 'logout'])->name('logout');

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

Route::get('/pengunjung/pemesanan/{id}', [Pemesanan::class, 'form'])->name('pemesanan.form');


Route::post('/pengunjung/pemesanan/{id}', [Pemesanan::class, 'submit'])->name('pemesanan.submit');

Route::get('/admin', [resto::class, 'admin'])->name('adminResto');


Route::get('/', function () {
    return view('pengunjung.index');
});
Route::get('/pengunjung/produk', [resto::class, 'produk']);

Route::get('/pengunjung/index', function() {
    return view('pengunjung.index');
});

