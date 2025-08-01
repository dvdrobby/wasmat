<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "navigasi" => "Dashboard"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('dashboard_view', $data);
    }
}
