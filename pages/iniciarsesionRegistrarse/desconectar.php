<?php
include 'DB.php';

session_start();

try {
  $DataBase = new DB();
}catch (PDOException $e) {
  $error = $e->getCode();
  $missatge = $e->getMessage();
}

session_destroy();
header("Location: iniciarsesion.php");
?>
