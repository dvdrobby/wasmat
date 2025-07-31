<?php

namespace App\Controllers;

class Pelanggaran extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Rekap Data"
        ];

        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('auth/login');
        }

        return view('pelanggaran_view', $data);
    }
}
