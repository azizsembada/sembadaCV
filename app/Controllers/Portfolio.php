<?php

namespace App\Controllers;

use App\Models\PortfolioModel;
use App\Libraries\SembadaLib;

class Portfolio extends BaseController
{
    public function index()
    {
        $data['menu'] = 'portfolio';
        return view('admin/portfolio/index', $data);
    }
    public function create()
    {
        $upload = $this->uploadImage($this->request->getFile('image'));
        if ($upload == "notValid") {
            $output = array('message' => 'Image not valid !', 'status' => 'error');
            return $this->response->setJSON($output);
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'image' => $upload,
                'description' => $this->request->getPost('description'),
                'link' => $this->request->getPost('link'),
                'ord' => $this->request->getPost('ord'),
            ];

            (new PortfolioModel)->save($data);
            $output = array('message' => 'Portfolio Inserted Successfully', 'status' => 'success');
            return $this->response->setJSON($output);
        }
    }
    public function read()
    {
        $recordperPage = 3;
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new PortfolioModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, (new PortfolioModel)->getTotalRow());
        $data['allPortfolio'] = (new PortfolioModel)->loadData($recordperPage, $offset);
        return $this->response->setJSON($data);
    }
    public function searchData()
    {
        $recordperPage = 3;
        $keyword = $this->request->getGet('keyword');
        $setOffset = (new SembadaLib)->setOffset($this->request->getGet('page'), $this->request->getGet('currentPage'), $recordperPage, (new PortfolioModel));
        $offset = $setOffset['offset'];
        $data['currentPage'] = $setOffset['currentPage'];
        $data['allPortfolio'] = (new PortfolioModel)->loadDataSearch($recordperPage, $offset, $keyword);
        $data['link'] = (new SembadaLib)->pager($data['currentPage'], $recordperPage, count($data['allPortfolio']), $keyword);

        return $this->response->setJSON($data);
    }
    public function form()
    {
        return view('admin/portfolio/form');
    }
    public function load_data()
    {
        return view('admin/portfolio/data');
    }
    public function edit()
    {
        $id = $this->request->getGet('id');
        $data['row'] = (new PortfolioModel)->find($id);
        return $this->response->setJSON($data);
    }
    public function update()
    {
        if ($this->request->getPost('imageCheck') == '200') {
            $upload = $this->uploadImage($this->request->getFile('image'), $this->request->getPost('id'));
            if ($upload == "notValid") {
                $output = array('message' => 'Image not valid !', 'status' => 'error');
                return $this->response->setJSON($output);
            } else {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'image' => $upload,
                    'description' => $this->request->getPost('description'),
                    'link' => $this->request->getPost('link'),
                    'ord' => $this->request->getPost('ord'),
                ];
            }
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'link' => $this->request->getPost('link'),
                'ord' => $this->request->getPost('ord'),
            ];
        }
        (new PortfolioModel)->update($this->request->getPost('id'), $data);
        $output = array('status' => 'Portfolio Update Successfully', 'status' => 'success', 'data' => $this->request->getPost('imageCheck'));
        return $this->response->setJSON($output);
    }
    public function delete()
    {
        $id = $this->request->getGet('id');
        $data = (new PortfolioModel)->where('id', $id)->first();
        unlink($data['image']);
        (new PortfolioModel)->delete($id);
        $output = array('status' => 'Portfolio Deleted Successfully');
        return $this->response->setJSON($output);
    }
    function uploadImage($img, $id = null)
    {
        $validated = (new SembadaLib)->validateImage($img);
        if ($validated == "valid") {
            if ($id != null) {
                $data = (new PortfolioModel)->where('id', $id)->first();
                unlink($data['image']);
            }
            $path = 'uploads/portfolio/' . $img->getRandomName();
            $img->move(PUBLIC_PATH . '/', $path);
            return $path;
        } else {
            return $validated;
        }
    }
}
