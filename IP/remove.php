<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$code=$_POST["code"];
$id=$_POST["id"];
$result = $db_handle->runQuery("Delete from {$_SESSION["cart"]} where code='$code'");
header("Location:http://localhost/IP/cart_display");

?>