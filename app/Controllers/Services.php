<?php

namespace App\Controllers;

use App\Models\ServicesModel;
use App\Libraries\SembadaLib;

class Services extends BaseController
{
    public function index()
    {
        $data['menu'] = 'services';
        return view('admin/services/index', $data);
    }
    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'icon' => $this->request->getPost('icon'),
            'description' => $this->request->getPost('description'),
            'ord' => $this->request->getPost('ord'),
        ];

        (new ServicesModel)->save($data);

        $output = array('message' => 'Service Inserted Successfully', 'status' => 'success');
        return $this->response->setJSON($output);
    }
    public function read()
    {
        $recordperPage = 5;
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new ServicesModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, (new ServicesModel)->getTotalRow());
        $data['allServices'] = (new ServicesModel)->loadData($recordperPage, $offset);
        return $this->response->setJSON($data);
    }

    public function searchData()
    {
        $recordperPage = 5;
        $keyword = $this->request->getGet('keyword');
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new ServicesModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['allServices'] = (new ServicesModel)->loadDataSearch($recordperPage, $offset, $keyword);
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, count($data['allServices']), $keyword);
        return $this->response->setJSON($data);
    }

    public function form()
    {
        return view('admin/services/form');
    }
    public function load_data()
    {
        return view('admin/services/data');
    }
    public function edit()
    {
        $id = $this->request->getGet('id');
        $data['row'] = (new ServicesModel)->find($id);
        return $this->response->setJSON($data);
    }
    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'icon' => $this->request->getPost('icon'),
            'description' => $this->request->getPost('description'),
            'ord' => $this->request->getPost('ord'),
        ];
        (new ServicesModel)->update($id, $data);
        $output = array('message' => 'Service Updated Successfully', 'status' => 'success');
        return $this->response->setJSON($output);
    }
    public function delete()
    {
        $id = $this->request->getGet('id');
        (new ServicesModel)->delete($id);
        $output = array('message' => 'Service Deleted Successfully', 'status' => 'success');
        return $this->response->setJSON($output);
    }
}
