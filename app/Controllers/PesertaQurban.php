<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesertaQurban;
use App\Models\ModelTahun;


class PesertaQurban extends BaseController
{
    protected $ModelPesertaQurban;
    protected $ModelTahun;

    public function __construct()
    {
        $this->ModelPesertaQurban = new ModelPesertaQurban;
        $this->ModelTahun = new ModelTahun;
    }

    public function index()
    {
        $data = [
            'judul' => 'Peserta Qurban',
            'menu' => 'qurban',
            'submenu' => 'peserta-qurban',
            'page' => 'qurban/v_tahun_qurban',
            'tahun' => $this->ModelTahun->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function KelompokQurban($id_tahun)
    {
        $tahun = $this->ModelTahun->DetailData($id_tahun);
        $data = [
            'judul' => 'Peserta Qurban Tahun ' . $tahun['tahun_h'] . 'H/' . $tahun['tahun_m'] . 'M',
            'menu' => 'qurban',
            'submenu' => 'peserta-qurban',
            'page' => 'qurban/v_kelompok_qurban',
            'tahun' => $tahun,
            'kelompok' => $this->ModelPesertaQurban->AllDataKelompok($id_tahun),
        ];
        return view('v_template_admin', $data);
    }

    public function DeleteKelompok($id_tahun, $id_kelompok)
    {
        $data = [
            'id_kelompok' => $id_kelompok,
        ];
        $this->ModelPesertaQurban->DeleteKelompok($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('PesertaQurban/KelompokQurban/' . $id_tahun));
    }

    public function InsertKelompok()
    {
        $id_tahun =  $this->request->getPost('id_tahun');
        $data = [
            'id_tahun' => $id_tahun,
            'nama_kelompok' => $this->request->getPost('nama_kelompok'),
        ];
        $this->ModelPesertaQurban->InsertKelompok($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('PesertaQurban/KelompokQurban/' . $id_tahun));
    }

    public function InsertPeserta()
    {
        $id_tahun =  $this->request->getPost('id_tahun');
        $id_kelompok =  $this->request->getPost('id_kelompok');
        $data = [
            'id_kelompok' => $id_kelompok,
            'nama_peserta' => $this->request->getPost('nama_peserta'),
            'biaya' => $this->request->getPost('biaya'),
        ];
        $this->ModelPesertaQurban->InsertPeserta($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('PesertaQurban/KelompokQurban/' . $id_tahun));
    }

    public function DeletePeserta($id_tahun, $id_peserta)
    {
        $data = [
            'id_peserta' => $id_peserta,
        ];
        $this->ModelPesertaQurban->DeletePeserta($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('PesertaQurban/KelompokQurban/' . $id_tahun));
    }
}
