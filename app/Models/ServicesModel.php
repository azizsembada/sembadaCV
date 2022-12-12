<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'services';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamp = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = ['name', 'icon', 'description', 'ord'];

    function loadData($limit, $offset)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,name, icon,description, ord');
        $query = $builder->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function loadDataSearch($limit, $offset, $keyword)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,name, icon,description, ord');
        $query = $builder->like('name', $keyword)->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function getTotalRow()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->countAll();
    }
}
