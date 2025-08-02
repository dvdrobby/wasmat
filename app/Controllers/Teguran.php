<?php

namespace App\Controllers;

class Teguran extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Level Teguran",
            "navigasi" => "teguran"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('teguran/teguran_view', $data);
    }
}
