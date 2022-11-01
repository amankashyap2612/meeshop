<?php
 include '../config/form2conn.php';


$detail=$_GET['del'];
	
	$sql="select * from product Where id='".$detail."'";

print_r($detail);



?>