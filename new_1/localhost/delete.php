<?php
require_once __DIR__ . '\vendor\autoload.php';
use App\Model\AccountModel;
use DB\Database;

$db = new AccountModel();

if (isset($_GET['delete'])) {
  $user = $db->delete($_GET['delete']);
  header('Location: /index.php');
} else {
  if (isset($_GET['user'])) {
    $user = $db->add($_GET['user'], $_GET['password']);
    header('Location: /index.php');
  }
}
