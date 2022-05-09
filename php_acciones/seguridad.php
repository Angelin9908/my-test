<?php
session_start();

if($_SESSION["autenticado"]!="YES"){
  header("Location: index.php");
  exit();
}
?>