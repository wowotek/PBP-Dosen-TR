<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Pengguna;
use App\Raport;
use App\Siswa;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show() {
        $reg = Administrasi::RegistrasiCalonSiswa(
            "wowotek",
            "erlanggaibr2@gmail.com",
            "Tekoajaib123"
        );

        return view('welcome', [
            'user' => $reg[0],
            'calon_siswa' => $reg[1]
        ]);
    }
}

class Administrasi extends Controller {
    private static function _RegisterNewUser($username, $email, $raw_password) {
        $new_user = new Pengguna;
        $new_user->nama_pengguna = $username;
        $new_user->email = $email;
        $new_user->sandi = hash("sha512", $raw_password);

        $new_user->save();
        $new_user->refresh();

        return $new_user;
    }

    public static function RegistrasiCalonSiswa($username, $email, $raw_password) {
        $user = Administrasi::_RegisterNewUser($username, $email, $raw_password);

        $cs = new CalonSiswa;
        $cs->pengguna_id = $user->id;
        $cs->no_pendaftaran = "110" . str_pad($user->id, 6, "0", STR_PAD_LEFT);

        $cs->save();
        $cs->refresh();

        $cs->no_pendaftaran = $cs->no_pendaftaran . str_pad($cs->id, 6, '0', STR_PAD_LEFT);

        $cs->save();
        $cs->refresh();

        return [$user, $cs];
    }

    public static function TerimaCalonSiswa($no_pendaftaran) {
        $cs = CalonSiswa::where('no_pendaftaran', $no_pendaftaran)->first(); // Ambil data CalonSiswa
        $user = Pengguna::where('id', $cs->pengguna_id)->first(); // Ambil User berdasarkan CalonSiswa

        $raport_siswa = new Raport; // Buat Raport Siswa
        $raport_siswa->save();
        $raport_siswa->refresh();

        $siswa = new Siswa; // Buat Raport Siswa
        $siswa->pengguna_id = $user->id;
        $siswa->raport_id = $raport_siswa->id;

        $raport_siswa->delete();

        return [$user, $siswa];
    }
}