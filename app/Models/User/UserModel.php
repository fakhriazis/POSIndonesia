<?php

namespace App\Models\User;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function readAll($table)
    {
        $query = $this->db->table($table);
        $query->select('*');
        return $query->get();;
    }

    public function tambah($table, $data)
    {
        $builder = $this->db->table($table);
        $query = $builder->insert($data);
    }
}
