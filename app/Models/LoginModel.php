<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login'; //nama tabel yang akan diakses
    protected $primaryKey = 'username'; //primary key dari tabel
    protected $allowedFields = ['username', 'password']; //field yang dapat diakses oleh user

    public function ambil($user)
    {
        return $this->where('username', $user)->first();
    }
}