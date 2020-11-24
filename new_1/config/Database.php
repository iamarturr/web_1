<?php

namespace DB;

use PDO;
use PDOException;

class Database {
  private $host = "web";
  private $dbname = "web";
  private $user = "root";
  private $password = "root";
  public $connect;

  /*
  * конструктор для подключения PDO
  */
  public function __construct()
  {
    try {
      $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";", $this->user, $this->password);
      $this->connect->exec("set names utf8");
    } catch (PDOException $e) {
        echo "Error connect to database: " . $e->getMessage();
    }
  }

  /*
  * переопределяем метод query()
  */
  public function query($sql)
  {
    $query = $this->connect->query($sql);
    return $query->fetchAll(PDO::FETCH_CLASS);
  }
}
