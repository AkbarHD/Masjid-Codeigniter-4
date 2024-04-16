<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesertaQurban extends Model
{
    public function AllDataKelompok($id_tahun)
    {
        return $this->db->table('tbl_kelompok')
            ->where('id_tahun', $id_tahun)
            ->get()->getResultArray();
    }

    public function DeleteKelompok($data)
    {
        $this->db->table('tbl_kelompok')
            ->where('id_kelompok', $data['id_kelompok'])
            ->delete($data);
    }

    public function InsertKelompok($data)
    {
        $this->db->table('tbl_kelompok')->insert($data);
    }

    public function InsertPeserta($data)
    {
        $this->db->table('tbl_peserta_kelompok')->insert($data);
    }

    public function DeletePeserta($data)
    {
        $this->db->table('tbl_peserta_kelompok')
            ->where('id_peserta', $data['id_peserta'])
            ->delete($data);
    }
}
