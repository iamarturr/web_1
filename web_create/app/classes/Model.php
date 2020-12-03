<?php
namespace App\Handler;

use DB\Database;

use PDO;
use PDOException;

class Model {
  private $table = "accounts";

  public function selectAuthUser($table)
  {
    $sql = "SELECT * FROM " . $table;

    $db = new Database();
    $user = $db->query($sql);
    return $user;
  }

  public function delete($table, $id)
  {
    $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
    $db = new Database();
    $user = $db->query($sql);
    return $user;
  }

  public function add($table, $login, $password)
  {
    
    $sql = "INSERT INTO " . $table . " VALUES (NULL, '" . $login . "', '" . $password . "', '" . date('Y-m-d H:i:s') . "')";
    $db = new Database();
    $user = $db->query($sql);
  }
}
