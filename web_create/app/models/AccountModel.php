<?php
namespace App\Model;

use DB\Database;
use App\Handler\Model;

use PDO;
use PDOException;

class AccountModel extends Model {
  private $table = "accounts"; // таблица с которой будем работать

  /*
  * выборка якобы авторизоавнного пользователя
  */
  
  public function selectAuthUser()
  {
    //$model = new Model();
    $result = Model->selectAuthUser($this->table);

    return $result;
  }
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
