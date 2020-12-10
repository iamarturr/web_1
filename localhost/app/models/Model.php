<?php
namespace App\Model;

use DB\Database;

class Model {
  protected $db;

  function __construct() 
  {
    $this->db = new Database();
  }

  public function query($sql)
  {
    //$db = new Database();
    $user = $this->db->query($sql);
    return $user;
  }
}
