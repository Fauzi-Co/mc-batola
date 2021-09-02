<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'jabatan', 'nip', 'pangkat'];

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

    public function search($keyword, $rin_code)
    {
        return $this->table($rin_code)->like('nama', $keyword)->orLike('jabatan', $keyword);
    }
}
