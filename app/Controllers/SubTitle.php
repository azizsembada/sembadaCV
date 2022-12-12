<?php

namespace App\Controllers;

use App\Models\SubTitleModel;
use App\Libraries\SembadaLib;

class SubTitle extends BaseController
{
    public function index()
    {
        $data['menu'] = 'subtitle';
        return view('admin/sub_title/index', $data);
    }
    public function read()
    {
        $recordperPage = 5;
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new SubTitleModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, (new SubTitleModel)->getTotalRow());
        $data['allSubTitle'] = (new SubTitleModel)->loadData($recordperPage, $offset);
        return $this->response->setJSON($data);
    }

    public function searchData()
    {
        $recordperPage = 5;
        $keyword = $this->request->getGet('keyword');
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new SubTitleModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['allSubTitle'] = (new SubTitleModel)->loadDataSearch($recordperPage, $offset, $keyword);
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, count($data['allSubTitle']), $keyword);
        return $this->response->setJSON($data);
    }

    public function form()
    {
        return view('admin/sub_title/form');
    }
    public function load_data()
    {
        return view('admin/sub_title/data');
    }
    public function edit()
    {
        $id = $this->request->getGet('key');
        $data['row'] = (new SubTitleModel)->find($id);
        return $this->response->setJSON($data);
    }
    public function update()
    {
        $key = $this->request->getPost('key');
        $data = [
            'alias' => $this->request->getPost('alias'),
            'value' => $this->request->getPost('value'),
            'ord' => $this->request->getPost('ord'),
        ];
        (new SubTitleModel)->update($key, $data);
        $output = array('message' => 'Sub Title Updated Successfully', 'status' => 'success');
        return $this->response->setJSON($output);
    }
}
