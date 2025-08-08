<?php

namespace App\Controllers;

use \IonAuth\Controllers\Auth;

class Klasifikasi extends BaseController
{
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth    = new Auth;
        $this->session = \Config\Services::session();
        $this->data['navigasi'] = "klasifikasi";
    }

    public function index()
    {
        $this->data['title'] = "Data Klasifikasi Pelanggaran";
        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('klasifikasi/klasifikasi_view', $this->data);
    }
}
