<?php
	include '../config/form2conn.php';

	$id = $_POST['T_id'];
	$name = $_POST['T_name'];
	$status = $_POST['T_status'];
	$date	= $_POST['T_date'];
	echo $id;
	
	$sql = "update category set name = '".$name."', status = '".$status."',createddate = '".$date."' where id = '".$id."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>