<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class kategori extends Model
{
 use Notifiable;

protected $table = 'kategori';
protected $primaryKey = 'id_kategori';

public $timestamps = false;

protected $fillable = [
    'nm_kategori'
];

}
