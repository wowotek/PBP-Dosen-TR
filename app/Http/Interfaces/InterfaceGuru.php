<?php

namespace App\Http\Interfaces;

use App\Http\Controllers\Controller;
use App\BiodataGuru;
use App\Guru;
use App\Pengguna;

class InterfaceGuru extends Controller {
    public static function GetGuru($username_guru){
        $user = Pengguna::where("nama_pengguna", $username_guru)->first();
        $guru = Guru::where("pengguna_id", $user->id);

        return $guru;
    }

    public static function AdministrasiGuru(
        $username_guru,
        $nama_lengkap,
        $tanggal_lahir,
        $tempat_lahir,
        $alamat,
        $no_telp,
        $no_ktp,
        $no_sertifikat_pendidik
    ){
        $guru = InterfaceGuru::GetGuru($username_guru);

        $bio_guru = new BiodataGuru;
        $bio_guru->username_guru = $username_guru;
        $bio_guru->nama_lengkap = $nama_lengkap;
        $bio_guru->tanggal_lahir = $tanggal_lahir;
        $bio_guru->tempat_lahir = $tempat_lahir;
        $bio_guru->alamat = $alamat;
        $bio_guru->no_telp = $no_telp;
        $bio_guru->no_ktp = $no_ktp;
        $bio_guru->no_sertifikat_pendidik = $no_sertifikat_pendidik;

        $bio_guru->save();
        $bio_guru->refresh();

        $guru->biodata_guru_id = $bio_guru->id;

        $guru->save();
        $guru->refresh();

        return [$guru, $bio_guru];
    }
}