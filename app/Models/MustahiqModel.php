<?php

namespace App\Models;

use CodeIgniter\Model;

class MustahiqModel extends Model
{
    protected $table = 'mustahiq';
    protected $useTimestamps = true;


    public function getMustahiq($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function zonanol()
    {

        $this->where('zona =', '0');
        $this->select('surveyor,zona,kriteria');
        $this->selectCount('surveyor', 'count');
        $this->selectSum('nilai', 'nilai');
        $this->groupBy('surveyor');
        $this->groupBy('kriteria');
        $this->orderBy('kriteria', 'ASC');
        $this->orderBy('zona', 'ASC');
        $this->orderBy('count', 'DESC');
        return $this->findAll();
    }

    public function fakir()
    {

        $this->where('kriteria =', 'fakir');
        $this->where('zona !=', '0');
        $this->select('surveyor,zona,kriteria');
        $this->selectCount('surveyor', 'count');
        $this->selectSum('nilai', 'nilai');
        $this->groupBy('surveyor');
        $this->groupBy('kriteria');
        $this->orderBy('kriteria', 'ASC');
        $this->orderBy('zona', 'ASC');
        $this->orderBy('count', 'DESC');
        return $this->findAll();
    }


    public function miskin()
    {

        $this->where('kriteria =', 'miskin');
        $this->where('zona !=', '0');
        $this->select('surveyor,zona,kriteria');
        $this->selectCount('surveyor', 'count');
        $this->selectSum('nilai', 'nilai');
        $this->groupBy('surveyor');
        $this->groupBy('kriteria');
        $this->orderBy('zona', 'ASC');
        return $this->findAll();
    }

    public function cari($surveyor)
    {

        $this->where('surveyor =', $surveyor);
        return $this->findAll();
    }
}
