<?php

namespace App\Controllers;

use \IonAuth\Controllers\Auth;

class Teguran extends BaseController
{
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth    = new Auth;
        $this->session = \Config\Services::session();
        $this->data['navigasi'] = "teguran";
    }

    public function index()
    {
        $this->data['title'] = "Level Teguran";
        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('teguran/teguran_view', $this->data);
    }
}
