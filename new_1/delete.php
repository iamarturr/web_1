<?php
require_once __DIR__ . '\vendor\autoload.php';
use App\Model\UserModel;
use DB\Database;

$db = new UserModel();

if (isset($_GET['delete'])) {
  $user = $db->delete($_GET['delete']);
  header('Location: /index.php');
} else {
  if (isset($_GET['user'])) {
    $last = $db->selectlast();
    $lasted = json_encode($last, false);
    $result = json_decode($lasted, true);

    $user = $db->add($result, $_GET['user'], $_GET['password']);
    header('Location: /index.php');
  }
}
