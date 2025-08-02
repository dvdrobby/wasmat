<?php

namespace App\Controllers;

class Klasifikasi extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Data Klasifikasi Pelanggaran",
            "navigasi" => "klasifikasi"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('klasifikasi/klasifikasi_view', $data);
    }
}
