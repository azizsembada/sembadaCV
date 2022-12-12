<?php

namespace App\Models;

use CodeIgniter\Model;

class SubTitleModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sub_title';
    protected $primaryKey       = 'key';
    protected $useAutoIncrement = true;
    protected $useTimestamp = true;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = ['value', 'alias', 'ord'];

    function loadData($limit, $offset)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('key,value, alias, ord');
        $query = $builder->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function loadDataSearch($limit, $offset, $keyword)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('key,value, alias, ord');
        $query = $builder->Like('alias', $keyword)->orlike('value', $keyword)->orderBy('ord', 'asc')->get($limit, $offset);
        return $query->getResult();
    }

    function getTotalRow()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        return $builder->countAll();
    }

    function get_value_by_key($key)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $data = $builder->select('value')
            ->where($this->primaryKey, $key)
            ->get()->getRow();
        return $data->value;
    }
}
