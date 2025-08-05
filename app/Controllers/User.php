<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "User Manajemen",
            "navigasi" => "user"
        ];

        return view('user/user_view', $data);
    }
}
