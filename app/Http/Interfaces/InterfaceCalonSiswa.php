<?php

namespace App\Http\Interfaces;

use App\CalonSiswa;
use App\Http\Controllers\Controller;
use App\Pengguna;

class InterfaceCalonSiswa extends Controller {
    public static function GetCalonSiswa($username){
        $user = Pengguna::where("nama_pengguna", $username)->first();
        $calon_siswa = CalonSiswa::where("pengguna_id", $user->id);

        return [$user, $calon_siswa];
    }

    public static function RegistrasiCalonSiswa($username, $email, $raw_password) {
        $user = InterfaceUmum::RegisterNewUser($username, $email, $raw_password);

        $cs = new CalonSiswa;
        $cs->pengguna_id = $user->id;
        $cs->no_pendaftaran = "110" . str_pad($user->id, 4, "0", STR_PAD_LEFT);
        $cs->nama_pendaftar = "";

        $cs->save();
        $cs->refresh();

        $cs->no_pendaftaran = $cs->no_pendaftaran . str_pad($cs->id, 4, '0', STR_PAD_LEFT);

        $cs->save();
        $cs->refresh();

        return [$user, $cs];
    }

    public static function UpdateBioCalonSiswa($id_cs, $bio = ""){
        $cs = CalonSiswa::where("id", $id_cs)->first();

        $cs->nama_pendaftar = $bio;

        $cs->save();
        $cs->refresh();

        return $cs;
    }
}