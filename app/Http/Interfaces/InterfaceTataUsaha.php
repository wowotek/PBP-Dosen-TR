<?php

namespace App\Http\Interfaces;

use App\CalonSiswa;
use App\Guru;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\Pelajaran;
use App\Pengguna;
use App\Semester;
use App\Siswa;
use App\TahunAjaran;

class InterfaceTataUsaha extends Controller {
    public static function TerimaCalonSiswa($no_pendaftaran) {
        $cs = CalonSiswa::where('no_pendaftaran', $no_pendaftaran)->first(); // Ambil data CalonSiswa
        $user = Pengguna::where('id', $cs->pengguna_id)->first(); // Ambil User berdasarkan CalonSiswa

        $siswa = new Siswa; // Buat Raport Siswa
        $siswa->pengguna_id = $user->id;

        try {
            $cs->delete();
        } catch (\Exception $e) {
            echo "Delete Calon Siswa GAGAL !";
            echo "Target : ". $cs->id . " | " . $cs->no_pendaftaran;
        }

        $siswa->save();
        $siswa->refresh();

        return [$user, $siswa];
    }

    public static function RegistrasiGuru($username, $email, $raw_password, $jenis_guru){
        /* @param $jenis_guru:
         *      1 - TATA USAHA
         *      2 - PELAJARAN
         */
        $user = InterfaceUmum::RegisterNewUser($username, $email, $raw_password);

        $guru = new Guru;
        $guru->pengguna_id = $user->id;
        $guru->jenis_guru_id = (int)($jenis_guru);

        $guru->save();
        $guru->refresh();

        return [$user, $guru];
    }

    public static function BuatTahunAjarBaru($tahun_ajar_baru){
        $tab = new TahunAjaran;
        $tab->nama = $tahun_ajar_baru;

        $tab->save();
        $tab->refresh();

        return $tab;
    }

    public static function BuatSemesterBaru($semester, $id_tahun_ajar){
        $smt = new Semester;
        $smt->tahun_ajaran_id = $id_tahun_ajar;

        $smt->save();
        $smt->refresh();

        return $smt;
    }

    public static function BuatKelasBaru($id_semester, $nama_kelas) {
        $kelas = new Kelas;
        $kelas->semester_id = $id_semester;
        $kelas->nama = $nama_kelas;

        $kelas->save();
        $kelas->refresh();

        return $kelas;
    }

    public static function BuatPelajaran($id_guru, $jenis_pelajaran){
        /* @param $jenis_pelajaran:
         *      1 - B. Indo
         *      2 - Pend. Agama
         *      3 - PKn
         *      4 - Sejarah
         *      5 - MTK
         */
        $pelajaran = new Pelajaran;
        $pelajaran->jenis_pelajaran_id = (int)($jenis_pelajaran);
        $pelajaran->guru_id = $id_guru;

        $pelajaran->save();
        $pelajaran->refresh();

        return $pelajaran;
    }

    public static function ManagemenGuruKelas($id_guru, $id_kelas){
        $pelajaran = Pelajaran::where("guru_id", $id_guru)->first();
        $pelajaran->kelas_id = $id_kelas;

        $pelajaran->save();
        $pelajaran->refresh();

        return $pelajaran;
    }

    public static function ManagemenSiswaKelas($id_siswa, $id_kelas){
        $siswa = Siswa::where("id", $id_siswa);

        $siswa->kelas_id = $id_kelas;

        $siswa->save();
        $siswa->refresh();

        return $siswa;
    }
}