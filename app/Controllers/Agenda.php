<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAgenda;

class Agenda extends BaseController
{
    protected $ModelAgenda;

    public function __construct()
    {
        $this->ModelAgenda = new ModelAgenda();
    }

    public function index()
    {
        $data = [
            'judul' => 'Agenda',
            'menu' => 'agenda',
            'submenu' => '',
            'page' => 'v_agenda',
            'agenda' => $this->ModelAgenda->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
        $data = [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
        ];
        $this->ModelAgenda->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('Agenda'));
    }

    public function UpdateData($id_agenda)
    {
        $data = [
            'id_agenda' => $id_agenda,
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam'),
        ];
        $this->ModelAgenda->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to(base_url('Agenda'));
    }

    public function DeleteData($id_agenda)
    {
        $data = [
            'id_agenda' => $id_agenda,
        ];
        $this->ModelAgenda->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('Agenda'));
    }
}
