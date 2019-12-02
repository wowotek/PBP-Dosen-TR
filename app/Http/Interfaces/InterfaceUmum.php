<?php

namespace App\Http\Interfaces;

use App\Http\Controllers\Controller;
use App\Pengguna;

class InterfaceUmum extends Controller {
    public static function RegisterNewUser($username, $email, $raw_password) {
        $new_user = new Pengguna;
        $new_user->nama_pengguna = $username;
        $new_user->email = $email;
        $new_user->sandi = hash("sha512", $raw_password);

        $new_user->save();
        $new_user->refresh();

        return $new_user;
    }
}








