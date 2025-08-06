<?php

namespace App\Controllers;

class Pelapor extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "pelapor";
    }

    public function index()
    {
        $this->data['title'] = "Data Pelapor/Penindak";

        return view('pelapor/pelapor_view', $this->data);
    }
}
