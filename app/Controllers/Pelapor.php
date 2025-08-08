<?php

namespace App\Controllers;

use \IonAuth\Controllers\Auth;

class Pelapor extends BaseController
{
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth    = new Auth;
        $this->session = \Config\Services::session();
        $this->data['navigasi'] = "pelapor";
    }

    public function index()
    {
        $this->data['title'] = "Data Pelapor/Penindak";
        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('pelapor/pelapor_view', $this->data);
    }
}
