<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    public function CekUser($email, $password)
    {
        return $this->db->table('tbl_user')
            ->where('email', $email)
            ->where('password', $password)
            ->get()->getRowArray();
    }
}
