<?php

include 'admin/config/form2conn.php';

   if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM product WHERE Productname LIKE '%$searchKey%'OR Price LIKE '%$searchKey%' or id LIKE '%$searchKey%'";
     }else{
		$sql = "SELECT * FROM product";
	}
	$result=mysqli_query($conn,$sql);
	 
	//print_r($result);
// session ka work start

$userid=null;
	session_start();
	if(isset($_SESSION['meesho'])){
		$userid = $_SESSION['meesho'];
		$userdata = "select * from user where id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo['name']);
	}
	
// session ka work  end



?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/book.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body onload="showTime()"> <!--onload digital cloak ke liye-->

<section class="sec1  webdesigntuts-workshop">
	<div class="container-fluid" style="    background: white;">
		<div class="">
					<nav class="navbar navbar-expand-md   navbar-dark text-dark justify-content-end">
					
					  <a class="navbar-brand text-dark " href="#"><span style="font-size:25px;"><img src="image/meesho.jpg" onclick="history.back();"/></span></a>
					  <form action="" method="GET">
					  <input placeholder="Try Sarees,Kurti or Search By Product" name="search"  class="naavvv"  value="<?php echo isset($_GET['search']) ? @$_GET['search'] : ""; ?>">
					  <!-- <button class="btn btn-secondary" style=" padding: 15px 15px 10px 16px;">Search</button>
					  
					  isset me ? se pehle jo $_GET h wo search me value likhe p jo search ho kr aayega uske liye h nhi to ? ke baad jo @$_GET h usmw sara data aayega-->
					  </form>
					  <div class="collapse navbar-collapse ul" id="collapsibleNavbar ctsus2">
						<ul class="navbar-nav ml-auto ">
						  <li class="nav-item ">
							<a class="nav-link text-dark " style="margin: 0 20px;"><i class="fa-solid fa-mobile-screen" style="    font-size: 20px;
							margin-right: 10px;"></i>Download app</a>
							<a class="nav-link text-dark " href="#"></a>
						  </li>
						  
						  
						  
						   <?php
				if(isset($_SESSION['meesho'])){
					?>
							<div class="dropdown">
							  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $userinfo['name'] ?>
							  </button>
							  <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton" style="width: 210px;">
								<div><a class="hlo text-left"  style="margin-right:5px;"><i class="fa-solid fa-mobile-retro" style="margin-right:5px;"></i><?php echo $userinfo['mobile'] ?></a>
								</div>
							  <div><a class="text-left" ><i class="fa-solid fa-at" style="margin-right:5px;"></i><?php echo $userinfo['email'] ?></a></div>
							 
							  <hr>
							  <div><a href="ordertable.php" type="button" class="btn btn-success"><i class="fa-solid fa-cart-arrow-down"></i>Order</a>
<a href="user_logout.php" type="button" class="btn btn-danger"><i class="fa-solid fa-arrow-right-from-bracket" ></i>Log Out</a>

							  </div>
							  
							  </div>
							</div>
					<?php
				} else {
					?> 
							 
							  <a class="text-center sss" href="http://localhost/meesho/signup.php" >SIGN UP</a>
							  <hr>
					<?php
				}
			  ?>
						  
						  <li class="nav-item">
							<a class="nav-link text-dark" href="#" style="margin: 0 20px;">Become a Suppliers</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link text-dark" href="#" style="margin: 0 20px;">Cart</a>
						  </li>
						  <li class="nav-item">
							<h5 style="    font-size: 12px; padding-top: 12px;"></h5><!--digital clock banane ke liye blank rehne diya -->
						  </li>
						  
						</ul>
					  </div>  
					</nav>
				</div>
		</div>
</section>




<script type="text/javascript">
// digital clock banane ka work start 
function showTime(){
	var d = new Date();
	var h = d.getHours();
	var m = d.getMinutes();
	var s = d.getSeconds();
	
	
	var time = h + ":" + m +":"+s;
	document.getElementsByTagName('h5')[0].innerText =time; // h1 ke ander value set hui tbhi cloak show hui  
	
	setTimeout(showTime,1000); //1 sec = 1000mili sec

}
// digital clock banane ka work end 
// body jaise hi load ho jaye tbhi show time function call hoga 
// uske bar 1 sec baad settime out wala function call hoga phir dobara body load hone ki wajah se sec start hogi
</script>
</body>
</html>


