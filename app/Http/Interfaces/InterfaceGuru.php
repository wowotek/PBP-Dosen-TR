<?php

namespace App\Http\Interfaces;

use App\Http\Controllers\Controller;
use App\BiodataGuru;
use App\Guru;
use App\NilaiAkhir;
use App\Pelajaran;
use App\Pengguna;
use App\Raport;
use App\Siswa;
use App\Kelas;

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

    public static function KelasAjar($id_guru){
        $data_pelajaran = Pelajaran::where("guru_id", $id_guru)->all();
        $data_kelas_id = [];

        foreach($data_pelajaran as $i){
            if(in_array($i->kelas_id, $data_kelas_id)){
                array_push($data_kelas_id, $i->kelas_id);
            }
        }

        $data_kelas = [];
        foreach($data_kelas_id as $i){
            array_push($data_kelas, Kelas::where("id", $i)->first());
        }

        return $data_kelas;
    }

    public static function SiswaAjar($id_kelas){
        return Siswa::where("kelas_id", $id_kelas)->all();
    }

    public static function GetNilaiAkhirSiswa($id_kelas, $id_siswa){
        $raport = Raport::where("siswa_id", $id_siswa)->first();
        $pelajaran = Pelajaran::where("kelas_id", $id_kelas);

        $nilai_akhir = NULL;

        try {
            $nilai_akhir = NilaiAkhir::where("id", $raport->id)->first();
        } catch (\Exception $e){
            echo "Nilai Akhir Belum Ada !";
        }

        if($nilai_akhir === NULL) {
            $nilai_akhir = new NilaiAkhir;
            $nilai_akhir->raport_id = $raport->id;
            $nilai_akhir->pelajaran_id = $pelajaran->id;
            $nilai_akhir->pembilangan = 0.0;
            $nilai_akhir->tersedia = False;
            $nilai_akhir->catatan = "";

            $nilai_akhir->save();
            $nilai_akhir->refresh();
        } else {
            return $nilai_akhir;
        }
    }
}