<?php include('admin/config/form2conn.php');
	if(isset($_GET['detail'])){
		$det=$_GET['detail'];
		$sql=" select * from product  Where id='".$det."' ";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($res);
	}
	?>
<!DOCTYPE html>
<html lang="en">
	<title>Details</title>
	   <link rel = "icon" href = 
"image/logom.jpg" 
        type = "image/x-icon">
		
	<?php include 'include/head.php';?>

<body>
	  
	<?php include 'include/nav.php';?>
	<?php include 'include/nav2.php';?>
	<section style="margin-top: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div>


						

						<div  class="detimg border ctsus">

							<div class="exzoom " id="exzoom">
							  <!-- Images -->
							  <div class="exzoom_img_box">
								<ul class='exzoom_img_ul'>
								  <li><img src="admin/img/userphoto/<?php echo $row['image'];?>" /></li>
								  <li><img src="admin/img/duserphoto/<?php echo $row['dimage'];?>" /></li>
								 
								  ...
								</ul>
							  </div>
							  <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
							  <div class="exzoom_nav"></div>
							  <!-- Nav Buttons -->
							  <p class="exzoom_btn">
								  <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
								  <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
							  </p>
							</div>


						
						
						</div>
						
						<!--- data toggle aur data target model ke button se yha p liye--->
						<div class="">
							<?php if($userid==null){
					?>
					<a class=" btttn ctsus"href="signup.php"><i class="fa fa-cart-plus" style="font-size:36px; "></i>BUY NOW</a>
					<?php
				}else{
					?>
					<a class=" btttn ctsus" href="orderpage.php?order=<?php echo $row ['id'];?>"><i class="fa fa-cart-plus" style="font-size:36px; "></i>BUY NOW</a>
					
					<?php
				}?>
						</div>
					</div>
				</div>
				
				
				
				
				
				<div class="col-md-6">
					<div class="">
						<div class="border marbot">
							<h4><?php echo $row['Productname'];?></h4>
							<h2><?php echo $row['Price'];?><i class="fa-regular fa-circle-question " style="margin-left:10px;"></i></h2>
							<p><?php echo $row ['Description'];?></p>
							<button>Free Delivery</button>
						</div>
						<div class="border marbot p-20">
							<h2>Select Size</h2>
							<button class="btn btn-primary" type="submit">Button</button>
							<button class="btn btn-primary" type="submit">Button</button>
							<button class="btn btn-primary" type="submit">Button</button>
							<button class="btn btn-primary" type="submit">Button</button>
							<button class="btn btn-primary" type="submit">Button</button>
							<button class="btn btn-primary" type="submit">Button</button>
						</div>
						
						<div class="border marbot lst">
							<h2>Product Details</h2>
							<?php echo $row['Description'];?>
						</div>
						<div class=" border p-0 d-flex">
							<div class=" d-flex p-0 ">
								<div class="d-flex mmm">
									<img src="image/image.png" style="width: 25px;    height: 25px;"/>
								<p>Lowest Price</p>
								</div>
							</div>
							<div class=" p-0 d-flex">
								<div class=" d-flex mmm">
									<img src="image/cart.png" style="width: 25px; height: 25px;"/>
								<p>7 Day Return</p>
								</div>
							</div>
							<div class=" d-flex p-0 ">
								<div class="d-flex mmm">
									<img src="image/money.png" style="width: 25px; height: 25px;"/>
								<p>Cash on Delivery</p>
								</div>
							</div>
						</div>
						<div class="border marbot lst d-flex">
							<svg width="62" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" iconsize="20" class="Icon-sc-1iwi4w1-0 fjCWSO"><path fill="#fff" d="M0 0h62v24H0z"></path><path d="M10.6 6.085a2 2 0 012-2H60a2 2 0 012 2V17.27a2 2 0 01-2 2H12.6a2 2 0 01-2-2V6.085z" fill="#FDE9F2"></path><path d="M27.294 7.008h-5.876v1.204h2.313v6.824h1.261V8.212h2.302V7.008zM27.278 9.611v5.425h1.195v-2.534c0-1.274.587-1.79 1.384-1.79.143 0 .298.023.398.07V9.576a.929.929 0 00-.41-.08c-.62 0-1.162.367-1.427.986h-.022v-.872h-1.118zM35.764 15.036V9.611h-1.207v3.12c0 .814-.542 1.388-1.228 1.388-.631 0-.996-.448-.996-1.285V9.611h-1.195v3.475c0 1.32.708 2.122 1.837 2.122.741 0 1.339-.367 1.627-.895h.055v.723h1.107zM39.173 15.208c1.24 0 2.08-.688 2.08-1.789 0-2.168-2.866-1.204-2.866-2.397 0-.356.266-.642.786-.642.475 0 .863.286.918.688l1.118-.241c-.188-.826-1.007-1.388-2.07-1.388-1.162 0-1.947.665-1.947 1.675 0 2.167 2.866 1.204 2.866 2.397 0 .459-.299.768-.852.768-.543 0-.985-.298-1.118-.78l-1.096.23c.255.929 1.063 1.48 2.18 1.48zM44.62 15.15c.387 0 .719-.068.896-.16l-.133-.998a1.086 1.086 0 01-.531.115c-.565 0-.841-.264-.841-1.066v-2.375h1.45V9.611h-1.45V7.88l-1.207.24v1.491h-.952v1.055h.952v2.58c0 1.412.742 1.905 1.815 1.905zM51.09 13.717l-1.008-.31c-.232.494-.664.769-1.228.769-.841 0-1.417-.62-1.527-1.525H51.3v-.31c-.022-1.87-1.162-2.902-2.59-2.902-1.538 0-2.6 1.25-2.6 2.902 0 1.64 1.117 2.867 2.733 2.867 1.051 0 1.815-.516 2.246-1.49zm-2.358-3.314c.675 0 1.262.435 1.317 1.399h-2.711c.133-.895.63-1.4 1.394-1.4zM52.165 12.33c0 1.708 1.04 2.878 2.446 2.878.697 0 1.394-.298 1.737-.998h.033v.826h1.107V7.008h-1.206v3.303c-.277-.505-.864-.872-1.65-.872-1.405 0-2.467 1.159-2.467 2.89zm1.206 0c0-1.021.564-1.801 1.483-1.801.907 0 1.46.745 1.46 1.8 0 1.044-.553 1.778-1.46 1.778-.896 0-1.483-.757-1.483-1.778z" fill="#F43397"></path><path d="M18.036 3.783L9.612.07a.813.813 0 00-.659 0L.53 3.783a.915.915 0 00-.53.843v7.43c0 6.214 3.538 8.89 8.958 11.239.208.09.441.09.65 0 5.42-2.35 8.957-5.025 8.957-11.24v-7.43a.915.915 0 00-.53-.842z" fill="#F7A8CA"></path><path d="M17.188 4.548L9.58 1.194a.735.735 0 00-.595 0L1.377 4.548a.826.826 0 00-.479.761v6.71c0 5.614 3.196 8.03 8.091 10.152a.735.735 0 00.587 0c4.895-2.122 8.09-4.538 8.09-10.152V5.31a.826.826 0 00-.478-.761z" fill="#F43397"></path><path d="M11.669 7.54c.906.008 1.67.327 2.3.954.636.631.95 1.384.943 2.274l-.026 4.18a.917.917 0 01-.928.9.91.91 0 01-.915-.907l.026-4.18a1.305 1.305 0 00-.413-.994 1.346 1.346 0 00-.998-.409 1.38 1.38 0 00-1.039.434c-.26.266-.387.631-.39 1l-.023 4.12a.926.926 0 01-.94.912.926.926 0 01-.928-.922l.025-4.145a1.409 1.409 0 00-.376-.986 1.388 1.388 0 00-1.035-.441 1.385 1.385 0 00-1.006.398 1.35 1.35 0 00-.416.986l-.026 4.177a.918.918 0 01-.932.904.915.915 0 01-.918-.914l.026-4.164a3.142 3.142 0 01.804-2.1c.676-.74 1.51-1.109 2.479-1.102.925.008 1.715.334 2.347.997.651-.66 1.434-.975 2.359-.972z" fill="#fff"></path></svg><p>Best quality products from trusted suppliers</p>
						</div>
						
						<div class="border marbot ">
							<h3>Product Rating & Reviewing</h3>
							<div class="row">
								<div class="col-4 d-flex text-success">
									<h3 style="font-size:48px;">4.3</h3><i class="fa-solid fa-star"></i>
								</div>
								<div class="col-8">
									<div class="row">
										<div class="col-2" style="font-size:12px;">
											Excellent
										</div>
										<div class="col-10">
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width:50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="col-2"  style="font-size:12px;">
											Good
										</div>
										<div class="col-10">
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width:20%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="col-2"  style="font-size:12px;">
											Average
										</div>
										<div class="col-10">
											<div class="progress">
												<div class="progress-bar bg-warning
												" role="progressbar" style="width:15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="col-2"  style="font-size:12px;">
											Poor									</div>
										<div class="col-10">
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" style="width:15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	




<!--contact us-->
<?php
include 'include/contactus.php';
?>

<!--contact us-->
<!--foot-->
<?php include 'include/foot.php';?>
<!--foot-->

<?php include 'include/footer.php';?>
<script type="text/javascript">
$(function(){

  $("#exzoom").exzoom({
    // options here
  });

});
</script>

<script>

</script>
 
  

</body>
</html>
