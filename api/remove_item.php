<?php
include_once 'base.php';

unset($_SESSION['cart'][$_POST['id']]);

if (empty($_SESSION['cart'])) {
  unset($_SESSION['cart']);
}
