<?php
namespace App\Model;

class AccountModel {
  public $table = "accounts"; // таблица с которой будем работать

  public function selectAuthUser()
  {
    $sql = "SELECT * FROM " . $this->table;

    $db = new Database();
    $user = $db->query($sql);
    return $user;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM " . $this->table . " WHERE id = " . $id;
    $db = new Database();
    $user = $db->query($sql);
    return $user;
  }

  public function add($login, $password)
  {
    
    $sql = "INSERT INTO " . $this->table . " VALUES (NULL, '" . $login . "', '" . $password . "', '" . date('Y-m-d H:i:s') . "')";
    $db = new Database();
    $user = $db->query($sql);
  }
}
