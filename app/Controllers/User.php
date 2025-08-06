<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->data['navigasi'] = "user";
    }

    public function index(): string
    {
        $this->data['title'] = "User Manajemen";

        return view('user/user_view', $this->data);
    }
}
