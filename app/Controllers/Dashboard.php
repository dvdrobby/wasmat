<?php

namespace App\Controllers;

use \IonAuth\Controllers\Auth;

class Dashboard extends BaseController
{
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->data['navigasi'] = "Dashboard";
        $this->ionAuth    = new Auth;
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $this->data['title'] = 'Dashboard';
        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('dashboard_view', $this->data);
    }
}
