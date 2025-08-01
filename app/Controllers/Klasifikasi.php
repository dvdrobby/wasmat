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

    public function tambah()
    {
        $data = [
            "title" => "Tambah Data Klasifikasi Pelanggaran",
            "navigasi" => "klasifikasi"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('klasifikasi/tambah_klasifikasi_view', $data);
    }
}
