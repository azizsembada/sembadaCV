<?php

namespace App\Controllers;

use App\Models\Authentification_model;

class Authentification extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }
    public function auth()
    {
        $session = session();
        $model = new Authentification_model();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/panel-admin');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/authentification');
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/authentification');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/authentification');
    }
}
