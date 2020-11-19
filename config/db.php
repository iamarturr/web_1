<?php

class Database {
  private $host = "web"; //будет располагаться сайт web/index.php
  private $dbname = "web"; //название бд
  private $user = "root"; //логин phpmyadmin
  private $password = "root"; //пароль phpmyadmin
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
