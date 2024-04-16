<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTahun;

class Tahun extends BaseController
{
    protected $ModelTahun;
    public function __construct()
    {
        $this->ModelTahun = new ModelTahun;
    }

    public function index()
    {
        $data = [
            'judul' => 'Tahun Qurban',
            'menu' => 'qurban',
            'submenu' => 'tahun-qurban',
            'page' => 'qurban/v_tahun',
            'tahun' => $this->ModelTahun->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
        $data = [
            'tahun_h' => $this->request->getPost('tahun_h'),
            'tahun_m' => $this->request->getPost('tahun_m'),
        ];
        $this->ModelTahun->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('Tahun'));
    }

    public function UpdateData($id_tahun)
    {
        $data = [
            'id_tahun' => $id_tahun,
            'tahun_h' => $this->request->getPost('tahun_h'),
            'tahun_m' => $this->request->getPost('tahun_m'),
        ];
        $this->ModelTahun->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to(base_url('Tahun'));
    }

    public function DeleteData($id_tahun)
    {
        $data = [
            'id_tahun' => $id_tahun,
        ];
        $this->ModelTahun->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('Tahun'));
    }
}
