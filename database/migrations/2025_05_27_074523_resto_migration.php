<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('user', function( Blueprint $table){
            $table->id('id_user');
            $table->string('username');
            $table->string('password');
            $table->enum('role',['admin']);
        });

        Schema::create('kategori', function( Blueprint $table){
            $table->id('id_kategori');
            $table->string('nm_kategori');
        });  

        Schema::create('produk', function (Blueprint $table){
            $table->id('id_produk');
            $table->string('nm_produk');
            $table->string('url_gambar');
            $table->enum('status', ['Tersedia','Tidak tersedia']);
            $table->integer('id_kategori');
         });
        
         Schema::create('pemesanan', function(Blueprint $table){
            $table->id();
            $table->string('nm_pemesanan');
            $table->string('nm_produk');
            $table->string('jumlah');
            $table->string('no_telepon');
         });
        
    }
    public function down(): void
    {
       Schema::dropIfExists('user');
       Schema::dropIfExists('kategori');
       Schema::dropIfExists('produk');
       Schema::dropIfExists('pemesanan');
    }
};
