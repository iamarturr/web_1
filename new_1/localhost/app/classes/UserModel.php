<?php
namespace App\Handler;

use DB\Database;

use PDO;
use PDOException;

class Model {
  //private $table = "users"; // таблица с которой будем работать

  /*
  * выборка якобы авторизоавнного пользователя
  */
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
