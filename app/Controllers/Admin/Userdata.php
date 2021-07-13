<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController;


class Userdata extends BaseController
{
    protected $users;
    function __construct()
    {
        $this->users = new UserModel();
    }

    public function index()
    {
        $data['title'] = "Data User";
        $data['users'] = $this->users->findAll();
        return view('content/userdata', $data);
    }
}