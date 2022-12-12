<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['menu'] = 'dashboard';
        return view('admin/dashboard', $data);
    }
}
