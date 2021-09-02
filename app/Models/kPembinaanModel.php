<?php

namespace App\Models;

use CodeIgniter\Model;

class kPembinaanModel extends Model
{
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $created_at = true;
    protected $updated_at = true;

    protected $table = 'k_pembinaan';
    protected $allowedFields =
    [
        'tgl_reg',
        'pegawai',
        'barang',
        'pembangunan',
        'ket'
    ];

    public function getData()
    {
        return $this->orderBy('tgl_reg', 'ASC');
    }

    public function search($tgl_fil, $c_code)
    {
        return $this->table($c_code)->where("DATE_FORMAT(tgl_reg, '%Y-%m')", $tgl_fil);
    }

    public function countRin($keyword)
    {
        foreach ($keyword as $key) {
            $data[] = $this->where(["DATE_FORMAT(tgl_reg, '%Y-%m')" => $key])->countAllresults();
        }
        return $data;
    }
}


//////////////////////////////////////////////////////////////
/// countRin = or
// return $this->table($this->table)->where($ftag);
// return $this->where(['tgl_reg' => $keyword])->countallresults();
