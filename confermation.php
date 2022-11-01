<?php 
include 'admin/config/form2conn.php';
	$uid = $_GET['uid'];
	$oid = $_GET['oid'];
	 
	 //print_r()
	echo $uid .' -----  '.$oid;

$sql = "update order_table SET isconfirm =1 where user_id = '".$uid."' ";
	$query = mysqli_query($conn, $sql);

	
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
</head>
<body class="g-sidenav-show   bg-gray-100" onload="showTime()"style="background:black;" > 
<img src="image/count.gif"/>
<h1>We are Redirecting Our Main Web in Next 10 sec </h1>
<script type ="text/javascript">
	  function showTime(){
		 setTimeout(
			 function(){
		    	
				 window.location.href = 'book.php';
			  },10000 <!-- 10sec baad page book.php p redirect ho jayega
		 );
	
	}
</script>
</body>
</html>