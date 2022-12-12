<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $data['menu'] = 'user';
        return view('admin/user', $data);
    }
    public function update()
    {
        $session = session();
        $data = (new UserModel)->first();
        $old_password = $this->request->getPost('old_password');
        $new_password = $this->request->getPost('new_password');
        $new_password2 = $this->request->getPost('new_password2');
        $verify_pass = password_verify($old_password, $data['password']);
        if ($verify_pass) {
            if ($new_password == $new_password2) {
                $options = [
                    'cost' => 10,
                ];
                $pass_hash = password_hash($new_password, PASSWORD_BCRYPT, $options);
                $passNew = [
                    'password' => $pass_hash,
                ];
                (new UserModel)->update($data['id'], $passNew);
                $session->setFlashdata('msg-success', 'Password Updated');
            } else {
                $session->setFlashdata('msg', 'new password and repeat new password are not the same');
            }
        } else {
            $session->setFlashdata('msg', 'Wrong Old Password');
        }
        return redirect()->to('/user');
    }
}
