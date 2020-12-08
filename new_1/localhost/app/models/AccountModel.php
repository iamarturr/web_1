<?php
namespace App\Model;

use DB\Database;
include("C:\ospanel\ospanel\domains\localhost\app\classes\UserModel.php");


use PDO;
use PDOException;

class AccountModel extends /Model {
  public $table = "accounts"; // таблица с которой будем работать

  /*
  * выборка якобы авторизоавнного пользователя
  */
  /*

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
  */
}
