<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'portfolio';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamp = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = ['name', 'image', 'link', 'description', 'ord'];

    function loadData($limit, $offset)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,name,image,link,description,ord');
        $query = $builder->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function loadDataSearch($limit, $offset, $keyword)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,name,image,link,description,ord');
        $query = $builder->like('name', $keyword)->orLike('description', $keyword)->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function getTotalRow()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->countAll();
    }
}
