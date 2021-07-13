<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "auth_logins";
    protected $returnType = "object";
    protected $allowedFields = ['email', 'user_id'];

    public function getData()
    {

        echo "this is log for this getData Function on UserModel";
    }
}
