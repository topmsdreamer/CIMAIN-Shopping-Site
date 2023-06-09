<?php

namespace App\Models;

use CodeIgniter\Model;

class Registermodal extends Model
{
  public $db;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

  public function loginData($email)
  {
    $builder = $this->db->table('users')->where('email', $email);
    $query = $builder->get();

    return $query->getRow();
  }
}
