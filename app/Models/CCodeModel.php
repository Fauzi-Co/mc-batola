<?php

namespace App\Models;

use CodeIgniter\Model;

class CCodeModel extends Model
{
    protected $table = 'c_code';

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
