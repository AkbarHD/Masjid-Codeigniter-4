<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    protected $ModelLogin;

    public function __construct()
    {
        $this->ModelLogin = new ModelLogin();
    }

    public function index()
    {
        //session();
        $data = [
            'judul' => 'Login',
            'validation' =>  \Config\Services::validation(),
        ];
        return view('v_login', $data);
    }

    public function CekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Diisi !',

                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Belum Diisi !',
                ]
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $CekLogin = $this->ModelLogin->CekUser($email, $password);

            if ($CekLogin) {
                session()->set('nama_user', $CekLogin['nama_user']);
                session()->set('level', $CekLogin['level']);
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('gagal', 'Email Atau Password Salah !!!');
                return redirect()->to(base_url('Login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Login'))->withInput('validation', \Config\Services::validation());
        }
    }

    public function LogOut()
    {
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout !!!');
        return redirect()->to(base_url('Login'));
    }
}
