<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRekening extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_rekening')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_rekening')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_rekening')
            ->where('id_rekening', $data['id_rekening'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_rekening')
            ->where('id_rekening', $data['id_rekening'])
            ->delete($data);
    }
}
