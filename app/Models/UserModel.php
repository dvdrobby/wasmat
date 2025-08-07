<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users_groups';
    protected $returnType     = 'object';

    public function getUser()
    {
        $this->builder()
            ->select('users_groups.user_id, users.username, users.email, groups.name')
            ->join('users', 'users.id = users_groups.user_id') // Join users_groups with users
            ->join('groups', 'groups.id = users_groups.group_id'); // Join users_group with group
        // ->get()
        // ->getResultArray();

        return $this;
    }
}
