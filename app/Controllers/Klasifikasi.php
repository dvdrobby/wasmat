<?php

namespace App\Controllers;

class Klasifikasi extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "klasifikasi";
    }

    public function index()
    {
        $this->data['title'] = "Data Klasifikasi Pelanggaran";

        return view('klasifikasi/klasifikasi_view', $this->data);
    }
}
