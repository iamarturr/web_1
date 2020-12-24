<?php

require 'config/db.php';

class UserModel {
  private $table = "users"; // таблица с которой будем работать

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

  public function selectlast()
  {
    $sql = "SELECT * FROM " . $this->table . " ORDER BY id DESC LIMIT 1;";
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

  public function add($id ,$login, $password)
  {
    $id = $id[0]['id'] + 1;
    
    $sql = "INSERT INTO " . $this->table . " VALUES ('" . $id . "', '" . $login . "', '" . $password . "', '" . date('Y-m-d H:i:s') . "')";
    $db = new Database();
    $user = $db->query($sql);
  }
}
