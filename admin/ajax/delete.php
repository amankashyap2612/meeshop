<?php 
include '../config/form2conn.php';

$del =$_GET['del'];




$sql="delete from product where id='".$del."'";

$query =mysqli_query($conn, $sql);

if($query){
		header("Location: ../table.php");
	}else{
		echo "something worng";
	}
?>