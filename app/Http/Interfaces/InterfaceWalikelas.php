<?php

namespace App\Http\Interfaces;

use App\Http\Controllers\Controller;
use App\Raport;
use App\Siswa;

class InterfaceWalikelas extends Controller {
    public static function SemuaMurid($id_kelas) {
        $data_siswa = Siswa::where("kelas_id", $id_kelas)->all();

        return $data_siswa;
    }

    public static function GetRaport($id_siswa){
        $rapor = NULL;
        try {
            $rapor = Raport::where("siswa_id", $id_siswa);
        } catch (\Exception $e) {
            echo "Rapor Belum Ada !";
        }

        if($rapor === NULL) {
            $rapor = new Raport;
            $rapor->siswa_id = $id_siswa;

            $rapor->jumlah_alpha = 0;
            $rapor->jumlah_sakit = 0;
            $rapor->jumlah_izin = 0;
            $rapor->catatan = "";
            $rapor->tersedia = False;

            $rapor->save();
            $rapor->refresh();

            return $rapor;
        } else {
            return $rapor;
        }
    }

    public static function AturRapor($id_siswa, $alpha = 0, $sakit = 0, $izin = 0, $tersedia = False, $catatan = ""){
        $rapor = self::GetRaport($id_siswa);

        $rapor->jumlah_alpha = $alpha;
        $rapor->jumlah_sakit = $sakit;
        $rapor->jumlah_izin = $izin;
        $rapor->catatan = $catatan;
        $rapor->tersedia = False;

        $rapor->save();
        $rapor->refresh();

        return $rapor;
    }
}