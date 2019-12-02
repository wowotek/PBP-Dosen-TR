<?php

namespace App\Http\Interfaces;

use App\CalonSiswa;
use App\Http\Controllers\Controller;

class InterfaceCalonSiswa extends Controller {
    public static function RegistrasiCalonSiswa($username, $email, $raw_password) {
        $user = InterfaceUmum::RegisterNewUser($username, $email, $raw_password);

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
}