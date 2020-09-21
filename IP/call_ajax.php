<?php
include('dbcontroller.php');
$db_handle = new DBController();
$s1=$_REQUEST["n"];
$select_query="select * from tblproducts where name like '%".$s1."%'";
$sql=$db_handle->runQuery($select_query);
$count = $db_handle->numRows("SELECT * from tblproducts where name like '%".$s1."%'");
$s="";
if(!empty($count)){
foreach($sql as $key=>$value){
	
	$s=$s."
	<a class='navbar' style='text-decoration: none; color: black;' href='http://localhost/IP/singleprod.php?code=".$sql[$key]["code"]."'>
        <img style='margin-left: 10px; margin-top: -10px; margin-bottom: 30px; border: 1px solid rgb(34,34,34); border-radius: 2px;' src='".$sql[$key]["image"]."' width='60px' height='80px' class='d-inline-block align-top'>
		<p style='margin-left: 100px; margin-top:-55px;'>".$sql[$key]["name"]."</p>
    </a>
		"	;
}}
else{
	$s=$s."Not found";
}
echo $s;
?>