<?php

namespace App\Controllers;

class MessageController extends BaseController
{
    public function getFlashMessage()
    {
        $message = session()->getFlashdata('message');
        $type = session()->getFlashdata('error'); // optional: success/error/warning
        return $this->response->setJSON([
            'message' => $message,
            'error' => $type,
        ]);
    }
}
