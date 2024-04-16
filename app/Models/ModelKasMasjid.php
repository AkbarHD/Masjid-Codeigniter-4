<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKasMasjid extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_kas_masjid')
            ->get()->getResultArray();
    }

    public function AllDataKasMasuk()
    {
        return $this->db->table('tbl_kas_masjid')
            ->where('status', 'In')
            ->get()->getResultArray();
    }

    public function AllDataKasKeluar()
    {
        return $this->db->table('tbl_kas_masjid')
            ->where('status', 'Keluar')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_kas_masjid')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_kas_masjid')
            ->where('id_kas_masjid', $data['id_kas_masjid'])
            ->update($data);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_kas_masjid')
            ->where('id_kas_masjid', $data['id_kas_masjid'])
            ->delete($data);
    }


    public function AllDataBulanan($bulan, $tahun)
    {
        return $this->db->table('tbl_kas_masjid')
            ->where('month(tanggal)', $bulan)
            ->where('year(tanggal)', $tahun)
            ->get()->getResultArray();
    }
}
