<?php

if (isset($_GET['id'])) {
  $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}






if (!isset($_SESSION['mem'])) {
  to("?do=login");
}


dd($_SESSION['cart']);
?>
購物車