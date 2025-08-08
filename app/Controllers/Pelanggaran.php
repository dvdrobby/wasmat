<?php

namespace App\Controllers;

use \IonAuth\Controllers\Auth;

class Pelanggaran extends BaseController
{
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth    = new Auth;
        $this->session = \Config\Services::session();
        $this->data['navigasi'] = "pelanggaran";
    }

    public function index()
    {
        $this->data['title'] = "Rekap Data";
        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('pelanggaran/pelanggaran_view', $this->data);
    }

    public function tambah()
    {
        $this->data['title'] = "Tambah Data Pelanggaran";
        $this->data['breadcumb'] = [
            'title' => 'Data Pelanggaran',
            'link' => 'pelanggaran'
        ];

        return view('pelanggaran/tambah_view', $this->data);
    }
}
