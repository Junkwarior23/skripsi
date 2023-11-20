<?php

namespace App\Models;

use CodeIgniter\Model;

class Zona01miskinModel extends Model
{
    protected $table = 'zona01miskin';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'surveyor', 'area', 'zona', 'kriteria', 'created_at', 'updated_at', 'deleted_at'];
    public function getMustahiq($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
