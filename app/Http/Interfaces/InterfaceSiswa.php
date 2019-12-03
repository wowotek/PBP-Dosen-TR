<?php

namespace App\Http\Interfaces;

use App\BiodataSiswa;
use App\Http\Controllers\Controller;
use App\Pengguna;
use App\Siswa;

class InterfaceSiswa extends Controller {
    public static function GetSiswa($username_siswa){
        $user = Pengguna::where("nama_pengguna", $username_siswa)->first();
        $siswa = Siswa::where("pengguna_id", $user->id)->first();

        return [$user, $siswa];
    }

    public static function AdministrasiSiswa($username_siswa, $nama_lengkap, $tanggal_lahir, $tempat_lahir, $alamat, $no_telp){
        $siswa = InterfaceSiswa::GetSiswa($username_siswa)[1];

        $bio_siswa = new BiodataSiswa;
        $bio_siswa->nama_lengkap = $nama_lengkap;
        $bio_siswa->tanggal_lahir = $tanggal_lahir;
        $bio_siswa->tempat_lahir = $tempat_lahir;
        $bio_siswa->alamat = $alamat;
        $bio_siswa->no_telp = $no_telp;

        $bio_siswa->save();
        $bio_siswa->refresh();

        $siswa->biodata_siswa_id = $bio_siswa->id;

        $siswa->save();
        $siswa->refresh();

        return $bio_siswa;
    }

    public static function LihatRaport($username_siswa){
        $siswa = InterfaceSiswa::GetSiswa($username_siswa)[1];

        // TODO: Implement raport siswa
    }
}