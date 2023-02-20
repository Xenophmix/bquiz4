<?php
include_once "base.php";

$table = $_GET['table'];
unset($_SESSION[$table]);
session_destroy();
to('../index.php');
