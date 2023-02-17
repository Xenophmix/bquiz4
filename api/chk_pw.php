<?php
include_once "base.php";



// $table = $_GET['table'];
// unset($_GET['table']);

// switch ($table) {
//   case 'mem':
//     $session_key = 'mem';
//     $model = $Mem;
//     break;
//   case 'admin':
//     $session_key = 'admin';
//     $model = $Admin;
//     break;
//   default:
//     echo 0;
//     return;
// }

// if ($model->count($_GET)) {
//   $_SESSION[$session_key] = $_GET['acc'];
//   echo 1;
// } else {
//   echo 0;
// }


$table = $_GET['table'];
// $tableUP = ucfirst($table);
$session_key = $table;
unset($_GET['table']);

if (in_array($table, ['mem', 'admin']) && $model = ${ucfirst($table)}) {
  if ($model->count($_GET)) {
    $_SESSION[$session_key] = $_GET['acc'];
    echo 1;
  } else {
    echo 0;
  }
} else {
  echo 0;
}
