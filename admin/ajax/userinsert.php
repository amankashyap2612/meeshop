<?php
include '../config/form2conn.php';

		$name =$_POST['T_name'];
		$email =$_POST['T_email'];
		$mobile =$_POST['T_mobile'];
		$address =$_POST['T_address'];
		$password =$_POST['T_password'];
		
		

	$sql="insert into user(id, name, email, mobile, address, password, status, createddate)values('','".$name."','".$email."','".$mobile."','".$address."','".MD5($password)."','','')";



$query = mysqli_query($conn, $sql);
	print_r($query);












?>