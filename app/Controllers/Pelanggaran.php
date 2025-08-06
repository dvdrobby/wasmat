<?php

namespace App\Controllers;

class Pelanggaran extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "pelanggaran";
    }

    public function index()
    {
        $this->data['title'] = "Rekap Data";

        return view('pelanggaran/pelanggaran_view', $this->data);
    }

    public function tambah()
    {
        $this->data['title'] = "Tambah Data Pelanggaran";

        return view('pelanggaran/tambah_view', $this->data);
    }
}
