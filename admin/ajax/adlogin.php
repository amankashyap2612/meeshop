<?php
session_start();
include '../config/form2conn.php';

$email =$_POST['T_email'];
$pass =$_POST['T_password'];

//print_r($email);
//print_r($pass);
$authsql = "select * from user where email='".$email."' and password ='".MD5($pass)."' ";
	
	$query = mysqli_query($conn, $authsql);
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['meesho2'] = $row['id']; 
		echo 1;
	} else {
		echo 0;
	} 
	
	
	// if(query){
		// echo 1
	// }else{
		// echo 0;
	// }
	
	// if($query->num_rows > 0){
		// $row = mysqli_fetch_array($query);
		// $_SESSION['token'] = $row['id']; 
		// echo 1;
	// } else {
		// echo 0;
	// }

?>