<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value'];

    public function getKeyValuePairs()
    {
        $settings = $this->findAll();
        $kv = [];
        foreach ($settings as $s) {
            $kv[$s['key']] = $s['value'];
        }
        return $kv;
    }
}
