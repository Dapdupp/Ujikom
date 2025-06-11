<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class produk extends Model
{
     use Notifiable;

protected $table = 'produk';
protected $primaryKey = 'id_produk';

public $timestamps = false;

protected $fillable = [
    'nm_produk',
    'url_gambar',
    'status',
    'id_kategori'
];
}
