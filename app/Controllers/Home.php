<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use \App\Models\MustahiqModel;
use \App\Models\Zona01miskinModel;
use CodeIgniter\Shield\Controllers\LoginController as ShieldLogin;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Entities\Login;

class Home extends BaseController
{
    protected $mustahiqmodel;
    protected $zona01miskinmodel;

    public function __construct()
    {
        $this->mustahiqmodel = new MustahiqModel();
        $this->zona01miskinmodel = new Zona01miskinModel();
    }


    public function index(): string
    {

        $user = \auth()->user();
        if ($user != null) :
            $data = [
                'title' => "Daftar Mustahiq",
                'mustahiq' => $this->mustahiqmodel->getMustahiq()
            ];


            return view('mustahiq/home', $data);
        else :
            return view('mustahiq/login');
        endif;
    }

    public function detail($id)
    {

        $data = [
            'title' => "Detail Mustahiq",
            'mustahiq' => $this->mustahiqmodel->getMustahiq($id)
        ];


        return view('mustahiq/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => "Tambah Mustahiq",
        ];

        return view('mustahiq/create', $data);
    }

    public function save()
    {
        $zona = $this->request->getVar('zona');
        $kriteria = $this->request->getVar('kriteria');
        $this->zona01miskinmodel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'surveyor' => $this->request->getVar('surveyor'),
            'area' => $this->request->getVar('area'),
            'zona' => $this->request->getVar('zona'),
            'kriteria' => $this->request->getVar('kriteria')
        ]);
        // echo $zona;
        // echo $kriteria;

    }

    public function mustahiq()
    {

        $data = [
            'title' => "Detail Mustahiq",
            'zonanol' => $this->mustahiqmodel->zonanol(),
            'fakir' => $this->mustahiqmodel->fakir(),
            'miskin' => $this->mustahiqmodel->miskin()
        ];

        // dd($data);



        return view('mustahiq/cek', $data);
    }

    public function search($surveyor)
    {

        $data = [
            'title' => "Detail Mustahiq",
            'mustahiq' => $this->mustahiqmodel->cari($surveyor)
        ];

        // dd($data);



        return view('mustahiq/cek', $data);
    }
}
