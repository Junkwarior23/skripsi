<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Models\UserIdentityModel;
use CodeIgniter\Shield\Models\GroupModel;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $datauser;
    protected $usergroup;
    protected $userdata;
    protected $admindata;

    public function __construct()
    {
        $this->datauser = new UserIdentityModel();
        $this->usergroup = new GroupModel();
        $this->userdata = new UserModel();
        $this->admindata = new AdminModel();
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
        $user = auth()->getProvider();
        $data = [
            'user' => $this->usergroup->getForUser($user)
        ];
        dd($data);
    }

    public function user()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid,username,group');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'right');
        $query = $builder->get();

        $data['title'] = "List User";
        $data['user'] = $query->getResult();

        // dd($data);

        return view('admin/list', $data);
    }
}
