<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Models\UserIdentityModel;
use CodeIgniter\Shield\Models\GroupModel;
use CodeIgniter\Shield\Models\UserModel;

class Admin extends BaseController
{
    protected $datauser;
    protected $usergroup;
    protected $userdata;

    public function __construct()
    {
        $this->datauser = new UserIdentityModel();
        $this->usergroup = new GroupModel();
        $this->userdata = new UserModel();
    }

    public function identities()
    {
        $user = \auth()->user();
        $data = [
            'user' => $this->datauser->getIdentities($user)
        ];
        dd($data);
    }

    public function group()
    {
        $user = \auth()->user();
        $data = [
            'user' => $this->usergroup->getForUser($user)
        ];
        dd($data);
    }

    public function user()
    {
        // $user = \auth()->user();
        $data = [
            'title' => "Daftar User",
            'user' => $this->usergroup->getUser(),
            'data' => $this->userdata->getUser(),
            'identitas' => $this->datauser->identitas()
        ];
        // dd($data);
        return view('admin/list', $data);
    }
}
