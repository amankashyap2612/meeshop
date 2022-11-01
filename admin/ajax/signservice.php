<?php
session_start();
		include '../config/form2conn.php';

		$name =$_POST['T_name'];
		$email =$_POST['T_email'];
		$mobile =$_POST['T_mobile'];
		$address =$_POST['T_address'];
		$password =$_POST['T_pass'];
		
	// print_r($password);
	// print_r($address);
	// print_r($mobile);
	// print_r($email);
	// print_r($name);


$sql="insert into user(id,name,email,mobile,address,password,status, createddate)values('','".$name."','".$email."','".$mobile."','".$address."','".MD5($password)."','','')";

$query=mysqli_query($conn,$sql);
print_r($query);

	





















?>