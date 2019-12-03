<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Guru;
use App\Http\Interfaces\InterfaceCalonSiswa;
use App\Pengguna;
use App\Siswa;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function anggotaLogin(Request $req) {
        $user = NULL;
        // Check if Login Credential was correct
        try{
            $user = Pengguna::where('nama_pengguna', $req['username'])->first();
        } catch (\Exception $e){}

        if($user == NULL){
            return redirect('/login?username=1');
        }
        // Check if password was correct
        if(hash('sha512', $req['password']) != $user->sandi) {
            return redirect('/login?password=1');
        }

        // Check if this is a calon siswa
        $cs = NULL;
        try {
            $cs = CalonSiswa::where('pengguna_id', $user->id)->first();
        } catch(\Exception $e) {}

        if($cs != NULL){
            // Cek kalau Calon siswa belum mengisi biodata
            if($cs->nama_pendaftar == "" || $cs->nama_pendaftar == NULL){
                $req->session()->start();
                $req->session()->put("user_calon_siswa", $user);
                $req->session()->put("calon_siswa", $cs);

                return view('biosiswa', [
                    'username' => $user->nama_pengguna
                ]);
            } else {
                return redirect('/home');
            }
        }

        // Check if this is a guru
        $guru = NULL;
        try {
            $guru = Guru::where('pengguna_id', $user->id)->first();
        } catch(\Exception $e) {}

        if($guru != NULL){
            try{ $req->session()->invalidate(); } catch(\Exception $e) {}
            $req->session()->start();
            $req->session()->put("user", $user);
            $req->session()->put("guru", $guru);

            if($guru->jenis_guru_id == 1) { // Tata Usaha
                return view('dashtu');
            } else { // Pelajaran
                return view('dashmapel');
            }
        }

        // Check if this is a murid
        $siswa = NULL;
        try {
            $siswa = Siswa::where('pengguna_id', $user->id)->first();
        } catch(\Exception $e) {}

        if($siswa != NULL){
            try{ $req->session()->invalidate(); } catch(\Exception $e) {}
            $req->session()->start();
            $req->session()->put("user", $user);
            $req->session()->put("siswa", $siswa);

            return view('dashsiswa');
        }

        return view('welcome', [
            'msg' => $req
        ]);
    }

    public function anggotaPPBDB(Request $req) {
        $username = $req["username"];
        $email = $req["email"];
        $password = $req["password"];

        $cs = InterfaceCalonSiswa::RegistrasiCalonSiswa($username, $email, $password);

        $req->session()->start();
        $req->session()->put("user_calon_siswa", $cs[0]);
        $req->session()->put("calon_siswa", $cs[1]);

        return view('biosiswa', [
            'username' => $username
        ]);
    }

    public function anggotaBioCalonSiswa(Request $req) {
        $nama_lengkap = $req['nama_lengkap'];
        $cs = $req->session()->get('calon_siswa');

        InterfaceCalonSiswa::UpdateBioCalonSiswa($cs->id, $nama_lengkap);

        return view('login');
    }
}