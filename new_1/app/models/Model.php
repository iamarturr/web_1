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
    $user = $this->db->query($sql);
    return $user;
  }

  public function all($table) 
  {
    $sql = "SELECT * FROM " . $table;

    $user = $this->db->query($sql);
    return $user;
  }

  public function get_dannie()
  { 
    $user = new AccountModel();
    $accounts = $user->selectAll();

    $users = $this->db->query("SELECT * FROM users");

    $accesses = $this->db->query("SELECT * FROM accesses");

    foreach ($accounts as $key => $value) {
      $myObj[$key] = new \stdClass();
      $myObj[$key]->email = $users[$key]->email;
      $myObj[$key]->name = $accounts[$key]->name;
      $myObj[$key]->lastname = $accounts[$key]->lastname;
      $myObj[$key]->name_access = $accesses[$accounts[$key]->access_id - 1]->name_access;
      $myObj[$key]->level_access = $accesses[$accounts[$key]->access_id - 1]->level_access;
    }

    return $myObj;
  }
}
