<?php

namespace App\Controllers;

class Pelapor extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Data Pelapor/Penindak",
            "navigasi" => "pelapor"
        ];

        return view('pelapor/pelapor_view', $data);
    }
}
