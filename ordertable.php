
<?php
	include 'admin/config/form2conn.php';	
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
</head>
<?php include'include/nav.php';?>
<?php 
//user ki detail lane ke liye work start

	if(isset($_SESSION['token'])){
		$userid = $_SESSION['token'];
// join lagane ka kaam	
$sql="SELECT * FROM order_table B JOIN product AE ON B.product_id=AE.id where B.user_id='".$userid."'";
		$getuser = mysqli_query($conn, $sql);
		//print_r($getuser);
		
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo);
	}
//user ki detail lane ke liye work end
	
	
	


?>
<body class="g-sidenav-show   bg-gray-100" onload="showTime()" >  <!--onload digital cloak ke liye-->
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
	<table class="table table-hover tbdy ">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">id</th>
      <th scope="col">User_ID</th>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Image</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
	  <th scope="col">Total</th>
	  <th scope="col">Action</th>
    </tr>

  </thead>
  
      <tbody class="border odd border-warning">
	  <?php while($userinfo=mysqli_fetch_array($getuser)){
			?>
			
      <tr>
		<td><?php echo $userinfo['id']?></td>
		<td><?php echo $userinfo['user_id']?></td>
		<td><?php echo $userinfo['product_id']?></td>
		<td><img src="admin/img/userphoto/<?php echo $userinfo['image'];?>"  style="width:100px; height:100px;"/></td>
		<td><?php echo $userinfo['price']?></td>
		<td><?php echo $userinfo['quantity']?></td>
		<td><?php echo $userinfo['total']?></td>
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
				  

				  
<!-- <button onclick="test()">Try  it</button>	 button p click krke bhi showtime wala function chala sakte h -->			  
                  
</body>

<script type ="text/javascript">
	// function showTime(){
		// setTimeout(
			// function(){
		    	// //alert("Hello");
				// //window.history.go(-1);
				// window.location.href = 'book.php';
				// //document.write("hello")
			// },10000 <!-- 10sec baad page book.php p redirect ho jayega
		// );
	
	// }
</script>
</html>