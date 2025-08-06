<?php

namespace App\Controllers;

class Teguran extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "teguran";
    }

    public function index()
    {
        $this->data['title'] = "Level Teguran";

        return view('teguran/teguran_view', $this->data);
    }
}
