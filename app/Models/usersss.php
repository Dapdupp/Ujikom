<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class usersss extends Model
{
     use Notifiable;

protected $table = 'user';
protected $primaryKey = 'id_user';

public $timestamps = false;

protected $fillable = [
    'username',
    'password',
    'role'
];
}
