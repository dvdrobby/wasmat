<?php

namespace App\Controllers;

class Pelapor extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Data Pelapor/Penindak",
            "navigasi" => "pelapor"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('pelapor/pelapor_view', $data);
    }

    public function tambah()
    {
        $data = [
            "title" => "Tambah Daftar Pelapor/Penindak",
            "navigasi" => "pelapor"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('pelapor/tambah_pelapor_view', $data);
    }
}
