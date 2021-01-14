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

    public function join()
    {
        $builder = $this->db->table('help_mitra');
        $builder->select('*');
        $builder->join('help_responcode', 'help_mitra.idmitra = help_responcode.idresponcode');
        return $builder->get();;
    }
}
