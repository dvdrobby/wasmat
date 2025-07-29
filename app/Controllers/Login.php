<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login_view', $data);
    }
}
