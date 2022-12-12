<?php

namespace App\Models;

use CodeIgniter\Model;

class MainSkillsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'main_skills';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamp = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = ['skills', 'percentage', 'ord'];

    function loadData($limit, $offset)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,skills, percentage, ord');
        $query = $builder->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function loadDataSearch($limit, $offset, $keyword)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id,skills, percentage, ord');
        $query = $builder->like('skills', $keyword)->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function getTotalRow()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->countAll();
    }
}
