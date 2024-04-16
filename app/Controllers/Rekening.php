<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelRekening;

class Rekening extends BaseController
{
    protected $ModelRekening;

    public function __construct()
    {
        $this->ModelRekening = new ModelRekening();
    }

    public function index()
    {
        $data = [
            'judul' => 'Rekening Bank',
            'menu' => 'rekening',
            'submenu' => '',
            'page' => 'v_rekening',
            'rek' => $this->ModelRekening->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
        $data = [
            'nama_bank' => $this->request->getPost('nama_bank'),
            'no_rek' => $this->request->getPost('no_rek'),
            'atas_nama' => $this->request->getPost('atas_nama'),
        ];
        $this->ModelRekening->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('Rekening'));
    }

    public function UpdateData($id_rekening)
    {
        $data = [
            'id_rekening' => $id_rekening,
            'nama_bank' => $this->request->getPost('nama_bank'),
            'no_rek' => $this->request->getPost('no_rek'),
            'atas_nama' => $this->request->getPost('atas_nama'),
        ];
        $this->ModelRekening->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to(base_url('Rekening'));
    }

    public function DeleteData($id_rekening)
    {
        $data = [
            'id_rekening' => $id_rekening,
        ];
        $this->ModelRekening->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('Rekening'));
    }
}
