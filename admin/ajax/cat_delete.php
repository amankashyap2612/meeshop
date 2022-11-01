<?php

include '../config/form2conn.php';

$del =$_GET['del'];

//print_r($del);
 $sql="delete from category where id='".$del."'";
 $query =mysqli_query($conn,$sql);

	if($query){
		
		// echo "successfully delete";
		
		header("Location: ../cat_table.php");
	}else{
		echo "something worng";
	}


?>