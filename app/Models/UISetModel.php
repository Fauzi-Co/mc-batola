<?php

namespace App\Models;

use CodeIgniter\Model;

class UISetModel extends Model
{
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $created_at = true;
    protected $updated_at = true;
    protected $allowedFields =
    [
        'nama',
        'exp',
        'code',
        'dec'
    ];
    protected $table = 'ui_set';

    public function getId($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($bah)
    {
        // return $this->table($rin_code)->like('nama', $keyword)->orLike('jabatan', $keyword);
        return $this->where(['slval' => $bah])->first();
    }
}
