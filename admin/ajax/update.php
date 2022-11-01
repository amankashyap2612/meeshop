<?php
	include '../config/form2conn.php';

	$id = $_POST['T_id'];
	$name = $_POST['T_name'];
	$price = $_POST['T_price'];
	$size	= $_POST['T_size'];
	$description = $_POST['T_description'];
	
	$sql = "update product set Productname = '".$name."', Price = '".$price."',Size = '".$size."', Description= '".$description."' where id = '".$id."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>