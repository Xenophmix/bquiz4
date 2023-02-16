<?php
include_once "base.php";

// 最簡潔的寫法
// echo $_GET['cert'] == $_SESSION['cert'];

if ($_SESSION['cert'] == $_GET['cert'])
  echo 1;
else
  echo 0;
