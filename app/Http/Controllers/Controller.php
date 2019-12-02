<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show() {
        $reg = InterfaceSiswa::RegistrasiCalonSiswa(
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