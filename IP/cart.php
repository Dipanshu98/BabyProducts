<?php
session_start();
require_once("dbcontroller.php");
$img = $_SESSION['product_image'];
$db_handle = new DBController();
$query1 = "INSERT INTO {$_SESSION["cart"]}(name,code,image,price)";
$query1 .= " VALUES ('{$_SESSION['product_name']}','{$_SESSION['code']}','{$_SESSION['product_image']}','{$_SESSION['product_price']}')";
if($db_handle->connectDB()->query($query1) === TRUE){
	header("Location:http://localhost/IP/singleprod.php?code={$_SESSION['code']}");
}else{
	echo "Not added";
}
?>

