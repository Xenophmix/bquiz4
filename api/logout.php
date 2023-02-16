<?php
include_once "base.php";

$table = $_GET['table'];
unset($_SESSION[$table]);

to('../index.php');
