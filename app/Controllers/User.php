<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TableUserModel;
use \IonAuth\Controllers\Auth;

class User extends BaseController
{
    protected $userModel;
    protected $tableUserModel;
    protected $db;
    protected $query;
    protected $session;
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth    = new Auth;
        $this->userModel = new UserModel;
        $this->tableUserModel = new TableUserModel;
        $this->data['navigasi'] = "user";
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        $this->data['title'] = "User Manajemen";
        $this->data['users'] = $this->userModel->getUser()->paginate(5, 'users_groups');
        $this->data['pager'] = $this->userModel->pager;

        $this->data['message'] = !empty($this->ionAuth->data['message']) ? $this->ionAuth->data['message'] : $this->session->getFlashdata('message');

        return view('user/user_view', $this->data);
    }

    public function delete($id)
    {
        $this->tableUserModel->delete($id) ?
            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
		Data user berhasil dihapus.
	</div>') : null;

        return redirect()->to('user')->withCookies();
    }
}
