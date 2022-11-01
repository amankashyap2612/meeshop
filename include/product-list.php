<?php include 'admin/config/form2conn.php';


//<-- dynamical data add krne ki query -->

 // $sql = "SELECT * FROM product";
 // $result=mysqli_query($conn,$sql);
 // $array =mysqli_fetch_array( $result);
//<-- dynamical data add krne ki query -->




?>

<section class="">
	<div class="container ">
		<div class="row">
		<?php
		 while($pquery =mysqli_fetch_array($result)){ 
		// yeh nav ke andar query likhi h search p data show hone ki uska array yha h
			?>
			<div class="col-md-3">
				<div>
					<a href="detail.php?detail=<?php echo $pquery['id'];?>"><img style="width: 100%;height: 305px;"src="admin/img/userphoto/<?php echo $pquery['image'];?>" class="listing "/>
				</div>
				<div class="trendy bttn">
				<p style=" color: rgb(153, 153, 153); font-style: normal;font-weight: 600;font-size: 18px;line-height: 24px;"><?php echo $pquery['Productname'];?></p>
					<h3><?php echo $pquery['Price'];?></h3>
					<p><?php echo $pquery['Size'];?></p>
					<h6><?php echo $pquery['Description'];?></h6>
					<button>Free Delivery</button></a>
					<div class="d-flex">
						<div class="grbod">4.5<i class="fa-solid fa-star"></i>
						</div>
						<div style="    font-size: 12px; margin-top: 16px;margin-left: 15px;};"> 
							4.3 Review
						</div>
					</div>
					
				</div>
			</div>
			<?php
		}
		
		?>
		</div>
	</div>
</section>