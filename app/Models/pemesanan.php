<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class pemesanan extends Model
{
use Notifiable;

protected $table = 'pemesanan';
protected $primaryKey = 'id';

public $timestamps = false;

protected $fillable = [
    'nm_pemesanan',
    'nm_produk',
    'jumlah',
    'no_telepon'
];
}
