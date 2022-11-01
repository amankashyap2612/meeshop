<?php
session_start();
include '../config/form2conn.php';

$email =$_POST['T_email'];
$mobile =$_POST['T_mobile'];


$authsql = "select * from user where email='".$email."' and mobile ='".$mobile."' ";


$query = mysqli_query($conn, $authsql);
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['meesho'] = $row['id']; 
		echo 1;
	} else {
		echo 0;
	} 


?>