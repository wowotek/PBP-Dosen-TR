<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "pengguna";
    protected $fillable = [
        'nama_pengguna', 'email', 'sandi',
    ];
    protected $hidden = [
        'sandi', 'remember_token',
    ];

    public $timestamps = false;
}
