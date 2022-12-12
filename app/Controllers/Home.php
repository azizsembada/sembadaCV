<?php

namespace App\Controllers;

use App\Models\MainSkillsModel;
use App\Models\PortfolioModel;
use App\Models\ServicesModel;

class Home extends BaseController
{
    public function index()
    {
        $data['mainSkills'] = (new MainSkillsModel)->orderBy('ord', 'asc')->findAll();
        $data['portfolio'] = (new PortfolioModel)->orderBy('ord', 'asc')->findAll();
        $data['service'] = (new ServicesModel)->orderBy('ord', 'asc')->findAll();
        return view('landing_page', $data);
    }
}
