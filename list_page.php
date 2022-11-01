<?php

include 'admin/config/form2conn.php';

// category ka data work start
	$catid = $_GET['cid'];
	$getpsql2 = "select * from product where cat_id = '".$catid."'";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	
	$getpsql3= "select * from category where id = '".$catid."'";
	$prodquery3 = mysqli_query($conn, $getpsql3);
	$prodquery4 = mysqli_fetch_array($prodquery3);
// category ka data work end
	
	
// pagination	work start category wala
	
	$page = 1;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	$limit = 4;
	
	$offset = (($page - 1) * $limit) + 1;  
	
	$catid = $_GET['cid'];
	$getpsql2 = "select * from product where cat_id = '".$catid."' limit ".$offset.", ".$limit."";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	

	
	$getpsql4 = "select * from product where cat_id = '".$catid."'";
	$prodquery5 = mysqli_query($conn, $getpsql4);
	$pagination = ceil($prodquery5->num_rows / $limit);
	
	
// pagination	work end category wala

?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'include/head.php';?>	
	<body>
			<?php include 'include/nav.php';?>	
			<?php include 'include/nav2.php';?>	
			
			<div class="m-2 shadow-lg mt-3 bg-white border border-grey border-left-0 border-right-0 border-bottom-0 ">
					<div class="">
						<div class="d-flex justify-content-between border border-grey border-left-0 border-right-0 border-top-0 ">
							<div class="p-3"><h3><?php echo $prodquery4['name'] ?></h3></div>
							<div class="py-3 px-2">
								<!--<button type="button" class="btn btn-primary">View All</button> -->
							</div>
						</div>
					</div>	
				<div class="container-fluid">
					<div class="row ">
						<?php
							//echo '-------------'.$catid;
							
							//print_r();
							
								while($prow2 = mysqli_fetch_array($prodquery2)){
							?>
						<div class="col-md-3">
				<div>
					<a href="detail.php?detail=<?php echo $prow2['id'];?>"><img style="width: 100%;height: 305px;"src="admin/img/userphoto/<?php echo $prow2['image'];?>" class="listing "/>
				</div>
				<div class="trendy bttn">
				<p style=" color: rgb(153, 153, 153); font-style: normal;font-weight: 600;font-size: 18px;line-height: 24px;"><?php echo $prow2['Productname'];?></p>
					<h3><?php echo $prow2['Price'];?></h3>
					<p><?php echo $prow2['Size'];?></p>
					<h6><?php echo $prow2['Description'];?></h6>
					<button>Free Delivery</button></a>
				</div>
			</div>
						<?php
								}
							
						?>
						
					</div>
				</div>
			</div>
			
			<div class="navv">
				<ul>
					<?php 
						for($i=1; $i<=$pagination; $i++){
							?>
								<li><a href="list_page.php?cid=<?php echo $catid; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
						}
					
					?>
					
				</ul>
			</div>
			
			
			<?php include 'include/footer.php';?>
		
  
  
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		
		<script>
			
		</script>
		
	</body>
</html>





