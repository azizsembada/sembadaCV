<?php

namespace App\Controllers;

use App\Models\MainSkillsModel;
use App\Libraries\SembadaLib;

class MainSkills extends BaseController
{
    public function index()
    {
        $data['menu'] = 'main-skills';
        return view('admin/main_skills/index', $data);
    }
    public function create()
    {
        $data = [
            'skills' => $this->request->getPost('skills'),
            'percentage' => $this->request->getPost('percentage'),
            'ord' => $this->request->getPost('ord'),
        ];

        (new MainSkillsModel)->save($data);

        $output = array('status' => 'Skill Inserted Successfully', 'data' => $data);
        return $this->response->setJSON($output);
    }
    public function read()
    {
        $recordperPage = 5;
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new MainSkillsModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, (new MainSkillsModel)->getTotalRow());
        $data['allMainSklills'] = (new MainSkillsModel)->loadData($recordperPage, $offset);
        return $this->response->setJSON($data);
    }

    public function searchData()
    {
        $recordperPage = 5;
        $keyword = $this->request->getGet('keyword');
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new MainSkillsModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['allMainSklills'] = (new MainSkillsModel)->loadDataSearch($recordperPage, $offset, $keyword);
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, count($data['allMainSklills']), $keyword);
        return $this->response->setJSON($data);
    }

    public function form()
    {
        return view('admin/main_skills/form');
    }
    public function load_data()
    {
        return view('admin/main_skills/data');
    }
    public function edit()
    {
        $id = $this->request->getGet('id');
        $data['row'] = (new MainSkillsModel)->find($id);
        return $this->response->setJSON($data);
    }
    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'skills' => $this->request->getPost('skills'),
            'percentage' => $this->request->getPost('percentage'),
            'ord' => $this->request->getPost('ord'),
        ];
        (new MainSkillsModel)->update($id, $data);
        $output = array('status' => 'Skill Update Successfully', 'data' => $data);
        return $this->response->setJSON($output);
    }
    public function delete()
    {
        $id = $this->request->getGet('id');
        (new MainSkillsModel)->delete($id);
        $output = array('status' => 'Skill Deleted Successfully');
        return $this->response->setJSON($output);
    }
}
