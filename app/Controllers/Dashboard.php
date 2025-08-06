<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "Dashboard";
    }
    public function index()
    {
        $this->data['title'] = 'Dashboard';

        return view('dashboard_view', $this->data);
    }
}
