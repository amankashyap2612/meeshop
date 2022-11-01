





<?php
include 'admin/config/form2conn.php';



 
 $counter_file = "count.txt"; 
/* create counter file if doesn't exists */ 
 if(!file_exists($counter_file)){ 
 $f = fopen($counter_file, "w"); 
 fwrite($f,"0"); 
 fclose($f); 
 } 
/* get current value of counter */ 
 $f = fopen($counter_file, "r"); 
 $count = fread($f, filesize($counter_file)); 
 fclose($f); 
/* set session if not done before and write new counter value */ 
 if(!isset($_SESSION['visitedBefore'])){ 
 $_SESSION['visitedBefore'] = TRUE; 
 $count++; 
 $f = fopen($counter_file, "w"); 
 fwrite($f, $count); 
 fclose($f); 
 } 
//optional statement to print counter value 
 print("Counter :".$count); 
?> 












<?php
	include 'admin/config/form2conn.php';
	session_start();	
//user ki detail lane ke liye work start

	if(isset($_SESSION['token'])){
		$userid = $_SESSION['token'];
		$userdata = "select * from user where id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo['name']);
	}
//user ki detail lane ke liye work end
	
	// <--table start -->
	$sql ="select * from order_table where user_id ='".$userid."' ";
	$res =mysqli_query($conn,$sql);
	// print_r($res);
	//$row = mysqli_fetch_array($res); 
	// print_r($row);
	
	// <--table end -->
	
	
	
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
	<table class="table table-hover ">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">id</th>
      <th scope="col">User_ID</th>
      <th scope="col">Product_ID</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
	  <th scope="col">Total</th>
	  <th scope="col">Action</th>
    </tr>

  </thead>
  
      <tbody class="border odd border-warning">
	  <?php while($row=mysqli_fetch_array($res)){
			?>
			
      <tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['user_id']?></td>
		<td><?php echo $row['product_id']?></td>
		<td><?php echo $row['price']?></td>
		<td><?php echo $row['quantity']?></td>
		<td><?php echo $row['total']?></td>
		<td><a href="ajax/userdelete.php?del=<?php echo $row ['id']?> "onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o text-danger" style="font-size:20px"></i></a></td>
		
  
      </tr>
	  		<?php
	  }?>
    </tbody>
			
				
			</div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  
</body>

</html>


































<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
</head>
<body>


<section  class="ssgr">
<div class="hghg table-responsive">
<table class="table">
  <thead>
    <tr>
       <th scope="col">Image</th>
      <th scope="col">Productname</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
	  <th scope="col">Total</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
       <tbody class="border odd border-warning">
	  <?php while($row=mysqli_fetch_array($res)){
			?>
			
      <tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['Productname']?></td>
		<td><span><?php echo $row['price']?><span></td>
		<td><?php echo $row['quantity']?></td>
		<td><span style="color:#ee1e80;"><?php echo $row['total']?></span></td>
		<td><a href="ajax/userdelete.php?del=<?php echo $row ['id']?> "onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o text-danger" style="font-size:20px"></i></a></td>
		
  
      </tr>
	  		<?php
	  }?>
    </tbody>
</div>
</section>


                  
</body>

</html>

</body>
</html>

















mail work 



<section style='    width: 500px;
    margin: auto;
    border: 2px solid;
    padding: 20px 40px;
    background: #fb399645;'>
<div>
<h1 style=' '>Meesho online shopping </h1>
<p> Hello Username we want your confirmation for your Order </p>
<h3>Here Is Your Order Name</h3>
<div style='display:flex;'>
<img src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80'  style='margin-right:20px; width:100px; height:100px;'/>
<h4 style='color:red;'>Rohit</h4>
</div>
<div style=''>
<div style='display:flex;'>
<h3 style=' margin-right:30px;'>Quantity:-2 </h3>
<h3 style=' margin-right:30px;'>Total price:- 250</h3>
</div>

</div>
<input type='button' value='confirm' style='padding:10px; background:green; color:white; border:none;'>
<input type='button' value='reject' style='padding:10px; background:red; color:white; border:none;'>

</div>
</section>