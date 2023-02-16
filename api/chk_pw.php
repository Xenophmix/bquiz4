<?php
include_once "base.php";

// echo $Mem->count(['acc' => $_POST['acc'],'pw' => $_POST['pw']]);
// 等同於下面這行

$table = $_GET['table'];
unset($_GET['table']);

switch ($table) {
  case 'mem':
    $session_key = 'mem';
    $model = $Mem;
    break;
  case 'admin':
    $session_key = 'admin';
    $model = $Admin;
    break;
  default:
    echo 0;
    return;
}

if ($model->count($_GET)) {
  $_SESSION[$session_key] = $_GET['acc'];
  echo 1;
} else {
  echo 0;
}
