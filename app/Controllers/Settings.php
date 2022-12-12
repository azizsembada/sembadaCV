<?php

namespace App\Controllers;

use App\Models\Settings_model;
use App\Libraries\SembadaLib;

class Settings extends BaseController
{
    public function index()
    {
        $data['menu'] = 'website';
        $data['settings'] = (new Settings_model)->orderBy('ord', 'asc')->findAll();
        return view('admin/settings', $data);
    }
    public function update()
    {
        $key = $this->request->getPost('key');
        for ($i = 0; $i < count($key); $i++) {
            $data = (new Settings_model)->where('key', $key[$i])->first();
            if ($data['value'] != $this->request->getPost($key[$i])) {
                if ($data['type'] == INPUT_IMAGE) {
                    //Input Image
                    $this->updateImage($key[$i], $data['value']);
                } else if ($data['type'] == INPUT_FILE) {
                    //Input File
                    $this->updateFile($key[$i], $data['value']);
                } else {
                    // lakukan validasi data artikel
                    $validation =  \Config\Services::validation();
                    $validation->setRules([
                        'key' => 'required'
                    ]);
                    $isDataValid = $validation->withRequest($this->request)->run();
                    // jika data valid, maka simpan ke database
                    if ($isDataValid) {
                        (new Settings_model)->update_data($key[$i], $this->request->getPost($key[$i]));
                    }
                }
            }
        }
        return redirect()->to('/settings');
    }
    function updateImage($key, $value)
    {
        $img = $this->request->getFile($key);
        $validated = (new SembadaLib)->validateImage($img);
        if ($validated == "valid") {
            unlink($value);
            $img = $this->request->getFile($key);
            $newName = $img->getRandomName();
            $img->move(PUBLIC_PATH . '/uploads/settings/img/', $newName);
            (new Settings_model)->update_data($key, 'uploads/settings/img/' . $newName);
        }
    }
    function updateFile($key, $value)
    {
        $file = $this->request->getFile($key);
        if ($file->guessExtension() == 'pdf' || $file->guessExtension() == 'PDF') {
            unlink($value);
            $newName = $file->getRandomName();
            $file->move(PUBLIC_PATH . '/uploads/settings/pdf/', $newName);
            (new Settings_model)->update_data($key, 'uploads/settings/pdf/' . $newName);
        }
    }
}
