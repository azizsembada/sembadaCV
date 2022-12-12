<?php

namespace App\Models;

use CodeIgniter\Model;

class Settings_model extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'settings';
    protected $primaryKey       = 'key';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['value', 'key'];

    function update_data($key, $value)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->set('value', $value, "updated_date", date("Y-m-d h:i:sa"))
            ->where($this->primaryKey, $key)
            ->update();
    }
    function get_value_settings($key)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $data = $builder->select('value')
            ->where($this->primaryKey, $key)
            ->get()->getRow();
        return $data->value;
    }
}
