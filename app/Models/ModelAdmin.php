<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function ViewSetting()
    {
        return $this->db->table('tbl_setting')
            ->where('id', 1)
            ->get()->getRowArray();
    }

    public function UpdateSetting($data)
    {
        $this->db->table('tbl_setting')
            ->where('id', 1)
            ->update($data);
    }

    public function AllDataKasMasjid()
    {
        return $this->db->table('tbl_kas_masjid')
            ->where('month(tanggal)', date('m'))
            ->where('year(tanggal)', date('Y'))
            ->get()->getResultArray();
    }

    public function AllDataKasSosial()
    {
        return $this->db->table('tbl_kas_sosial')
            ->where('month(tanggal)', date('m'))
            ->where('year(tanggal)', date('Y'))
            ->get()->getResultArray();
    }

    public function AllDonasi()
    {
        return $this->db->table('tbl_donasi')
            ->join('tbl_rekening', 'tbl_rekening.id_rekening = tbl_donasi.id_rekening', 'left')
            ->select('tbl_donasi.no_rek as no_rek_pengirim')
            ->select('tbl_donasi.nama_bank as nama_bank_pengirim')
            ->select('tbl_donasi.nama_pengirim')
            ->select('tbl_donasi.jumlah')
            ->select('tbl_donasi.tgl')
            ->select('tbl_donasi.bukti')
            ->select('tbl_donasi.jenis_donasi')
            ->select('tbl_rekening.no_rek as no_rek_tujuan')
            ->select('tbl_rekening.nama_bank as nama_bank_tujuan')
            ->orderBy('id_donasi', 'DESC')
            ->get()->getResultArray();
    }
}
