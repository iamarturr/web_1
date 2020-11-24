<?php

class Addtodb {
  private $table = "users"; // таблица с которой будем работать

  //добавить пользователя

  public function add($id, $password)
  {
    $sql = "INSERT INTO users " . " VALUES ('" . $id . "', '" . $password ."', '" . date('Y-m-d') . "'')";
    echo $sql;

    $db = new Database();
    $result = $db->query($sql);

    echo $result;
  }

}

$Add = new Addtodb();
$Result = $Add->add($_POST['user'], $_POST['password']);
