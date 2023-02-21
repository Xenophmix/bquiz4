<?php

include_once "base.php";
$_POST['no'] = date("Ymd") . rand(100000, 999999);
$_POST['acc'] = $_SESSION['mem'];
$_POST['cart'] = serialize($_SESSION['cart']);

$Orders->save($_POST);
